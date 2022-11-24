@extends('dashboard.dashboard')

@section('content')
 
   
    <div class="container mt-3">
    <form class="row" method="POST" action="{{route('formCardapio')}}">
        @csrf
        
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2  border-bottom">
            <h1 class="h2">Cadastrar cardapio</h1>
        </div>

        <div class="text-justify my-4">
            <label class="h4 text-justify me-4" for="data">Insira a data do cardapio:</label>
            <input class="my-2 text-justify" style="font-family: monospace;font-size: 20px;border-radius: 5px;" type="date" name="data" id="data" required> <br>
        </div>


        <div class="col-6">
            
        <label class="h5 mb-3" for="cafe">Cafe da manhã</label>
        <textarea class="form-control" placeholder="Cafe da manhã" id="cafe" name="cafe" style="height: 100px" required ></textarea>
        
        </div>
        <div class="col-6">
            
        <label class="h5 mb-3" for="almoco">Almoço</label>
        <textarea class="form-control" placeholder="Almoço" id="almoco" name="almoco" style="height: 100px" required ></textarea>
        
        </div>
        <div class="col-6">
        
            <label class="h5 my-3" for="lanche">Lanche da tarde</label>
            <textarea class="form-control" placeholder="Lanche da tarde" id="lanche" name="lanche" style="height: 100px" required ></textarea>
          
            
        </div>
        <div class="col-6 "> 
            <label  class="h5 my-3" for="jantar">Jantar</label>
            <textarea class="form-control" placeholder="Jantar" id="jantar" name="jantar" style="height: 100px" ></textarea>
            
        </div>

  

        <button class="btn btn-success d-block mx-auto mt-4 w-25" type="submit" >
            <p class="h5 m-0"> Enviar</p>
        </button>
    </form>
    </div>
@endsection
