<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index()
    {
        $categories = Post::all();
        return $categories;
    }

    public function show($id)
    {
        $category = Post::find($id);
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
