<div class="bg-gradient-to-t from-slate-900 via-purple-900 to-slate-900">
<x-layout>
<x-home-navigation/>

<form action="{{ route('book.search') }}" method="GET">
    <div class="ml-7 flex items-center py-2 border-b border-b-2 border-teal-500 w-1/4">
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
<div class="relative overflow-x-auto p-6">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
     <x-books-table-header/>
        <tbody>
            @foreach($books as $book)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$book->title}}
                </th>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    @foreach($book->authors as $index => $author)
                        {{$author->name}}{{ $index < count($book->authors) - 1 ? ', ' : '' }}
                    @endforeach
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$book->release_year}}
                </th>
                @if($book->availability_status === 'not-available')
                <td class="px-6 py-4 text-red-600">
                Not Available
                </td>
                @else
                <td class="px-6 py-4 text-green-600">
                Available
                </td>
                @endif
                <td class="px-6 py-4">
                    <a href="{{route('book.editForm', $book->id)}}" class="text-green-700">Edit</a>
                </td>
                <form action="{{route('book.destroy', $book->id)}}" method="post">
                <td class="px-6 py-4">
                        <button type="submit" class="text-red-700">Delete</button>
                        @method('DELETE')
                        @csrf
                    </td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
</div>