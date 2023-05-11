<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Telegram\Bot\Laravel\Facades\Telegram;




class TelegramController extends Controller
{


    public function updatedActivity()
    {
        $activity = Telegram::getUpdates();
        dd($activity);
    }


    public function sendMessage()
    {
        return view('telegramView');
    }


    public function storeMessage(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'message'=>'required'
        ]);

        $text = "<b>Name: </b>\n"."$request->name\n"."<b>Message</b>".$request->message;
        Telegram::sendMessage([
                'chat_id'=>'-1001835226033',
                'parse_mode'=>'HTML',
                'text'=>$text
            ]);
            return redirect()->back();
    }

    public function storePhoto(Request $request)
    {
        $request->validate([
            'name'=>'file|mimes:png,jpg,jpeg,gif',
        ]);

        $photo = $request->file('file');


        Telegram::sendMessage([

            'chat_id'=>'-1001835226033',
            'photo'=>InputFile::createFormContents(file_get_contents($photo->getRealPath()),str_random(10).'.'. $photo->getClientOriginalExtension()  ),
            'caption'=>'Photo image'

        ]);

        return redirect()->back();

    }





}
