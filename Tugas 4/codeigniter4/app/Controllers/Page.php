<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "faqs page";
    }

    public function tes()
    {
        echo "Halaman Pengetes";
    }

    public function Biodata()
    {
        echo "Nama      :Achmad Zamroni </br>";
        echo "Nim       :4122055 </br>";
        echo "Kelamin   :Laki-laki </br>";
        echo "Agama     :Islam </br>";
        echo "Alamat    :Pajaran </br>";
    }
}
