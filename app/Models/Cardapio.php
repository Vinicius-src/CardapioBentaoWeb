<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model
{
    use HasFactory;

    protected $table='cardapio';
    public $timestamps = false;
    protected $fillable = [
        'id_cardapio',
        'data',
        'cafe',
        'almoco',
        'lanche',
        'jantar',
    ];
    
    public function createCardapio(array $data)
    {
        return Cardapio::create([
            'data' => $data['data'],
            'cafe' => $data['cafe'],
            'almoco' => $data['almoco'],
            'lanche' => $data['lanche'],
            'jantar' => $data['jantar'],
          ]);
    }
    
}
