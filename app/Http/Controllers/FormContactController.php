<?php

namespace App\Http\Controllers;

use App\Exceptions\ApiException;
use App\Http\Requests\FormContactRequest;
use App\Http\Responses\SuccessResponse;
use App\Mail\ContactMail;
use App\Mail\ReceivedContactMail;
use App\Models\Parameter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormContactController extends Controller
{
    /**
     * @param FormContactRequest $request
     * @return SuccessResponse
     * @throws \Exception
     */
    public function index(FormContactRequest $request){
        try{
            $data = $request->all();
            $mail = new ContactMail($data);
            Mail::to(Parameter::get('contact.email'))->send($mail);
            $mail = new ReceivedContactMail($data['name']);
            Mail::to($data['email'])->send($mail);
        }catch(\Exception $e){
            throw new ApiException("Falha ao enviar contato.", 500);
        }

        return new SuccessResponse("Contato enviado com sucesso!");
    }
}
