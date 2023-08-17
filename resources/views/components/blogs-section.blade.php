@props(['blogs'])
<section
    class="container text-center"
    id="blogs"
>
    <h1 class="display-5 fw-bold mb-4">Blogs</h1>
    <x-category></x-category>
    <form
        action=""
        class="my-3"
    >
        @if (request('category'))
        <input
            type="hidden"
            name="category"
            value="{{request('category')}}"
        >
        @endif
        @if (request('author'))
        <input
            type="hidden"
            name="author"
            value="{{request('author')}}"
        >
        @endif
        <div class="input-group mb-3">
            <input
                value="{{request('search')}}"
                name="search"
                type="text"
                autocomplete="false"
                class="form-control"
                placeholder="Search Blogs..."
            />
            <button
                class="input-group-text bg-primary text-light"
                id="basic-addon2"
                type="submit"
            >
                Search
            </button>
        </div>
    </form>
    <div class="row">
        @foreach ($blogs as $blog)
        <div class="col-md-4 mb-4">
            <x-blog-card :blog="$blog" />
        </div>
        @endforeach
        {{$blogs->links()}}
    </div>
</section>