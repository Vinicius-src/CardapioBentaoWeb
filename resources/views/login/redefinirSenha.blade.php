@extends('login.login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5"  style="background-image:linear-gradient(to top, orange, yellow); ">
            <div class="card">
                <div class="card-header">{{ __('verificar email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um novo link de verificação foi enviado para seu endereço de e-mail.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, verifique seu e-mail para obter um link de verificação.') }}
                    {{ __('Se você não recebeu o e-mail') }},

                    <form class="d-inline" method="POST" action="{{ route('formVerificaEmail') }}">
                        @csrf
                        <div class="container mb-3">
                            <label for="email" ><p class="h5">E-mail</p></label>
                                <input id="email" type="email" placeholder="E-mail@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>E-mail invalido</strong>
                                    </span>
                                @enderror
                        </div>
            
                        
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection