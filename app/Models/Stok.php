<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stok extends Model
{
    use HasFactory;
    protected $table = "stok_kopi";
    protected $primaryKey = "stok_id";
    protected $guarded = [];

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'stok_id_supplier', 'supplier_id');
    }
}
