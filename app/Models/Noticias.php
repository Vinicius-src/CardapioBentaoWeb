<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Noticias extends Model
{
    use HasFactory;

    
    public function querySelectNoticias(){
      
        
        $ordens=DB::table('noticias')
                ->select('*')
                ->get();
            
        return $ordens;
        
        
    }
    public function querySelectIdNoticias($id){
      
        
        $ordens=DB::table('noticias')
                ->select('*')
                ->where('id_noticias','=',"$id")
                ->get();
            
        return $ordens;
        
        
    }
    public function queryUpdateNoticia($request){
        DB::table('noticias')
        ->where('id_noticias','=',"$request->id")
        ->update(
            [
            'link_banner' => $request->link_banner
            ]
        );
        
    }
    public function queryDeletarNoticia($id){

        DB::table('noticias')
        ->where('id_noticias','=',"$id")
        ->update(
            [
            'link_img' => 'https://etecbentoquirino.com.br/new/',
            'link_banner' => 'https://media.discordapp.net/attachments/1006323993512517827/1042171392931663922/semimg.png'
            ]
        );
        
    }
    
}
