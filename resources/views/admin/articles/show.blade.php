@include('app')

{{--@section('topmenu')--}}
<nav class="card">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <a href="/admin/articles" class="text-gray-800 px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Overzicht posts</a>
                        <a href="/admin/articles/create" class="text-gray-800 hover:text-teal-600 transition ease-in-out duration-500 px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Post toevoegen</a>                        </div>
                </div>
            </div>
        </div>
    </div>
</nav>
{{--@endsection--}}

{{--@section('content')--}}

    <div class="py-4 px-6">
        <h2 class="text-lg font-semibold text-gray-800">Post details</h2>
        <p class="py-2 text-lg text-gray-700">Titel:  {{$post->title}}</p>
        <p class="py-2 text-lg text-gray-700">beschrijving:  {{$post->short_description}}</p>
        <p class="py-2 text-lg text-gray-700">bericht:  {{$post->post_data}}</p>
        <p class="py-2 text-lg text-gray-700">tags:  {{$post->tags}}</p>

    </div>


{{--@endsection--}}
