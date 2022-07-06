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
        <p class="py-2 text-lg text-gray-700">Titel:  {{$page->title}}</p>
        <p class="py-2 text-lg text-gray-700">subtitle:  {{$page->subtitle}}</p>
        <p class="py-2 text-lg text-gray-700">template:  {{$page->template}}</p>
        <p class="py-2 text-lg text-gray-700">text:  {{$page->text}}</p>
        <p class="py-2 text-lg text-gray-700">text2:  {{$page->title}}</p>
        <p class="py-2 text-lg text-gray-700">banner_image_url:  {{$page->banner_image_url}}</p>
        <p class="py-2 text-lg text-gray-700">image_url1:  {{$page->image_url1}}</p>
        <p class="py-2 text-lg text-gray-700">image_url2:  {{$page->image_url2}}</p>

    </div>


{{--@endsection--}}
