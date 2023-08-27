<x-layout>
    <!-- single blog section -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <img
                    src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <h3 class="my-3">{{$blog->title}}</h3>
                <div>
                    <div>Author - <a href="/users/{{$blog->author->username}}">{{$blog->author->name}}</a></div>
                    <div><a href="/categories/{{$blog->category->slug}}"><span
                                class="badge bg-primary">{{$blog->category->name}}</span></a></div>
                    <div class="text-secondary">{{$blog->created_at->diffForHumans()}}</div>
                </div>
                <p class="lh-md mt-3">
                    {{$blog->body}}
                </p>
            </div>
        </div>
    </div>

    @auth
    <div class="container">
        <div class="col-md-8 mx-auto">
            <form
                action="/blogs/{{$blog->slug}}/comments"
                method="POST"
            >
                @csrf
                <label for="">Comment here</label>
                <textarea
                    name="body"
                    class="form-control"
                    id=""
                    cols="30"
                    rows="10"
                ></textarea>
                @error('body')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <button
                    type="submit"
                    class="btn btn-primary my-3"
                >Comment</button>
            </form>
        </div>
    </div>
    @endauth
    <x-comments :comments="$blog->comments()->latest()->get()" />
    <x-subscribe />
    <x-blogs_you_may_like_section :randomBlogs="$randomBlogs" />
</x-layout>