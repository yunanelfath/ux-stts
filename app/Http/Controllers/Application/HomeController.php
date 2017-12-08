<?php

namespace App\Http\Controllers\Application;

use App\Base\Controllers\ApplicationController;
use App\Questioner;

class HomeController extends ApplicationController
{
    /**
     * Show the application homepage to the user.
     *
     * @return Response
     */
    public function index()
    {
        $questioner = new Questioner();
        $lists = $questioner->get();
        $datas = [];
        foreach ($lists as $key => $value) {
          $datas['questionItems'][$value->category_name][] = [
              'question'=> $value->question,
              'answer_items'=> $value->answer_items,
              'category_name'=> $value->category_name
          ];
        }
        $datas = json_encode($datas);
        return view('application.survey.index',compact('datas'));
    }
}
