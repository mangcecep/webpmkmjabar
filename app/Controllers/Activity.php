<?php

namespace App\Controllers;

class Activity extends BaseController
{
    public function index()
    {
        $data['title'] = 'Activity';

        return view('Activity/index', $data);
    }
}
