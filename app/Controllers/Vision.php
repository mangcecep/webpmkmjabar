<?php

namespace App\Controllers;

class Vision extends BaseController
{
    public function index()
    {
        $data['title'] = 'Visi & Misi';

        return view('Vision/index', $data);
    }
}
