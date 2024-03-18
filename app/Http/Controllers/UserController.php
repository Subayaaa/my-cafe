<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();

        return view('user.list', [
            'data' => $user
        ]);
    }

    public function create()
    {
        return view('user.add');
    }

    public function store(Request $request)
    {
        $path = $request->file('file')->store('avatar');

        $request->merge(['avatar' => $path]);
        User::create($request->all());

        return redirect('/users')->with([
            'mess' => 'Data berhasil disimpan'
        ]);
    }

    public function show(User $user)
    {
        return view('user.add', [
            'data' => $user
        ]);
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        $user->fill($request->all());
        $user->save();

        return redirect('/users')->with([
            'mess' => 'Data berhasil disimpan'
        ]);
    }

    public function destroy(User $user)
    {
        Storage::delete($user->avatar);

        $user->delete();

        return redirect('/users')->with([
            'mess' => 'Data berhasil dihapus'
        ]);
    }
}
