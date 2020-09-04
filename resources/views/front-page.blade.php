{{-- 
  Template Name: Front Page 
--}}

@extends('layouts.app')

@section('content')
  <div class="homepage" style="width: 100%">
    <?php 
      $imageOne = get_field('homepage_slider_one');
      $imageTwo = get_field('homepage_slider_two');
      $imageThree = get_field('homepage_slider_three');

      $welcometitle = get_field('welcome_section_title');
      $welcomemsg = get_field('welcome_section_message');

      $link = get_field('cta_link');
      $linkTwo = get_field('cta_link_two');
    ?>

    <div class="homepage-header">
      <div class="col-12 text-center p-4 homepage-banner-text">
        <p class="justify-content-center"><?php the_field('homepage_banner_text'); ?></p>
      </div>
      <div class="homeslide">
        <div class="slider-container"><img src="<?php echo esc_url($imageOne['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
        <div class="slider-container"><img src="<?php echo esc_url($imageTwo['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
        <div class="slider-container"><img src="<?php echo esc_url($imageThree['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
      </div>
    </div>

    <div class="homepage-content">
      <div class="main-content">
        <h2><?= the_field('welcome_section_title'); ?></h2>
        <p><?php the_field('welcome_section_message'); ?></p>
        <div class="button-group">
          <?php
          if( $link ): ?>
            <a href="<?php echo esc_url( $link ); ?>" class="btn btn-outline-info btn-lg" tabindex="-1" role="button"><?= the_field('cta_one'); ?></a>
            <a href="<?php echo esc_url( $linkTwo ); ?>" class="btn btn-outline-secondary btn-lg" tabindex="-1" role="button"><?= the_field('cta_two'); ?></a>
          <?php endif; ?>
        </div>
      </div>

      <div class="fixed-middle-section-wrap">
        <div class="col-12 p-0 container-fluid fixed-bg-middle-section" 
              style="background: url('@asset('images/baptism.jpeg')');
                    background-attachment: fixed;
                    background-repeat: no-repeat;
                    background-size: 100%;">
        </div>
        <div class="col-lg-4 col-md-6 overlay-text fixed-middle-section-text ">
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco, 
            Duis aute irure dolor."</p>
        </div>
      </div>

      <div id="contact" class="text-center">
        <div class="container">
            <div class="contact-title">
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco, 
                Duis aute irure dolor."</p>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-6">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                  magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco, 
                  Duis aute irure dolor."</p>
              </div>
              <div class="col-md-6">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                  magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco, 
                  Duis aute irure dolor."</p>  
              </div>
              <div class="clearfix"></div>
            </div>          
        </div>
      </div>

    </div>
  </div>

@endsection
