<nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <div class="row">

            <div class="col-8 col-lg-3 navbar-left">
              <button class="navbar-toggler" type="button">&#9776;</button>
              <a class="navbar-brand" href="/">
                <img class="logo-dark" src="https://liquidlab.in/img/logo-dark.png" alt="logo">
                <img class="logo-light" src="https://liquidlab.in/img/logo-light.png" alt="logo">
              </a>
            </div>

            <section class="col-lg-6 navbar-mobile">
              <nav class="nav nav-navbar mx-auto">
                {{-- <a class="nav-link active" href="#">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a>
                <a class="nav-link" href="#">Contact</a> --}}
              </nav>
            </section>
            @if(Session::get('login')==1)
              {{-- <p>true</p> --}}
              <div class="col-4 col-lg-3 text-right">
              <a class="btn btn-sm btn-round btn-outline-danger d-none d-lg-inline-block mr-2" href="/employees/{{$employeeid}}">{{$employeename}}</a> 
                 <a class="btn btn-sm btn-round btn-danger" href="/logout">Logout</a>
               </div>
            @else
            <div>
              <a class="btn btn-sm btn-round btn-primary ml-lg-4 mr-2" href="/login">Sign in</a>
              <a class="btn btn-sm btn-round btn-outline-primary" href="#">Sign up</a>
            </div>
            @endif

            

          </div>
        </div>
      </nav><!-- /.navbar -->

