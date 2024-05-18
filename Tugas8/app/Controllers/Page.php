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

    public function tos()
    {
        echo "Halaman Trem of Service";
    }

    public function biodata()
    {
        echo "Nama   : Barani Nursaid";
        echo "Status : Mahasiswa";
        echo "Kelamin: Laki-laki";
        echo "Agama  : Islam";
        echo "Umur   : 21";
        echo "Alamat : Palembang";
    }
}