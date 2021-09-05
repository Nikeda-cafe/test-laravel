@extends('layouts.app')
@section('content')
<div class="card-body">
  <div class="card-title">
      本の更新
  </div>

  <!-- バリデーションエラーの表示に使用-->
  @include('common.errors')
  <!-- バリデーションエラーの表示に使用-->

  <!-- 本登録フォーム -->
  <form action="{{ url('books/update') }}" method="POST" class="form-horizontal">
      @csrf

      <!-- 本のタイトル -->
      <div class="form-group">
        <input type="hidden" name="id" value="{{ $entity->id }}">
        <div class="col-sm-6">
          <label for="" class="form-label">本のタイトル</label>
          <input type="text" name="item_name" class="form-control" value="{{ $entity->item_name }}">
        </div>
        <div class="col-sm-6">
          <label for="" class="form-label">本の番号</label>
          <input type="text" name="item_number" class="form-control" value="{{ $entity->item_number }}">
        </div>
        <div class="col-sm-6">
          <label for="" class="form-label">本の金額</label>
          <input type="text" name="item_amount" class="form-control" value="{{ $entity->item_amount }}">
        </div>
      </div>

      <!-- 本 登録ボタン -->
      <div class="form-group">
          <div class="col-sm-offset-3 col-sm-6">
              <button type="submit" class="btn btn-primary">
                  Save
              </button>
          </div>
      </div>
  </form>
</div>
@endsection
