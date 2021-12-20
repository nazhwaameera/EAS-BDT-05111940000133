@extends('layouts.blog')
@section('title')
    <title>Sharead - Share What You Read</title>
@endsection 
@section('page-header')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{asset('/storage/'. $post->image)}}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>{{$post->title}}</h1>
                        <h2 class="subheading">{{$post->description}}</h2>
                        <span class="meta">
                            Posted by
                            {{$post->user->name}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('main-content')
    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    {!!$post->content!!}
                </div>
            </div>
        </div>
    </article>

    <div class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-20 col-xl-7">
                    @foreach ($post->tags as $tag)
                        <a href="{{route('blog.tag', $tag->id)}}" class="badge badge-pill badge-secondary">
                            {{$tag->name}}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-20 col-xl-7">
                    <div class="addthis_inline_share_toolbox"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-20 col-xl-7">
                    <hr>
                    <div id="disqus_thread"></div>
                    <script>
                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                        
                        var disqus_config = function () {
                        this.page.url = "{{config('app.url')}}/blog/posts/{{$post->id}}";  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = "{{$post->id}}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://sharead-2.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </div>
            </div>
        </div>
    </div>
@endsection       
