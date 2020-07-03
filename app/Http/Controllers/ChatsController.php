<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use App\ChatsRoom;
use App\ChatsMessage;
use App\ChatsSubscribe;

class ChatsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        return $this->getRoomData(1);
    }

    public function getRoomData($roomid)
    {
        /** Get Room Data */
        $roomdata = ChatsRoom::where('roomid', $roomid)->firstOrFail();
        //Response
        $data = [
            'roomid' => $roomid,
            'timestamp' => $roomdata->created_at,
            'participantsdata' => $this->getUserInfo($roomdata->participantid),
            'message' => $this->getMessagefromRoomId($roomid),
        ];
        return $data;
    }
    public function getSubscribedRoom($id)
    {
        $info = ChatsSubscribe::where('id', $id)->get()->toArray();
        if( empty($info) )
        {
            return 'bruh';
            //Put Create Logic Here
        }else{
            $info[0]['chatssubscribe'] = json_decode($info[0]['chatssubscribe']);
        return $info;
        }
    }
    public function addChatsSubscribe(Request $request)
    {
        $id = $request;
        $roomid = $request;
        $user = ChatsSubscribe::find($id);
        $userSubscribe = $user->chatssubscribe;

        if( !empty($userSubscribe) )
        {
            $userSubscribe = json_decode($userSubscribe);
        }else{
            //Initalize Array if value is null
            $userSubscribe = array();
        }
        array_push($userSubscribe, $roomid);
        $user->chatssubscribe = $userSubscribe;
        return $user->save();
    }

    public function getMessagedata($id)
    {
        $info = ChatsMessage::where('messageid', $id)->firstOrFail();
        return $info;
    }

    private function getUserInfo(string $id)
    {
        //To Array
        $participantsid = \explode(',' ,strval($id));
        $participantsdata = array();
        // Push Data to Array
        foreach ($participantsid as $value) {
            //Find Data and Push
            $info = User::where('id', $value)->firstOrFail();
            \array_push($participantsdata, $info );
        }
        return $participantsdata;
    }
    private function getMessagefromRoomId($roomid)
    {
        $info = ChatsMessage::where('roomid', $roomid)->get()->toArray();
        return $info;
    }
}
