<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    protected $fillable = ['nom', 'description', 'image', 'user_id', 'approuve'];

   public function user()
{
    return $this->belongsTo(User::class);
}


    public function produits()
    {
        return $this->hasMany(Produit::class);
    }

    public function commandes()
{
    return $this->hasMany(Commande::class);
}

}
