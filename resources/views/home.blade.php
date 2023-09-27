<div class="bg-gradient-to-t from-slate-900 via-purple-900 to-slate-900">
<x-layout>
<x-home-navigation/>

<div class="ml-6">
<a href="{{route('book.addForm')}}" class="bg-red-800 hover:bg-red-900 text-white font-semibold py-3 px-6 transition duration-300 ease-in-out transform hover:scale-105">Add new book</a>
</div>
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
</div>
</x-layout>
</div>