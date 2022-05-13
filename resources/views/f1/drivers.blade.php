@extends('layouts.app')
<div class="m-6 mt-5">
    <div class="w-75"style="margin: auto">
        <h1>ドライバー一覧表示</h1>
        <div class="mb-3">
            <a href="{{ ('create') }}" class="btn btn-primary">追加</a>
        </div>
        <table class="table m-auto">
            <tr>
                <th>ドライバー名</th>
                <th>国籍</th>
                <th>カーNo.</th>
                <th>チーム</th>
                <th></th>
            </tr>
            @foreach ($drivers as $d)
            <tr>
                <td>{{$d->name}}</td>
                <td>{{$d->country}}</td>
                <td>{{$d->car_number}}</td>
                <td>{{$d->team->name}}</td>
                <td><a href="{{ route('edit', ['id'=>$d->id]) }}" class="btn btn-success">編集</a></td>
                <td><a href="{{ route('delete', ['id'=>$d->id]) }}" class="btn btn-danger">削除</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>