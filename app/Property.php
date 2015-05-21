<?php namespace AppCalorias;

use Illuminate\Database\Eloquent\Model;

class Property extends Model {

    /** The database table used by the model. */
    protected $table = 'properties';

    /** The attributes that are mass assignable. */
    protected $fillable = ['id', 'calories', 'protein', 'fats', 'hydrates', 'sugars', 'fiber', 'salt'];

    /**
     * Relación Properties/Foods
     */
    public function foods(){
        // food_propertie es la pivot
        return $this->belongsToMany('AppCalorias\Food');
        //return $this->belongsToMany('AppCalorias\Food', 'food_propertY', 'property_id', 'food_id');

    }



}
