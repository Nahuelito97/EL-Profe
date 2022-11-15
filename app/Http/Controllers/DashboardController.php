<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        $students =Students::count();
       /* $posts = Post::orderBy('id', 'ASC')->paginate(10);
        $postCount = Post::all()->count();
        $categoryCount = Category::all()->count();
        $tagCount = Tag::all()->count();
        $userCount = User::all()->count();

        //$query = $this->addFilter($query, $filters, 'name', 'like');

*/

        return view('admin.dashboard.index', compact('students'));
    }
}
