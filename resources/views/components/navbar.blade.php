<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('pages.home') }}">{{ env('APP_NAME') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          @auth
            <li class="nav-item">
              <form method="POST" action="{{ route('auth.logout') }}">
                @csrf
                <button type="submit" class="btn btn-link text-white">Log out</button>
              </form>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard.overview') }}">{{ auth()->user()->username }}</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="{{ route('auth.login') }}">Log in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('auth.register') }}">Register</a>
            </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
  
