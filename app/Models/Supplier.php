<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    use HasFactory;
    protected $table = "supplier";
    protected $primaryKey = "supplier_id";
    protected $guarded = [];

    public function stok(): HasMany
    {
        return $this->hasMany(Stok::class, 'stok_id_supplier', 'supplier_id');
    }
}
