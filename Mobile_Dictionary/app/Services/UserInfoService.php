<?php

namespace App\Services;

use App\Models\UserInfo;
use Illuminate\Http\Request;
use \Illuminate\Contracts\Validation\Validator;

class UserInfoService
{


    public function getAllContacts(){
        $response = UserInfo::all();
        if ($response != Null){
            return $response;
        } else{
            throw new Exception('Connection error');
        }
    }

    public function addContact(Request $request){
        $response = UserInfo::create($request->all());

        if ($response != Null){
            return $response;
        } else{
            throw new Exception('Data is not correct');
        }
    }

    public function getContactByName(string $name){
        $response =  UserInfo::query()
            ->where('name','LIKE',"%{$name}%")
            ->get();

        if ($response != Null){
            return $response;
        } else{
            throw new Exception('Name has ambiguity');
        }
}

    public function getContactByNumber(string $mobile_number){

        $response =  UserInfo::query()
            ->where('mobile_number','LIKE',"%{$mobile_number}%")
            ->get();
        if ($response != Null){
            return $response;
        } else{
            throw new Exception('Mobile number has Ambiguity');
        }
    }

    public function getContactByEmail(string $email){
        $response = UserInfo::query()
            ->where('email','LIKE',"%{$email}%")
            ->get();
        if ($response != Null){
            return $response;
        } else{
            throw new Exception('Email has Ambiguity');
        }

    }

    public function removeContactByMobileNumber(string $number){
        return UserInfo::query()
            ->where('mobile_number','LIKE',"%{$number}%")
            ->delete();
    }

    public function removeContactByName(string $name){
        return UserInfo::query()
            ->where('name','LIKE',"%{$name}%")
            ->delete();
    }

    public function removeContactByEmail(string $email){
        return UserInfo::query()
            ->where('email','LIKE',"%{$email}%")
            ->delete();
    }

}
