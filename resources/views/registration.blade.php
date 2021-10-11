@extends('layouts.main')


@section('content')
<main class="flex-grow bg-gray-200">
      <div class="flex items-center justify-center mt-16 mx-6">
        <div class="box">
          <h2 class="text-primary font-extrabold text-center">Registration</h2>

          <form class="mt-4" method="POST" action="{{url('register')}}">
            {{ csrf_field() }}

            @include('layouts.formerrors')
            <label class="block mb-3">
              <span class="text-sm">Name</span>
              <input
                type="text"
                id="name"
                name="name"
                class="form-input mt-1 block w-full rounded-md"
                value="{{ old('name') }}" 
              />
            </label>

            <label class="block mb-3">
              <span class="text-sm">E-Mail Address</span>
              <input
                type="email"
                id="email"
                name="email"
                class="form-input mt-1 block w-full rounded-md"
                value="{{ old('email') }}" 
                required
              />
            </label>

            <label class="block mb-3">
              <span class="text-sm">Password</span>
              <input
                type="password"
                class="form-input mt-1 block w-full rounded-md"
                id="password"
                name="password"
                required
              />
            </label>

            <label class="block mb-4">
              <span class="text-sm">Confirm Password</span>
              <input
                type="password"
                class="form-input mt-1 block w-full rounded-md"
                id="password_confirmation"
                name="password_confirmation"
                required
              />
            </label>

            <div>
              <button type="submit" class="w-full btn btn-primary">Signup</button>
            </div>
          </form>
        </div>
      </div>
    </main>


    <!-- Footer -->
    @include('layouts.footer')


@endsection