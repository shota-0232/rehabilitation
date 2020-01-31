@extends('layouts.app')

@section('content')
<div class="content">
    <div class="title m-b-md text-center">
        <img alt="ロゴ" src="{{ asset('/images/herobanner.png') }}" class="img-fluid">
    </div>

    <section class="my-5">
        <div class="card container p-5 bg-white">
            <h2 class="title text-center mb-5">紹介文</h2>
            <p>サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p><br>
            <p>サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
            </p><br>
            <p>サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p><br>
            <p>サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
            </p><br>
        </div>
    </section>

    <section class="my-5">
        <h2 class="my-5 text-center">サービス・プラン紹介</h2>
        <div class="container">

            <div class="card mb-3" style="max-width: 1110px;">
                <div class="row no-gutters">
                    <div class="col-xs-1">
                        <img src="{{ asset('/images/bronze.png') }}" class="rounded mx-auto d-block pt-2 px-sm-2"
                            alt="...">
                    </div>
                    <div class="col-xs-11">
                        <h3 class="card-title pt-3 ">ブロンズコース</h3>
                    </div>
                    <div class="col-sm-12 px-3 py-2">
                        <p class="card-text">
                            サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
                        </p>
                    </div>
                </div>
            </div>

            <div class="card mb-3" style="max-width: 1110px;">
                <div class="row no-gutters">
                    <div class="col-xs-1">
                        <img src="{{ asset('/images/silver.png') }}" class="rounded mx-auto d-block pt-2 px-sm-2"
                            alt="...">
                    </div>
                    <div class="col-xs-11">
                        <h3 class="card-title pt-3">シルバーコース</h3>
                    </div>
                    <div class="col-sm-12 px-3 py-2">
                        <p class="card-text">
                            サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
                        </p>
                    </div>
                </div>
            </div>

            <div class="card mb-3" style="max-width: 1110px;">
                <div class="row no-gutters">
                    <div class="col-xs-1">
                        <img src="{{ asset('/images/gold.png') }}" class="rounded mx-auto d-block pt-2 px-sm-2"
                            alt="...">
                    </div>
                    <div class="col-xs-11">
                        <h3 class="card-title pt-3">ゴールドコース</h3>
                    </div>
                    <div class="col-sm-12 px-3 py-2">
                        <p class="card-text">
                            サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
                        </p>
                    </div>
                </div>
            </div>

            <div class="card mb-3" style="max-width: 1110px;">
                <div class="row no-gutters">
                    <div class="col-xs-1">
                        <img src="{{ asset('/images/platinum.png') }}" class="rounded mx-auto d-block pt-2 px-sm-2"
                            alt="...">
                    </div>
                    <div class="col-xs-11">
                        <h3 class="card-title pt-3">プラチナコース</h3>
                    </div>
                    <div class="col-sm-12 px-3 py-2">
                        <p class="card-text">
                            サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center my-5">
                <div class="col-sm-4">
                    <a class="btn btn-outline-dark btn-lg btn-block" href="{{ route('cource.list')}} ">コース一覧</a>
                </div>
            </div>


        </div>
    </section>

    <section class="my-5">
        <div class=" card container p-5 bg-white">
            <h2 class="title text-center mb-5">Q&A</h2>

            <div class="card">
                <div class="card-title p-2 m-0">
                    <h3>Q.サンプルテキストでいいですか？</h3>
                    <div class="card-body p-1">
                        <p class="p-1 m-0">
                            サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。<br>
                            サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。
                        </p>
                    </div>
                </div>
            </div>


            <div class="card mt-3">
                <div class="card-title p-2 m-0">
                    <h3>Q.サンプルテキストでいいですか？</h3>
                    <div class="card-body p-1">
                        <p class="p-1 m-0">
                            サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。<br>
                            サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。サンプルテキストでいいですよ。
                        </p>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-title p-2 m-0">
                    <h3>Q.支払い方法を教えてください</h3>
                    <div class="card-body p-1">
                        <p class="p-1 m-0">
                            クレジットカードのみになります。
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <a class="btn btn-outline-dark btn-lg btn-block" href="{{ route('contact.index')}} ">お問い合わせ</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
