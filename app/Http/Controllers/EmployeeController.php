<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeCreateRequest;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::get();
        return view('employees.index',compact('employees'));
    }

    public function create(){
        return view('employees.create');
    }

    public function store(EmployeeCreateRequest $request){
        Employee::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'hobbies' => implode(',',$request->hobbies),
            'created_at' => $request->created_at,
            'photo' => $request->file('photo')->store('public'),
        ]);

        return redirect('/employees');
    }
}
