<?php

namespace App\Repositories;

use App\Interfaces\UserProfileInterface;

class UserProfileRepository implements UserProfileInterface{

    public function update($request){
        // dd($request()->all());
    }
}
