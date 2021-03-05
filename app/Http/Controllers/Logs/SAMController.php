<?php

namespace App\Http\Controllers\Logs;

use App\Http\Controllers\Controller;
use App\Models\Logs\SAM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SAMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sams = SAM::all();

        return view('sams.index', compact('sams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'qty'  => 'required|numeric|min:1|max:5',
            'date' => 'required|date|unique:s_a_m_s'
        ];

        $messages = [
            'qty.require'   => 'Insert a number',
            'qty.min'       => 'Minimum amount is 1',
            'qty.max'       => 'Maximum amount is 5',
            'date.required' => 'Insert a date',
            'date.unique'   => 'Duplicated date'
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        SAM::create($request->all());

        return redirect()->action([SAMController::class, 'index']);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
