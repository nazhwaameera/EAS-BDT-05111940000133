@extends('layouts.blog')

@section('title')
    <title>Sharead - Share What You Read</title>
@endsection

 <!-- Page Header-->
@section('page-header')
    <header class="masthead" style="background-image: url('{{asset('img/about-bg.jpg')}}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>About Sharead</h1>
                        <span class="subheading">Share It.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

<!-- Main Content-->
@section('main-content')
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>Sharead is a website where you could share everything you've read. It's an easy way to get to hear other opinins about it and it highly possibly will lead to an interesting conversation. You even could get reaction from what you've write!</p>
                <p>Books are not the only things you could share. You could tell us about what you've watched, or saw, or everything! Hope you get a lot of fun here :)</p>
            </div>
        </div>
    </div>
</main>
@endsection
        
        
        