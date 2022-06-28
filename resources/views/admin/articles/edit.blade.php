@include('app')

{{--@section('topmenu')--}}
<nav class="card">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <a href="/articles" class="text-gray-800 px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Overzicht posts</a>
                        <a href="articles/create" class="text-gray-800 hover:text-teal-600 transition ease-in-out duration-500 px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Post toevoegen</a>                        </div>
                </div>
            </div>
        </div>
    </div>
</nav>
{{--@endsection--}}

{{--@section('content')--}}
<div class="card mt-6">
    {{--Body--}}
    <div class="card-body grid grid-cols-1 gap-6 lg:grid-cols-1">
        <div class="pr-4">
            <form id="form" class="shadow-md rounded-lg px-8 pt-6 pb-8 mb-4"
                  action="{{ route('article.update', ['id' => $post->id]) }}" method="POST">
{{--                @method('PUT')--}}
                @csrf
                <label class="block text-sm">
                    <span class="text-gray-700">Titel</span>
                    <br>
                    <input class="bg-gray-200 block rounded w-full p-2 mt-1 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input
                    @error('titel') border-red-600 focus:border-red-400 focus:shadow-outline-red @enderror"
                           name="title" value="{{ old('title', $post->title) }}" type="text" required/>
                    @error('titel') <span class="text-xs text-red-600">De titel voldoet niet aan de voorwaarde</span>@enderror
                </label><br>
                <label class="block text-sm">
                    <span class="text-gray-700">Short description</span>
                    <br>
                    <input class="bg-gray-200 block rounded w-full p-2 mt-1 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input
                    @error('Short_description') border-red-600 focus:border-red-400 focus:shadow-outline-red @enderror"
                           name="short_description" value="{{ old('short_description', $post->short_description) }}" type="text" required/>
                    @error('Short_description') <span class="text-xs text-red-600">De short description voldoet niet aan de voorwaarde</span>@enderror
                </label><br>
                <label class="block text-sm">
                    <span class="text-gray-700">Post data</span>
                    <br>
                    <textarea class="bg-gray-200 block rounded w-full p-2 mt-1 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input
                    @error('post_data') border-red-600 focus:border-red-400 focus:shadow-outline-red @enderror"
                              name="post_data" required>{{ old('post_data', $post->post_data) }} </textarea>
                    @error('post_data') <span class="text-xs text-red-600">De post data voldoet niet aan de voorwaarde</span>@enderror
                </label><br>
                <label class="block text-sm">
                    <span class="text-gray-700">Tags</span>
                    <br>
                    <input class="bg-gray-200 block rounded w-full p-2 mt-1 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input
                    @error('tags') border-red-600 focus:border-red-400 focus:shadow-outline-red @enderror"
                           name="tags" value="{{ old('tags', $post->tags) }}" type="text" required/>
                    @error('tags') <span class="text-xs text-red-600">De tags voldoet niet aan de voorwaarde</span>@enderror
                </label><br>
                <input class="bg-gray-200 block rounded w-full p-2 mt-1 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input
                    @error('User_id') border-red-600 focus:border-red-400 focus:shadow-outline-red @enderror"
                       name="user_id" value="{{ Auth::user()->id }}" type="text" required/>

                <input type="submit" name="send" value="send">
            </form>
        </div>
    </div>
</div>
{{--end body}}

{{--@endsection--}}

