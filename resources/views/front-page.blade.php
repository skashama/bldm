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

      $link = get_field('cta_link');
      $linkTwo = get_field('cta_link_two');

      $linkThree = get_field('cta_link_three');
      $linkFour = get_field('cta_link_four');

      $script_group = get_field('featured_scripture_group');
      $quote_group = get_field('featured_quotes_group');
      $song_group = get_field('featured_songs_group');
         
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
            <a href="<?php echo esc_url( $link ); ?>" class="mb-2 btn btn-outline-info btn-lg" tabindex="-1" role="button"><?= the_field('cta_one'); ?></a>
            <a href="<?php echo esc_url( $linkTwo ); ?>" class="mb-2 btn btn-outline-secondary btn-lg" tabindex="-1" role="button"><?= the_field('cta_two'); ?></a>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-12 pt-3 pb-3 row container-fluid mx-auto justify-content-center middle-section-wrap">
        <div class="col-lg-8 col-md-10 col-sm-10 quotes-section">
          <div class="mx-auto col-12 single-quotes-section">
            <p class="text-center quotes-header"><?= $script_group['scripture_title'] ?></p>
            <p><?= $script_group['scripture_body_text'] ?></p>
          </div>
          <div class="mx-auto col-12 single-quotes-section">
            <p class="text-center quotes-header"><?= $quote_group['quotes_title'] ?></p>
            <p><?= $quote_group['quotes_body_text'] ?></p>
          </div>
          <div class="mx-auto col-12 single-quotes-section">
            <p class="text-center quotes-header"><?= $song_group['songs_title'] ?></p>
            <p><?= $song_group['songs_body_text'] ?></p>
          </div>
        </div>
      </div>

      <div id="contact" class="text-center">
        <div class="container">
          <div class="contact-title">
            <h2>Contact</h2>
              <hr>
          </div>
          <div class="row justify-content-center contact-main-content">
            <div class="col-md-4">
              <p><?php the_field('contact_text_one') ?></p>
            </div>
            <div class="col-md-4">
              <p><?php the_field('contact_text_two') ?></p>
            </div>
            <div class="col-md-4 contact-links">
              <p><?php the_field('contact_text_three') ?></p>
              <?php
              if( $link ): ?>
                <a href="<?php echo esc_url( $linkThree ); ?>" class="mb-2" tabindex="-1" ><?= the_field('cta_three'); ?></a>
                <br>
                <a href="<?php echo esc_url( $linkFour ); ?>" class="mb-2" tabindex="-1" ><?= the_field('cta_four'); ?></a>
              <?php endif; ?>
            </div>
            <div class="clearfix"></div>
          </div>       
        </div>
      </div>

    </div>
  </div>

@endsection
