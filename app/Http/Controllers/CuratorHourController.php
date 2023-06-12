<?php

namespace App\Http\Controllers;

use App\Models\CuratorHour;
use Illuminate\Http\Request;

class CuratorHourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CuratorHour::orderBy('id','desc')->paginate(5);
        return view('curatorHour.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curatorHour.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'theme' => 'required',
            'auditorium' => 'required',
        ]);

        CuratorHour::create($request->all());

        return redirect()->route(curatorHour.index)
            ->with('success', 'Соати кураторӣ бомуваффақият сохта шуд!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CuratorHour $curatorHour)
    {
        return view('curatorHour.show', compact('curatorHour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CuratorHour $curatorHour)
    {
        return view('curatorHour.edit', compact('curatorHour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CuratorHour $curatorHour)
    {
        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'theme' => 'required',
            'auditorium' => 'required',
        ]);

        CuratorHour::update($request->all());

        return redirect()->route(curatorHour.index)
            ->with('success', 'Маълумот иваз шуд!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CuratorHour $curatorHour)
    {
        $curatorHour->delete();

        return redirect()->route(curatorHour.index)
            ->with('success', 'Маълумот хориҷ шуд!');
    }
}
