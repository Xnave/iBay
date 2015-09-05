<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMessage extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_messages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['text', 'title'];

}
