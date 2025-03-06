<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Menampilkan pesan Welcome
    public function index()
    {
        return "Welcome";
    }

    // Menampilkan Nama dan NIM
    public function about()
    {
        return "Name: John Doe <br> NIM: 12345678";
    }

    // Menampilkan Halaman Artikel berdasarkan ID
    public function articles($id)
    {
        return "Article Page with ID $id";
    }
}
