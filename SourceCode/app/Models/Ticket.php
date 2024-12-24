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

    // Define the relationship to the other model
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function serviceLine()
    {
        return $this->belongsTo(ServiceLine::class, 'service_lines_id');
    }

    public function supportEngineer()
    {
        // skip table support_engineers because don't use current status
        return $this->belongsTo(User::class, 'support_engineer_id');
    }

    public function vessel()
    {
        return $this->belongsTo(Vessel::class, 'vessel_id');
    }
}
