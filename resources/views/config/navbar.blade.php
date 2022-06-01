<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home') }}">NavBar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('cliente') }}">Cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('servicos') }}">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('faleconosco') }}">Fale Conosco</a>
          </li>
      </ul>
    </div>
  </nav>
