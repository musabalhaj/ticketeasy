<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Organizer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;

class OrganizerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin/Organizer.index')
        ->with('Organizers',User::where('role',2)->get(['id','name','email']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/Organizer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request , User $Organizer)
    {

        $Organizer->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
            'role'=>2
        ]);

        session()->flash('success','Added Successfully');
        
        return redirect(route('Organizer.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Admin/Organizer.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $Organizer)
    {
        return view('Admin/Organizer.edit')
        ->with('Organizer',$Organizer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $Organizer)
    {
        //if the Organizer type a new password
        if (!empty($request->password)) {
            $Organizer->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=> Hash::make($request->password)
            ]);
        }

        //if the Organizer donnot type a new password
        else{
            $Organizer->update([
                'name'=>$request->name,
                'email'=>$request->email
            ]);
        }

        session()->flash('success','Updated Successfully');
        
        return redirect(route('Organizer.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $Organizer)
    {
        //delete Organizer data
        $Organizer->delete();

        session()->flash('success','Deleted Successfully');
        
        return redirect(route('Organizer.index'));
    }
}