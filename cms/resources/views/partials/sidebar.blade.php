<div class="col-lg-4">
    <!-- Search widget-->
    <div class="card mb-4">
        <div class="card-header">Search</div>
        <div class="card-body">
            <form action="{{route('welcome')}}" class="input-group" method="GET">
                <input type="text" class="form-control" name="search" placeholder="Search" value="{{request()->query('search')}}">
            </form>
        </div>
    </div>
    <!-- Categories widget-->
    <div class="card mb-4">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-sm-6">
                        <a href="{{route('blog.category', $category->id)}}">
                            {{$category->name}}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Side widget-->
    <div class="card mb-4">
        <div class="card-header">Tag</div>
        <div class="card-body">
            <div class="gap-multiline-items-1">
                @foreach ($tags as $tag)
                    <a href="{{route('blog.tag', $tag->id)}}" class="badge badge-secondary">
                        {{$tag->name}}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>