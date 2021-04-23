@include('layout._includes.topo')
    <div class="container">
        <nav>
            <div class="nav-wrapper">
            <a href="#!" class="brand-logo">Logo</a>
            <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                @if(Auth::guest())
                <li><a href="{{ route('site.login') }}">Login</a></li>
                @else
                <li><a href="#">{{ Auth::user()->name }}</a></li>
                <li><a href="{{ route('admin.cursos') }}">Cursos</a></li>
                <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
                @endif
            </ul>
            <ul class="side-nav" id="mobile">
                <li><a href="/">Home</a></li>
                <li><a href="{{ route('admin.cursos') }}">Cursos</a></li>

            </ul>
            </div>
        </nav>  
        @yield('conteudo')  
    </div>
    

@include('layout._includes.footer')
