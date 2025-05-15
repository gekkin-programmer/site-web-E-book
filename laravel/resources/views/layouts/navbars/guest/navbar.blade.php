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
            <a href="#chapters" class="navbar-link" data-nav-link>Prix</a>
          </li>

          <li class="navbar-item">
            <a href="#pricing" class="navbar-link" data-nav-link>Autheur</a>
          </li>

          <li class="navbar-item">
            <a href="#author" class="navbar-link" data-nav-link>Achievements</a>
          </li>

          <li class="navbar-item">
            <a href="#achievements" class="navbar-link" data-nav-link>Contact</a>
          </li>

          <li class="navbar-item dropdown">
            <a href="#" class="navbar-link dropdown-toggle" onclick="toggleDropdown(event)" >
              <ion-icon name="settings-outline"style="font-size: 24px;"></ion-icon>
            </a>
            <ul class="dropdown-menu"  style="min-width: 200px; padding: 10px 0;">
              <li><a class="dropdown-item" href="/profile" style="padding: 8px 20px; font-size: 14px;">Profile</a></li>
              <li><a class="dropdown-item" href="/cart" style="padding: 8px 20px; font-size: 14px;">Cart</a></li>
            </ul>
          </li>
          <style>
            .dropdown-menu {
              display: none;
              position: absolute;
              background: white;
              box-shadow: 0 2px 5px rgba(0,0,0,0.2);
              z-index: 1000;
            }
            .dropdown-menu.show {
              display: block;
            }
          </style>


<script>
    function toggleDropdown(event) {
      // Prevent default link behavior
      event.preventDefault();
      
      // Find the closest dropdown container
      const dropdownItem = event.currentTarget.closest('.dropdown');
      const dropdownMenu = dropdownItem.querySelector('.dropdown-menu');
      
      // Toggle the 'show' class
      dropdownMenu.classList.toggle('show');
      
      // Close when clicking outside
      document.addEventListener('click', function closeDropdown(e) {
        if (!dropdownItem.contains(e.target)) {
          dropdownMenu.classList.remove('show');
          document.removeEventListener('click', closeDropdown);
        }
      });
    }
  </script>
        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="open"></ion-icon>

        <ion-icon name="close-outline" aria-hidden="true" class="close"></ion-icon>
      </button>

    </div>
  </header>
