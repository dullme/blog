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

                <!-- Post -->
                <div class="border border-grey-lighter mb-10">
                    <a class="block" href="{{ url('post') }}">
                        <img class="w-full"
                             src="{{ asset('images/ubuntu.png') }}">
                    </a>
                    <div class="p-8">
                        <p class="mb-6">
                            <a class="text-2xl font-bold text-black leading-normal" href="#">Ubuntu 下配置 Laravel LEMP 环境</a>
                        </p>
                        <p class="text-grey leading-normal mb-6">通常我都会在我的 Ubuntu 服务器中配置多个站点，为了自己方便顺手写下了这篇文章。如果你刚好需要，希望能帮助到你！</p>
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

                <!-- Post -->
                <div class="border border-grey-lighter mb-10">
                    <a href="#" class="block bg-grey-lightest flex-col p-4">
                        <p class="mb-3"><img class="p-4 bg-white rounded-full" src="{{ asset('svg/quotes-left.svg') }}"></p>
                        <div class="text-black leading-loose">
                            <p class="text-sm">城里的人想出来，城外的人想进去，无论对婚姻也罢，对工作也罢。就如结了婚的想摆脱，不结婚的想结婚</p>
                            <p class="italic">– 《围城》</p>
                        </div>
                    </a>
                    <div class="p-8">
                        <p class="mb-6">
                            <a class="text-2xl font-bold text-black leading-normal" href="#">利用 Shadowsocks 科学上网</a>
                        </p>
                        <p class="text-grey leading-normal mb-6">首先我们需要一把梯子爬出去，在墙内很多事情都没法做，你懂的！爬墙用到的梯子有很多这里我选择  ShadowsocksX-NG 您也可以上 Github 自行搜索。</p>
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

                <!-- Post -->
                <div class="border border-grey-lighter mb-10">
                    <a class="block" href="#">
                        <img class="w-full"
                             src="{{ asset('images/let_is_encrypt.png') }}">
                    </a>
                    <div class="p-8">
                        <p class="mb-3">
                            <a class="text-2xl font-bold text-black leading-normal" href="#">配置 Let's Encrypt SSL 免费证书让网站以 https 方式访问</a>
                        </p>
                        <p class="text-grey leading-normal mb-6">Let's Encrypt 是一个于2015年三季度推出的数字证书认证机构，将通过旨在消除当前手动创建和安装证书的复杂过程的自动化流程，并推广使万维网服务器的加密连接无所不在，为安全网站提供免费的SSL/TLS证书。</p>
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

                <!-- Post -->
                <div class="border border-grey-lighter mb-10">
                    <a class="block" href="#">
                        <img class="w-full"
                             src="{{ asset('images/aliyun-redis.png') }}">
                    </a>
                    <div class="p-8">
                        <p class="mb-3">
                            <a class="text-2xl font-bold text-black leading-normal" href="#">在 ECS 中设置阿里云的 Redis 为公网访问</a>
                        </p>
                        <p class="text-grey leading-normal mb-6">目前阿里云数据库 Redis 需要通过 ECS 的内网进行连接访问。如果您本地需要通过公网访问云数据库 Redis，可以在 ECS Linux 云服务器中安装 rinetd 进行转发实现。</p>
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

                <!-- Show more -->
                <div class="flex justify-center mb-10">
                    <a href="#"
                       class="flex pl-12 pr-12 pt-4 pb-4 text-sm text-grey border border-grey-lightest hover:border-grey-light">显示更多</a>
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
                        <a href="#" class="tag"><span>Ubuntu</span></a>
                        <a href="#" class="tag"><span>Nginx</span></a>
                        <a href="#" class="tag"><span>Hexo</span></a>
                        <a href="#" class="tag"><span>Dropbox</span></a>
                        <a href="#" class="tag"><span>Shadowsocks</span></a>
                        <a href="#" class="tag"><span>Proxifier</span></a>
                        <a href="#" class="tag"><span>iTerm2</span></a>
                        <a href="#" class="tag"><span>oh-my-zsh</span></a>
                        <a href="#" class="tag"><span>Laravel</span></a>
                        <a href="#" class="tag"><span>SSH</span></a>
                        <a href="#" class="tag"><span>Aliyun</span></a>
                        <a href="#" class="tag"><span>Redis</span></a>
                    </div>
                </div>

                <div class="mb-8 hidden md:block">
                    <p class="text-xl mb-3 font-bold">Categories.</p>
                    <div class="flex flex-col">
                        <div class="pt-2 pb-2">
                            <a href="#" class="text-sm text-green mr-1">
                                <span>服务器配置</span>
                                <span class="text-grey">(2)</span>
                            </a>
                        </div>

                        <div class="pt-2 pb-2">
                            <a href="#" class="text-sm text-green mr-1">
                                <span>科学上网</span>
                                <span class="text-grey">(5)</span>
                            </a>
                        </div>

                        <div class="pt-2 pb-2">
                            <a href="#" class="text-sm text-green mr-1">
                                <span>路由器</span>
                                <span class="text-grey">(8)</span>
                            </a>
                        </div>

                        <div class="pt-2 pb-2">
                            <a href="#" class="text-sm text-green mr-1">
                                <span>Laravel</span>
                                <span class="text-grey">(1)</span>
                            </a>
                        </div>

                        <div class="pt-2 pb-2">
                            <a href="#" class="text-sm text-green mr-1">
                                <span>Git</span>
                                <span class="text-grey">(3)</span>
                            </a>
                        </div>

                        <div class="pt-2 pb-2">
                            <a href="#" class="text-sm text-green mr-1">
                                <span>macOS</span>
                                <span class="text-grey">(13)</span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="mb-8 hidden md:block">
                    <p class="text-xl mb-3 font-bold">最新帖子</p>
                    <div class="pt-2 pb-2">
                        <a href="#" class="text-sm text-grey">Ubuntu 下配置 Laravel LEMP 环境</a>
                    </div>
                    <div class="pt-2 pb-2">
                        <a href="#" class="text-sm text-grey">小米路由器3 刷 Padavan 老毛子固件实现路由器科学上网</a>
                    </div>
                    <div class="pt-2 pb-2">
                        <a href="#" class="text-sm text-grey">基于 Hexo 与 Dropbox 在 Ubuntu 服务器下搭建自己的博客系统</a>
                    </div>
                    <div class="pt-2 pb-2">
                        <a href="#" class="text-sm text-grey">利用 Shadowsocks 科学上网</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
