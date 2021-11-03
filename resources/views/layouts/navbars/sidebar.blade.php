<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('S.I.D.D.E.C.') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Panel de control') }}</p>
        </a>
      </li>


      <!-- menu cargos -->
      <li class="nav-item {{ ($activePage == 'cargos' || $activePage == 'mostrar_cargos') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#cargos" aria-expanded="false">
        <i> <span class="material-icons text-success">badge</span> </i>
          <p>{{ __('Cargos') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="cargos">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'cargos' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('cargos.create') }}">
                <span class="sidebar-mini"> RC </span>
                <span class="sidebar-normal">{{ __('Registrar Cargos') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_cargos' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('cargos.index') }}">
                <span class="sidebar-mini"> VC </span>
                <span class="sidebar-normal"> {{ __('Ver Cargos') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- menu personales -->
      <li class="nav-item {{ ($activePage == 'personales' || $activePage == 'mostrar_personales') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#personales" aria-expanded="false">
        <i> <span class="material-icons text-default">engineering</span> </i>
          <p>{{ __('Personal') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="personales">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'personales' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('personales.create') }}">
                <span class="sidebar-mini"> RP </span>
                <span class="sidebar-normal">{{ __('Registrar Personal') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_personales' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('personales.index') }}">
                <span class="sidebar-mini"> VP </span>
                <span class="sidebar-normal"> {{ __('Ver Personal') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- menu usuarios -->
      <li class="nav-item {{ ($activePage == 'users' || $activePage == 'mostrar_users') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false">
          <!-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> -->
          <i> <span class="material-icons text-primary">group</span> </i>
          <p>{{ __('Usuarios') }}
            <b class="caret"></b>
          </p>
        </a>
        <!-- <div class="collapse show" id="users"> -->
        <div class="collapse" id="users">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('users.create') }}">
                <span class="sidebar-mini"> RU </span>
                <span class="sidebar-normal">{{ __('Registrar Usuarios') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_users' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('users.index') }}">
                <span class="sidebar-mini"> VU </span>
                <span class="sidebar-normal"> {{ __('Ver Usuarios') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- menu roles -->
      <li class="nav-item {{ ($activePage == 'rols' || $activePage == 'mostrar_rols') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#rols" aria-expanded="false">
          <!-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> -->
          <i> <span class="material-icons text-info">supervised_user_circle</span> </i>
          <p>{{ __('Roles') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="rols">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'rols' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('rols.create') }}">
                <span class="sidebar-mini"> RR </span>
                <span class="sidebar-normal">{{ __('Registrar Roles') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_rols' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('rols.index') }}">
                <span class="sidebar-mini"> VR </span>
                <span class="sidebar-normal"> {{ __('Ver Roles') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- menu publicaciones -->
      <li class="nav-item {{ ($activePage == 'publicaciones' || $activePage == 'mostrar_publicaciones') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#publicaciones" aria-expanded="false">
        <i> <span class="material-icons text-success">note_alt</span> </i>
          <p>{{ __('Publicaciones') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="publicaciones">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'publicaciones' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('publicaciones.create') }}">
                <span class="sidebar-mini"> RP </span>
                <span class="sidebar-normal">{{ __('Registrar Publicacion') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_publicaciones' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('publicaciones.index') }}">
                <span class="sidebar-mini"> VP </span>
                <span class="sidebar-normal"> {{ __('Ver Publicaciones') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>


      <!-- menu lugares -->
      <li class="nav-item {{ ($activePage == 'lugares' || $activePage == 'mostrar_lugares') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#lugares" aria-expanded="false">
        <i> <span class="material-icons text-warning">person_pin_circle</span> </i>
          <p>{{ __('Lugares') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="lugares">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'lugares' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('lugares.create') }}">
                <span class="sidebar-mini"> RL </span>
                <span class="sidebar-normal">{{ __('Registrar Lugar') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_lugares' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('lugares.index') }}">
                <span class="sidebar-mini"> VL </span>
                <span class="sidebar-normal"> {{ __('Ver Lugares') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- menu clasificaciones -->
      <li class="nav-item {{ ($activePage == 'clasificaciones' || $activePage == 'mostrar_clasificaciones') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#clasificaciones" aria-expanded="false">
        <i> <span class="material-icons text-default">format_list_numbered</span> </i>
          <p>{{ __('Clasificaciones') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="clasificaciones">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'clasificaciones' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('clasificaciones.create') }}">
                <span class="sidebar-mini"> RC </span>
                <span class="sidebar-normal">{{ __('Registrar Clasificacion') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_clasificaciones' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('clasificaciones.index') }}">
                <span class="sidebar-mini"> VC </span>
                <span class="sidebar-normal"> {{ __('Ver Clasificacion') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- menu unidades -->
      <li class="nav-item {{ ($activePage == 'unidades' || $activePage == 'mostrar_unidades') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#unidades" aria-expanded="false">
        <i> <span class="material-icons text-primary">domain</span> </i>
          <p>{{ __('Unidades Educativa') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="unidades">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'unidades' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('unidades.create') }}">
                <span class="sidebar-mini"> RU </span>
                <span class="sidebar-normal">{{ __('Registrar Unidades Educativas') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_unidades' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('unidades.index') }}">
                <span class="sidebar-mini"> VU </span>
                <span class="sidebar-normal"> {{ __('Ver Unidades Educativas') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- menu profesores -->
      <li class="nav-item {{ ($activePage == 'profesores' || $activePage == 'mostrar_profesores') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#profesores" aria-expanded="false">
        <i> <span class="material-icons text-info">school</span> </i>
          <p>{{ __('Profesores') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="profesores">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profesores' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profesores.create') }}">
                <span class="sidebar-mini"> RP </span>
                <span class="sidebar-normal">{{ __('Registrar Profesores') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_profesores' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profesores.index') }}">
                <span class="sidebar-mini"> VP </span>
                <span class="sidebar-normal"> {{ __('Ver Profesores') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- menu horarios -->
      <li class="nav-item {{ ($activePage == 'horarios' || $activePage == 'mostrar_horarios') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#horarios" aria-expanded="false">
        <i> <span class="material-icons text-primary">event</span> </i>
          <p>{{ __('Horarios') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="horarios">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'horarios' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('horarios.create') }}">
                <span class="sidebar-mini"> RH </span>
                <span class="sidebar-normal">{{ __('Registrar Horario') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_horarios' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('horarios.index') }}">
                <span class="sidebar-mini"> VH </span>
                <span class="sidebar-normal"> {{ __('Ver Horarios') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- menu asistencias -->
      <li class="nav-item {{ ($activePage == 'asistencias' || $activePage == 'mostrar_asistencias') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#asistencias" aria-expanded="false">
        <i> <span class="material-icons text-info">inventory</span> </i>
          <p>{{ __('Asistencias') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="asistencias">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'asistencias' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('asistencias.create') }}">
                <span class="sidebar-mini"> RA </span>
                <span class="sidebar-normal">{{ __('Registrar Asistencias') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'mostrar_asistencias' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('asistencias.index') }}">
                <span class="sidebar-mini"> VA </span>
                <span class="sidebar-normal"> {{ __('Ver Asistencias') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- backup -->
      <!-- <li class="nav-item{{ $activePage == 'backup' ? ' active' : '' }}">
        <a class="nav-link" href="#">
        <i> <span class="material-icons text-warning">cloud_upload</span> </i>
            <p>{{ __('Backup') }}</p>
        </a>
      </li> -->

      <!-- cerrar sesion -->
      <li class="nav-item{{ $activePage == 'cerrar' ? ' active' : '' }}">
        <!-- <a class="nav-link" href="{{ route('logout') }}"> -->
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i> <span class="material-icons">person</span> </i><p>{{ __('Cerrar sesion') }}</p></a>
        
            
        </a>
      </li>

      <!-- <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li> -->
      <!-- <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link text-white bg-danger" href="#">
          <i class="material-icons text-white">unarchive</i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li> -->
    </ul>
  </div>
</div>
