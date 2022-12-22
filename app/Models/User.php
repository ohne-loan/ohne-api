<?php
namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Authenticatable implements Auditable
{
	use Notifiable, HasRoles, SoftDeletes, HasApiTokens, \OwenIt\Auditing\Auditable;

	const GENDERS = [
		'MALE',
		'FEMALE',
        'OTHERS'
	];

	protected $table = 'users';

	protected $fillable = [
		'address_id',
		'marital_status_id',
		'profession',
		'identity_proof_front_id',
		'identity_proof_back_id',
        'personal_reference_id',
        'uuid',
		'name',
		'cpf',
		'email',
		'birthday',
		'gender',
		'gross_income',
		'patrimony',
		'politically_exposed_person',
        'password',
        'professional_class_id',
        'benefit_number',
        'company_name',
		'admission_date',
		'authorized_verify_email'
	];

	protected $auditInclude = [
		'address_id',
		'marital_status_id',
		'profession',
		'identity_proof_front_id',
		'identity_proof_back_id',
        'personal_reference_id',
        'uuid',
		'name',
		'cpf',
		'email',
		'birthday',
		'gender',
		'gross_income',
		'patrimony',
		'politically_exposed_person',
		'politically_exposed_person_since',
        'password',
        'professional_class_id',
        'benefit_number',
        'company_name',
		'admission_date',
		'authorized_verify_email'
	];

	protected $auditExclude = [
		'password',
		'remember_token'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at',
		'birthday',
		'password_change_date',
        'admission_date'
	];

	protected $casts = [
        'politically_exposed_person' => 'bool'
    ];

	public function setPasswordAttribute($password)
	{
		$this->attributes['password'] = bcrypt($password);
	}

	public function address()
	{
		return $this->hasOne(Address::class, 'id', 'address_id');
	}

	public function maritalStatus()
	{
		return $this->hasOne(MaritalStatus::class, 'id', 'marital_status_id');
	}

	public function identityProofFront()
	{
		return $this->hasOne(UserDocument::class, 'id', 'identity_proof_front_id');
	}

    public function identityProofBack()
    {
        return $this->hasOne(UserDocument::class, 'id', 'identity_proof_back_id');
    }

	public function phones()
	{
		return $this->hasMany(Phone::class);
	}

	public function additionalDocuments()
	{
		return $this->hasMany(UserAdditionalDocument::class);
	}

	public function deviceData()
	{
		return $this->hasOne(UserDeviceData::class);
	}

	public function facialBiometryCameraBlocked()
	{
		return $this->hasOne(FacialBiometryCameraBlocked::class);
	}

	public function bankAccounts()
	{
		return $this->belongsToMany(
			BankAccount::class,
			'user_bank_accounts',
			'user_id',
			'bank_account_id'
		);
	}

	public function rg()
	{
		return $this->hasOne(RG::class);
	}

	public function contracts()
	{
		return $this->hasMany(Contract::class);
	}

	public function personalInfo()
	{
		return $this->hasOne(UserPersonalInfo::class);
	}

    public function personalReference()
    {
        return $this->belongsTo(PersonalReference::class);
	}
	
	public function starkBankCustomer()
    {
        return $this->belongsTo(StarkBankCustomer::class);
    }

	public function loans()
	{
		return $this->hasMany(Loan::class);
	}

	public function investments()
	{
		return $this->hasMany(Investment::class);
	}

	public function emailToken()
	{
		return $this->hasMany(EmailToken::class);
	}

	public function scoreChecks()
	{
		return $this->hasMany(ScoreCheck::class);
	}

    public function professionalClass()
    {
        return $this->hasOne(ProfessionalClass::class, 'id', 'professional_class_id');
	}
	
	public function facialBiometries()
    {
        return $this->hasMany(FacialBiometry::class);
    }

	public function scopeEager($query)
	{
		$query->with([
			'address',
			'address.city',
			'address.city.state',
			'personalInfo',
			'phones'
		]);
	}

	public function scopeActive($query)
	{
		$query->where('active', true);
	}
}