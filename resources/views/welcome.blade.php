<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body class="antialiased">

        <div class="card">
            
            @include('includes.header')

            <div class="card mb-3" style="max-width: 2000px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ url('images/coin.png') }}" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                    <h1 class="card-text">O <strong> economico</strong> é feito para aqueles que não tem medo de desafios e desejam evoluir a cada um ultrapassado, aprenda a controlar seu dinheiro se divertindo com seus amigos!</h1> 
                    </div>
                  </div>
                </div>
              </div>
          </div>
          
        <div class="relative flex items-top justify-center min-h-screen bg-white sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed bottom-0 right-0 px-5 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Já é cadastrado? Entre agora</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Cadastre-se agora</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        @include('includes.scripts')
    </body>
</html>