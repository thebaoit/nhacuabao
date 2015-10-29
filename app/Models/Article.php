<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Article extends Model {

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $table = 'articles';

	public static function get_items($name = "", $category_id = 0, $view = "", $whereRaw = "", $order = "asc", $user_id = 0, $status = 0, $limit = 0)
	{
		$db = Article::where('name', 'LIKE', '%'.trim($name).'%');
		if($category_id != 0)
		{
			$db = $db->where('category_id', $category_id);
		}
		if($view != "")
		{
			$db = $db->orderBy('view', $view);
		}
		if($whereRaw != "")
		{
			$db = $db->whereRaw($whereRaw);
		}
		if($user_id != 0)
		{
			$db = $db->where('user_id', $user_id);
		}
		if ($status == -1) {
			$db = $db->withTrashed();
		}
		elseif ($status == 1) {
			$db = $db->onlyTrashed();
		}
		if ($order == 'asc' || $order == 'desc') {
			$db = $db->orderBy('id', $order);
		}
		else {
			$db = $db->orderByRaw($order);
		}

		$db = $db->select(DB::raw('*, TIMESTAMPDIFF(HOUR, `updated_at`, NOW()) as `datecount`'));
		//Eager Loading
		$db = $db->with('category', 'user');

		if ($limit != 0) {
			return $db->paginate($limit);
		}

		return $db->get();
	}

	public static function get_item($id = 0)
	{
		if ($id != 0) 
		{
			return Article::where('id', $id)
			->select(DB::raw('*, DATEDIFF(NOW(), `updated_at`) as `datecount`'))
			->with('category', 'user')
			->first();
		}
	}

	public static function get_tags()
	{
		$db = DB::table('articles')
		->whereRaw('deleted_at IS NULL');
		$db = $db->select('tags')->distinct();
		return $db->get();
	}

	/**
	* Relationship n - 1
	*/
	public function category()
	{
		return $this->belongsTo('App\Models\Category', 'category_id', 'id');
	}

	/**
	* Relationship n - 1
	*/
	public function user()
	{
		return $this->belongsTo('App\User', 'user_id', 'id');
	}

}