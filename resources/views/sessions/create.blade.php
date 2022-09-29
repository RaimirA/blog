@extends('layout')

@section('content')
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Log In!</h1>
            <form class="mt-10 " method="POST" action="/login">
                @csrf

                <div class="mb-6 ">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email"
                    >
                        Email
                    </label>

                    <x-error name="email" />

                    <input class="border border-gray-400 p-2 w-full"
                           name="email"
                           type="text"
                           id="email"
                           value="{{old('email')}}"
                           required
                    >
                </div>

                <div class="mb-6 ">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password"
                    >
                        Password
                    </label>

                    <x-error name="password" />

                    <input class="border border-gray-400 p-2 w-full"
                           name="password"
                           type="password"
                           id="password"
                           required
                    >
                </div>
                <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg=blue-500"
                    >
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </section>
@endsection
