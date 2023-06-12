<?php

namespace App\Http\Controllers;

use App\Models\SocialActivity;
use Illuminate\Http\Request;

class SocialActivityController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SocialActivity::orderBy('id', 'desc')->paginate(5);
        return view('socialActivity.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('socialActivity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'name' => 'required',
            'place' => 'required',
        ]);

        SocialActivity::create($request->all());

        return redirect()->route(socialActivity.index)
            ->with('success', 'Кори ҷамъиятӣ бомуваффақият сохта шуд!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(SocialActivity $socialActivity)
    {
        return view('socialActivity.show', compact('socialActivity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialActivity $socialActivity)
    {
        return view('socialActivity.edit', compact('socialActivity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialActivity $socialActivity)
    {
        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'name' => 'required',
            'place' => 'required',
        ]);

        SocialActivity::update($request->all());

        return redirect()->route(socialActivity.index)
            ->with('success', 'Маълумот иваз шуд!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialActivity $socialActivity)
    {
        $socialActivity->delete();

        return redirect()->route(socialActivity.index)
            ->with('success', 'Маълумот хориҷ шуд!');
    }


}
