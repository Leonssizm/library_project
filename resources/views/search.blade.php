<div class="bg-gradient-to-t from-slate-900 via-purple-900 to-slate-900">
<x-layout>
<x-home-navigation/>
<form action="{{ route('book.search') }}" method="GET">
    <div class="ml-7 flex items-center py-2 border-b-2 border-teal-500 w-1/4">
        <input
            class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
            type="text"
            name="search"
            placeholder="Search books by title or author"
        >
        <button
            class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"
            type="submit"
        >
            Search
        </button>
    </div>
</form>
</x-layout>
</div>