<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\GraficoController;
use App\Models\CardapioSemana;
use App\Models\Noticias;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if(Auth::check()){
           
            $objeto=new GraficoController();

            return   $objeto->grafico();
        }else{
            return redirect("login")->with('danger','Você não tem permissão para acessar');
        }
  
        
    }
    public function visualizarCardapio()
    {
        return view('dashboard.cardapioSemana');
    }

    public function getCardapio(Request $request)
    {   
        
        $objeto=new CardapioSemana();
        
        $data=$request->data;

        $cardapio=$objeto->querySelectCardapio($data);
        
        $data =strtotime("$data");
        $data= date('d-m-Y',$data);
       
 
 
        if($cardapio=='[]'){

            $t='{"id_cardapio": null, "data":"'.$data.'", "cafe":"Nenhuma informação nessa data","almoco":"Nenhuma informação nessa data", "lanche":"Nenhuma informação nessa data","jantar":"Nenhuma informação nessa data"}';
            $cardapio[0]=json_decode($t);
            
           
        }else{
            $cardapio[0]->data=$data;
        }
     
         return redirect("dashboard/cardapio")->with('cardapio', $cardapio);
    }

    public function cadastroCardapio()
    {
        if(Auth::check()){
            return view('dashboard.formCardapio');
        }else{
            return redirect("login")->with('danger','Você não tem permissão para acessar');
        }
    }

    public function formCardapio(Request $request)
    {
      
         $request->validate([
            'data' => ['required', 'unique:cardapio'],
            'cafe' => ['required', 'string','max:255'],
            'almoco' => ['required', 'string','max:255'],
            'lanche' => ['required', 'string','max:255'],
            'jantar' => ['required', 'string','max:255'],
         ],[
            'data.unique'=>'Essa data já possui um cardapio cadastrado'
        ]);

            $data = $request->all();
            
            $objetoCardapio= new Cardapio();
            
            $objetoCardapio->createCardapio($data);

           
            return redirect("dashboard/cardapio/cadastro")->with('sucess','Cardapio cadastrado com sucesso!');
             
           
    }

    public function atualizarCardapio($id)
    {
        if($id==null){

            return redirect('dashboard/cardapio')->with('danger','item não encontrado!'); 
        }

        $objeto= new CardapioSemana();
        $cardapio= $objeto->queryAtualizarSelectCardapio($id);

        if($cardapio=='[]'){

            return redirect('dashboard/cardapio')->with('danger','item não encontrado!'); 
        }else{
            return view('dashboard.formAtualizarCardapio',compact('cardapio'));
        }

       

        
    }

    public function formAtualizarCardapio(Request $request)
    {
        $objeto= new CardapioSemana();
        $cardapio= $objeto->queryAtualizarSelectCardapio($request->id);

        $objeto-> queryUpdateCardapio($request);

        return redirect('dashboard/cardapio')->with('sucess','Cardapio atualizado com sucesso!');
    }

    public function deletarCardapio( $id)
    {

        $objeto= new CardapioSemana();

        $objeto->queryDeletarCardapio($id);

        return redirect('dashboard/cardapio')->with('sucess','Cardapio deletado com sucesso!');
    }
    
    
    public function cadastrar()
    {
        if(Auth::check()){
            return view('dashboard.formRegister');
        }else{
            return redirect("login")->with('danger','Você não tem permissão para acessar');
        }
    }

    public function formCadastrar(Request $request)
    {
        

        if($request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
            'usuario' => ['boolean']
        ],[
            'name'=>'Nome invalido!',
            'email'=>'E-mail invalido!',
            'password'=>'Senha invalida!',
            'usuario' => ['cargo invalido!']
            
        ]
        )){
            $data = $request->all();
           $this->createUser($data);
    
            return redirect("dashboard")->with('sucess','Usuario Cadastrado com sucesso!');

        }else{
            return redirect("dashboard/cadastrar")->with('danger','dados preenchido incorretamente!');
        }
         
       

    }
    public function createUser(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'usuario'=> $data['usuario'],
        'password' => Hash::make($data['password']),
        
      ]);
    }

    public function noticias()
    {
        $objeto= new Noticias();
        $noticias= $objeto->querySelectNoticias();

        return  view('dashboard.noticias',compact('noticias'));
    }

    public function editarNoticias($id)
    {
        if($id==null){

            return redirect('dashboard/noticias')->with('danger','Notícia não encontrada!'); 
        }

        $objeto= new Noticias();
        $noticia= $objeto->querySelectIdNoticias($id);

        if($noticia=='[]'){

            return redirect('dashboard/noticias')->with('danger','Notícia não encontrada!'); 
        }else{
            return view('dashboard.formEditarNoticias',compact('noticia'));
        }

    }
    public function formAtualizarNoticias(Request $request)
    {
        $objeto= new Noticias();
        $objeto->queryUpdateNoticia($request);

        return redirect('dashboard/noticias')->with('sucess','Notícia atualizado com sucesso!');
    }
    public function deletarNoticias($id)
    {
        $objeto= new Noticias();
        $objeto->queryDeletarNoticia($id);

        return redirect('dashboard/noticias')->with('sucess','Notícia apagada com sucesso!');
    }
}
