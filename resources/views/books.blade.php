<!-- resources/views/books.blade.php -->
@extends('layouts.app')
@section('content')

    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            本の登録
        </div>

        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->

        @if(session('message'))
        <div class="alert alert-success">
          {{session('message')}}
        </div>
        @endif
        <!-- 本登録フォーム -->
        <form enctype="multipart/form-data" action="{{ url('books/insert') }}" method="POST" class="form-horizontal">
            @csrf

            <!-- 本のタイトル -->
            <div class="form-group">
              <div class="col-sm-6">
                <label for="" class="form-label">本のタイトル</label>
                <input type="text" name="item_name" class="form-control" value="{{ old('item_name') }}">
              </div>
              <div class="col-sm-6">
                <label for="" class="form-label">本の番号</label>
                <input type="text" name="item_number" class="form-control" value="{{ old('item_number') }}">
              </div>
              <div class="col-sm-6">
                <label for="" class="form-label">本の金額</label>
                <input type="text" name="item_amount" class="form-control" value="{{ old('item_amount') }}">
              </div>
            </div>
            {{-- file追加 --}}
            <div class="col-sm-6">
              <label>画像</label>
              <input type="file" name="item_img" id="">
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
    @if(count($books))
    <div class="card-body">
      <div class="card-body">
        <table class="table table-striped task-table">
          <thead><th>NAME</th><th>MAIL</th><th>AMOUNT</th><th>CREATED</th><th>DELETE</th><th>UPDATE</th></thead>
          @foreach ($books as $item)
            <tbody>
              <td class="table-text">
                <div>{{$item->item_name}}</div>
                <div><img src="upload/{{$item->item_img}}" width="100" alt=""></div>
              </td>
              <td class="table-text"><div>{{$item->email}}</div></td>
              <td class="table-text"><div>{{$item->item_amount}}</div></td>
              <td class="table-text"><div>{{$item->created_at}}</div></td>
              <td>
                <form action="{{ url('books/delete') }}" method="post">
                  @csrf
                  <input type="hidden" name="del_id" value="{{$item->id}}">
                  <button type="submit" class="btn btn-danger">削除</button>
                </form>
              </td>
              <td>
                <form action="{{ url('edit/'.$item->id) }}" method="get">
                  <button type="submit" class="btn btn-primary">更新</button>
                </form>
              </td>
            </tbody>
          @endforeach
        </table>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-4 offset-md-4">
          {{$books->links()}}
        </div>
      </div>
    </div>
    @endif
    @php
      $xx = array(
        "x" => "a",
        'y' => 'b',
        'z' => 'c'
      );
      // ddd($books[0]->item_name);
    @endphp
    <ul>
      @foreach ($xx as $x)
          <li>{{$x}}</li>
      @endforeach
    </ul>
    <!-- Book: 既に登録されてる本のリスト -->

@endsection



{{-- #[END]-------------------------------------------- --}}
