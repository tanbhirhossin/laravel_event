<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable=['client_id', 'event_details', 'event_start_date', 'event_start_time','event_end_date', 'event_end_time', 'location', 'contact_no', 'event_cost'];

    
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
    
}
