<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Employee;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{

	public function createUser(Request $request) {

		$validate = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
		if ($validate) {
	        $user = User::create([
	            'name' => $request->name,
	            'user_type' => $request->user_type,
	            'email' => $request->email,
	            'password' => Hash::make($request->password),
	        ]);

	        if($data['user_type'] == 1) {
	            Employee::create([
	                'fk_user_id' => $user->id
	            ]);
	        }
		}

        return back();
	}

    public function userDashboard() {
    	$users = User::get();
    	return view('usersDashboard')->with('users', $users);
    }

    public function viewUser($id) {
    	$user = User::find($id);
    	return view('viewUser')->with('user', $user);
    }

    public function updateUser(Request $request, $id) {
    	$user = User::find($id);
    	$employee = Employee::where('fk_user_id', $user->id)->first();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->save();

    	$employee->address = $request->address;
    	$employee->save();

    	return back()->with('user', $user);
    }

    public function deleteUser($id) {
    	$user = User::find($id);
    	$user->delete();
    	return back();
    }
}
