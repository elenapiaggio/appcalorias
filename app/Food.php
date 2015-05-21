<?php namespace AppCalorias;

use Illuminate\Database\Eloquent\Model;

class Food extends Model {

    /** The database table used by the model. */
    protected $table = 'foods';

    /** The attributes that are mass assignable. */
    protected $fillable = ['name', 'property_id', 'group_id'];

    /**
     * Relación con grupos
     */
    public function groups(){
        // return $this->hasMany('AppCalorias\Group');
        // group_id -> local key
        // id -> parent key
        return $this->belongsTo('AppCalorias\Group', 'group_id', 'id');
    }

    /**
     * Relación Food / Properties
     * Relación de muchos a muchas
     */
    public function properties(){
        //return $this->belongsToMany('AppCalorias\Property', 'food_propertie', 'food_id', 'property_id' );
        return $this->belongsToMany('AppCalorias\Property')->withTimestamps();
    }

}
