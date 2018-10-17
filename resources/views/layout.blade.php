<!doctype html>
<html class="no-js" lang="en">
  <head>
    <title>Elequent-relationships-laravel | Didik Prabowo </title>
    <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.19/css/uikit.min.css" />
  <!-- UIkit JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.19/js/uikit.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.19/js/uikit-icons.min.js"></script>
  </head>
  <body>
    <nav class="uk-navbar-container uk-margin uk-navbar uk-card-small uk-card-default" style="background-color:white;  position: fixed;width:100%;z-index:1">
        <div class="uk-navbar-center">
            <div class="uk-navbar-center-left"><div>
                <ul class="uk-navbar-nav">
                    <li>
                        <a href="/profil">Mahasiswa</a>
                    </li>
                    <li>
                        <a href="/position">Positon</a>
                    </li>
                </ul>
            </div></div>
            <a class="uk-navbar-item uk-logo" href="#">DP</a>
            <div class="uk-navbar-center-right"><div>
                <ul class="uk-navbar-nav">
                    <li><a href="/ukm">UKM</a></li>
                    <li><a href="https://www.didikprabowo.com">More Tutorial</a></li>
                </ul>
            </div></div>
        </div>
    </nav><br><br><br><br>
    <div class="uk-container uk-container-small uk-card uk-card-default" style="margin-bottom:100px">
      <div class="uk-padding-small">
          @yield('content')
    </div>
    </div>
  </body>
</html>
