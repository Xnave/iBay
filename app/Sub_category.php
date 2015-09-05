<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sub_categories';

    protected $fillable = ['category_id', 'sub_category_name'];

}
