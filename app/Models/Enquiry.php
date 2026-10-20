<?php

namespace App\Models;

use Database\Factories\EnquiryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    /** @use HasFactory<EnquiryFactory> */
    use HasFactory;

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
