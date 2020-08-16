<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index()
    {
        $data = [
            "name" => "Waritsara Sutham",
            "age" => 20,
        ];
        return view("welcome", $data);
    }
}
