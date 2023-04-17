<?php

namespace App\Http\Controllers\API\V1;
use App\Http\Controllers\Controller;


use Carbon\Carbon;

use App\Models\User;

use App\Mail\Welcome;

use App\Models\UserProfile;

use App\Models\Notification;

use Illuminate\Http\Request;

use App\Models\DirectReferral;

use App\Mail\EmailVerification;


use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class ApiAuthController extends Controller
{
    //

    public function register(Request $request)
    {

        // return $request->all();



        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);




        $regCode = "PRES" . rand(11100, 999999);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'role' => $request->role,
            'usercode' => $regCode,
            'otp' => rand(1000, 9999),
            'password' => Hash::make($validatedData['password']),
        ]);


        // return $user;


        $datax = [
            'name' => $user->name,
            'email' => $user->email,
            'otp' => $user->otp ?? ''
        ];



        // try {
        //code...

        // Mail::to($user->email)
        // ->send(new Welcome($datax));



        // Mail::to($user->email)
        // ->send(new EmailVerification($datax));



        // } catch (\Throwable $th) {
        //     // throw $th;
        // }


        $token = $user->createToken('auth_token')->plainTextToken;

        // $user = User::where($user->id);




        return response()->json([
            'access_token' => $token,
            'user_data' => $user,
            'token_type' => 'Bearer',
        ]);
    }

    public function login(Request $request)
    {
        # code...

        if ($request->has('pin')) {

            if (!Auth::attempt(['email' => $request->email, 'pin' => $request->pin, ])) {
                # code...


                return response()->json([
                    'message' => 'Invalid login details'
                ], 401);


            }else {
                # code...

                $user = User::where('email', $request['email'])->firstOrFail();

                $token = $user->createToken('auth_token')->plainTextToken;

                return response()->json([
                    'access_token' => $token,
                    'user_data' => $user,
                    'token_type' => 'Bearer',
                ]);
            }

        }else{

            if (!Auth::attempt($request->only('email', 'password'))) {

                return response()->json([
                    'message' => 'Invalid login details'
                ], 401);

            } else {

                $user = User::where('email', $request['email'])->firstOrFail();

                $token = $user->createToken('auth_token')->plainTextToken;

                return response()->json([
                    'access_token' => $token,
                    'user_data' => $user,
                    'token_type' => 'Bearer',
                ]);
            }

        }





    }


    public function verify_otp(Request $request)
    {
        # code...
        try {
            //code...

            $user = User::where('id', $request->user()->id)->where('otp', $request->otp)->first();

            if ($user) {


                return response()->json([
                    // 'access_token' => $token,
                    'user_data' => $user,
                    'token_type' => 'Bearer',
                ]);
            }
        } catch (\Throwable $th) {
            //throw $th;

            return $th;
        }
    }

    public function resend_otp(Request $request)
    {
        # code...
        try {

            $user = User::where('id', $request->user()->id)->first();

            if ($user) {

                $user->update([
                    'otp' => rand(111111, 999999)
                ]);

                $datax = [
                    'name' => $user->name,
                    'email' => $user->email,
                    'otp' => $user->otp
                ];
                //     Mail::to($user->email)
                //     ->send(new EmailVerification($datax));


                return response()->json([
                    // 'access_token' => $token,
                    'user_data' => $user,
                    'token_type' => 'Bearer',
                ]);
            }
        } catch (\Throwable $th) {
            //throw $th;

            return $th;
        }
    }
}
