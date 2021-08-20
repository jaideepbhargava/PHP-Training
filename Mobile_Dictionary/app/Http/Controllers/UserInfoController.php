<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;
use App\Services\UserInfoService;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class UserInfoController extends Controller
{
    protected $userInfoService;

    public function __construct(UserInfoService $userInfoService)
    {
        $this->userInfoService = $userInfoService;
    }


    public function getAllContacts(Request $request,UserInfoService $userInfoService){
        return $userInfoService->getAllContacts();
    }

    public function addContact(UserInfoService $userInfoService, Request $request){

        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:user_infos|max:100',
            'mobile_number' => 'required|unique:user_infos|max:20'
        ]);

        return $userInfoService->addContact($request);
    }

    public function getContactByName(UserInfoService $userInfoService, Request $request){
        if($request->has('name')){
            $name = $request->input('name');
            if($name != null){
                return $userInfoService->getContactByName($name);
            }else{

                Log::error('The api call doesnot have correct arguments ');

                return response()->json([
                    'success'=>false,
                    'message'=>'Name can not be null'],400);
            }


        }else{

            Log::error('The api call doesnot have correct arguments ');

            return response()->json([
                'success'=>false,
                'message'=>'Name can not be null'],400);
        }
    }

    public function getContactByNumber(UserInfoService $userInfoService, Request $request){
        if($request->has('mobile_number')){
            $mobile_number = $request->input('mobile_number');
            if($mobile_number != null){
                return $userInfoService->getContactByNumber($mobile_number);
            }else{

                Log::error('The api call doesnot have correct arguments ');

                return response()->json([
                    'success'=>false,
                    'message'=>'Number can not be null'],400);
            }


        }else{

            Log::error('The api call doesnot have correct arguments ');

            return response()->json([
                'success'=>false,
                'message'=>'Number can not be null'],400);
        }
    }

    public function getContactByEmail(UserInfoService $userInfoService, Request $request){
        if($request->has('email')){
            $email = $request->input('email');
            if($email != null){
                return $userInfoService->getContactByEmail($email);
            }else{

                Log::error('The api call doesnot have correct arguments ');

                return response()->json([
                    'success'=>false,
                    'message'=>'Email can not be null'],400);
            }


        }else{

            Log::error('The api call doesnot have correct arguments ');

            return response()->json([
                'success'=>false,
                'message'=>'Email can not be null'],400);
        }
    }

    public function removeContactByMobileNumber(UserInfoService $userInfoService, Request $request){
        $number = $request->input('mobile_number');
        return $userInfoService->removeContactByMobileNumber($number);
    }

    public function removeContactByName(UserInfoService $userInfoService, Request $request){
        $name = $request->input('name');
        return $userInfoService->removeContactByName($name);
    }

    public function removeContactByEmail(UserInfoService $userInfoService, Request $request){
        $email = $request->input('email');
        return $userInfoService->removeContactByEmail($email);
    }


}
