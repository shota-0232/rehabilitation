@extends('layouts.app')

@section('title', 'マイページ')

@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-sm-12 text-center">
            <h2>マイページ</h2>
        </div>
    </div>


    <div class="row my-5">
        <div class="col-md-12">
            <h3>コース一覧・進捗</h3>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6 mb-md-5">
                    <a class="link text-secondary" href="{{ route('cource.list')}}">
                        <h4>BRS I | 姿勢制御編（全8回）</h4>
                        <div class="card bg-white">
                            <img src="{{ asset('images/seminar_scene01.png')}} " alt="コース画像" class="img-thumbnail">
                        </div>
                    </a>
                    <p class="text-right p-2">完了数：3回/8回</p>
                </div>
                <div class="col-md-6 mb-md-5">
                    <a class="link text-secondary" href="{{ route('cource.list')}}">
                        <h4>BRS Ⅱ | 姿勢制御編（全8回）</h4>
                        <div class="card bg-white">
                            <img src="{{ asset('images/seminar_scene02.png')}} " alt="コース画像" class="img-thumbnail">
                        </div>
                    </a>
                    <p class="text-right p-2">完了数：3回/8回</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-md-5">
                    <a class="link text-secondary" href="{{ route('cource.list')}}">
                        <h4>BRS Ⅲ | 姿勢制御編（全8回）</h4>
                        <div class="card bg-white">
                            <img src="{{ asset('images/seminar_scene03.png')}} " alt="コース画像" class="img-thumbnail">
                        </div>
                    </a>
                    <p class="text-right p-2">完了数：3回/8回</p>
                </div>
                <div class="col-md-6 mb-md-5">
                    <a class="link text-secondary" href="{{ route('cource.list')}}">
                        <h4>BRS Ⅳ | 姿勢制御編（全8回）</h4>
                        <div class="card bg-white">
                            <img src="{{ asset('images/seminar_scene04.png')}} " alt="コース画像" class="img-thumbnail">
                        </div>
                    </a>
                    <p class="text-right p-2">完了数：3回/8回</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-md-5">
                    <a class="link text-secondary" href="{{ route('cource.list')}}">
                        <h4>BRS Ⅴ | 姿勢制御編（全8回）</h4>
                        <div class="card bg-white">
                            <img src="{{ asset('images/seminar_scene05.png')}} " alt="コース画像" class="img-thumbnail">
                        </div>
                    </a>
                    <p class="text-right p-2">完了数：3回/8回</p>
                </div>
                <div class="col-md-6 mb-md-5">
                    <a class="link text-secondary" href="{{ route('cource.list')}}">
                        <h4>BRS Ⅵ | 姿勢制御編（全8回）</h4>
                        <div class="card bg-white">
                            <img src="{{ asset('images/seminar_scene06.png')}} " alt="コース画像" class="img-thumbnail">
                        </div>
                    </a>
                    <p class="text-right p-2">完了数：3回/8回</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-md-5">
                    <a class="link text-secondary" href="{{ route('cource.list')}}">
                        <h4>BRS Ⅶ | 姿勢制御編（全8回）</h4>
                        <div class="card bg-white">
                            <img src="{{ asset('images/seminar_scene07.png')}} " alt="コース画像" class="img-thumbnail">
                        </div>
                    </a>
                    <p class="text-right p-2">完了数：3回/8回</p>
                </div>
                <div class="col-md-6 mb-md-5">
                    <a class="link text-secondary" href="{{ route('cource.list')}}">
                        <h4>BRS Ⅷ | 姿勢制御編（全8回）</h4>
                        <div class="card bg-white">
                            <img src="{{ asset('images/seminar_scene08.png')}} " alt="コース画像" class="img-thumbnail">
                        </div>
                    </a>
                    <p class="text-right p-2">完了数：3回/8回</p>
                </div>
            </div>


        </div>
        <div class="col-lg-3 mx-auto">
            <h3 class="text-center">メニュー</h3>
            <div class="card bg-white p-3">
                <p class="lead">入会コース：ブロンズ</p>
                <p class="lead">入会日：2020/04/30</p>
                <p class="lead"><a class="link text-secondary" href="#">メールアドレス変更</a></p>
                <p class="lead"><a class="link text-secondary" href="#">パスワード変更</a></p>
                <p class="lead mb-0"><a class="link text-secondary" href="#">退会申請</a></p>

            </div>
        </div>
    </div>
</div> @endsection
