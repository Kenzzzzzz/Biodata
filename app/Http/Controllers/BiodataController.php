<?php
// BiodataController.php

public function index()
{
    $biodata = [
        'nama' => 'Nama Anda',
        'npm' => 'NPM Anda',
        'alamat' => 'Alamat Anda',
        // Tambahkan data biodata lainnya di sini
    ];

    return view('biodata', ['biodata' => $biodata]);
}