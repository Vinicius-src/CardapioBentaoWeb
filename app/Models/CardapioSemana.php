<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CardapioSemana extends Model
{
    use HasFactory;

    public function querySelectCardapio($data){
      
        
        $ordens=DB::table('cardapio')
                ->select('*')
                ->where( 'data','=',"$data" )
                ->get();
            
        return $ordens;
        
        
    }
    
    public function queryAtualizarSelectCardapio($id){
      
        
        $ordens=DB::table('cardapio')
                ->select('*')
                ->where( 'id_cardapio','=',"$id" )
                ->get();
            return $ordens;
        
        
    }
    public function queryUpdateCardapio($request){
        DB::table('cardapio')
        ->where('id_cardapio','=',"$request->id")
        ->update(
            ['cafe' => $request->cafe,
            'almoco' => $request->almoco,
            'lanche' => $request->lanche,
            'jantar' => $request->jantar]
        );
        
    }
    public function queryDeletarCardapio($id){
        
        
       DB::table('cardapio')
       ->where('id_cardapio','=',$id)
       ->delete();
    }


}
