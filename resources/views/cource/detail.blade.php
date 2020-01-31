@extends('layouts.app')

@section('title', '動画詳細')

@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-sm-6">
            <h2>1.サンプル動画</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-7 col-sm-offset-2">
            <div class="card" style="height: 500px;">
                動画
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-4 my-3">
                    <button type="button" class="btn btn-outline-dark ">PDFダウンロード</button>
                </div>
                <div class="col-sm-4 col-xs-4 offset-sm-4 my-3">
                    <button type="button" class="btn btn-outline-dark ">次のレッスンへ</button>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mx-auto my-lg-0 my-5">
            <h3 class="text-center">動画一覧</h3>
            <div class="card bg-white p-3">
                <p class="border-bottom border-secondary"><a class="link lead text-secondary"
                        href="{{ route('cource.detail')}} ">1.サンプル動画</a>
                </p>
                <p class="border-bottom border-secondary"><a class="link lead text-secondary"
                        href="{{ route('cource.detail')}} ">2.サンプル動画</a></p>
                <p class="border-bottom border-secondary"><a class="link lead text-secondary"
                        href="{{ route('cource.detail')}} ">3.サンプル動画</a></p>
                <p class="border-bottom border-secondary"><a class="link lead text-secondary"
                        href="{{ route('cource.detail')}} ">4.サンプル動画</a></p>
                <p class="border-bottom border-secondary"><a class="link lead text-secondary"
                        href="{{ route('cource.detail')}} ">5.サンプル動画</a></p>
                <p class="border-bottom border-secondary"><a class="link lead text-secondary"
                        href="{{ route('cource.detail')}} ">6.サンプル動画</a></p>
                <p class="border-bottom border-secondary"><a class="link lead text-secondary"
                        href="{{ route('cource.detail')}} ">7.サンプル動画</a></p>
                <p class="border-bottom border-secondary"><a class="link lead text-secondary"
                        href="{{ route('cource.detail')}} ">8.サンプル動画</a></p>
                <p class="mb-0"><a class="link lead text-secondary" href="{{ route('cource.list')}} ">コース一覧に戻る</a></p>
            </div>
        </div>

    </div>

</div>
@endsection
