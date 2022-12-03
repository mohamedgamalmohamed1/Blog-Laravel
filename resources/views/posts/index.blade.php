<x-layout>


    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($posts->count())
            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}
        @else
            <p style="text-align: center">Please Add The Post cause its empty</p>
        @endif

    </main>


    {{-- <x-slot name="content"> --}}
    {{-- @foreach ($posts as $post) --}}
    {{-- @dd($loop) --}}

    {{-- <article class="{{$loop->even ? 'fooobar' : " "}}">
    <h1>
        <a href="/posts/{{ $post->slug }}">
            {!! $post->title !!}
        </a>
    </h1>


    <p>
        By <a href="/authors/{{ $post->author->username }}"> {{ $post->author->name}}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </p>

    <div>{!! $post->body !!}</div>

</article>
@endforeach --}}

    {{-- </x-slot> --}}

</x-layout>
