<?php

namespace App\Http\Controllers;

use App\Models\getDataGrafico;

;

class GraficoController extends Controller
{
    public function grafico(){
        $objeto=new getDataGrafico();

        $notasMeses =   $objeto->definition();
        $mesesGrafico=array();
        $mes=date("m");
        
        if($mes>=1 && $mes<=6)
        {
            $mesesGrafico=array("'Janeiro'","'Fevereiro'","'Março'","'Abril'","'Maio'","'Junho'");
        }
         else if($mes>=7 && $mes<=12)
         {
            $mesesGrafico=array("'Julho'","'Agosto'","'Setembro'","'Outubro'","'Novembro'","'Dezembro'");
         }
         
        return view('dashboard.grafico',compact('mesesGrafico','notasMeses'));
    }


}
