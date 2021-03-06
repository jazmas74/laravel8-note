@extends('layout')

@section('css')
    <style>
        header {
            height: 50px;
            background-color: #000;
            color: white;
            padding-left: 20px;
            font-size: large;
            color: #ddd;
        }

        .title {
            position: absolute;
            top: 10px;
        }

        .card {
            margin-top: 40px;
        }

        .left {
            width: 70%;
        }

        .submit {
            position: absolute;
            top: 10px;
            right: 20px;
        }
    </style>
@endsection

@section('content')
    <div class="card" style="width: 100%;">
        <div class="card-header">
            メモ一覧
            <a href="{{ route('submit')}}" class="submit">メモを追加</a>
        </div>
        <table class="table">
            <tbody>
            <tr>
                <td class="left">メモ１</td>
                <td><a href="{{ route('submit')}}">編集</a></td>
                <td><a>削除</a></td>
            </tr>
            <tr>
                <td class="left">メモ２</td>
                <td><a href="{{ route('submit')}}">編集</a></td>
                <td><a>削除</a></td>
            </tr>
            <tr>
                <td class="left">メモ３</td>
                <td><a href="{{ route('submit')}}">編集</a></td>
                <td><a>削除</a></td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
