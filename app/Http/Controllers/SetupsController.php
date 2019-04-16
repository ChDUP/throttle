<?php

namespace App\Http\Controllers;

use App\Setup;
use Illuminate\Http\Request;

class SetupsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setups = Setup::all();
        return view('setups.index', compact($setups));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $this->validateSetup();
        $attributes['owner_id'] = auth()->id();
        $setup = Setup::create($attributes);

        return redirect('/account');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setup  $setup
     * @return \Illuminate\Http\Response
     */
    public function show(Setup $setup)
    {
        $setup->owner = $setup->owner->name;
        return view('setups.show', compact('setup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setup  $setup
     * @return \Illuminate\Http\Response
     */
    public function edit(Setup $setup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setup  $setup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setup $setup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setup  $setup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setup $setup)
    {
        //
    }

    protected function validateSetup() {
        return request()->validate([
            'name' => ['required', 'min:3'],
            'size' => ['required', 'integer'],
            'frame' => ['required', 'min:3'],
            'flight_controller' => ['required', 'min:3'],
            'power_board' => ['min:1'],
            'esc' => ['min:1'],
            'motors' => ['min:1'],
            'camera' => ['min:1'],
            'vtx' => ['min:1'],
            'rx' => ['min:1'],
            'description' => ['min:1']
        ]);
    }

    public function owner() {
        return $this->belongsTo(User::class);
    }
}
