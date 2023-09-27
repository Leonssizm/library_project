<div class="bg-gradient-to-t from-blue-700 via-blue-800 to-gray-900">
<x-layout>
<x-home-navigation/>

<div class="ml-1 flex justify-center grow">
        <section class="px-6 py-8">
            <main class="max-w-lg mx-auto bg-gray-400 p-16 rounded">
                <h1 class="text-center font-bold text-xl">Edit author</h1>
                <form action="{{route('author.update', $author->id)}}" method="POST" >
                    @csrf
                    <div class="mb-6 mt-5">
                        <label for="name" class="block mb-2 uppercase font-bold text-xs">
                            Author Name
                        </label>
                        <input class="border border-gray-400 p-2 w-[20rem] rounded bg-teal-200"
                        type="text"
                        name="name"
                        id="name"
                        value="{{$author->name}}"
                        >
                        @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

    
                    <div class="mb-6 flex justify-between">
                        <button type="submit"
                        class="bg-green-400 text-white rounded py-2 px-4 hover:bg-green-500">
                        Update
                        </button>
                        <a href='{{route("authors.list")}}' class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Go Back </a>
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
</div>