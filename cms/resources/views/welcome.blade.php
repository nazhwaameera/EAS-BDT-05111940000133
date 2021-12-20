@extends('layouts.blog')

@section('title')
    <title>Sharead - Share What You Read</title>
@endsection
@section('page-header')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{asset('img/home-bg.jpg')}}')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>SHAREAD</h1>
                            <span class="subheading">Share What You Read.</span>
                        </div>
                    </div>
                </div>
            </div>
    </header>
@endsection

@section('main-content')
    <!-- Main Content-->
    <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                        @forelse ($posts as $post)
                        <!-- Post preview-->
                        <div class="post-preview">
                            <a href="{{route('blog.show', $post->id)}}">
                                <h2 class="post-title">{{$post->title}}</h2>
                                <h3 class="post-subtitle">{{$post->description}}</h3>
                            </a>
                            <p class="post-meta">
                                Posted by {{$post->user->name}}
                            </p>
                            <p class="post-meta">
                                <p class="small-5 text-lighter text-uppercase ls-2 fw-50">
                                    {{$post->category->name}}
                                </p>
                            </p>
                        </div>
                        <!-- Divider-->
                        <hr class="my-4" />
                        @empty
                            <p class="text-center">
                                No result found for query <strong>{{request()->query('search')}}</strong>
                            </p>
                        @endforelse
                        <!-- Pager-->
                        <div class="mb-5">
                            {{$posts->appends(['search' => request()->query('search')])->links()}}
                        </div>
                    </div>
                <!-- Side widgets-->
                @include('partials.sidebar')
            </div>
    </div>
@endsection
