<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    /*
    |---------------------------------------------------------------
    |getUser function
    |---------------------------------------------------------------
    |@return the all user data in json format.
     */

    public function getChat(Request $request)
    {
        $product_id = $request->query('product_id');

        $query = Chat::select('from_user_id', 'to_user_id', 'message')->where('product_id', $product_id)->orderBy('id', 'DESC')->get();

        return response()->json([
            'chats_list' => $query,
        ], 200);
    }
    /*
    |----------------------------------------------------------------
    |postChat function
    |----------------------------------------------------------------
    |@param $request is the request to add data in vendor table
    |@return the message vendor data added successfully
    |@validate It is for validation for input parameters
     */

    public function postChat(Request $request)
    {
        Log::channel('loginfo')->info("validating received input for id");

        $data = $request->validate([
            'from_user_id' => 'integer',
            'to_user_id' => 'integer',
            'product_id' => 'integer',
            'message' => 'required|string|max:100',
        ]);

        Chat::create($data);
        Log::channel('loginfo')->info(" created successfully vendor details for id");

        if ('from_user_id') {
            return response()->json([
                "message" => "Successfully store chat"], 201);
        }

    }

}
