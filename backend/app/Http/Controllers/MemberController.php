<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function listMembers()
    {
        $data =  Member::get();

        $response['data'] = $data;
        $response['sucess'] = true;

        return $response;
    }
}
