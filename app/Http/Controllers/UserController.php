<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //view user list
    public function viewUserList()
    {
        // $data_user = User::all();
        $data_user = User::where('usertype', '<>', 1)
        ->paginate(5);

        return view('admin/pages/UserList', ['data_user' => $data_user]);
    }

    // edit user (form)
    public function editUser($id)
    {
        $data_user = User::find($id);

        return view('admin/pages/EditUserList', ['data_user' => $data_user]);
    }

    // update user details to DB
    public function updateUser(Request $request, $id)
    {
        $data_user = User::find($id);
        $data_user->update($request->all());

        return redirect('/UserList')->with('success', 'User Details Updated Successfully');
    }

    // delete user details
    public function deleteUser($id)
    {
        $data_user = User::find($id);
        $data_user -> delete($data_user);

        return redirect('/UserList')->with('success', 'User Successfully Deleted');
    }
    
}
