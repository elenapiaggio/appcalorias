<?php namespace AppCalorias;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

    /** The database table used by the model. */
    protected $table = 'groups';

    /** The attributes that are mass assignable. */
    protected $fillable = ['id', 'name'];

    /**
     * Un grupo tiene muchos alimentos
     */
    public function foods(){
        return $this->hasMany('AppCalorias\Food');
    }

}
