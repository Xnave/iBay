<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'conditions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['condition_name', 'condition_description'];

}
