@extends('layouts.main')


@section('content')
    
<main class="flex-grow bg-gray-200">
      <div class="flex items-center justify-center mt-16 mx-6">
        <div class="box">
          <h2 class="text-primary font-extrabold text-center">Login</h2>

          <form class="mt-4" method="POST" action="{{url('login')}}">
          {{ csrf_field() }}

          @include('layouts.formerrors')

            <label class="block mb-3">
              <span class="text-sm">E-Mail Address</span>
              <input
                type="email"
                name="email"
                class="form-input mt-1 block w-full rounded-md"
                value="{{ old('email') }}" 
              />
            </label>

            <label class="block mb-3">
              <span class="text-sm">Password</span>
              <input
                id="password"
                type="password"
                class="form-input mt-1 block w-full rounded-md"
                name="password"
                required
              />
            </label>

            <div class="flex justify-between items-center mb-4">
              <div class="mr-8">
                <label>
                  <input
                    type="checkbox"
                    class="form-checkbox text-primary bg-gray-200 border-gray-300"
                    name="remember"
                    id="remember"
                  />
                  <span class="ml-2 text-sm">Remember Me</span>
                </label>
              </div>

              <div>
                <a
                  class="block text-sm hover:underline"
                  href="#"
                >Forgot Password?</a>
              </div>
            </div>

            <div>
              <button type="submit" class="w-full btn btn-primary">Login</button>
            </div>
          </form>
        </div>
      </div>
    </main>

    <!-- Footer -->
    @include('layouts.footer')

@endsection