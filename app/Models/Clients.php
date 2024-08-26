<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clients extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'profileimage',
        'phone',
        'company',
        'Job_role',
        'email',
        'source',
        'type',
        'status',
        'asignby',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'asignby' => 'integer',
    ];

    /**
     * Get the user that assigned the client.
     */
    public function assignedBy():BelongsTo
    {
        return $this->belongsTo(User::class, 'asignby');
    }
    public function FunnelFrameWork():HasMany
    {
        return $this->hasMany(FunnelFrameWork::class, 'clients_id');
    }
    public function ActivityLog():HasMany
    {
        return $this->hasMany(ActivityLog::class, 'clients_id');
    }
}
