@extends('layouts.app')

@section('content')
    <section class="pt-4 pb-8">
        <div class="container m-auto">
            <p class="text-2xl mb-3 font-bold">Blog</p>
            <p class="mb-2 text-grey">念念不忘，必有回响。</p>
            <p class="mb-2 text-grey">有一口气，点一盏灯，有灯就有人。</p>
        </div>
    </section>
    <div class="container m-auto">
        <div class="flex flex-wrap-reverse md:flex-no-wrap">
            <div class="md:mr-4 md:w-3/4">

                @foreach($posts as $post)
                    <!-- Post -->
                    <div class="border border-grey-lighter mb-10">
                        @if($post->image)
                            <a class="block" href="{{ route('post', $post->id) }}">
                                <img class="w-full" src="{{ asset('storage/'.$post->image) }}">
                            </a>
                        @elseif($post->essay)
                            <a href="{{ route('post', $post->id) }}" class="block bg-grey-lightest flex-col p-4">
                                <p class="mb-3"><img class="p-4 bg-white rounded-full" src="{{ asset('svg/quotes-left.svg') }}"></p>
                                <div class="text-black leading-loose">
                                    <p class="text-sm">{{ $post->essay}}</p>
                                </div>
                            </a>
                        @endif
                        <div class="p-8">
                            <p class="mb-6">
                                <a class="text-2xl font-bold text-black leading-normal" href="{{ route('post', $post->id) }}">{{ $post->title }}</a>
                            </p>
                            <p class="text-grey leading-normal mb-6">{{ $post->description }}</p>
                            <p class="mb-3 text-grey text-sm flex items-center">
                                <img class="mr-3" src="{{ asset('svg/clock.svg') }}"/>
                                <span>{{ $post->created_at }}</span>
                            </p>
                            <p class="text-grey text-sm flex items-center">
                                <img class="mr-3" src="{{ asset('svg/price-tag.svg') }}"/>
                                <a href="#" class="text-green">{{ $post->category->name }}</a>
                            </p>
                        </div>
                    </div>
                @endforeach

                <!-- Show more -->
                <div class="flex justify-center mb-10">
                    {{ $posts->links() }}
                </div>

            </div>

            <div class="md:ml-4 md:w-1/4 flex-1">
                <form class="flex mb-8">
                    <input class="bg-grey-lighter p-3 no-outline w-full no-redis text-grey-dark" type="search" placeholder="Search site..."
                           title="Search for:">
                    <input class="bg-grey-lighter text-grey pl-4 pr-4 pt-3 pb-3 cursor-pointer uppercase" type="submit"
                           value="Go">
                </form>

                <div class="mb-8 flex-col hidden md:block">
                    <div class="text-center">
                        <img class="w-1/2 rounded-full" src="{{ asset('images/avatar.jpg') }}">
                    </div>

                    <div class="text-sm flex flex-col text-center">
                        <span class="pt-3 uppercase">jinjialei</span>
                    </div>

                </div>

                <div class="mb-8 hidden md:block">
                    <p class="text-xl mb-3 font-bold">Tags.</p>
                    <div class="flex flex-wrap">
                        @foreach($tags as $tag)
                            <a href="#" class="tag"><span>{{ $tag->name }}</span></a>
                        @endforeach
                    </div>
                </div>

                <div class="mb-8 hidden md:block">
                    <p class="text-xl mb-3 font-bold">Categories.</p>
                    <div class="flex flex-col">
                        @foreach($categories as $category)
                            <div class="pt-2 pb-2">
                                <a href="#" class="text-sm text-green mr-1">
                                    <span>{{ $category->name }}</span>
                                    <span class="text-grey">({{ $category->posts_count }})</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>


                <div class="mb-8 hidden md:block">
                    <p class="text-xl mb-3 font-bold">最新帖子</p>
                    @foreach($posts as $post)
                        <div class="pt-2 pb-2">
                            <a href="#" class="text-sm text-grey">{{ $post->title }}</a>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
    </div>
@endsection
