<x-layout>
    <x-slot name="title">
        <title>All Blogs</title>
    </x-slot>
    @foreach($blogs as $blog)
    <div>
        <h1><a href="blogs/{{$blog->slug}}">
                {{$blog->title}}
            </a></h1>
        <h4>Author - {{$blog->user->name}}</h4>
        <p>
            <a href="/categories/{{$blog->category->slug}}">{{$blog->category->name}}</a>
        </p>
        <div>
            <p>
                published at -
                {{$blog->created_at->diffForHumans()}}
            </p>
            <p>
                {{$blog->intro}}
            </p>
        </div>
    </div>
    @endforeach
</x-layout>