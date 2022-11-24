<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('images/cardapioBentao.png')}}" type="image/x-icon">
        <title>Cardapio Bentao</title>
    
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        
        

    </head>
    <body  style="background-color: #121212; overflow-x: hidden;overflow-y: hidden;" >
        
        @if (session('danger'))
        
            <div class="alert alert-danger d-flex align-items-center fade show" role="alert" style="position: absolute; right:5px; top:30px;">
                
                <span class="d-flex align-text-bottom me-2 justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                      <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                      <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                    </svg>
                  </span>
               {{session('danger')}}
               <button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#myalert" aria-label="Close"></button>
            </div>
            
            <script src="{{ asset('js/script.js') }}"></script>
           
        @endif 
       
        @section('content')
        <section class=" col-9 col-sm-8  col-md-4 col-lg-4 col-xl-3 my-5 mx-auto p-3"
        style="background-image:linear-gradient(to top, orange, yellow); ">

            
            <div class="container  mb-3 d-flex justify-content-center">
                <img class="mx-auto" src="{{asset('images/cardapioBentao.png')}}" width="80px" height="80px">
            </div>

            <form method="POST" action="{{ route('login.custom') }}">
                @csrf

                <div class="container  mb-4">
                    <label for="email" class=""><p class="h5">E-mail</p></label>
                    <input placeholder="examplo@gmail.com" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" :value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="container  mb-3">
                    <label for="password"><p class="h5">Senha</p></label>
                    <input  placeholder="senha" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  autofocus>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                
                    
                    <div class="row px-3 text-center  d-flex justify-content-center align-items-center">
                        <div class="col-md-12 ">
                           
                                <a class="btn btn-link" href="{{route('verificaEmail')}}" >
                                    Esqueceu sua senha?
                                </a>
                           
                        </div>
                    </div>

                    <div class="container my-3 w-100">
                        <button class="btn btn-success w-100" type="submit" >
                            <p class="h5 m-0"> Entrar</p>
                        </button>
                    </div>
                                
            </form>

        </section>
        @show
        
        <footer class=" d-flex bg-dark w-100" style=" position:absolute;
                bottom:0;">


            <div class="col-6 ps-5">
                <img src="{{asset('images/ceasa.png')}}" alt="Ceasa Campinas"  height="40">
                <img src="{{asset('images/cps.png')}}" alt="" height="30">
                <img src="{{asset('images/sp.png')}}" alt="" height="30">
            
            </div>
                
          <div class="col-6  d-flex align-items-center justify-content-center">
            <p class="m-0 text-muted">
                © 2022 Copyright:
                <a class="text-muted" href="https://github.com/Vinicius-src/Cardapio-do-Bentao">Github.com</a>
            </p>
          </div>
                  
        </footer>
     
      
    </body>
    
</html>
