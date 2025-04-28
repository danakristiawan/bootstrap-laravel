<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;

class UsersController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('users.index');
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate($this->validation());
        User::create($request->all());

        return redirect()->route('users.index')->with('success', 'Data has been created successfully!');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate($this->validation());
        $user->fill($request->post())->save();

        return redirect()->route('users.index')->with('success', 'Data has been updated successfully!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Data has been deleted successfully!');
    }

    public function validation()
    {
        return [
            'name' => 'required',
            'email' => 'required',
        ];
    }
}
