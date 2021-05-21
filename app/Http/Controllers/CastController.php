<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cast = DB::table('cast')->get();
        // dd($casts);
        return view('week3day3and5.dataTables', compact('cast'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('week3day3and5.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nama' => 'required|unique:cast'
        ]);
        $query = DB::table('cast')->insert([
            "nama" => $request["nama"],
            "umur" => $request["umur"],
            "bio" => $request["bio"]
        ]);

        return redirect('/cast')->with('success', 'Data baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $cast = DB::table('cast')->where('id', $id)->get();
        return view('week3day3and5.detail', compact('cast'));
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
        $cast = DB::table('cast')->where('id', $id)->get();
        return view('week3day3and5.edit', compact('cast'));
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
        $request->validate([
            'nama' => 'required'
        ]);

        $affected = DB::table('cast')
              ->where('id', $id)
              ->update(
                ['nama' => $request["nama"] ],
                ['umur' => $request["umur"] ],
                ['bio' => $request["bio"] ]
            );

        return redirect('/cast')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('cast')->where('id', $id)->delete();

        return redirect('/cast')->with('success', 'Data berhasil dihapus');
    }
}
