<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wechat;

use App\Http\Requests;

class PlaygroundController extends Controller
{
    public function oauth() {
        return Wechat::oauth()->scopes(['snsapi_userinfo'])
            ->redirect();
    }

    public function callback() {

    }
}
