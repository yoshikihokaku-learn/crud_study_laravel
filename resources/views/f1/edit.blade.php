@include('layouts.app')
<div class="m-6 mt-5">
    <div class="w-75"style="margin: auto">
        <h1>編集画面</h1>
        <form action="{{ url('f1/update', ['id'=>$driver->id]) }}" method="post">
            @csrf
            <label for="">ドライバー名</label>
            <input type="text" name="name" value="{{$driver->name}}">
            <label for="">国籍</label>
            <input type="text" name="country" value="{{$driver->country}}">
            <label for="">カーNo.</label>
            <input type="text" name="carNo" value="{{$driver->car_number}}">
            <label for="">チーム</label>
            <select name="team">
                <option value="">~~ Select your team ~~</option>
                @foreach ($teams as $t)
                    <option value="{{$t->id}}"
                        @if ($t->id === $driverTeam) selected @endif>
                        {{$t->name}}</option>
                @endforeach
            </select>
            <input type="submit" value="変更" class="btn">
        </form>
    </div>
</div>