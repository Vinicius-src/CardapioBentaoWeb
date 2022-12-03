<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('images/cardapioBentao.png')}}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    
</head>
<body>
      <div class="container-fluid">
                <div class="row flex-nowrap">
                    <div id="sidebarMenu" class="col-auto d-md-block   sidebar collapse " style=" background-image:linear-gradient(to top, orange, yellow); ">
                        <div class="d-flex flex-column align-items-center align-items-sm-start pt-2 text-white min-vh-100">
                            
                          <a class="navbar-brand col-md-2 col-lg-1 px-2 "  href="{{route('dashboard')}}">
                            <img class="mx-auto" src="{{asset('images/cardapioBentao.png')}}" width="50px"  height="50px">
                          </a>
                          
                            <ul class="nav nav-pills flex-column mb-sm-auto mt-3 align-items-center align-items-sm-start ">
                                
                              <li class="nav-item mx-auto" id="home">
                                    <a href="{{route('dashboard')}}" class="nav-link px-0 text-center text-black " >
                                        <span class="mx-auto">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                                          </svg>
                                          <p class="h6 text-center m-0"> 
                                            Home
                                          </p>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item mx-auto btn-group dropend" id="cardapio">
                                    <a class="nav-link px-0 text-center d-inline  dropdown-toggle text-black" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer;">
                                         <span class="mx-auto">
                                        
                                           <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="40" height="40" viewBox="0 0 256.000000 256.000000" preserveAspectRatio="xMidYMid meet">

                                            <g transform="translate(0.000000,256.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                            <path d="M1145 2277 c-374 -111 -686 -206 -692 -210 -18 -12 -19 -1957 -1 -1975 17 -17 1639 -17 1656 0 17 17 17 1959 0 1976 -8 8 -49 12 -120 12 l-108 0 0 188 c0 192 -4 213 -39 211 -9 0 -322 -91 -696 -202z m655 -42 l0 -155 -517 1 -518 0 515 153 c283 85 516 154 518 155 1 0 2 -69 2 -154z m240 -1155 l0 -920 -760 0 -760 0 0 920 0 920 760 0 760 0 0 -920z"/>
                                            <path d="M731 1827 c-8 -10 -11 -66 -9 -192 3 -157 5 -179 21 -189 12 -8 22 -8 35 0 14 9 18 30 22 109 l5 98 23 -41 c36 -66 68 -66 104 0 l23 41 5 -98 c4 -79 8 -100 23 -109 12 -8 22 -8 35 0 15 10 17 32 20 189 3 187 -2 209 -42 203 -13 -2 -36 -29 -66 -80 -25 -43 -47 -78 -50 -78 -3 0 -25 35 -50 78 -47 79 -74 98 -99 69z"/>
                                            <path d="M1092 1828 c-19 -19 -17 -361 2 -377 9 -8 43 -11 92 -9 60 2 79 7 88 21 19 30 -4 52 -63 55 l-51 3 0 39 0 39 51 3 c96 6 96 70 0 76 l-51 3 0 39 0 39 51 3 c59 3 82 25 63 56 -9 13 -28 18 -90 20 -53 2 -83 -1 -92 -10z"/>
                                            <path d="M1331 1827 c-8 -10 -11 -66 -9 -192 3 -157 5 -179 21 -189 12 -8 22 -8 35 0 13 9 18 28 20 95 l3 84 47 -90 c34 -65 53 -91 68 -93 40 -6 45 15 42 203 -3 157 -5 179 -20 189 -13 8 -23 8 -35 0 -14 -9 -19 -28 -21 -95 l-3 -84 -47 90 c-48 92 -74 113 -101 82z"/>
                                            <path d="M1612 1828 c-17 -17 -16 -284 1 -318 7 -13 28 -35 47 -48 47 -32 101 -25 144 17 l31 31 0 157 c0 137 -2 157 -17 167 -13 8 -23 8 -35 0 -15 -10 -19 -32 -23 -154 -4 -122 -8 -144 -22 -154 -13 -8 -23 -8 -35 0 -16 10 -18 30 -21 149 -1 82 -7 144 -14 152 -13 16 -40 17 -56 1z"/>
                                            <path d="M612 1068 c-16 -16 -15 -43 2 -57 9 -8 193 -10 671 -9 614 3 659 4 669 21 8 12 8 22 0 35 -10 16 -55 17 -671 20 -504 2 -662 -1 -671 -10z"/>
                                            <path d="M612 828 c-16 -16 -15 -43 2 -57 9 -8 193 -10 671 -9 614 3 659 4 669 21 8 12 8 22 0 35 -10 16 -55 17 -671 20 -504 2 -662 -1 -671 -10z"/>
                                            <path d="M612 588 c-16 -16 -15 -43 2 -57 9 -8 193 -10 671 -9 614 3 659 4 669 20 8 13 8 23 0 35 -10 17 -55 18 -671 21 -504 2 -662 -1 -671 -10z"/>
                                            </g>
                                            </svg>
                                          <br>
                                           Cardápio
                                        </span>
                                      </a>
                                    <ul  class="dropdown-menu border-0  py-3 my-3" style="background-color: rgb(255, 238, 0);" >
                                        <li class="ps-2" >
                                            <a href="{{route('visualizarCardapio')}}"id="cardapioVC" class="dropdown-item  text-black "> Visualizar cardápio</a>
                                        </li>
                                        <li class="ps-2" >
                                            <a href="{{route('cadastroCardapio')}}" id="cardapioVC" class="dropdown-item text-black ">Cadastrar cardápio</a>
                                        </li>
                                    </ul>
                                </li>
                              

                    
                                    <li class="nav-item mx-auto " id="cadUSer">
                                        <a   href="{{route('cadastrar')}}" class="nav-link px-0 text-center text-black ">
                                            <span class="mx-auto">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                              </svg>
                                              <p class="h6 text-center m-0 "> 
                                                Cadastrar<br>
                                                usuário
                                              </p>
                                            </span>
                                        </a>
                                      </li>

                                      <li class="nav-item mx-auto " id="noticias">
                                        <a   href="{{route('noticias')}}" class="nav-link px-0 text-center text-black ">
                                            <span class="mx-auto ">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                                                <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                                                <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                                              </svg>
                                                <p class="h6 text-center m-0"> 
                                                  Notícias
                                                </p>
                                            </span>
                                          </a>
                                      </li>
                                    
                                  </ul>
                                 
                            

                        </div>
                    </div>
                    
                    <div class="col p-0 w-100" >
                      <header class=" navbar navbar-expand-md navbar-dark bg-dark py-3" >
                        <button class="navbar-toggler col-md-2 col-lg-1 px-2 me-0 d-flex justify-content-center d-md-none rounded-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon m-0 p-0 border-0 "></span>
                        </button>
                        
                        
                  
                        <div class="px-2 col-md-10 col-lg-11 d-flex justify-content-left">
                          <!-- Right Side Of Navbar -->
                          <ul class="navbar-nav ms-auto">
                              <!-- Authentication Links -->
                              
                                  <li class="dropdown">
                                      <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Olá, {{ Auth::user()->name }}
                                      </a>
                          
                                      <div class="dropdown-menu dropdown-menu-end  bg-dark" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item text-white bg-dark" href="{{ route('signout') }}"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                              <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                                              <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                                            </svg> 
                                            
                                            {{ __('Sair') }}
                                          </a>
                  
                                          <form id="logout-form" action="{{ route('signout') }}" method="POST" class="d-none">
                                              @csrf
                                          </form>
                                      </div>
                                    
                                  </li>
                              
                          </ul>
                    
                      </div>
                  </header>
                            @if ($errors->any())
                            <div id="alert" class="alert alert-danger d-flex align-items-center fade show" role="alert" style="position: absolute; right:5px; top:80px;">
                                <span class="d-flex align-text-bottom me-2 justify-content-center">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                    <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                    <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                  </svg>
                                </span>
                                @foreach ($errors->all() as $error )
                                  {{$error}}
                                @endforeach
                              <button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#myalert" aria-label="Close"></button>
                            </div>
                            <script src="{{ asset('js/script.js') }}"></script>   
                          @endif

                          @if (session('sucess'))
                              <div id="alert" class="alert alert-success d-flex align-items-center fade show" role="alert" style="position: absolute; right:5px; top:80px;">
                                  <span class="d-flex align-text-bottom me-2 justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                      <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                    </svg>
                                  </span>
                                {{session('sucess')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#myalert" aria-label="Close"></button>
                              </div>
                              <script src="{{ asset('js/script.js') }}"></script>    
                          @endif
                          
                          @if (session('danger'))
                              <div id="alert" class="alert alert-danger d-flex align-items-center fade show" role="alert" style="position: absolute; right:5px; top:80px;">
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
                      

                         @yield('content')
                    </div>
                </div>
        </div>
        
       
   
</body>
</html>
