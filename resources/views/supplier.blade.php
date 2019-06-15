
  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Supplier</title>

     <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('bootstarp/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="bg-dark">
  <section>
    <!--navbar-->
  <nav class="navbar navbar-expand-md navbar-light navbar-laravel text-dark bg-warning fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{route('supplier')}}">
                    Supplier
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                         <li class="nav-item">
                         <a class="nav-link" href="{{route('supplier')}}">Dashboard</a>
                        </li>
                         <li class="nav-item">
                        <a class="nav-link" href="{{route('supplier')}}">Product List</a>
                       </li>
                        <li class="nav-item">
                         <a class="nav-link" href="{{route('supply')}}">Supply Product</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

</section><br><br>
<section class="py-2 text-center" style="">
    <h1 class="text-light center">Product List</h1>
  </section><br><br>
<section class="text-dark lead">
  
     <!--Dashboard-->
  	<div class="container ">
      <div class="row ">
        <div class="col-md-2"></div>
        <div class="col-md-8">
      
            
              <div class="card">
                    
                    <div class="card-body">
                     <table class="table table-responsive table-hover">
                      <tr>
                        <th>
                        Id
                      </th>

                      <th>
                        Product Name
                      </th>
                      <th>
                        Product Quantity
                      </th>
                      </tr>
                      @foreach($productlists as $productlist)
                      <tr>
                        
                        <td>
                          {{$productlist->id}}
                        </td>
                        <td>
                          {{$productlist->pname}}
                        </td>
                        <td>
                          {{$productlist->pamount}}
                        </td>
                        
                      </tr>
                      @endforeach
                      

                    </table>
                    </div>
                    
                    
              </div><br><br>
           
      
    
  </div>
  <div class="col-md-2"></div>
  </div>
  </div>
  </section>
    <!--Javascript link-->      
<script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstarp/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/parsley.min.js')}}"></script>
</body>
</html>
