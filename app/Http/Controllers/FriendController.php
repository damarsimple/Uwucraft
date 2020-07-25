<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friend;
use App\User;
use Carbon\Traits\Timestamp;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function getFriend()
    {
        //Establish Users
        $Users = Friend::find(Auth::user()->username);
        if (empty($Users)) {
            //Create Logic
            $Friend = new Friend;
            $Friend->username = Auth::user()->username;
            $Friend->save();
            $Users = Friend::find(Auth::user()->username);
        }
        //Check Empty and establish data
        if (empty($Users->friendlist)) {
            $flist = array();
        } else {
            $flist = array();
            foreach (json_decode($Users->friendlist) as $val) {
                array_push($flist, User::find($val));
            }
        }
        if (empty($Users->followerlist)) {
            $folists = array();
        } else {
            $folists = array();
            foreach (json_decode($Users->friendlist) as $val) {
                array_push($folists, User::find($val));
            }
        }
        if (empty($Users->friendrequest)) {
            $frequest = array();
        } else {
            $frequest = array();
            foreach (json_decode($Users->friendlist) as $val) {
                array_push($frequest, User::find($val));
            }
        }
        $data = [
            'friendlist' => $flist,
            'followerlist' => $folists,
            'friendrequest' => $frequest,
        ];
        return $data;
    }
}
