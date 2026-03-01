<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CipherController extends Controller
{
    public function index()
    {
        return view('cipher');
    }

    public function proses(Request $request)
    {
        $teks = $request->teks;
        $kunci = $request->kunci % 26;
        $mode = $request->mode;

        if ($mode == 'enkripsi') {
            $hasil = $this->enkripsi($teks, $kunci);
        } else {
            $hasil = $this->dekripsi($teks, $kunci);
        }

        return view('cipher', compact('hasil'));
    }

    private function enkripsi($teks, $kunci)
    {
        $hasil = "";

        for ($i = 0; $i < strlen($teks); $i++) {
            $huruf = $teks[$i];

            if (ctype_alpha($huruf)) {
                $awal = ctype_upper($huruf) ? 65 : 97;
                $hasil .= chr((ord($huruf) - $awal + $kunci) % 26 + $awal);
            } else {
                $hasil .= $huruf;
            }
        }

        return $hasil;
    }

    private function dekripsi($teks, $kunci)
    {
        $hasil = "";

        for ($i = 0; $i < strlen($teks); $i++) {
            $huruf = $teks[$i];

            if (ctype_alpha($huruf)) {
                $awal = ctype_upper($huruf) ? 65 : 97;
                $hasil .= chr((ord($huruf) - $awal - $kunci + 26) % 26 + $awal);
            } else {
                $hasil .= $huruf;
            }
        }

        return $hasil;
    }
}