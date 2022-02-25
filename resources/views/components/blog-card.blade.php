@props(['blog'])
<div class="card">
    <img
        src="/storage/{{$blog->thumbnail}}"
        class="card-img-top"
        alt="..."
    />
    <div class="card-body">
        <h3 class="card-title">{{$blog->title}}</h3>
        <p class="fs-6 text-secondary">
            <a href="/?username={{$blog->author->username}}">{{$blog->author->name}}</a>
            <span> -{{$blog->created_at->diffForHumans()}}</span>
        </p>
        <div class="tags my-3">
            <a href="/?category={{$blog->category->slug}}"><span
                    class="badge bg-primary">{{$blog->category->name}}</span></a>
            {{-- <span class="badge bg-secondary">Css</span>
            <span class="badge bg-success">Php</span>
            <span class="badge bg-danger">Javascript</span>
            <span class="badge bg-warning text-dark">Frontend</span> --}}
        </div>
        <p class="card-text">
            {{$blog->intro}}
        </p>
        <a
            href="/blogs/{{$blog->slug}}"
            class="btn btn-primary"
        >Read More</a>
    </div>
</div>
