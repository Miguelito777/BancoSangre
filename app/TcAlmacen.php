<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TcAlmacen extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre'
    ];
    protected $table = "tc_almacen";
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}