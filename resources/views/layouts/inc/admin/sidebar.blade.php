<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Acceuil
              </p>
            </a>
            
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link @yield('produit_content')">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Produits
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous les produits</p>
                </a>
              </li>
             
            </ul>
          </li>
          @if(Auth::user()->accreditation == 'Admin')
          <li class="nav-item ">
            <a href="#" class="nav-link @yield('user_content')">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('utilisateur.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('utilisateur.list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tous les utilisateurs</p>
                </a>
              </li>
              
            </ul>
          </li>
          @else
          
          
          @endif
        </ul>
      </nav>