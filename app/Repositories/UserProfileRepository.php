<?php

namespace App\Repositories;

use App\Interfaces\UserProfileInterface;
use App\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Auth;

class UserProfileRepository implements UserProfileInterface{
    use FileUploadTrait;

    public function update($request){
       $avatar = $this->uploadFile($request,'avatar');

       $user = Auth::user();
       if($avatar) $user->avatar = $avatar;
       $user->name = $request->name;
       $user->user_name = $request->userName;
       $user->email = $request->email;
       if($request->current_password){
        $user->password = bcrypt($request->password);
       }
       $user->save();

       notyf()->addSuccess('Updated Successfully.');
       return response(['message'=>'User Updated.'],200);
    }
}
