<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable=['name', 'contact_no', 'email', 'address'];

    public function event()
    {
        return $this->hasMany(Event::class, 'client_id');
    }

    public function payment()
    {
        return $this->hasMany(\App\Models\Payment::class, 'client_id');
    }
    
}
