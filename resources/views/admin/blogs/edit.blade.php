<x-admin-layout>
    <h3 class="my-3 text-center">Blog Edit form</h3>
    <x-card-wrapper>
        <form
            enctype="multipart/form-data"
            action="/admin/blogs/{{$blog->slug}}/update"
            method="POST"
        >
            @method('patch')
            @csrf
            <x-form.input
                name="title"
                value="{{$blog->title}}"
            />
            <x-form.input
                name="slug"
                value="{{$blog->slug}}"
            />
            <x-form.input
                name="intro"
                value="{{$blog->intro}}"
            />
            <x-form.textarea
                name="body"
                value="{{$blog->body}}"
            />
            <x-form.input
                name="thumbnail"
                type="file"
            />
            <img
                src="/storage/{{$blog->thumbnail}}"
                width="200px"
                height="100px"
                alt=""
            >
            <x-form.input-wrapper>
                <x-form.label name="category" />
                <select
                    name="category_id"
                    id="category"
                    class="form-control"
                >
                    @foreach ($categories as $category)
                    <option {{$category->id==old('category_id',$blog->category->id) ? 'selected':''}}
                        value="{{$category->id}}">{{$category->name}}
                    </option>
                    @endforeach
                </select>
                <x-error name="category_id" />
            </x-form.input-wrapper>
            <div class="d-flex justify-content-start mt-3">
                <button
                    type="submit"
                    class="btn btn-primary"
                >Submit</button>
            </div>
        </form>
    </x-card-wrapper>
</x-admin-layout>