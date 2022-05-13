@include('layouts.app')
<div class="m-6 mt-5">
    <div class="w-75"style="margin: auto">
        <h1>編集画面</h1>
        <form action="{{ url('f1/update', ['id'=>$driver->id]) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">ドライバー名</label>
                <input type="text" name="name" value="{{$driver->name}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">国籍</label>
                <input type="text" name="country" value="{{$driver->country}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="carNo" class="form-label">カーNo.</label>
                <input type="text" name="carNo" value="{{$driver->car_number}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">チーム</label>
                <select name="team" class="form-select">
                    <option value="">~~ Select your team ~~</option>
                    @foreach ($teams as $t)
                        <option value="{{$t->id}}"
                            @if ($t->id === $driverTeam) selected @endif>
                            {{$t->name}}</option>
                    @endforeach
                </select>
            </div>
            <div style="text-align: center">
                <input type="submit" value="変更" class="btn btn-success">
                <a href="{{ route('drivers') }}" class="btn btn-secondary">戻る</a>
            </div>
        </form>
    </div>
</div>