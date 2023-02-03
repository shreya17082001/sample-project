<?php

namespace App\Http\Controllers;

use App\Models\Mapping;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    
    /*
    |---------------------------------------------------------------
    |getUser function
    |---------------------------------------------------------------
    |@return the all user data in json format.
     */

    public function getFriends($id)
    {

        $query = Mapping::where('user_id', $id);
        $user = $query->first();
        $friend = Mapping::find($user);
        $ids = [];
        foreach ($friend as $friend) {
            $value = json_decode($friend);
            Log::channel('loginfo')->info($value->friend_id);
            $id = $value->friend_id;
            array_push($ids, $id);
        }
        $query1 = User::select('id', 'name')->whereIn('id', $ids)->get();
        Log::channel('loginfo')->info($friend);
        return response()->json([
            'friends_list' => $query1,
        ], 200);
    }

    /*
    |---------------------------------------------------------------
    |getUserbyId function
    |---------------------------------------------------------------
    |@param $id is the id of user table id (primary key)
    |@return the user details in json format data
     */

    public function getUserById(Request $request)
    {
        Log::channel('loginfo')->info("searching product details for id");
        $userId = UserController::getUser($request)->getData()->id;

        $user = User::find($userId);
        if (is_null($user)) {
            Log::channel('loginfo')->info("Id not found in user table");
            return response()->json(['message' => 'User Not Found'], 404);
        }
        Log::channel('loginfo')->info("successfully get product details for id");

        return response()->json($user::find($userId), 200);
    }

    public $token = true;

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(),
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
            ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        if ($this->token) {
            return $this->login($request);
        }

        return response()->json([
            'success' => true,
            'data' => $user,
        ], Response::HTTP_OK);
    }

    public function login(Request $request)
    {
        $input = $request->only('email', 'password');
        $jwt_token = null;

        if (!$jwt_token = JWTAuth::attempt($input)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid Email or Password',
            ], Response::HTTP_UNAUTHORIZED);
        }

        return response()->json([
            'success' => true,
            'token' => $jwt_token,
        ]);
    }
    public static function getUser(Request $request)
    {
        Log::debug("AuthController::getUser() >> Invoked.", ["Request" => $request]);
        $token = JWTAuth::parseToken();
        $payload = $token->getPayload();
        $id = $payload->get('id');

        // Returns User Object
        return response()->json(['id' => $id]);
    }
    
}
