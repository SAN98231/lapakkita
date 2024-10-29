<div class="hero_area">
  <!-- header section starts -->
  <header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <span>LapakKita.com</span>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class=""></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/') }}">
              Home <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item {{ Request::is('products') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('products.listing') }}">Listing</a>
          </li>
          <li class="nav-item {{ Request::is('tips') ? 'active' : '' }}">
            <a class="nav-link" href="/tips">Tips</a>
          </li>
        </ul>
        <div class="user_option">
          <a href="{{ route('login') }}">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>Login</span>
          </a>
          <a href="{{ route('register') }}">
            <i class="fa fa-user-plus" aria-hidden="true"></i>
            <span>Register</span>
          </a>
        </div>
      </div>
    </nav>
  </header>
</div>
