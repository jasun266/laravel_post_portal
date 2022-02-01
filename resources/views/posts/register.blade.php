@extends('layout.app')

@section('content')
<h1 class="text-3xl font-bold underline">
    <div class="flex justify-center">
        <div class="w-5/12 bg-white p-6 rounded-lg">
            <h3 class="p-4 flex justify-center"> Registration</h3>
            <form action="{{route('register')}}" method="post">
                @csrf
                <div class='mb-4'>
                    <label for="name" class='sr-only'>Name</label>
                    <input type="text" name="name" id="name" placeholder=" Enter Your Name"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{old('name')}}">

                    @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div class='mb-4'>
                    <label for="username" class='sr-only'> Username</label>
                    <input type="text" name="username" id="username" placeholder=" Enter Your Username"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" value="{{old('username')}}">

                    @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div class='mb-4'>
                    <label for="email" class='sr-only'>Email</label>
                    <input type="email" name="email" id="email" placeholder=" Enter Your email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{old('email')}}">

                    @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div class='mb-4'>
                    <label for="password" class='sr-only'>password</label>
                    <input type="password" name="password" id="password" placeholder="choose your password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

                    @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div class='mb-4'>
                    <label for="password_confirmation" class='sr-only'>Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder=" Enter Your password again"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection