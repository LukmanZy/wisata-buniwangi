   <!-- Main Container Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <!-- Container Content Navbar -->
    <div class="container">
      <!-- Brand -->
      <a class="navbar-brand" href="/">WisataDesa</a>
      <!-- For Responsive Hamberger Menu -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Main Container Content Navbar -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <!-- Main Content Navbar -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "List Destinasi") ? 'active' : '' }} " href="/listDestinations">List Destinasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Kontak</a>
          </li>

          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admin
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
            </ul>
          </li>
              @else
              <li class="nav-item">
                <a class="btn btn-outline-light {{ ($title === "Login") ? 'active' : '' }}" href="/login">LOGIN</a>
              </li>
          @endauth
        </ul>

      </div>
    </div>
  </nav>