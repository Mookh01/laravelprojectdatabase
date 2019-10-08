<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //$guarded is used to protect variable in laravels built in warning against exposing data.Whoops

    protected $guarded = [];

    //fillable is used to include specific requests to protect data
    // protected $fillable = [
    //     'title', 'description'
    // ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

}
