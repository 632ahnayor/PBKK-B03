<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function project() {
        return view('project');
    }

    public function kalkulator($angka1, $angka2, $operasi) {
        if ($operasi=='tambah') {
            $hasil = $angka1 + $angka2;
        } elseif ($operasi=='kurang') {
            $hasil = $angka1 - $angka2;
        } elseif ($operasi=='kali') {
            $hasil = $angka1 * $angka2;
        } elseif ($operasi=='bagi') {
            $hasil = $angka1 / $angka2;
        } elseif ($operasi=='modulo') {
            $hasil = $angka1 % $angka2;
        } elseif ($operasi=='pangkat') {
            $hasil = $angka1 ** $angka2;
        };
        
        return view('kalkulator', [
            'angka1' => $angka1,
            'angka2' => $angka2,
            'operasi' => $operasi,
            'hasil' => $hasil
        ]);    
    }
}
