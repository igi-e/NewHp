<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HpController extends Controller
{
    public function index()
    {
        // 猪木酸素日記ページのフィードからRSSを取得します
        $feed = file_get_contents('http://igisanso.com/diary/feed/');

        // XML解析を行う上で、XMLで不正文字と扱われる対象を空文字に変換します
        $invalid_characters = '/[^\x9\xa\x20-\xD7FF\xE000-\xFFFD]/';
        $feed = preg_replace($invalid_characters, '', $feed);
        

        // 文字列をXMLとして解析して、SimpleXMLElementクラスのインスタンスに変換
        $rss = simplexml_load_string($feed);

        
        return view('index', ['rss'=> $rss]);
    }

    public function about()
    {
        return view('about/index');
    }

    public function service()
    {
        return view('service/index');
    }

    public function access()
    {
        return view('access/index');
    }

    public function kiki()
    {
        return view('kiki/index');
    }

    public function denkou()
    {
        return view('denkou/index');
    }
    public function fukusi()
    {
        return view('fukusi/index');
    }
    public function syouene()
    {
        return view('syouene/index');
    }
    public function hojokin()
    {
        return view('hojokin/index');
    }
    public function shindan()
    {
        return view('shindan/index');
    }
    public function question()
    {
        return view('question/index');
    }
    public function contact()
    {
        return view('contact/index');
    }
    public function blog()
    {
        return view('blog/index');
    }
    public function map()
    {
        return view('map/index');
    }
    public function mailform()
    {
        return view('mailform/index');
    }
    public function mailcomplete()
    {
        
        return view('mailform/complete');
    }
}
