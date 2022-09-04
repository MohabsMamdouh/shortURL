<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShortRequest;
use App\Models\ShortURL;

class ShorturlController extends Controller
{

    public function index()
    {
        return view('short_url');
    }

    public function short(ShortRequest $request)
    {
        $shortURL = new ShortURL();

        $shortURL->original_url = $request['original'];

        $shortURL->save();

        $short_url = base_convert($shortURL->id, 10, 36);
        $shortURL->short_url = $short_url;

        $shortURL->save();

        return redirect()->back()->with('success_message', '<div class="w-full mb-36 block"><h2 class="text-xl text-blue-300">Your Short URL: <a class="text-blue-900 font-bold" href="'.url($short_url).'">'.url($short_url).'</a></h2></div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($shortURL)
    {
        $short_URL = ShortURL::where('short_url', $shortURL)->first();

        if($short_URL)
            return redirect()->to(url($short_URL->original_url));

        return redirect()->to(url('/'));
    }
}
