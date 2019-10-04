<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roleData = Role::pluck('name', 'name')->all();
        return view('user.create', ['roleData' => $roleData]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:100|string',
            'email' => 'required|min:3|max:100|string|email|unique:users',
            'phone' => 'required|min:3|max:15',
            'address' => 'required|min:3|max:255|string',
            'password' => 'required|min:3|string',
        ]);

        $request['password'] = bcrypt($request->get('password'));

        User::create($request->all())->assignRoleTo($request->role);
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

    public function dataTable()
    {
        $users = User::query();
        return DataTables::of($users)
            ->addColumn('roles', function ($users) {
                $roles = $users->roles()->get();
                $data = [];
                foreach ($roles as $role) {
                    $data[] = $role->name;
                }
                return $data;
            })
            ->addColumn('action', function ($users) {
                return view('layouts._partials.action', [
                    'model' => $users,
                    'show_url' => route('user.show', $users->id),
                    'edit_url' => route('user.edit', $users->id),
                    'delete_url' => route('user.destroy', $users->id)
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
