<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**crud >>> create, read, update, delete
     * Display a listing of the resource.
     * Http method : GET
     */
    public function index()
    {
        return Player::all();  //read
    }

    /**
     * Store a newly created resource in storage.
     *  Http method: POST and BODY_PLAYER_INFO.
     */
    public function store(Request $request)
    {
        $player = Player::create($request->all()); //create
        return response()->json($player, 201);
    }

    /**
     * Display the specified resource.
     * Http method: GET (id)
     */
    public function show(Player $player)
    {
        return $player; //read
    }

    /**
     * Update the specified resource in storage.
     * Http method: POST (id) and BODY_PLAYER_INFORMATION
     */
    public function update(Request $request, Player $player)
    {
        $player->update($request->all()); //update
        return response()->json($player, 200); 
    }

    /**
     * Remove the specified resource from storage.
     * Http method : POST (id)
     */
    public function destroy(Player $player)
    {
        $player->delete(); //delete
        return response()->json(null, 204);
    }
}
