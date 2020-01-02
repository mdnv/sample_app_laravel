<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\AuthLoginRequest;
use App\Http\Requests\Api\AuthSignupRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use App\Comment;
use Socialite;
use App\Http\Resources\UsersCollection as UsersResource;;

class UsersController extends Controller
{
    /**
     * Create a user
     * @param AuthSignupRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function signup(AuthSignupRequest $request)
    {
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password)
        ]);
        $user->save();

        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }

    /**
     * Login with email and password
     *
     * @param AuthLoginRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(AuthLoginRequest $request)
    {
        $credentials = [];
        if (filter_var($request->username, FILTER_VALIDATE_EMAIL)) {
            //login with email
            $credentials = [
                'email' => $request->username,
                'password' => $request->password
            ];
        } else {
            //login with username
            $credentials = [
                'username' => $request->username,
                'password' => $request->password
            ];
        }

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        $user = $request->user();
        $tokenResult = $user->createToken('AwareHero App');
        $token = $tokenResult->token;
        /*if ($request->remember_me) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }*/
        $token->save();

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
            'user' => $request->user()
        ]);
    }

    public function loginViaFacebook()
    {

    }

    public function loginViaTwitter()
    {

    }

    public function loginViaGoogle()
    {

    }

    /**
     * Logout user (Revoke the token)
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    /**
     * Get the authenticated User
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
    public function index(Request $request)
    {
        $users = new UsersResource(User::with('comments')->get());
        return response()->json($users);
        // return view('api.users.index',compact('users'));
    }
}
