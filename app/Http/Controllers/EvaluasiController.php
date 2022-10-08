<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Evaluasi;
use Facade\Ignition\DumpRecorder\Dump;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class EvaluasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluasi = Evaluasi::paginate(1);
        return view('evaluasi', compact('evaluasi'));
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
        //
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



    public function update(Request $request, Evaluasi $evaluasi)
    {


        if ($request->jawaban == 'a') {
            $evaluasi->is_active = $request->jawaban;
            $request->jawaban = $evaluasi->pilihan_a;
            if ($request->jawaban === $evaluasi->kunci) {
                $evaluasi->correct = 1;
                $evaluasi->score = 10.00;
                $evaluasi->pilihan = $request->jawaban;
            } else {
                $evaluasi->correct = 0;
                if ($evaluasi->score >= 10.00) {
                    $evaluasi->score = 0;
                }
                $evaluasi->pilihan = $request->jawaban;
            }
        } else if ($request->jawaban == 'b') {
            $evaluasi->is_active = $request->jawaban;
            $request->jawaban = $evaluasi->pilihan_b;
            if ($request->jawaban === $evaluasi->kunci) {
                $evaluasi->correct = 1;
                $evaluasi->score = 10.00;
                $evaluasi->pilihan = $request->jawaban;
            } else {
                $evaluasi->correct = 0;
                if ($evaluasi->score >= 10.00) {
                    $evaluasi->score = 0;
                }
                $evaluasi->pilihan = $request->jawaban;
            }
        } else if ($request->jawaban == 'c') {
            $evaluasi->is_active = $request->jawaban;
            $request->jawaban = $evaluasi->pilihan_c;
            if ($request->jawaban === $evaluasi->kunci) {
                $evaluasi->correct = 1;
                $evaluasi->score = 10.00;
                $evaluasi->pilihan = $request->jawaban;
            } else {
                $evaluasi->correct = 0;
                if ($evaluasi->score >= 10.00) {
                    $evaluasi->score = 0;
                }
                $evaluasi->pilihan = $request->jawaban;
            }
        } else if ($request->jawaban == 'd') {
            $evaluasi->is_active = $request->jawaban;
            $request->jawaban = $evaluasi->pilihan_d;
            if ($request->jawaban === $evaluasi->kunci) {
                $evaluasi->correct = 1;
                $evaluasi->score = 10.00;
                $evaluasi->pilihan = $request->jawaban;
            } else {
                $evaluasi->correct = 0;
                if ($evaluasi->score >= 10.00) {
                    $evaluasi->score = 0;
                }
                $evaluasi->pilihan = $request->jawaban;
            }
        }
        $evaluasi->save();
        return redirect('/evaluasi/?page=' . $request->segment(2));
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
