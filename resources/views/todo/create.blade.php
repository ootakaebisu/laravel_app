<!-- 新規追加要素 -->
@extends('layouts.base')

<!-- 新規追加要素 -->
@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <!-- 追加 -->
    @include('layouts.message')
    <div class="card">
      <div class="card-header">ToDo作成</div>
      <div class="card-body">
        <!-- 編集 -->
        <form method="POST" action="{{ route('todo.store') }}">
          <!-- 追加 -->
          @csrf
          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">ToDo入力</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="content" value="">
            </div>
          </div>
          <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">作成</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- 新規追加要素 -->
@endsection