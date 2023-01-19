<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller {
    public function login( Request $request ) {

        $validateData = $request->validate( [
            'email'=>'required|email',
            'password'=>'required|min:8'
        ] );

        $user = User::where( 'email', $validateData[ 'email' ] )->first();


        if ( $user && Hash::check( $validateData[ 'password' ], $user->password ) ) {
            $token = $user->createToken( 'api', [ 'create' ] );
            return[
                'token'=>$token->plainTextToken
            ];

        } else {
            return[
                'Error: '=>'Invalid Credentials'
            ];
        }
    }
}
