    <header>
        <ul>
            <li>
                <p style="font-weight: bold; font-size: large;">
                    FLEKSEO
                </p>
            </li>
            <li class="container-nav-link">
                <ul class="nav-link">
                    <li class="nav-link-item {{ request()->routeIs('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}" >Accueil</a>
                    </li>
                    <li class="nav-link-item {{ request()->routeIs('course.index') || request()->routeIs('course.show')  ? 'active' : '' }}">
                        <a href="{{ route('course.index') }}">Cours</a>
                        
                    </li>
                    <li class="nav-link-item">
                        <a href="#">Partages</a>
                    </li>

                    <li class="nav-link-item {{ request()->routeIs('course.create') ? 'active' : '' }}">
                        <a  href="{{ route('course.create') }}">Contenu</a>
                    </li>
                    <li class="nav-link-item {{ request()->routeIs('mentoring') ? 'active' : '' }}">
                        <a href="{{ route('mentoring') }}">Mentoring</a>
                    </li>
                </ul>
            </li>
            <li class="container-btn-header">
                <ul>
                    <!-- <li>
                        <button>R</button>
                    </li> -->
                    <li>
                        @guest
                            <form action="{{ route('login') }}" method="GET">
                                <button  type="submit">Se connecter</button>
                            </form>
                        @endguest
                        @auth
                            <span style="padding: 0 15px">{{ Auth::user()->firstname . ' ' . Auth::user()->name }}</span>
                            <form action="{{ route('logout') }}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="btn-primary" style="padding: 4px 10px; background-color: tomato; font-size: 20px ; border-color: tomato;" type="submit">⇒</button>
                            </form>
                        @endauth
                    </li>
                </ul>
            </li>
        </ul>
    </header>
