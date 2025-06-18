<?php

namespace App\Repositories;

use App\Interfaces\MessangerInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MessangerRepository implements MessangerInterface{

    public function index(){
        return view('messanger.index');
    }


    public function userSearch($request){
        $getRecords = null;
        $query = $request['query'];
        $records = User::where('id','!=',Auth::user()->id)
        ->where('name','LIKE',"%{$query}%")
        ->orWhere('user_name','LIKE',"%{$query}%")
        ->get();

        foreach($records as $record){
            $getRecords .= view('messanger.components.search-item',compact('record'))->render();
        }

        return response()->json([
            'records' => $getRecords
        ]);
    }
}
