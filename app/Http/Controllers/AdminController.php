<?php

namespace App\Http\Controllers;
use App\Models\Carrera;
use App\Models\Alumno;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EncuestaExport;
use App\Exports\HistoryAlumno;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $variables = [
            'menu'=>"dashboard"
        ];
        return view('admin.dashboard')->with($variables);
    }

    public function report_excel()
    {
        $carreras = Carrera::all();
         $variables = [
            'menu'=>"report_excel",
            'carreras'=> $carreras
        ];
        return view('admin.report_excel')->with($variables);
    }
    public function registration_users()
    {
      
         $variables = [
            'menu'=>"registration_users",        
        ];
        return view('admin.registration_users')->with($variables);
    }

    public function news()
    {
      
         $variables = [
            'menu'=>"news",        
        ];
        return view('news.index')->with($variables);
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