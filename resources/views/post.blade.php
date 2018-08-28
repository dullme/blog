@extends('layouts.app', $post->image == ''?['bgHeadColor' => 'bg-grey-lightest']:[])

@section('content')
    @if($post->image)
        <div class="container m-auto">
            <img class="w-full" src="{{ asset('storage/'.$post->image) }}">
        </div>
    @elseif($post->essay)
        <div class="bg-grey-lightest">
            <div class="container m-auto flex p-6">
                <img class="w-10 h-10 mr-6" src="{{ asset('svg/quotes-left.svg') }}">
                <div class="mt-3 text-black leading-loose">
                    <p class="md:text-xl">{{ $post->essay }}</p>
                </div>
            </div>
        </div>
    @endif


    <div class="container m-auto p-10 flex md:flex-no-wrap flex-wrap-reverse">
        <div class="md:w-1/5 lg:w-2/6 hidden md:block">
            <div class="mb-8 flex flex-col">
                <img class="w-1/2 rounded-full" src="{{ asset('images/avatar.jpg') }}">
                <div class="pt-5 leading-normal">
                    <p class="text-sm text-black">Dullme</p>
                    <p class="text-xs text-grey">Administrator</p>
                </div>
                <div class="mt-6">
                    <p class="mb-3 text-grey text-sm flex items-center">
                        <img class="mr-3" src="{{ asset('svg/clock.svg') }}"/>
                        <span>{{ $post->created_at->toFormattedDateString() }}</span>
                    </p>
                    <p class="text-grey text-sm flex items-center">
                        <img class="mr-3" src="{{ asset('svg/price-tag.svg') }}"/>
                        <a href="#" class="text-green">{{ $post->category->name }}</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="md:w-4/5 lg:w-4/6">
            <p class="text-black text-2xl pb-8 font-bold">{{ $post->title }}</p>
            <article>
                {!! parseDown($post->content) !!}
            </article>
        </div>
    </div>
@endsection