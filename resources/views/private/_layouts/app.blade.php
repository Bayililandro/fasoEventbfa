<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>@yield('titre')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets_private/vendors/mdi/css/materialdesignicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_private/vendors/base/vendor.bundle.base.css')}}" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="{{asset('assets_private/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}"
    />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets_private/css/style.css')}}" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets_private/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      
      @if(request()->routeIs('public.inscription-option') == false && request()->routeIs('public.inscription-promoteur') == false && request()->routeIs('public.inscription-abonne') == false && request()->routeIs('public.connexion') == false)
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
          <div
            class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100"
          >
            <a class="navbar-brand brand-logo" href="index.html"
              ><img src="images/logo.svg" alt="logo"
            /></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"
              ><img src="images/logo-mini.svg" alt="logo"
            /></a>
            <button
              class="navbar-toggler navbar-toggler align-self-center"
              type="button"
              data-toggle="minimize"
            >
              <span class="mdi mdi-sort-variant"></span>
            </button>
          </div>
        </div>
        <div
          class="navbar-menu-wrapper d-flex align-items-center justify-content-end"
        >
         
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown me-1">
              <a
                class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                id="messageDropdown"
                href="#"
                data-bs-toggle="dropdown"
              >
                <i class="mdi mdi-message-text mx-0"></i>
                <span class="count"></span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="messageDropdown"
              >
                <p class="mb-0 font-weight-normal float-left dropdown-header">
                  Messages
                </p>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <img
                      src="{{asset('assets_private/images/faces/face4.jpg')}}"
                      alt="image"
                      class="profile-pic"
                    />
                  </div>
                  <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">David Grey</h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      The meeting is cancelled
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <img
                      src="{{asset('assets_private/images/faces/face2.jpg')}}"
                      alt="image"
                      class="profile-pic"
                    />
                  </div>
                  <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">Tim Cook</h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      New product launch
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <img
                      src="{{asset('assets_private/images/faces/face3.jpg')}}"
                      alt="image"
                      class="profile-pic"
                    />
                  </div>
                  <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">Johnson</h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      Upcoming board meeting
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown me-4">
              <a
                class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown"
                id="notificationDropdown"
                href="#"
                data-bs-toggle="dropdown"
              >
                <i class="mdi mdi-bell mx-0"></i>
                <span class="count"></span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="notificationDropdown"
              >
                <p class="mb-0 font-weight-normal float-left dropdown-header">
                  Notifications
                </p>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-success">
                      <i class="mdi mdi-information mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <h6 class="font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Just now
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-warning">
                      <i class="mdi mdi-settings mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <h6 class="font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Private message
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-info">
                      <i class="mdi mdi-account-box mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <h6 class="font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
                id="profileDropdown"
              >
                <img src="images/faces/face5.jpg" alt="profile" />
                <span class="nav-profile-name">Louis Barnett</span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="profileDropdown"
              >
                <a class="dropdown-item">
                  <i class="mdi mdi-settings text-primary"></i>
                  Settings
                </a>
                <a class="dropdown-item">
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
          <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-toggle="offcanvas"
          >
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      @endif
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- 2eme navbar -->
        @if(request()->routeIs('public.inscription-option') == false && request()->routeIs('public.inscription-promoteur') == false && request()->routeIs('public.connexion') == false)

        @include('private._layouts.sidebar')
        
        @endif

       
        <!-- fin de la deuxieme nav bar-->

        <!-- la partie de bienvenue -->

        <div class="main-panel">
          @yield('contenu')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div
              class="d-sm-flex justify-content-center justify-content-sm-between"
            >
              <span
                class="text-muted text-center text-sm-left d-block d-sm-inline-block"
                >Copyright ©
                <a href="https://www.bootstrapdash.com/" target="_blank"
                  >bootstrapdash.com </a
                >2021</span
              >
              <span
                class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
                >Only the best
                <a href="https://www.bootstrapdash.com/" target="_blank">
                  Bootstrap dashboard
                </a>
                templates</span
              >
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{asset('assets_private/vendors/base/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{asset('assets_private/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets_private/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets_private/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('assets_private/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets_private/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets_private/js/template.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('assets_private/js/dashboard.js')}}"></script>
    <script src="{{asset('assets_private/js/data-table.js')}}"></script>
    <script src="{{asset('assets_private/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets_private/js/dataTables.bootstrap4.js')}}"></script>
    <!-- End custom js for this page-->

    <script src="{{asset('assets_private/js/jquery.cookie.js')}}" type="text/javascript"></script>
  </body>
</html>
