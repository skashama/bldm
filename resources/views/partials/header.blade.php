<header class="container-fluid">
  <div class="row col-12 bldm-header">
    <div class="col-3">
      <a class="brand" href="{{ home_url('/home') }}">
        <img src="<?= get_theme_root_uri(); ?>/bldmin/dist/images/rev9.png">
      </a>
    </div>

    <div class="col-8 float-right">
      <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>
  </div>
</header>