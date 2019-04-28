@extends('template_inside')

@section('header_bar')
<?php $linkActive="unknow" ?>
@include('subviews.headerBar')
@endsection

@section('contenu')
    
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);  min-height: 600px; height: calc(100vh);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center" style="min-height: 500px; height: calc(30vh);">

          <div class="col-md-10">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1 data-aos="fade-up">@yield('code'), @yield('title')</h1>
                <p class="mb-0" data-aos="fade-up" data-aos-delay="100">@yield('message')</p>
              </div>
            </div>

            
          </div>
        </div>
    </div>
</div>   

@endsection