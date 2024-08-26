<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QSApplecation extends Model
{
    use HasFactory;
    protected $fillable = [
        'technecal_requests_id',
        'name',
        'total_cost',
        'gross_margen',
        'saling_price',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'technecal_requests_id' => 'integer',
        'total_cost' => 'integer',
        'gross_margen' => 'float',
        'saling_price' => 'float',
    ];

    /**
     * Get the technical request associated with the QS application.
     */
    public function TechnecalRequests():BelongsTo
    {
        return $this->belongsTo(TechnecalRequests::class, 'technecal_requests_id');
    }
    public function QsApplecationItem():HasMany
    {
        return $this->hasMany(QsApplecationItem::class, 'technecal_requests_id');
    }
}
