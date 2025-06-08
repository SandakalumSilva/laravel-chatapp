<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserProfileRequest;
use App\Interfaces\UserProfileInterface;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    protected $userRepository;
    public function __construct(UserProfileInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function update(UserProfileRequest $request){
        return $this->userRepository->update($request);
    }
}
