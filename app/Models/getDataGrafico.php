<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class getDataGrafico extends Model
{
    use HasFactory;
    
    public function definition()
    {   setlocale(LC_ALL, 'pt_BR');
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        
            
        $mes=date("m");
        
        $objeto=new getDataGrafico();
      

        if($mes>=1 && $mes<=6)
        {
            switch($mes){
                case 1:
                    $notaMeses=array(
                        $objeto->querySelectAvaliacao(1),
                        0,
                        0,
                        0,
                        0,
                        0,
                    );
                        return $notaMeses;
                    break;

                case 2:
                    $notaMeses=array(
                        $objeto->querySelectAvaliacao(1),
                        $objeto->querySelectAvaliacao(2),
                        0,
                        0,
                        0,
                        0,
                    );
                        return $notaMeses;
                    break;

                case 3:
                    $notaMeses=array(
                        $objeto->querySelectAvaliacao(1),
                        $objeto->querySelectAvaliacao(2),
                        $objeto->querySelectAvaliacao(3),
                        0,
                        0,
                        0,
                    );
                        return $notaMeses;
                    break;

                case 4:
                    $notaMeses=array(
                        $objeto->querySelectAvaliacao(1),
                        $objeto->querySelectAvaliacao(2),
                        $objeto->querySelectAvaliacao(3),
                        $objeto->querySelectAvaliacao(4),
                        0,
                        0,
                    );
                        return $notaMeses;
                    break;

                case 5:
                    $notaMeses=array(
                        $objeto->querySelectAvaliacao(1),
                        $objeto->querySelectAvaliacao(2),
                        $objeto->querySelectAvaliacao(3),
                        $objeto->querySelectAvaliacao(4),
                        $objeto->querySelectAvaliacao(5),
                        0,
                    );
                        return $notaMeses;
                    break;

                case 6:
                    $notaMeses=array(
                        $objeto->querySelectAvaliacao(1),
                        $objeto->querySelectAvaliacao(2),
                        $objeto->querySelectAvaliacao(3),
                        $objeto->querySelectAvaliacao(4),
                        $objeto->querySelectAvaliacao(5),
                        $objeto->querySelectAvaliacao(6),
                    );
                        return $notaMeses;
                    break;

            }

        }
        else if($mes>=7 && $mes<=12)
        {

            switch($mes){
                case 7:
                    $notaMeses=array(
                        $objeto->querySelectAvaliacao(7),
                        0,
                        0,
                        0,
                        0,
                        0,
                    );
                        return $notaMeses;
                    break;

                case 8:
                    $notaMeses=array(
                        $objeto->querySelectAvaliacao(7),
                        $objeto->querySelectAvaliacao(8),
                        0,
                        0,
                        0,
                        0,
                    );
                        return $notaMeses;
                    break;

                case 9:
                    $notaMeses=array(
                        $objeto->querySelectAvaliacao(7),
                        $objeto->querySelectAvaliacao(8),
                        $objeto->querySelectAvaliacao(9),
                        0,
                        0,
                        0,
                    );
                        return $notaMeses;
                    break;

                case 10:
                    $notaMeses=array(
                        $objeto->querySelectAvaliacao(7),
                        $objeto->querySelectAvaliacao(8),
                        $objeto->querySelectAvaliacao(9),
                        $objeto->querySelectAvaliacao(10),
                        0,
                        0,
                    );
                    
                        return $notaMeses;
                    break;

                case 11:
                    $notaMeses=array(
                        $objeto->querySelectAvaliacao(7),
                        $objeto->querySelectAvaliacao(8),
                        $objeto->querySelectAvaliacao(9),
                        $objeto->querySelectAvaliacao(10),
                        $objeto->querySelectAvaliacao(11),
                        0,
                    );
                        return $notaMeses;
                    break;

                case 12:
                    $notaMeses=array(
                        $objeto->querySelectAvaliacao(7),
                        $objeto->querySelectAvaliacao(8),
                        $objeto->querySelectAvaliacao(9),
                        $objeto->querySelectAvaliacao(10),
                        $objeto->querySelectAvaliacao(11),
                        $objeto->querySelectAvaliacao(12),
                    );
                        return $notaMeses;
                    break;

            }
        }


    }
    public function querySelectAvaliacao($mes){
        
        $ordens=DB::table('avaliacao')
                ->select('nota')
                ->whereMonth( 'data','=',"$mes" )
                ->get();

                $result=0;
        
        if($ordens==null){
            return $result;
        }else{
            $contarArray=count($ordens);
            $somaNotas=0;
        
                foreach ($ordens as $numero=>$arrayChaveNota) {  
                    foreach ($arrayChaveNota as $nota) {         
                        $somaNotas+=$nota;
                            
                    }
                
                
                }
            if($somaNotas==0&&$contarArray==0){
                return $result=0;
            }else{
                return $result=round($somaNotas/$contarArray);
            }
          
            
            
            
        }
    }
}
