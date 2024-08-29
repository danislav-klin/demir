<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="/public/img/logo.png" alt="logo" width="60px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">О нас</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Автопарк</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Контакты</a>
          </li>
        </ul>
        @auth
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('show', auth()->user()) }}">{{ Auth::user()->login }}</a>
            </li>
            <li class="nav-item">
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="nav-link">Выйти</button>
              </form>
                
            </li>
        </ul>

        @endauth
        @guest
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('auth.login') }}">Войти</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('auth.register') }}">регистрация</a>
            </li>
        </ul>


        @endguest

      </div>
    </div>
  </nav>
