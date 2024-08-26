<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TechnecalRequests extends Model
{
    use HasFactory;
    protected $fillable = [
        'funnel_frame_works_id',
        'qs_status',
        'qs_start_date',
        'qs_end_date',
        'total_price',
        'qs_data',
        'reason',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'funnel_frame_works_id' => 'integer',
        'qs_start_date' => 'date',
        'qs_end_date' => 'date',
        'total_price' => 'integer',
    ];

    /**
     * Get the funnel framework associated with the technical request.
     */
    public function FunnelFramework():BelongsTo
    {
        return $this->belongsTo(FunnelFramework::class, 'funnel_frame_works_id');
    }
    public function QSApplecation():HasMany
    {
        return $this->hasMany(QSApplecation::class, 'funnel_frame_works_id');
    }
}
