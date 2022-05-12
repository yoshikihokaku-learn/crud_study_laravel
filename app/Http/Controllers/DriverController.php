<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Team;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ドライバー一覧表示
        $drivers = Driver::with('team:id,name')->get();

        return view('f1.drivers',compact('drivers'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // ドライバー追加画面遷移
        $teams = Team::orderBy('id','asc')->get();
        return view('f1.create',compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 追加処理
        $driver = new Driver;
        $driver->name = $request->name;
        $driver->country = $request->country;
        $driver->car_number = $request->carNo;
        $driver->team_id = $request->team;

        $driver->save();
        return redirect('f1/drivers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //編集画面
        $driver = Driver::find($id);
        $driverTeam = $driver->team_id;
        $teams = Team::orderBy('id','asc')->get();
        return view('f1.edit',compact('driver','teams','driverTeam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 更新処理
        $driver = Driver::find($id);
        $driver->name = $request->name;
        $driver->country = $request->country;
        $driver->car_number = $request->carNo;
        $driver->team_id = $request->team;

        $driver->save();
        return redirect('f1/drivers');

    }

    public function delete($id)
    {
        $driver = Driver::find($id);
        $driverTeam = $driver->team_id;
        $team = Team::find($driverTeam);
        return view('f1/delete',compact('driver','team'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = Driver::find($id);
        $driver->delete();

        return redirect('f1/drivers');
    }
}
