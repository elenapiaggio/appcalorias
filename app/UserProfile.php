<?php namespace AppCalorias;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model {

    // Definimos la tabla que utilizará este modelo
    // si se sigue la convención singular y plural no haria falta decirle la tabla que utilizará
    // aunque es una buena practica escribirlo xk hay métodos en castellano que no pueden seguir
    // la convención en inglés
    //protected $table = 'user_profiles';

    /** The attributes that are mass assignable. */
    protected $fillable = ['birthdate', 'height', 'weight', 'sex', 'user_id'];

    /**
     * Función que devuelve la edad de un User
     * a partir del atributo birthdate
     * @return bool|\DateTimeZone|int|string
     */
    public function getAgeAttribute(){
        return \Carbon\Carbon::parse($this->birthdate)->age;
    }

}
