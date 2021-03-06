@extends('layout')

@section('css')
    <style>
        header {
            height: 50px;
            background-color: #000;
            padding-left: 20px;
            font-size: large;
            color: #ddd;
        }

        .title {
            position: absolute;
            top: 10px;
        }

        .container {
            margin-top: 40px;
        }
    </style>
@endsection

@section('content')
    <form>
        <div class="form-group">
            <label for="title">タイトル</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="content">内容</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>
        <a href="{{ route('home')}}" class="btn btn-primary">戻る</a>
        <button type="submit" class="btn btn-success">追加</button>
    </form>
@endsection
