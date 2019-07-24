<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        $topics = Topic::with('user', 'category')->where('category_id', $category->id)->paginate();

        return view('topics.index', compact('topics', 'category'));
    }
}
