<header class="header" data-header>
    <div class="container">

      <a href="#" class="logo"></a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>Acceuil</a>
          </li>

          <li class="navbar-item">
            <a href="#benefits" class="navbar-link" data-nav-link>Chapitre</a>
          </li>

          <li class="navbar-item">
            <a href="#pricing" class="navbar-link" data-nav-link>Autheur</a>
          </li>

          <li class="navbar-item">
            <a href="{{ route('cart.show') }}" class="navbar-link" data-nav-link>Panier</a>
          </li>

          <li class="navbar-item">
            <a href="#achievements" class="navbar-link" data-nav-link>Contact</a>
          </li>

          <li class="navbar-item">
            <a href="#setting" class="navbar-link" data-nav-link><ion-icon name="settings-outline" style="font-size: 20px"></ion-icon></a>
          </li>

        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="open"></ion-icon>

        <ion-icon name="close-outline" aria-hidden="true" class="close"></ion-icon>
      </button>

    </div>
  </header>
