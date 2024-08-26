<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FunnelFrameWork extends Model
{
    use HasFactory;
    protected $fillable = [
        'clients_id',
        'asignby',
        'location',
        'tasbuilt',
        'description',
        'status',
        'reason',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'clients_id' => 'integer',
        'asignby' => 'integer',
    ];

    /**
     * Get the client associated with the funnel framework.
     */
    public function client():BelongsTo
    {
        return $this->belongsTo(Clients::class, 'clients_id');
    }

    /**
     * Get the user that assigned the funnel framework.
     */
    public function assignedBy():BelongsTo
    {
        return $this->belongsTo(User::class, 'asignby');
    }
    public function TechnecalRequests():HasMany
    {
        return $this->hasMany(TechnecalRequests::class, 'funnel_frame_works_id');
    }
    public function Quttion():HasMany
    {
        return $this->hasMany(Quttion::class, 'funnel_frame_works_id');
    }
    public function Contrct():HasMany
    {
        return $this->hasMany(Contrct::class, 'funnel_frame_works_id');
    }
}
