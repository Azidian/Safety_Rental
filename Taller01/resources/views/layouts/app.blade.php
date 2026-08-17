<!doctype html> 
<html lang="es"> 
<head> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" /> 
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" /> 
  <title>@yield('title', 'Safety Rent')</title> 
</head> 

<header class="bg-brand-black py-3 position-relative shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
      
      <div class="d-flex gap-3 z-1">
        <a href="{{ route('home.index') }}" class="btn btn-outline-light fw-bold">Home</a>
        <a href="{{ route('client.create') }}" class="btn text-brand-orange fw-bold btn-nav-orange">Register</a>
        <a href="{{ route('client.index') }}" class="btn text-brand-orange fw-bold btn-nav-orange">Clients</a>
      </div>
    </div>
  </header>

<body class="d-flex flex-column min-vh-100 bg-white"> 

  <div class="container my-4 flex-grow-1"> 
    @yield('content') 
  </div> 
 
  <footer class="bg-brand-black text-white py-4 mt-auto border-top border-warning"> 
    <div class="container text-center"> 
      <small> 
        Copyright &copy; {{ date('Y') }} - 
        <a class="text-brand-orange fw-bold text-decoration-none" target="_blank" href="#"> 
          Isabella Ocampo Sánchez 
        </a> 
        <br>
        <span class="text-muted mt-2 d-block">Safety Rental - The Best Solution For You</span>
      </small> 
    </div> 
  </footer> 
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> 
</body> 
</html>