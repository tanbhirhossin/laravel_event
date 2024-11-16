<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable=['vendor_id','event_id', 'pay_date', 'pay_amount', 'event_expense_id','client_id','pay_type','bank_name','check_number','check_date'];

    public function vendor()
    {
        return $this->belongsTo(Vendors::class, 'vendor_id');
    }
    public function expense()
    {
        return $this->belongsTo(Expense::class, 'event_expense_id');
    }
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}

