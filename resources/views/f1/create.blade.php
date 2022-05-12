@extends('layouts.app')
<div class="m-6 mt-5">
    <div class="w-75"style="margin: auto">
        <h1>ドライバー追加画面</h1>
        <form action="{{ route('store') }}" method="post">
            @csrf
            <label for="">ドライバー名</label>
            <input type="text" name="name">
            <label for="">国籍</label>
            <input type="text" name="country">
            <label for="">カーNo.</label>
            <input type="text" name="carNo">
            <label for="">チーム</label>
            <select name="team">
                <option value="">~~ Select your team ~~</option>
                @foreach ($teams as $t)
                    <option value="{{$t->id}}">{{$t->name}}</option>
                @endforeach
            </select>
            <input type="submit" value="追加" class="btn">
        </form>
    </div>
</div>