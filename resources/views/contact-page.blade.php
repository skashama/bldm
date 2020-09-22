{{-- 
  Template Name: Contact Page 
--}}

@extends('layouts.app')

@section('content')
  <div style="width: 100%">
    <?php 
      $pageIntro = get_field('page_intro');
      $formField = get_field('form_field');
    ?>

    <div>
      <?php the_field('page_intro'); ?>
    </div>

    <div class="text-center">
      <?php the_field('form_field'); ?>
    </div>
  </div>
@endsection