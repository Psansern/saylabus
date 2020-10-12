<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $table='title';
    protected $fillable=['title_id',
                         'title_name',
                        'title_name_eng',
                        'user_edit'];
}
