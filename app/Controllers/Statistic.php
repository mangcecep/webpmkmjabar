<?php

namespace App\Controllers;

class Statistic extends BaseController
{
    public function index()
    {
        $data['title'] = 'Data Statistik';

        return view('Statistic/index', $data);
    }
}
