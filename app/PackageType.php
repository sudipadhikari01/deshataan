<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageType extends Model
{
    protected $table = "packages_type";
    protected $primaryKey = "p_id";

    public function ipackages()
    {
        return $this->hasMany('App\IndividualPackage', 'package_type');
    }
}
