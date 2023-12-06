<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth; 

class UserController extends Controller
{
    //
    public function insertUser()
    {
        $user = new User;
        
        $user->employee_id = 'E002';
        $user->name = 'Aldi Taher';
        $user->department_id = '2';

        $user->position = 'Staff';

        $user->email = 'aldi@gmail.com';
        $user->password = bcrypt('taher');

        $user->bio = 'Lorem Ipsum blablablablabalbalbalablablabalbla';
        $user->image = 'img/alditaher.jpg';
        $user->save();
    }

    public function editBio(){
        $user = Auth::user();
        return view('editBio', ['user' => $user]);
    }

    public function updateBio(Request $request){
        $user = Auth::user();
        $user->update([
            'bio' => $request->input('bio'),
        ]);

        return redirect()->route('profile', ['user' => $user]);
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->storeAs('img', $fileName);

            // Debugging statements
            \Log::info('File Name: ' . $fileName);
            \Log::info('File Path: ' . $filePath);

            // Simpan nama file ke database atau sesuai dengan kebutuhan Anda
            $user->update(['image' => $filePath]);

            return response()->json(['message' => 'Profil berhasil diperbarui'], 200);
        }

        return response()->json(['error' => 'File tidak ditemukan'], 400);
    }


    public function getUsersByDepartment($department_id) {
        $users = User::where('department_id', $department_id)->get();
        return response()->json($users);
    }

    public function getUserbyId($employee_id){
        $userSelected = User::where('employee_id', $employee_id)->first();
        $user = Auth::user();
        return view('userDetail', compact('userSelected', 'user'));
    }
}
