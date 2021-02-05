<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
        //
        public function login()
        {
            #code
            return view('login');
        }
        public function home()
        {
            #code
            return view('home');
        }
        public function suratmasuk()
        {
            #code
            return view('admin/suratmasuk');
        }

        public function suratkeluar()
        {
            #code
            return view('admin/suratkeluar');
        }
        public function masuk()
        {
            #code
            return view('admin/masuk');
        }
        public function keluar()
        {
            #code
            return view('admin/keluar');
        }
        public function editmasuk()
        {
            #code
            return view('admin/editmasuk');
        }
        public function editkeluar()
        {
            #code
            return view('admin/editkeluar');
        }
}
