<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table='position';
    protected $fillable=['position_id',
                            'position_name',
                            'position_short_name',
                            'position_name_eng',
                            'position_short_name_eng',
                            'user_edit'];
}
