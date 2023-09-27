<x-layout>

<nav class="bg-gray-800 text-white py-4 mb-10">
    <div class="container mx-auto flex justify-between items-center">
        <div>
            <a href="{{route('home.list')}}" class="text-2xl font-bold p-4">Library</a>
        </div>
        <div class="space-x-6 p-4">
            <a href="{{route('home.list')}}" class="hover:text-gray-500">List of Books</a>
            <a href="#" class="hover:text-gray-500">Authors</a>
            <a href="#" class="hover:text-gray-500">Search</a>
        </div>
    </div>
</nav>
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
                <td class="px-6 py-4">
                    <form action="{{route('book.destroy', $book->id)}}" method="post">
                        <button type="submit" class="text-red-700">Delete</button>
                        @method('DELETE')
                        @csrf
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-layout>