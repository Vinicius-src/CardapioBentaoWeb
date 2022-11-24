@extends('dashboard.dashboard')

@section('content')
 
   
    <div class="container mt-3">
    <form class="row" method="POST" action="{{route('formAtualizarCardapio')}}">
        @csrf
        @method('PUT')
        
        <div class="my-4">
            <p class="h1 text-justify">Editar Cardápio</p>
            <p class="h5 text-justify ps-1">Data: {{$cardapio[0]->data}}</p>
        </div>
        


        <div class="col-6">
            
        <label for="cafe">Cafe da manhã</label>
        <textarea class="form-control" placeholder="Cafe" id="cafe" name="cafe" style="height: 100px" required >{{$cardapio[0]->cafe}}</textarea>
        
        </div>
        <div class="col-6">
            
        <label for="almoco">Almoço</label>
        <textarea class="form-control" placeholder="Almoço" id="almoco" name="almoco" style="height: 100px" required >{{$cardapio[0]->almoco}}</textarea>
        
        </div>
        <div class="col-6">
            <label for="lanche">Lanche da tarde</label>
            <textarea class="form-control" placeholder="Lanche da tarde" id="lanche" name="lanche" style="height: 100px" required >{{$cardapio[0]->lanche}}</textarea>
          
        </div>
        <div class="col-6"> 
            <label for="jantar">Jantar</label>
            <textarea class="form-control" placeholder="Jantar" id="jantar" name="jantar" style="height: 100px" >{{$cardapio[0]->jantar}}</textarea>
            
        </div>

        <input type="hidden" name="id" value="{{$cardapio[0]->id_cardapio}}">

        <button class="btn btn-success d-block mx-auto mt-4 w-25" type="submit" >
            <p class="h5 m-0"> Atualizar</p>
        </button>
    </form>
    </div>
@endsection
