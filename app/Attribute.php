<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $guarded = [];

    // public function complete($completed = true)
    // {
    //     $this->update(compact('completed'));
    // }

    // public function incomplete()
    // {
    //     $this->complete(false);
    // }

    public function persona() {
        return $this->belongsTo(Persona::class);
    }
}
