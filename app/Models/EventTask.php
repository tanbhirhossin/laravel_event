<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventTask extends Model
{
    use HasFactory;
    protected $fillable=['event_id', 'employee_id', 'task', 'assign_date','finish_date','cost'];
    
    public function event()
    {
        return $this->belongsTo(Event::class, 'client_id');
    }
    
}
