@extends('layouts.app')

@section('title', '動画詳細')

@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-sm-6">
            <h2>1.サンプル動画</h2>
        </div>
    </div>

    <div class="row" style="height: 500px;">
        <div class="col-sm-7 col-sm-offset-2 card">
            動画
        </div>
        <div class="col-sm-3 mx-auto">
            <h3 class="text-center">動画一覧</h3>
            <div class="card bg-white p-3">
                <h5><a class="link text-secondary" href="{{ route('cource.detail')}} ">1.サンプル動画</a></h5>
                <h5><a class="link text-secondary" href="{{ route('cource.detail')}} ">2.サンプル動画</a></h5>
                <h5><a class="link text-secondary" href="{{ route('cource.detail')}} ">3.サンプル動画</a></h5>
                <h5><a class="link text-secondary" href="{{ route('cource.detail')}} ">4.サンプル動画</a></h5>
                <h5><a class="link text-secondary" href="{{ route('cource.detail')}} ">5.サンプル動画</a></h5>
                <h5><a class="link text-secondary" href="{{ route('cource.detail')}} ">6.サンプル動画</a></h5>
                <h5><a class="link text-secondary" href="{{ route('cource.detail')}} ">7.サンプル動画</a></h5>
                <h5><a class="link text-secondary" href="{{ route('cource.detail')}} ">8.サンプル動画</a></h5>
                <h5 class="mb-0"><a class="link text-secondary" href="{{ route('cource.list')}} ">コース一覧に戻る</a></h5>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-sm-2">
            <button type="button" class="btn btn-outline-dark ">PDFダウンロード</button>
        </div>
        <div class="col-sm-3 offset-sm-3">
            <button type="button" class="btn btn-outline-dark ">次のレッスンへ</button>
        </div>
    </div>
</div>
@endsection
