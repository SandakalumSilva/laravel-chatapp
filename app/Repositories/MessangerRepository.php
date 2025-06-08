<?php

namespace App\Repositories;

use App\Interfaces\MessangerInterface;


class MessangerRepository implements MessangerInterface{

    public function index(){
        return view('messanger.index');
    }
}
