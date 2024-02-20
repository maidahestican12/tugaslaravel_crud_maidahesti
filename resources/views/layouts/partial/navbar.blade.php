<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../student/all">Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../kelas">Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../extracurricular">Extracurricular</a>
                </li>
            </ul>
            

            <ul class="navbar-nav ms-auto" style="margin-right: 70px;">
    <li class="nav-item dropdown">
        @if(auth()->check())
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                Hi, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
            
        @else
            <a class="nav-link" href="/login/index">Login</a>
        @endif
    </li>
</ul>
          </ul>
        </div>
    </div>
</nav>
