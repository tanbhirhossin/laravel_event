<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventExpenseDetails extends Model
{
    use HasFactory;
    protected $fillable=['item_id', 'qty', 'event_expense_id', 'amount'];

}
