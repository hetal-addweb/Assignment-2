<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use DB;

class EmployeeController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $data = Employee::all();
        return view( 'view', compact( 'data' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create()
    {
        return view( 'create' );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        
        $data = new Employee;
        $data->empname = $request->empname;
        $data->department = $request->department;
        $data->save();
        return redirect('em');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Employee  $employee
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        $data = Employee::find($id);
        return view( 'view', compact('data'));
    }

    public function search(Request $request)
    { 
    $dname= $request->department;
    
        
        
            $user = Employee::where('empname','LIKE','%' .$dname. '%')
            ->orwhere('department','LIKE','%'.$dname.'%')
            ->get();
           // if(count($user)>0)
            return view('search',compact('user'));
        
       // return view('view')->withMessage( "no data found");
        

    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Employee  $employee
    * @return \Illuminate\Http\Response
    */

    public function edit( Employee $employee ) 
    {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Employee  $employee
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, Employee $employee ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Employee  $employee
    * @return \Illuminate\Http\Response
    */

    public function destroy( Employee $employee ) {
        //
    }
}
