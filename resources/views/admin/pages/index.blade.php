@include('app')

{{--@section('topmenu')--}}
    <nav class="card">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <a href="admin/articles" class="text-gray-800 px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Overzicht posts</a>
                            <a href="articles/create" class="text-gray-800 hover:text-teal-600 transition ease-in-out duration-500 px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Post toevoegen</a>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
{{--@endsection--}}

{{--@section('content')--}}
    <div class="card mt-6">

{{--             body--}}
        <div class="card-body grid grid-cols-1 gap-6 lg:grid-cols-1">
            <div class="p-4">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                        <th class="px-4 py-3">Titel</th>
                        <th class="px-4 py-3">Omschrijving</th>
                        <th class="px-4 py-3">Edit</th>
                        <th class="px-4 py-3">Delete</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                        @foreach($pages as $page)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-sm">{{ $page->title }}</td>
                                <td class="px-4 py-3 text-sm"><a href="{{ route('pages.show',['id' => $page->id]) }}">Details</a></td>
                                <td class="px-4 py-3 ">
                                    <div class="flex items-center space-x-4 text-sm">
                                        <a href="{{ route('pages.edit', ['id' => $page->id]) }}">
                                            <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                                                <i class="fa-solid fa-pen"></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                                <td class="px-4 py-3 ">
                                    <div class="flex items-center space-x-4 text-sm">
                                        <a href="">
                                            <form action="{{route('pages.delete', ['id' => $page->id])}}"  method="post">
                                            @csrf
                                                <i class="fa-solid fa-trash-can"><input class="flex items-center justify-between" type="submit" name="delete" value="Delete" aria-label="Delete">
                                                    </i>
                                            </form>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
{{--            // end body--}}

    </div>
{{--@endsection--}}
