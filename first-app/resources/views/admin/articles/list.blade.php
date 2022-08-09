<x-layout>

<x-admin-nav />

<div class="w-full max-w-xxl">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            
        <x-admin_articles_menu />

        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-2">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Title
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Creation Date
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Category
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Author
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Edit
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Delete
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)   
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $article->title }}
                            </th>
                            <td class="py-4 px-6">
                                {{ $article->created_at }}
                            </td>
                            <td class="py-4 px-6">
                            {{ $article->category->name }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $article->user_id }}
                            </td>
                            <td class="py-4 px-6">
                                <a href="/admin/news/edit/{{ $article->id }}">E</a>
                            </td>
                            <td class="py-4 px-6">
                            <a href="/admin/news/delete/{{ $article->id }}">D</a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</x-layout>