<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'stand_id',
        'produits',
        'nom_client',
        'telephone',
        'date_commande',
    ];

    protected $casts = [
        'produits' => 'array', // Convertit automatiquement le champ JSON en tableau
        'date_commande' => 'datetime',
    ];

    public function stand()
    {
        return $this->belongsTo(Stand::class);
    }
}
