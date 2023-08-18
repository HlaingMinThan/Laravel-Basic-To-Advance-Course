<x-layout>
    <form
        action="/register"
        method="POST"
    >
        @csrf
        <div>
            <label for="">name</label>
            <input
                type="text"
                name="name"
                value="{{old("name")}}"
            >
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="">email</label>
            <input
                type="email"
                name="email"
                value="{{old("email")}}"
            >
            @error('email')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="">username</label>
            <input
                type="text"
                name="username"
                value="{{old("username")}}"
            >
            @error('username')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="">Password</label>
            <input
                type="password"
                name="password"
            >
        </div>
        <div>
            <label for="">Confirm Password</label>
            <input
                type="password"
                name="password_confirmation"
            >
            @error('password')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div>
            <button type="submit">register</button>
        </div>
    </form>
</x-layout>