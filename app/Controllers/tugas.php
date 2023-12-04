<?php

namespace App\Controllers;

class tugas extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Ci-4',
            'tugas' => [
                [
                    'Nama' => 'Nama     : Reyhan Afif Fahri',
                    'Nim' => 'Nim       : 112110032',
                    'Kelas' => 'Kelas   : 5A'
                ]
            ]
        ];
        return view('tugas', $data);
    }
}
