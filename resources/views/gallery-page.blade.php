{{-- 
  Template Name: Gallery Page 
--}}

@extends('layouts.app')

@section('content')
  <div style="width: 100%">

    <div class="col-12 text-center p-4 banner-header">
      <p class="mt-4">
        OUR GALLERY
      </p>
    </div>
    
    <div style="max-width: 100%">
      <?php the_field('page_body'); ?>
    </div>
  </div>
@endsection