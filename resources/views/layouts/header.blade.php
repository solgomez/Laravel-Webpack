<div class="wrapper">
    <header>
      <div class="container-fluid">    
        <div class="row header-top py-1">
            <div class="col-7 col-md-6">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <picture>
                        <source srcset="{{ asset('images/logo-header.svg') }}" media="(max-width: 600px)">
                        <source srcset="{{ asset('images/logo-header.svg') }}">
                        <img srcset="{{ asset('images/logo-header.svg') }}" >
                </a>   
            </div> 
            <div class="col-md-6 <?php  if (Auth::check()){ echo "col-12"; } else { echo "col-5"; }?> row justify-content-end d-flex align-items-center">
                    <!-- <div class="col-md-3">
                        <input type="text" class="form-control text-xxs form-group mt-1" name = "email" placeholder="Correo electrónico">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control text-xxs form-group mt-3" name = "contraseña" placeholder="Contraseña">
                        <p></p>
                    </div>-->
                    
                @if(Auth::check())
                    <div class="dropdown">
                        <a class="btn dropdown-toggle shadow-none" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('images/user.svg') }}" alt="usuario" class="mr-2" height="30px" width="25px">{{ Auth::user()->email }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="width: 100%;">
                            @can('crear_usuario')
                            <a class="dropdown-item" href="{{ route('register') }}">Crear usuario</a>
                            @endcan
                            <a class="dropdown-item" href="{{ route('agregar.accion') }}">Crear acción</a>                          
                            <a class="dropdown-item" href="{{ url('logout') }}">Cerrar sesión</a>
                        </div>
                    </div>
                    @else
                        <div align="right">
                            <a href="{{ url('login') }}" class="font-weight-bold text-md">Iniciar sesión</a>
                        </div>
                @endif                           
            </div>                        
        </div>
        <div class="row text-lg bg-light align-items-center py-1">
            <div class="col-12 col-md-8 d-none d-sm-block text-sm">
               Inicio / <b>Bienvenida</b>        
            </div>                         
        </div>      
      </div>    
    </header>

