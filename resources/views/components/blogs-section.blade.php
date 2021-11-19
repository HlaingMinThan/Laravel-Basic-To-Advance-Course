<section
    class="container text-center"
    id="blogs"
>
    <h1 class="display-5 fw-bold mb-4">Blogs</h1>
    <div class="">
        <select
            name=""
            id=""
            class="p-1 rounded-pill"
        >
            <option value="">Filter by Category</option>
        </select>
        <select
            name=""
            id=""
            class="p-1 rounded-pill mx-3"
        >
            <option value="">Filter by Tag</option>
        </select>
    </div>
    <form
        action=""
        class="my-3"
    >
        <div class="input-group mb-3">
            <input
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
        <div class="col-md-4 mb-4">
            <x-blog-card />
        </div>
        <div class="col-md-4 mb-4">
            <x-blog-card />
        </div>
        <div class="col-md-4 mb-4">
            <x-blog-card />
        </div>
        <div class="col-md-4 mb-4">
            <x-blog-card />
        </div>
    </div>
</section>