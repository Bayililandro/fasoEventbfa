<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <!--Admin-->
          @if(auth()->user()->role=='admin')
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Tableau de bord A</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="pages/evenement/evenement.html">
                <i class="mdi mdi-application menu-icon"></i>
                <span class="menu-title">Evènements</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/utilisateurs/utilisateurs.html">
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span class="menu-title">Utilisateurs</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="pages/utilisateurs/categories.html">
                <i class="mdi mdi-equal-box menu-icon"></i>
                <span class="menu-title">Catgories</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="pages/profil/profil.html">
                <i class="mdi mdi-account-box-outline menu-icon"></i>
                <span class="menu-title">Profil A</span>
              </a>
            </li>
          </ul>
          @endif
          <!--Fin Admin-->

          <!--Promoteur-->
          @if(auth()->user()->role=='promoteur')
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Tableau de bord P</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="pages/evenement/evenement.html">
                <i class="mdi mdi-application menu-icon"></i>
                <span class="menu-title">Evènements</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/utilisateurs/utilisateurs.html">
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span class="menu-title">Abonnés</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="pages/utilisateurs/categories.html">
                <i class="mdi mdi-equal-box menu-icon"></i>
                <span class="menu-title">Messageries</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="pages/profil/profil.html">
                <i class="mdi mdi-account-box-outline menu-icon"></i>
                <span class="menu-title">Profil P</span>
              </a>
            </li>
          </ul>
          @endif
          <!--Fin Promoteur-->

          <!--Abonné-->
          @if(auth()->user()->role=='abonne')
       <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Tableau de bord AB</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="pages/utilisateurs/utilisateurs.html">
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span class="menu-title">Favories</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="pages/utilisateurs/categories.html">
                <i class="mdi mdi-equal-box menu-icon"></i>
                <span class="menu-title">Amis</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="pages/profil/profil.html">
                <i class="mdi mdi-account-box-outline menu-icon"></i>
                <span class="menu-title">Profil AB</span>
              </a>
            </li>
          </ul>
       @endif
          <!--Fin Abonné-->
        </nav>