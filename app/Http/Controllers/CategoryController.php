<?php
namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return $categories;
    }

    public function show($id)
    {
        $category = Category::find($id);
        return $category;
    }

    public function create(){

    }
    public function store(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function delete(){

    }

}
