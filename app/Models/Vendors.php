<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendors extends Model
{
    use HasFactory;
    protected $fillable=['vendor_name', 'contact_persone', 'phone_no', 'email','address','service', 'status'];
    public function expense()
    {
        return $this->hasMany(Expense::class, 'vendor_id');
    }

    public function payment()
    {
        return $this->hasMany(\App\Models\Payment::class, 'vendor_id');
    }
}
