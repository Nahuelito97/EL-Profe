<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
       /* $posts = Post::orderBy('id', 'ASC')->paginate(10);
        $postCount = Post::all()->count();
        $categoryCount = Category::all()->count();
        $tagCount = Tag::all()->count();
        $userCount = User::all()->count();

        //$query = $this->addFilter($query, $filters, 'name', 'like');

*/

        return view('admin.dashboard.index');
    }
}
