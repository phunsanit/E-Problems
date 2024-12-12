<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'category_id',
        'created_by',
        'deleted_by',
        'descriptions',
        'service_lines_id',
        'sla_dt',
        'status_id',
        'support_engineer_id',
        'updated_by',
        'vessel_id',
        'working_time',
    ];
}
