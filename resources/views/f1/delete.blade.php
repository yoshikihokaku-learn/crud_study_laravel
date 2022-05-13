@extends('layouts.app')
<div class="m-6 mt-5">
    <div class="w-75"style="margin: auto">
        <h1>削除確認画面</h1>
        <form action="{{ route('destroy', ['id'=>$driver->id]) }}" method="post">
            @csrf
            <table class="table table-bordered ">
                <tr>
                    <th scope="row">ドライバー名</th>
                    <td>{{$driver->name}}</td>
                </tr>
                <tr>
                    <th>国籍</th>
                    <td>{{$driver->country}}</td>
                </tr>
                <tr>
                    <th>カーNo.</th>
                    <td>{{$driver->car_number}}</td>
                </tr>
                <tr>
                    <th>チーム</th>
                    <td>{{$team->name}}</td>
                </tr>
            </table>
            <div style="text-align: center">
                <input type="submit" value="削除" class="btn btn-danger">
                <a href="{{ route('drivers') }}" class="btn btn-secondary">戻る</a>
            </div>
        </form>
    </div>
</div>