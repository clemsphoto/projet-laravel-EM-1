<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model


{    
    protected $fillable = [
    'title', 'description', 'categorie_id', 'status','price', 'url_image', 'reference', 'code', 'size'];

    public function categorie() {
        return $this->belongsTo(Categorie::class);
}
}
