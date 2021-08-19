<?php

namespace App\Services;

use App\Models\UserInfo;
use Illuminate\Http\Request;
use \Illuminate\Contracts\Validation\Validator;

class UserInfoService
{
    /**
     * Get a validator for a contact.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function create(Request $request)
    {
        //Handle or map any data differently if needed, just for illustration
        return UserInfo::create($request);
    }

    public function getAll(){
        return UserInfo::all();
    }


}
