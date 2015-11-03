<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentDados extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comments';

    protected $guarded = array('id');

}
