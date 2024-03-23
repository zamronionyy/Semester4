<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Unipdu Press',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'Tentang | Unipdu Press'
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
                    'alamat' => 'Pajaran Peterongan Jombang',
                    'kota' => 'Jombang'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Darul ulum jombang',
                    'kota' => 'Jombang'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
