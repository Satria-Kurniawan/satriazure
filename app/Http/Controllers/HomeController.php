<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('/home');
    }

    public function about()
    {
        return view('/about');
    }

    public function content()
    {
        $angkapertama = "";
        $angkakedua = "";
        $hasil = "";
        $deret = "";
        $jumlahderet = "";

        if (isset($_GET['submit'])) {

            $angkapertama = $_GET["angkapertama"];
            $angkakedua = $_GET["angkakedua"];
            $jumlahderet = $_GET["jumlahderet"];

            $a = $angkapertama;
            $b = $angkakedua;
            $n = $jumlahderet;

            $deret = $a . ", " . $b;
            for ($i = 0; $i < $n - 2; $i++) {

                $hasil = $a + $b;

                $a = $b;
                $b = $hasil;
                $deret = $deret . ", " . $hasil;
            }
        }
        return view('/content', compact('angkapertama', 'angkakedua', 'jumlahderet', 'deret'));
    }
}
