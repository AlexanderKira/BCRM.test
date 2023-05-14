<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('user')}}">
            {{config('app.name')}}
        </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a href="{{route('user')}}" class="nav-link active" aria-current="page">
                {{__('Главная')}}
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('blog')}}" class="nav-link" aria-current="page">
                {{__('Блог')}}
            </a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a href="{{route('register')}}" class="nav-link" aria-current="page">
                {{__('Регистрация')}}
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('login')}}" class="nav-link" aria-current="page">
                {{__('Вход')}}
            </a>
          </li>
        </ul>
      </div>
    </div>
</nav>

