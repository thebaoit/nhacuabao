<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use DB;
use Auth;
use Imageupload;
use Input;
use Config;
use File;

use App\Models\Article;
use App\Models\Category;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminBaseController extends Controller
{
	public function insert()
	{
		$inputs = Request::all();
		$f_image = Input::file('f_image');

		if(isset($inputs['submit']))
		{
			$article_item = new Article();
			$article_item->name				= $inputs['title'];
			$article_item->slug         	= str_slug($inputs['title']);
			$article_item->meta_title		= $inputs['meta_title'];
			$article_item->meta_keywords	= $inputs['meta_keywords'];
			$article_item->meta_description	= $inputs['meta_description'];
			$article_item->category_id		= $inputs['category'];
			$article_item->tags				= $inputs['tags'];
			$article_item->content			= $inputs['content'];
			$article_item->user_id			= Auth::id();

			if (!is_null($f_image)) {
				$result = Imageupload::upload($f_image);
				$article_item->image 		= $result['filename'];
			}
			$article_item->save();
			//update status
			$status = $inputs['status'];
			if ($status == 0) 
			{
				$article_item->restore();
			}
			elseif ($status == 1) 
			{ 
				$article_item->delete();
			}

			$category_slug = Category::find($inputs['category'])['slug'];
			return Redirect('admin/'.$category_slug);
		}

		$category_slug = Request::segment(2);
		$this->data['category_slug'] = $category_slug;
		$category_name = Category::where('slug', $category_slug)->first()->name;
		$this->data['categories'] = Category::withTrashed()->get();

		$this->data['_title'] = $category_name;
		$this->data['page_heading'] = $category_name." -> Đăng bài mới";
		return view('admintpl.article-create')->with($this->data);

	}

	public function update()
	{
		$id = Request::segment(4);
		$category_slug = Request::segment(2);
		$this->data['category_slug'] = $category_slug;
		$category_name = Category::where('slug', $category_slug)->first()->name;
		$this->data['categories'] = Category::withTrashed()->get();

		$inputs = Request::all();
		$f_image = Input::file('f_image');
		$path = Config::get('imageupload.path');
		$article_item = Article::withTrashed()->where('id', $id)->first();
		if(isset($inputs['submit']))
		{
			$article_item->name				= $inputs['title'];
			$article_item->slug         	= str_slug($inputs['title']);
			$article_item->meta_title		= $inputs['meta_title'];
			$article_item->meta_keywords	= $inputs['meta_keywords'];
			$article_item->meta_description	= $inputs['meta_description'];
			$article_item->category_id		= $inputs['category'];
			$article_item->tags				= $inputs['tags'];
			$article_item->content			= $inputs['content'];
			$article_item->user_id			= Auth::id();

			if (!is_null($f_image)) 
			{
				if($article_item->image != NULL)
				{
					File::delete($path."/".$article_item->image);
					File::delete($path."/thumb_200/".$article_item->image);
					File::delete($path."/medium_600/".$article_item->image);
				}
				$result = Imageupload::upload($f_image);
				$article_item->image 		= $result['filename'];
			}
			$article_item->save();
			//update status
			$status = $inputs['status'];
			if ($status == 0) 
			{
				$article_item->restore();
			}
			elseif ($status == 1) 
			{ 
				$article_item->delete();
			}

			$category_slug = Category::find($inputs['category'])['slug'];
			return Redirect('admin/'.$category_slug);
		}

		$this->data['article_item'] = $article_item;

		$this->data['_title'] = $article_item->name ." | ". $category_name;
		$this->data['page_heading'] = $category_name." -> Sửa bài";
		return view('admintpl.article-create')->with($this->data);
	}

	public function delete()
	{
		$id = Input::get('id', 0);
		$article_item = Article::withTrashed()->where('id', $id)->first();

		if (!is_null($article_item)) {

			if($article_item->image != NULL)
			{
				File::delete($path."/".$article_item->image);
				File::delete($path."/thumb_200/".$article_item->image);
				File::delete($path."/medium_600/".$article_item->image);
			}
			$article_item->forceDelete();

			return "true";
		}

		return "false";
	}
}