<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function result($greeting)
    {
        $result = '';

        if ($greeting == 'random' ) {
            $result = 'ランダムなメッセージ';
            $random = array('おはよう', 'こんにちは', 'こんばんは', 'おやすみ' );
            $key = array_rand($random);
            $comment = $random[$key];

        } elseif ($greeting == 'morning' ) {
            $result = '朝のあいさつ';
            $comment = 'おはようございます';

        } elseif ($greeting == 'afternoon' ) {
            $result = '昼のあいさつ';
            $comment = 'こんにちは';

        } elseif ($greeting == 'evening' ) {
            $result = '夕方のあいさつ';
            $comment = 'こんばんは';

        } elseif ($greeting == 'night' ) {
            $result = '夜のあいさつ';
            $comment = 'おやすみ';

        } else {
            $result = 'URLに時間帯、freeword/ご自由にどうぞ、random を入力してください';
            $comment = '';
        } 

        return view('message.greeting', [
            'result' => $result,
            'comment' => $comment
        ]);
    }
}
