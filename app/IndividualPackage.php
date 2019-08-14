<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;


class IndividualPackage extends Model
{
    protected $table = 'packages';
    protected $primaryKey = 'p_id';

    public function photos()
    {
        return $this->hasMany('App\PhotoGallery', 'ip_id');
    }
}
