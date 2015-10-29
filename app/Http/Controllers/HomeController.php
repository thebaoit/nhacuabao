<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

use App\Models\Article;
use App\Models\Category;

use App\Http\Controllers\Controller;

class HomeController extends Controller {

	public function index()
	{
		$this->data['article_items'] = Article::get_items("", 0, "", "", "created_at DESC", 0, 0, 10);
		$this->data['category_items'] = Category::get_items(0, "", 0, 0, "");
		$tag_items = Article::get_tags();
		$string_tags = "";
		foreach($tag_items as $item)
		{
			$string_tags .= ",".$item->tags;
		}

		$array_tags = explode(",", $string_tags);
		$this->data['array_tags'] = $array_tags;

		$this->data['_title'] = "Nhà của Bảo | Nhà tui nè ! ";
		$this->data['_keywords'] = "";
		$this->data['_description'] = "";
		return view('frontend/index')->with($this->data);
	}

	public function category()
	{
		echo "";
		print("aaaa");
	}

	public function detail()
	{
		echo "bbbb";
	}

}
