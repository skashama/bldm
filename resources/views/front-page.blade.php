{{-- 
  Template Name: Front Page 
--}}

@extends('layouts.app')

@section('content')
  <div style="width: 100%">
    <?php 
      $bannerImage = get_field('homepage_banner');
      $pageTitle = get_field('page_title');
      $textField = get_field('text_field');
    ?>

    <div>
      <div><img src="<?php echo esc_url($bannerImage['url']); ?>" alt="<?php echo esc_attr($bannerImage['alt']); ?>"></div>
    </div>

    <h2><?= the_field('page_title'); ?></h2>

    <p><?php the_field('text_field'); ?></p>

  </div>

@endsection
