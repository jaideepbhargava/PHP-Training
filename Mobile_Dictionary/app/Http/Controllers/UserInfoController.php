<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;
use App\Services\UserInfoService;

class UserInfoController extends Controller
{
    protected $userInfoService;

    public function __construct(UserInfoService $userInfoService)
    {
        $this->userInfoService = $userInfoService;
    }

    public function addContact(UserInfoService $userInfoService, Request $request)
    {
        $errors  = null;
        $validator = null;
        if ($request->isMethod('post')) {
            $validator = $userInfoService->validator($request->all());
            if ($validator->fails()) {
                $errors = $validator->errors();
            } else {
                $userInfoService->create($validator->getData());
            }
        }
        return $validator;
    }

    public function getAllContacts(Request $request,UserInfoService $userInfoService)
    {
        return $userInfoService->getAll();
    }
}
