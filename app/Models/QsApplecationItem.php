<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QsApplecationItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'qc_applecations_id',
        'stock_code',
        'description',
        'price',
        'quantity',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'qc_applecations_id' => 'integer',
        'price' => 'integer',
        'quantity' => 'float',
    ];

    /**
     * Get the QS application associated with the item.
     */
    public function QSApplecation():BelongsTo
    {
        return $this->belongsTo(QSApplecation::class, 'qc_applecations_id');
    }
}
