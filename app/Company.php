<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = ['id'];

    public static function companydropdown()
    {
        $companydd =Company::select('id','company_name_eng','company_name_arab')->get();
        return $companydd;
    }

}
