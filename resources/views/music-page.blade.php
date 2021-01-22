{{-- 
  Template Name: Music Page 
--}}

@extends('layouts.app')

@section('content')
  <div style="width: 100%">

    <div class="col-12 text-center p-4 banner-header">
      <h3 class="mt-2">
        Music
      </h3>
    </div>
    
    <div style="max-width: 100%">
      <?php the_field('page_body'); ?>
    </div>
  </div>
@endsection