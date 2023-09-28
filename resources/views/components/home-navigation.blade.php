<nav class="bg-gray-800 text-white py-4 mb-10">
    <div class="container mx-auto flex justify-between items-center">
        <div>
            <a href="{{route('home.list')}}" class="text-2xl font-bold p-4">Library</a>
        </div>
        <div class="space-x-6 p-4">
            <a href="{{route('home.list')}}" class="hover:text-gray-500">List of Books</a>
            <a href="{{route('authors.list')}}" class="hover:text-gray-500">List of Authors</a>
            <a href="{{route('search')}}" class="hover:text-gray-500">Search</a>
        </div>
    </div>
</nav>