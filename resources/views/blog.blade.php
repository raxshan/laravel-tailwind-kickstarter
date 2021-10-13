@extends('layouts.main')

@section('content')

<div class="flex flex-grow">
    @include('layouts.side_nav')

    <main class="flex-1 bg-gray-200 px-6">
        <div class="flex flex-col h-full container">
          <h1 class="font-bold pt-8">Blog</h1>

          <!-- Add Edit Inputs -->
          <div class="mt-4">
            <div class="p-6 bg-white rounded-md shadow-md">
              <h2 class="text-lg text-gray-700 font-semibold capitalize">{{ isset($blog_details) ? 'Edit Blog' : 'Add Blog' }}</h2>

              @if(session()->has('message'))
                <div class="px-4 py-3 leading-normal text-green-700 bg-green-100 rounded-lg" role="alert">
                  <p class="font-bold">{{ session()->get('message') }}</p>
                </div>
              @endif

              <form method="POST" action="">
                {{ csrf_field() }}

                @include('layouts.formerrors')
                <div class="mb-4">
                  <label class="text-gray-700">Title</label>
                  <input
                    class="form-input w-full mt-2 rounded-md focus:border-primary"
                    id="title"
                    name="title"
                    type="text"
                    value="{{$blog_details->title ?? '' }}"
                  />
                </div>

                <div class="mb-4">
                  <label class="text-gray-700">Description</label>
                  <textarea id="body" class="form-textarea w-full mt-2 rounded-md focus:border-primary" name="body" rows="3" placeholder="Enter description.">{{$blog_details->body ?? '' }}</textarea>
                </div>

                <div class="flex justify-end">
                  <button class="btn btn-primary">{{ isset($blog_details) ? 'Update' : 'Submit' }}</button>
                </div>
              </form>
            </div>
          </div>

          <!-- Blogs -->
          @foreach($blogs as $blog)
          <div class="my-6 py-4 px-4 bg-yellow-100">
            <!--Title-->
            <div class="flex">
              <div class="flex-col flex-grow">
                <h1 class="font-bold font-sans break-normal text-gray-900 text-xl mb-0">{{ $blog->title }}</h1>
                <p class="text-sm font-normal text-gray-600">Published {{date('M d, Y', strtotime($blog->created_at))}}</p>
              </div>
              <div class="felx-col">
                <a href="/blog/{{ $blog->id }}"><i class="fas fa-edit"></i></a>
                <a class="ml-4" href="/blog/{{ $blog->id }}/delete" onclick="return confirm('Are you sure you want to delete this blog?');"><i class="fas fa-trash-alt"></i></a>
              </div>
            </div>

            <!--Post Content-->
            <p class="mb-0">{{ $blog->body }}</p>
          </div>
          @endforeach
          <!-- END Blogs -->

          <!-- Footer -->
          @include('layouts.footer')

        </div>
      </main>

    </div>
@endsection