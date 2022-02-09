<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h3 class="text-primary text-center my-2">Register form</h3>
                <div class="card p-4 my-3 shadow-sm">
                    <form method="POST">
                        @csrf
                        <div class="mb-3">
                            <label
                                for="exampleInputEmail1"
                                class="form-label"
                            >Name</label>
                            <input
                                required
                                name="name"
                                type="text"
                                class="form-control"
                                id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                value="{{old('name')}}"
                            >
                            <x-error name="name" />
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleInputEmail1"
                                class="form-label"
                            >Username</label>
                            <input
                                required
                                type="text"
                                class="form-control"
                                id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                name="username"
                                value="{{old('username')}}"
                            >
                            <x-error name="username" />
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleInputEmail1"
                                class="form-label"
                            >Email address</label>
                            <input
                                type="email"
                                class="form-control"
                                id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                name="email"
                                value="{{old('email')}}"
                            >
                            <x-error name="email" />
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleInputPassword1"
                                class="form-label"
                            >Password</label>
                            <input
                                required
                                type="password"
                                name="password"
                                class="form-control"
                                id="exampleInputPassword1"
                            >
                            <x-error name="password" />
                        </div>
                        <button
                            type="submit"
                            class="btn btn-primary"
                        >Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
