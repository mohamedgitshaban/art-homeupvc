<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrct extends Model
{
    use HasFactory;
    protected $fillable = [
        'funnel_frame_works_id',
        'contract_status',
        'contract_start_date',
        'contract_end_date',
        'contract_data',
        'contract_value',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'funnel_frame_works_id' => 'integer',
        'contract_start_date' => 'date',
        'contract_end_date' => 'date',
        'contract_value' => 'integer',
    ];

    /**
     * Get the funnel framework associated with the contract.
     */
    public function funnelFramework()
    {
        return $this->belongsTo(FunnelFramework::class, 'funnel_frame_works_id');
    }
}
