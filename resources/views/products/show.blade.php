@extends('app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size:1rem;">商品情報詳細画面</h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-2 mt-2">
        <div class="form-group">
            <strong>商品名:</strong> {{ $product->product_name }}
        </div>
    </div>
    <div class="col-12 mb-2 mt-2">
        <div class="form-group">
            <strong>メーカー名:</strong> {{ $product->company->company_name }} <!-- 修正 -->
        </div>
    </div>
    <div class="col-12 mb-2 mt-2">
        <div class="form-group">
            <strong>価格:</strong> {{ number_format($product->price) }}￥ <!-- フォーマット修正 -->
        </div>
    </div>
    <div class="col-12 mb-2 mt-2">
        <div class="form-group">
            <strong>在庫数:</strong> {{ $product->stock }}
        </div>
    </div>
    <div class="col-12 mb-2 mt-2">
        <div class="form-group">
            <strong>コメント:</strong> {{ $product->detail }}
        </div>
    </div>
    <div class="col-12 mb-2 mt-2">
        <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">編集</a>
        <a class="btn btn-success" href="{{ route('products.index') }}">戻る</a>
    </div>
</div>
@endsection
