<?php

namespace App\Controllers;

class Community extends BaseController
{
    public function index()
    {
        $data['title'] = 'Halaman Komunitas';

        return view('Community/index', $data);
    }
}
