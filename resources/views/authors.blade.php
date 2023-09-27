<div class="bg-gradient-to-t from-slate-900 via-purple-900 to-slate-900">
<x-layout>
<x-home-navigation/>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 p-6">
                <th scope="col" class="px-6 py-3">
                    Author
                </th>
                <th scope="col" class="px-6 py-3">
                    Amount Of Books
                </th>
        <tbody>
            @foreach($authors as $author)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$author->name}}
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$author->books->count()}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{route('author.editForm', $author->id)}}" class="text-green-700">Edit</a>
                </td>
            </tr>
         
            @endforeach
        </tbody>
    </table>
</x-layout>
</div>
