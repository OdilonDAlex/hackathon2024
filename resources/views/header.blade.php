    <header>
        <ul>
            <li>
                <p style="font-weight: bold; font-size: large;">
                    EDUKA
                </p>
            </li>
            <li class="container-nav-link">
                <ul class="nav-link">
                    <li class="nav-link-item">
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a>
                    </li>
                    <li class="nav-link-item">
                        <a class="{{ request()->routeIs('course.index') || request()->routeIs('course.show')  ? 'active' : '' }}" href="{{ route('course.index') }}">Cours</a>
                        
                    </li>
                    <li class="nav-link-item">
                        <a href="#">Partages</a>
                    </li>

                    <li class="nav-link-item">
                        <a class="{{ request()->routeIs('course.create') ? 'active' : '' }}" href="{{ route('course.create') }}">Contenu</a>
                    </li>
                    <li class="nav-link-item">
                        <a href="#">Mentoring</a>
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
                                <button class="btn-primary" style="padding: 8px 20px;" type="submit">Se connecter</button>
                            </form>
                        @endguest
                        @auth
                            <form action="{{ route('logout') }}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="btn-primary" style="padding: 8px 20px; background-color: var(--primary); border-color: var(--primary);" type="submit">Se deconnecter</button>
                            </form>
                        @endauth
                    </li>
                </ul>
            </li>
        </ul>
    </header>
