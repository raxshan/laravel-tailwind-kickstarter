@extends('layouts.main')

@section('content')

<div class="flex flex-grow">
    @include('layouts.side_nav')

    <main class="flex-1 bg-gray-200 px-6">
        <div class="flex flex-col h-full container">
          <h1 class="font-bold pt-8">Page Template</h1>

          <!-- Footer -->
          @include('layouts.footer')

        </div>
      </main>

    </div>
@endsection