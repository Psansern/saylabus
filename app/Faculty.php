<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table='faculty'; // table names
    protected $fillable=['faculty_id',
                        'faculty_code',
                        'ref_fac_id',
                        'faculty_name',
                        'faculty_name_eng',
                        'user_edit'];

}
