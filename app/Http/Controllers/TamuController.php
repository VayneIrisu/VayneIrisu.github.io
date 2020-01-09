<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\bukutamu;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $bukutamu = DB::table('bukutamu')->get();
        $bukutamu = bukutamu::all();
        return view('tamu.index', ['daftartamu' => $bukutamu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tamu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // bukutamu::create([
        //     'nama' => $request->nama,
        //     'alamat' => $request->alamat,
        //     'email' => $request->email,
        //     'pesan' => $request->pesan,

        // ]);

        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'pesan' => 'required',
        ]);

        bukutamu::create($request->all());
        return redirect('/tamu/index')->with('status', 'Data Created Succesfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($bukutamu)
    {
        return view('tamu.show', ['bukutamu' => bukutamu::findOrFail($bukutamu)]);
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
