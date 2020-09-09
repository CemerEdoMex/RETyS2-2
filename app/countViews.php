<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class countViews extends Model
{
    //
    protected $table='counttableViews';

    protected $fillable =   [
        'count',
        'category',
        'transactName',
    ];
    //$timestamps = false;
    protected $primaryKey = 'id';
}
