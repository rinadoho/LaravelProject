<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $guarded = [ ];
    //protected $fillable = ['persona_name', 'age', 'role', 'description', 'owner_id'];

    public function attributes(){
        return $this->hasMany(Attribute::class);
    }

    public function addAttribute($attribute){
        
        $this->attributes()->create($attribute);
    }
}
