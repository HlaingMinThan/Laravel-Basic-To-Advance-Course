<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a
            class="navbar-brand"
            href="/"
        >Creative Coder</a>
        <div class="d-flex">
            <a
                href="/#blogs"
                class="nav-link"
            >Blogs</a>
            @auth
            @can('admin')
            <a
                href="/admin/blogs"
                class="nav-link"
            >Dashboard</a>
            @endcan
            <img
                src="{{auth()->user()->avatar}}"
                width="50"
                height="50"
                class="rounded-circle"
            >
            <a
                href=""
                class="nav-link"
            >Welcome {{auth()->user()->name}}</a>
            <form
                action="/logout"
                method="POST"
            >
                @csrf
                <button
                    type="submit"
                    href=""
                    class="nav-link btn btn-link"
                >Logout</button>
            </form>
            @else
            <a
                href="/register"
                class="nav-link"
            >Register</a>
            <a
                href="/login"
                class="nav-link"
            >Login</a>
            @endauth
            <a
                href="#subscribe"
                class="nav-link"
            >Subscribe</a>
        </div>
    </div>
</nav>