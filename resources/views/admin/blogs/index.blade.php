<x-admin-layout>
    <h3 class="text-center">Blogs</h3>
    <x-card-wrapper>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">title</th>
                    <th scope="col">intro</th>
                    <th
                        scope="col"
                        colspan="2"
                    >Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                <tr>
                    <td><a
                            href="/blogs/{{$blog->slug}}"
                            target="_blank"
                        >{{$blog->title}}</a></td>
                    <td>{{$blog->intro}}</td>
                    <td><a
                            href="/admin/blogs/{{$blog->slug}}/edit"
                            class="btn btn-warning"
                        >Edit</a></td>
                    <td>
                        <form
                            action="/admin/blogs/{{$blog->slug}}/delete"
                            method="POST"
                        >
                            @csrf
                            @method('DELETE')
                            <button
                                type="submit"
                                class="btn btn-danger"
                            >delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$blogs->links()}}
    </x-card-wrapper>
</x-admin-layout>