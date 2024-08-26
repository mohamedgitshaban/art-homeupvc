<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActivityLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'clients_id',
        'reason',
        'result',
        'status',
        'type',
        'date',
        'nextactivity',
        'time',
        'asignby',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'clients_id' => 'integer',
        'date' => 'date',
        'nextactivity' => 'date',
        'time' => 'datetime:H:i',
        'asignby' => 'integer',
    ];

    /**
     * Get the client associated with the activity log.
     */
    public function client():BelongsTo
    {
        return $this->belongsTo(Clients::class, 'clients_id');
    }

    /**
     * Get the user that assigned the activity.
     */
    public function assignedBy():BelongsTo
    {
        return $this->belongsTo(User::class, 'asignby');
    }
}
