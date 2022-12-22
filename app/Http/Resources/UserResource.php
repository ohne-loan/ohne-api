<?php

namespace App\Http\Resources;

use App\Models\Phone;
use App\Models\UserDocument;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use App\Models\UserPreApproved;
use App\Models\UserPreApprovedPartner;
use stdClass;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $cellphone = $this->phones()->where('type', Phone::CELLPHONE)->first();
        $landline = $this->phones()->where('type', Phone::LANDLINE)->first();
        $bankAccount = $this->bankAccounts()->first();
        $scoreCheck = $this->scoreChecks->last();
        $facialBiometry = $this->facialBiometries->last();
        $score = isset($scoreCheck) ? $scoreCheck : null;
        $additionalDocuments = $this->additionalDocuments;
        $userDeviceData = $this->deviceData;
        $facialBiometryCameraBlocked = $this->facialBiometryCameraBlocked;
        if(!isset($facialBiometryCameraBlocked)){
            $facialBiometryCameraBlocked = new stdClass();
            $facialBiometryCameraBlocked->camera_blocked = false;
        }

        $additionalDocumentsWithNames = [];

        if(isset($additionalDocuments)){
            foreach ($additionalDocuments as $additionalDocument) {
                $additionalDocumentWithName = new stdClass();
                $additionalDocumentWithName->name = $additionalDocument->document_name;

                $document = UserDocument::where('id', $additionalDocument->user_document_id)->first(); 
                
                $additionalDocumentWithName->uuid = $document->uuid;  
                $additionalDocumentWithName->path = $document->path;  
                $additionalDocumentWithName->url = $document->url;

                array_push($additionalDocumentsWithNames, $additionalDocumentWithName);
            }
        }

        $additionalDocuments = null;

        if(\sizeof($additionalDocumentsWithNames) > 0){
            $additionalDocuments = UserDocumentResource::collection(\convertArrayToCollection($additionalDocumentsWithNames));
        }

        $preApproved = UserPreApproved::where('cpf', $this->cpf)
            ->where('deleted_at', null)
            ->first();

        $preApprovedPartner = isset($preApproved) ? 
            UserPreApprovedPartner::find($preApproved->user_pre_approved_partner_id)->name : "";

        return [
        	'id'                                => $this->id,
			'name'                              => $this->name,
			'cpf'                               => $this->cpf,
			'email'                             => $this->email,
			'birthday'                          => isset($this->birthday) ? $this->birthday->format('Y-m-d') : null,
			'gender'                            => $this->gender,
			'gross_income'                      => money($this->gross_income),
			'patrimony'                         => money($this->patrimony),
			'politically_exposed_person'        => $this->politically_exposed_person,
			'politically_exposed_person_since'  => $this->politically_exposed_person_since,
			'authorized_verify_email'           => $this->authorized_verify_email ? 'Sim' : 'Não',
			'profession'                        => $this->profession,
            'professionalClass'                 => new ProfessionalClassResource($this->whenLoaded('professionalClass')),
            'facial_biometry'                   => new FacialBiometryResource($facialBiometry),
            'benefit_number'                    => $this->benefit_number,
            'company_name'                      => $this->company_name,
            'admission_date'                    => $this->admission_date,
            'created_at'                        => isset($this->created_at) ? $this->created_at->format('Y-m-d') : null,
            'score'                             => $score,
            'address'                           => isset($this->address) ? addressInline($this->address) : null,
            'addressComplete'                   => new AddressResource($this->whenLoaded('address')),
            'maritalStatus'                     => new MaritalStatusResource($this->whenLoaded('maritalStatus')),
			'identityProof'                     => new UserDocumentResource($this->whenLoaded('identityProof')),
			'cellphone'                         => isset($cellphone) ? $cellphone->area_code . $cellphone->phone : null,
            'landline'                          => isset($landline) ? $landline->area_code . $landline->phone : null,
			'bankAccounts'                      => isset($bankAccount) ? new BankAccountResource($bankAccount) : null,
			'rg'                                => isset($this->rg) ? $this->rg->rg : null,
            'rgComplete'                        => new RGResource($this->whenLoaded('rg')),
            'identityProofFront'                => new UserDocumentResource($this->whenLoaded('identityProofFront')),
            'identityProofBack'                 => new UserDocumentResource($this->whenLoaded('identityProofBack')),
            'additionalDocuments'               => $additionalDocuments,
			'personalInfo'                      => new PersonalInfoResource($this->whenLoaded('personalInfo')),
            'personalReference'                 => new PersonalReferenceResource($this->whenLoaded('personalReference')),
			'loans'                             => LoanResource::collection($this->whenLoaded('loans')),
			'investments'                       => InvestmentResource::collection($this->whenLoaded('investments')),
            'roles'                             => RoleResource::collection($this->whenLoaded('roles')),
            'pre_approved'                      => isset($preApproved) ? "Sim" : "Não",
            'pre_approved_partner'              => $preApprovedPartner,
            'deviceData'                        => new UserDeviceDataResource($userDeviceData),
            'cameraBlocked'                     => new FacialBiometryCameraBlockedResource($facialBiometryCameraBlocked)
		];
    }

    /**
     * This method is necessary just to preserve backward compatibility with non-Eloquent resources.
     * The objects inside a JsonResource now must implement ArrayAccess. This means you cannot create a Resource
     * of a Collection of plain objects like we're doing here with a RAW Query.
     *
     * We're applying the changes suggested by Graham Campbell in #29860.
     *
     * More information
     *      https://github.com/laravel/framework/issues/29916
     *      https://github.com/laravel/framework/issues/29858
     *      https://github.com/laravel/framework/pull/29860
     */
    public function offsetExists($offset)
    {
        return (is_array($offset) || $offset instanceof ArrayAccess) && isset($this->resource[$offset]);
    }
}
