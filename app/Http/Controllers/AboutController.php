<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(){
        $address = "123 เชียงใหม่, กรุงเทพ";
        $tel     = "06x-xxx-xxxx";
        $email   = "ko12@gmail.com";
        return view('about')
        ->with('address', $address)
        ->with('tel', $tel)
        ->with('email', $email)
        ->with('error', '404 Not Found หาข้อมูลไม่เจอ')
        ->with('status', 'บันทึกข้อมูลเรียบร้อยนะครับ');
    }
}
