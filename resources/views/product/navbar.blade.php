<nav class="navbar navbar-expand-sm bg-white navbar-light fixed-top" style="padding: 0; height: 60px;">
    <div class="container d-flex align-items-center">
    <a class="navbar-brand" href="/">
      <span style="color: brown">1</span>
      <span style="color: #ff0000">1</span>
      <span style="color: #ff4000">8</span>
      <span style="color: #5ce600"> -</span>
      <span style="color: #ffff00">s</span>
      <span style="color: #39e600">o</span>
      <span style="color: #006600">n</span>
      <span style="color: #00e6e6">l</span>
      <span style="color: #006666">i</span>&nbsp;&nbsp;&nbsp;
      <span style="color: #000099">M</span>
      <span style="color: #80005e">T</span>
      <span style="color: #4d004d">T</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::is('/') ? 'active' : null }}">
                <a href="{{ route('/') }}" class="nav-link">Asosiy</a>
            </li>
            <li class="nav-item {{ Request::is('about') ? 'active' : null }}">
                <a href="{{ route('about') }}" class="nav-link">Haqimizda</a>
            </li>
            <li class="nav-item {{ Request::is('teacher') ? 'active' : null }}">
                <a href="{{ route('teacher') }}" class="nav-link">O'qituvchilar</a>
            </li>
            <li class="nav-item {{ Request::is('courses') ? 'active' : null }}">
                <a href="{{ route('courses') }}" class="nav-link">Kurslar</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- END nav -->
