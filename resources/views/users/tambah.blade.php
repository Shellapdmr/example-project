<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{route('user.tambah') }}">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="mb-3">
                                <label form="exampleInputName1" class="form-label">Name</label>
                                <input class="form-control" id="name" name="name" aria-describedby="nama">
                                <div id="nama" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input class="form-control" id="email" name="email"
                                    aria-describedby="email">
                                <div id="email" class="form-text">We'll never share your email with anyone else.</div>
                        </div>

                        <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>