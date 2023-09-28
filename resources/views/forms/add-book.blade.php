<div class="bg-gradient-to-b from-gray-900 to-gray-600 bg-gradient-to-r overflow-hidden">
<x-layout>
<x-home-navigation/>

<div class="ml-1 flex justify-center mb-2">
        <section class="px-6 py-8">
            <main class="max-w-lg mx-auto bg-gray-400 p-6 rounded">
                <h1 class="text-center font-bold text-xl">Add Book</h1>
                <form action="{{route('book.store')}}" method="POST">
                   @csrf
                    <div class="mb-6 mt-5">
                        <label for="title" class="block mb-2 uppercase font-bold text-xs">
                            Book Title
                        </label>
                        <input class="border border-gray-400 p-2 w-full rounded bg-teal-200"
                        type="text"
                        name="title"
                        id="title"
                        >
                        @error('title')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6 mt-5">
                    <label for="availability_status" class="block mb-2 uppercase font-bold text-xs">
                         Availability Status
                     </label>
                    <select class="border border-gray-400 p-2 w-[20rem] rounded bg-teal-200" name="availability_status" id="availability_status">
                        <option value="available">Available</option>
                        <option value="not-available">Not Available</option>
                    </select>
                    @error('availability_status')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    </div>

                    <div class="mb-6 mt-5">
                        <label for="release_year" class="block mb-2 uppercase font-bold text-xs">
                            release year
                        </label>
                        <input class="border border-gray-400 p-2 w-[20rem] rounded bg-teal-200"
                        type="text"
                        name="release_year"
                        id="release_year"
                        >
                        @error('release_year')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6 mt-5">
                        <label for="author" class="block mb-2 uppercase font-bold text-xs">
                            Author(s) <p class="text-xs text-gray-700 font-thin italic">*if there are multiple authors, split them with comma</p>
                        </label>
                        <input class="border border-gray-400 p-2 w-full rounded bg-teal-200"
                        type="text"
                        name="author"
                        id="author"
                        >
                        @error('author')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-6">
                        <button type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                        >
                        Create
                        </button>    
                    </div>
                    
    
                    @if($errors->any())
    
                    @foreach($errors->all() as $error)
    
                    <ul class="text-red-500 text-xs">
                        <li>{{$error}}</li>
                    </ul>
                    @endforeach
                    @endif
                </form>
            </main>
        </section>
    </div>   
</x-layout>
</div>