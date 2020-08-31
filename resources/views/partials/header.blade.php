<header class="banner">
  {{-- <div class="container"> --}}
  <div class="col-3">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
  </div>

  <div class="col-8 float-right">
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
  {{-- </div> --}}
</header>
