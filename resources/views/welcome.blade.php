<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Crud</title>
</head>

<body>


  <div class="container mx-auto px-10">

    <div class="flex justify-between my-5">
      <h2 class="text-green-600 text-2xl font-bold">Form </h2>
      <a href="/" class="bg-green-600 text-white rounded py-2 px-4">Back to Home</a>
    </div>

    <div class="">

      <form action="{{ route('store') }}" enctype="multipart/form-data" method="post">
        @if (session('success'))
        @endif
        <h2 class="text-green-600 text-2xl font-bold">{{ session('success') }}</h2>


        @csrf
        <div class="flex flex-col gap-5">
          <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
          <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Enter your name" required />

          <label for="name" class="block text-gray-700 font-semibold mb-2">description</label>
          <input type="text" id="description" name="description" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Enter your description" required />

          <label for="name" class="block text-gray-700 font-semibold mb-2">Select File</label>
          <input type="file" id="image" name="image" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Select  your file" />

          <div class="">
            <button type="Submit" class="bg-green-600 text-white inline-block px-6 py-2">Add Post</button>
          </div>
        </div>

      </form>

    </div>

    <div class=" mt-7">
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-black">
          <thead class="text-xs text-black uppercase ">
            <tr>
              <th scope="col" class="px-6 py-3">
                id
              </th>
              <th scope="col" class="px-6 py-3">
                Name
              </th>
              <th scope="col" class="px-6 py-3">
                Description
              </th>
              <th scope="col" class="px-6 py-3">
                image
              </th>
              <th scope="col" class="px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
            <tr class="bg-white text-black">
              <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">
                {{ $post->id }}
              </th>
              <td class="px-6 py-4">
                {{ $post->name }}
              </td>
              <td class="px-6 py-4">
                {{ $post->description }}
              </td>
              <td class="px-6 py-4">
                <img src="{{ asset('images/' . $post->image) }}" alt="" class="w-30 h-15 object-cover">

              </td>
              <td class="px-6 py-4 text-right">
                <a href="{{ route('Edit',$post->id) }}" class="font-medium text-white px-5 py-2 bg-green-600">Edit</a>
                <a href="{{ route('Delete',$post->id) }}" class="font-medium text-white px-5 py-2 bg-green-600">Delete</a>
              </td>
            </tr>
            @endforeach


        </table>
    
    
 
      </div>
    </div>
 
 
  </div>
</body>

</html>