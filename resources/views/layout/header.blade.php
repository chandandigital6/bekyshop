<header>
    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <span class="icon">🍴</span>
            <span class="brand">Restoran</span>
        </div>
        <!-- Toggle Button for Navigation -->
        <div class="toggle-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!-- Navigation Menu -->
        <nav>
            <ul>
                <li class="{{ Request::routeIs('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}">HOME</a>
                </li>
                <li class="{{ Request::routeIs('about') ? 'active' : '' }}">
                    <a href="{{ route('about') }}">ABOUT</a>
                </li>
                <li class="{{ Request::routeIs('service') ? 'active' : '' }}">
                    <a href="{{ route('service') }}">SERVICE</a>
                </li>
                <li class="{{ Request::routeIs('menu') ? 'active' : '' }}">
                    <a href="{{ route('menu') }}">MENU</a>
                </li>
                <li class="{{ Request::routeIs('appointment') ? 'active' : '' }}">
                    <a href="{{ route('appointment') }}">Appointment</a>
                </li>
                <li class="{{ Request::routeIs('contact') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}">CONTACT</a>
                </li>

            </ul>
        </nav>
    </div>
</header>
