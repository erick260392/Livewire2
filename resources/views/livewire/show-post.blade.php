<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <div class="py:6 px:8">
        <x-input class="w-full" wire:model.live="search" placeholder="Escribe titulo o Contenido"></x-input>
    </div>
    @if ($post->count())
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Content
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                @foreach ($post as $item)
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900  dark:text-white">
                                {{ $item->id }}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900  dark:text-white">
                                {{ $item->title }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->content }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>

                    </tbody>
                @endforeach
            </table>
        </div>
    </div>

    @else
    <div class="px-6 py-4" >
        No existe ningun registro que coincida con la busqueda
    </div>
    @endif

</div>
