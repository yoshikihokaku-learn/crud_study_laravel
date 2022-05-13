@extends('layouts.app')
<div class="m-6 mt-5">
    <div class="w-75"style="margin: auto">
        <h1>ドライバー追加画面</h1>
        <form action="{{ route('store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">ドライバー名</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">国籍</label>
                <input type="text" name="country" class="form-control">
            </div>
            <div class="mb-3">
                <label for="carNo" class="form-label">カーNo.</label>
                <input type="text" name="carNo" class="form-control">
            </div>
            <div class="mb-3">
                <label for="team">チーム</label>
                <select name="team" class="form-select">
                    <option value="">~~ Select your team ~~</option>
                    @foreach ($teams as $t)
                        <option value="{{$t->id}}">{{$t->name}}</option>
                    @endforeach
                </select>
            </div>
            <div style="text-align: center">
                <input type="submit" value="追加" class="btn btn-primary">
                <a href="{{ route('drivers') }}" class="btn btn-secondary">戻る</a>
            </div>
        </form>
    </div>
</div>