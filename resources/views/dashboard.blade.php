<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Climate Change Awareness</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('image/CLIMATECHANGE2.png') }}">
  </head>
<body>
    
<main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
        <div class="row">
            <div class="col-md-11">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                  <img src="{{ asset('image/CLIMATECHANGE2.png') }}" alt="BootstrapBrain Logo" width="100">
                  <span class="navbar-brand" style="font-size: 3rem; font-weight: bold; margin-left: 10px;" href="/">{{ __('Climate Change') }}</span>
                </a>          
            </div>
            <div class="col-md-1">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
      
    </header>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">

        @session('success')
            <div class="alert alert-success" role="alert"> 
              {{ $value }}
            </div>
        @endsession

        <h1 class="display-5 fw-bold">Hi, {{ auth()->user()->name }}</h1>
        <p class="col-md-8 fs-4">Welcome to dashboard.<br/>Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <div class="d-grid my-3">
          <a href="{{ route('home') }}" class="btn btn-primary col-md-4 mb-4">Go to Home</a>
        </div>
      </div>
    </div>

  </div>
</main>

</body>
</html>
