<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>E-Commerce</title>
  <!--style-->
	<link rel="stylesheet" href="{{asset('bootstarp/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="badge-info">
  <section>
    
  <!--navbar-->
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="{{route('index')}}">E-commerce</a>
  <ul class="navbar-nav">
    
     <li class="nav-item ">
      <a class="nav-link" href="{{route('login1')}}">Admin</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{route('login')}}">Supllier</a>
    </li>
    

  </ul>
</nav>
</section>
<br><br><br><br>
<section class="py-2" style="">
    
  </section>
<section class="text-dark lead">
  
     <!--Dashboard-->
  	<div class="container ">
      <div class="row ">
        <div class="col-md-2"></div>
        <div class="col-md-8">
      
            
              <div class="card">
                    
                    <div class="card-body text-center"><p><h1>WelCome<h1></p></div>
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
