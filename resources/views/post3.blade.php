@extends('layouts.app', ['absolute' => 'absolute'])

@section('content')
    <div class="">
        <img class="w-full" src="{{ asset('images/angular-leader.png') }}">
    </div>

    <div class="container m-auto p-10 flex md:flex-no-wrap flex-wrap-reverse">
        <div class="md:w-1/5 lg:w-1/6 hidden md:block">
            <div class="mb-8 flex flex-col">
                <img class="w-1/2 rounded-full" src="{{ asset('images/avatar.jpg') }}">
                <div class="pt-5 leading-normal">
                    <p class="text-sm text-black">Dullme</p>
                    <p class="text-xs text-grey">Administrator</p>
                </div>
                <div class="mt-6">
                    <p class="mb-3 text-grey text-sm flex items-center">
                        <img class="mr-3" src="{{ asset('svg/clock.svg') }}"/>
                        <span>March 14, 2015</span>
                    </p>
                    <p class="text-grey text-sm flex items-center">
                        <img class="mr-3" src="{{ asset('svg/price-tag.svg') }}"/>
                        <a href="#" class="text-green">服务器</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="md:w-4/5 lg:w-5/6">
            <p class="text-black text-2xl pb-8 font-bold">Quote Post</p>
            <div class="text-grey leading-normal markdown-body">
                {!! $content !!}
            </div>
        </div>
    </div>
@endsection