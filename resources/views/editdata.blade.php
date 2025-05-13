<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Form Update</title>
</head>

<body>


    <div class="container mx-auto px-10">
        <div class="flex justify-between my-5">
            <h2 class="text-green-600 text-2xl font-bold">Edit-{{ $post->name }} </h2>
            <a href="/" class="bg-green-600 text-white rounded py-2 px-4">Back to Home</a>
        </div>

        <div class="">

            <form action="{{ route('update',$post->id) }}" enctype="multipart/form-data" method="post">
                @if (session('success'))
                @endif
                <h2 class="text-green-600 text-2xl font-bold">{{ session('success') }}</h2>


                @csrf
                <div class="flex flex-col gap-5">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                    <input type="text" id="name" value="{{ $post->name }}" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Enter your name" required />

                    <label for="name" class="block text-gray-700 font-semibold mb-2">description</label>
                    <input type="text" id="description" value="{{ $post->description }}" name="description" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Enter your description" required />

                    <label for="name" class="block text-gray-700 font-semibold mb-2">Select File</label>
                    <input type="file" id="image" value="{{ $post->image }}" name="image" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Select  your file" />

                    <div class="">
                        <button type="submit" class="bg-green-600 text-white inline-block px-6 py-2">Update</button>
                    </div>
                </div>

            </form>

        </div>


    </div>


</body>

</html>