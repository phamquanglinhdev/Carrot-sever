<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use stdClass;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        $category = Category::where("name","=",$request->name)->first();
        if($category != null){
            $videos = $category->videos()->get();
            foreach ($videos as $video) {
                $video->thumbnail = env("APP_URL") . $video->thumbnail;
            }
            $videos["code"] = 200;
        }else{
            $videos = new stdClass();
            $videos->code = 404;
        }
        return $videos;
    }
}
