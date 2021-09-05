<!-- resources/views/books.blade.php -->
@extends('layouts.app')
@section('content')

    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            本のタイトル
        </div>

        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->

        <!-- 本登録フォーム -->
        <form action="{{ url('books') }}" method="POST" class="form-horizontal">
            @csrf

            <!-- 本のタイトル -->
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="text" name="item_name" class="form-control" value="{{ old('item_name') }}">
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
    @if(count($books))
    <div class="card-body">
      <div class="card-body">
        <table class="table table-striped task-table">
          <thead><th>NAME</th><th>AMOUNT</th><th>CREATED</th></thead>
          @foreach ($books as $item)
            <tbody>
              <td class="table-text"><div>{{$item->item_name}}</div></td>
              <td class="table-text"><div>{{$item->item_amount}}</div></td>
              <td class="table-text"><div>{{$item->created_at}}</div></td>
            </tbody>
          @endforeach
        </table>
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
