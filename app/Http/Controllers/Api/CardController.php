<?php

namespace App\Http\Controllers\Api;

use App\Models\CardModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CardController extends Controller
{
    public function index()
    {
        $card = CardModel::all();
    
        if($card->count() > 0){
            return response()->json([
                'status' => 200,
                'cards' => $card
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'cards' => 'No card record found'
            ], 404);
        }
    }
    
    public function show($id)
    {
        $card = CardModel::find($id);
    
        if (!$card) {
            return response()->json(['error' => 'Card not found'], 404);
        }
    
        return response()->json($card);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cardType' => 'required|string',
            'attribute' => 'required|string',
            'name' => 'required|string',
            'level' => 'required|string',
            'rank' => 'required|string',
            'image' => 'required|url',
            'type' => 'required|string',
            'subType' => 'required|string',
            'description' => 'required|string',
            'stats' => 'required|string',
            'code' => 'required|string',
            
        ]);
        if($validator->fails()){
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else{
            $card = CardModel::create([
                'cardType' => $request->input('cardType'),
                'attribute' => $request->input('attribute'),
                'name' => $request->input('name'),
                'level' => $request->input('level'),
                'rank' => $request->input('rank'),
                'image' => $request->input('image'),
                'type' => $request->input('type'),
                'subType' => $request->input('subType'),
                'description' => $request->input('description'),
                'stats' => $request->input('stats'),
                'code' => $request->input('code'),
            ]);
            if($card) {
                return response()->json([
                    'status' => 200,
                    'message' => "Card Created"
                ], 200);
            }else{
                return response()->json([
                    'status' => 500,
                    'message' => "Something Went Wrong"
                ], 500);
            }
        }
    }
}
