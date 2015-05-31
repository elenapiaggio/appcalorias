<?php namespace AppCalorias;

use Illuminate\Database\Eloquent\Model;

class Food extends Model {

    /** The database table used by the model. */
    protected $table = 'foods';

    /** The attributes that are mass assignable. */
    protected $fillable = ['name',  'group_id', 'calories', 'protein', 'fats', 'hydrates', 'sugars', 'fiber', 'salt'];

    /**
     * Relación con grupos
     */
    public function groups(){
        // return $this->hasMany('AppCalorias\Group');
        // group_id -> local key
        // id -> parent key
        return $this->belongsTo('AppCalorias\Group', 'group_id', 'id');
    }



}
