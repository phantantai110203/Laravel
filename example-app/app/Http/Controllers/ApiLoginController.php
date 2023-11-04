<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ApiLoginController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        $user = User::where('email', $request->email )->first();


        if(! user || ! Hash::check($request->password, $user->password)){
            throw ValidationException::withMessages([
                'email' => ['The provided credentianls are incorrect.'],
            ]);
        }


        return ["token" => $user->createToken($request->device_name)->plainTextToken];
    }
    // liệt kê danh sách các token đang đăng  nhập
    public function showTokens(Request $request){
        return $request->user()->tokens;
    }

    //đăng xuất (xóa) token hiện tại
    public function logout(Request $request) {
        $request->user()->currentAccessToken()->delete();
        return ['message'=>'logged out'];
    }
    //đăng xuất (xóa) token theo Id
    public function logoutById(Request $request, $tokenId) {
        $request->user()->tokens()->where('id',$tokenId)->delete();
        return ['message'=>'logged out'.$tokenId];
    }

    //đăng xuất (xóa) tất cả token
     public function logoutAll(Request $request) {
        $request->user()->tokens()->delete();
        return ['message'=>'logged out all'];
    }






}