<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    public const STATUSES = [
        'new',
        'in_progress',
        'responded',
        'closed',
    ];

    protected $fillable = [
        'name',
        'email',
        'phone',
        'service_category',
        'service_name',
        'message',
        'status',
        'admin_notes',
    ];
}
