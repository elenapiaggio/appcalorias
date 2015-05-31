<?php namespace AppCalorias;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table = 'users';

	/** The attributes that are mass assignable. */
	protected $fillable = ['name', 'email', 'password', 'birthdate', 'height', 'weight', 'sex', 'type_activity'];

	/**
	 * The attributes excluded from the model's JSON form.
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


    /**
     * Clase que devuelve el nombre completo del usuario,
     * Devuelve nombre + apellido
     *
     * @return string
     */
    public function getFullNameAttribute(){
        return $this->first_name. ' ' . $this->last_name;
    }


    /**
     *	Función para asegurarme que la contraseña siempre estará encriptada
     * 	si no se hace así se guardará la contrasenya en la bd sin encriptar
     */
    public function setPasswordAttribute($value){
        //$this->attributes('password') = bcrypt($value); // otra forma de encriptar

        // Si el password no está en blanco
        if(!empty( ($value))){
            $this->attributes['password'] = \Hash::make($value);
        }
    }

    /**
     * Función que calcula la edad a partir de la fecha
     * de nacimiento
     *
     * @return int con la edad
     */
    public function getAgeAttribute(){
        return \Carbon\Carbon::parse($this->birthdate)->age;
    }
}
