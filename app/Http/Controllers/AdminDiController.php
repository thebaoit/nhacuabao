<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use DB;
use Auth;
use Imageupload;
use Input;

use App\Models\Article;
use App\Models\Category;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminDiController extends Controller
{

	public function index()
	{
		$category_slug = Request::segment(2);
		$this->data['category_slug'] = $category_slug;
		$categories = Category::where('slug', $category_slug)->first();
		$this->data['categories'] = Category::withTrashed()->get();

		$name = Input::get('name', '');
		$category_id = Input::get('category_id', $categories['id']);
		$view = Input::get('view', '');
		$user_id = Input::get('user_id', 0);
		$id = Input::get('id', 0);
		$whereRaw = "";
		if ($id > 0) {
			$whereRaw = 'id = '.$id;
		}
		$status = Input::get('status', -1);

		$this->data['article_items'] = Article::get_items($name, $category_id, $view, $whereRaw, "updated_at DESC", $user_id, $status, 10);

		$this->data['name'] = $name;
		$this->data['category_id'] = $category_id;
		$this->data['view'] = $view;
		$this->data['user_id'] = $user_id;
		$this->data['id'] = $id;
		$this->data['status'] = $status;
		
		$this->data['_title'] = "Tui Đi";
		$this->data['page_heading'] = "Tui Đi";
		return view('admintpl.article-list')->with($this->data);
	}
    
}
