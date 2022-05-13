@extends('layouts.app')
<div class="m-6 mt-5">
    <div class="w-75"style="margin: auto">
        <h1>削除確認画面</h1>
        <form action="{{ route('destroy', ['id'=>$driver->id]) }}" method="post">
            @csrf
            <label for="">ドライバー名</label>
            <p>{{$driver->name}}</p>
            <label for="">国籍</label>
            <p>{{$driver->country}}</p>
            <label for="">カーNo.</label>
            <p>{{$driver->car_number}}</p>
            <label for="">チーム</label>
            <p>{{$team->name}}</p>
            <input type="submit" value="削除" class="btn btn-danger">
            <a href="{{ route('drivers') }}" class="btn btn-secondary">戻る</a>
        </form>
    </div>
</div>