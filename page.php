<?php
namespace App\Controllers;
class Page extends BaseController
{
public function artikel()
{
    return view('artikel', [
        'title' => 'Halaman artikel',
       'content' => 'Ini adalah halaman kontak yang menjelaskan tentang Artikel PHP.'
    ]);
}
 public function about()
 {
     return view('about', [
         'title' => 'Halaman About',
        'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi halaman ini.'
     ]);
    
    
 }
 public function contact()
 {
    return view('contact', [
        'title' => 'Halaman Kontak',
       'content' => 'Ini adalah halaman kontak yang menjelaskan tentang kontak seseorang.'
    ]);
 }
 public function faqs()
 {
    echo "Ini halaman FAQ";
 }
 public function tos()
{
    echo "ini halaman Term of Services";
}
}
