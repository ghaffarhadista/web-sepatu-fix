<nav class="navbar navbar-expand-lg fixed-top navbar-dark">
  <div class="container">
    <a href="/" class="logo-hagama text-decoration-none text-center"><h1 class="me-2 text-light text-center"><span><i class="bi bi-dice-5-fill"></i></span> G-SHOES</h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link me-3 {{ ($active === "home") ? 'active' : '' }}"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3 {{ ($active === "about") ? 'active' : '' }}"  href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3 {{ ($active === "product") ? 'active' : '' }}"  href="/product">Product</a>
          </li>
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i> {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-boxes"></i> Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i> Log Out</button>
              </form>
            </li>
          </ul>
        </li>
        @else  
          <li class="nav-item">
            <a class="nav-link {{ ($active === "login") ? 'active' : '' }}"  href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>