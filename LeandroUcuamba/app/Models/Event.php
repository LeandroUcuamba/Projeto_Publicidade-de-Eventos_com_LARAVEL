<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [ //tratar para salvar items em array;
        'items' => 'array'
    ];

    protected $dates = ['date']; //tratamento para salvar data;

    protected $guarded = []; //

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

}
