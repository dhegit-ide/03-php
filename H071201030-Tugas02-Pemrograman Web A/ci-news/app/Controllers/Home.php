<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Home | Portal Berita Codeigniter'
        ];
        return view('welcome_message', $data);
    }
}
