<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quttion extends Model
{
    use HasFactory;
    protected $fillable = [
        'funnel_frame_works_id',
        'qutation_status',
        'reason',
        'qutation_start_date',
        'Qutation_end_date',
        'Qutation_data',
        'total_selling_price',
        'project_gross_margin',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'funnel_frame_works_id' => 'integer',
        'qutation_start_date' => 'date',
        'Qutation_end_date' => 'date',
        'total_selling_price' => 'integer',
        'project_gross_margin' => 'integer',
    ];

    /**
     * Get the funnel framework associated with the quotation.
     */
    public function funnelFramework():BelongsTo
    {
        return $this->belongsTo(FunnelFramework::class, 'funnel_frame_works_id');
    }
}
