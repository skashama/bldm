{{-- 
  Template Name: Contact Page 
--}}

@extends('layouts.app')

@section('content')
  <div style="width: 100%">

    <div class="col-12 text-center p-4 banner-header">
      <h3 class="mt-2">
        CONTACT US
      </h3>
    </div>
    
    <div style="max-width: 100%" class="row justify-content-center">
      <div class="col-lg-8 col-md-8 contact-form">
        <div class="form-intro">
          <?php the_field('page_intro'); ?>
        </div>
        <div class="form-element">
          <?php the_field('form_field'); ?>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 text-center est-info">
        <?php the_field('contact_text_one'); ?>
        <br>
        <?php the_field('contact_text_two'); ?>
      </div>
    </div>
  </div>
@endsection