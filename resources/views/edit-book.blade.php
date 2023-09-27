<x-layout>

<div class="ml-1 flex justify-center grow">
        <section class="px-6 py-8">
            <main class="max-w-lg mx-auto mt-10 bg-gray-400 p-6 rounded">
                <h1 class="text-center font-bold text-xl">Edit Book</h1>
                <form action="{{route('book.update', $book->id)}}" method="POST" >
                    @csrf
                    <div class="mb-6 mt-5">
                        <label for="movie" class="block mb-2 uppercase font-bold text-xs">
                            Book Title
                        </label>
                        <input class="border border-gray-400 p-2 w-full rounded bg-teal-200"
                        type="text"
                        name="title"
                        id="title"
                        value="{{$book->title}}"
                        >
                        @error('title')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6 mt-5">
                    <label for="availability_status" class="block mb-2 uppercase font-bold text-xs">
                         Availability Status
                     </label>
                    <select class="border border-gray-400 p-2 w-full rounded bg-teal-200" name="availability_status" id="availability_status">
                        <option value="available" @if ($book->availability_status === 'available') selected @endif>Available</option>
                        <option value="not-available" @if ($book->availability_status === 'not-available') selected @endif>Not Available</option>
                    </select>
                    @error('availability_status')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    </div>

                    <div class="mb-6 mt-5">
                        <label for="movie" class="block mb-2 uppercase font-bold text-xs">
                            release year
                        </label>
                        <input class="border border-gray-400 p-2 w-full rounded bg-teal-200"
                        type="text"
                        name="release_year"
                        id="release_year"
                        value="{{$book->release_year}}"
                        >
                        @error('release_year')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
    
                    <div class="mb-6 flex justify-between">
                        <button type="submit"
                        class="bg-green-400 text-white rounded py-2 px-4 hover:bg-green-500">
                        Update
                        </button>
                        <a href='{{route("home.list")}}' class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Go Back </a>
                    </div>
    
                    @if($errors->any())
    
                    @foreach($errors->all() as $error)
    
                    <ul class="text-red-500 text-xs">
                        <li>{{$error}}</li>
                    </ul>
    
                    @endforeach

                    @elseif(session('success'))
                    <div class="text-green-700">
                         {{ session('success') }}
                    </div>
                    @endif
                </form>
                
            </main>
        </section>
    </div>    
</x-layout>