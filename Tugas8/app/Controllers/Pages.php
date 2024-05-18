<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Unipdu Press',
            //'tes' => ['satu', 'dua', 'tiga']
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'about | Unipdu Press',
            //'tes' => ['satu', 'dua', 'tiga']
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Hubungi Kami | Unipdu Press',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'jl jombang no 31',
                    'kota' => 'Jombang'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Perum Darul Ulum',
                    'kota' => 'Jombang'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}