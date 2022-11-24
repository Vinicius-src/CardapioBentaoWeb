@extends('dashboard.dashboard')

@section('content')

<div class="container-fluid">
    <div class="container my-4" >
       
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Editar Notícia</h1>
        </div>
        <h1 class="h5 mt-3  ">
            Atenção <br>
            Inserir o link do banner da noticia com o tamanho da imagem de no maximo 50x70cm
        </h1>
      </div>
    <h1 class="ms-5 mt-5 h2"></h1>

    <div class=" my-4 ps-5 ">
        <form  method="POST" action="{{route('formAtualizarNoticias')}}">
            @csrf
            @method('PUT')
            <div class="container col-8 my-2"> 
                <label class="h5 my-2" for="link_banner">Link do banner da notícia:</label>
                <textarea class="form-control" placeholder="Jantar" id="link_banner" name="link_banner" style="height: 100px" >{{$noticia[0]->link_banner}}</textarea>
                
            </div>
    
            <input type="hidden" name="id" value="{{$noticia[0]->id_noticias}}">
    
            <button class="btn btn-success d-block mx-auto mt-4 w-25 mx-auto" type="submit" >
                <p class="h5 m-0"> Atualizar</p>
            </button>
        </form>
    </div>
</div>


@endsection
