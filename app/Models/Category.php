<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model {

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $table = 'categories';

	public static function get_items($id = 0, $name = "", $status = 0, $limit = 0, $whereRaw = "")
	{
		$db = Category::where('name', 'LIKE', '%'.$name.'%');
		if($id != 0)
		{
			$db = $db->where('id', $id);
		}
		if ($whereRaw != '') {
			$db = $db->whereRaw($whereRaw);
		}
		if ($status == -1) {
			$db = $db->withTrashed();
		}
		elseif ($status == 1) {
			$db = $db->onlyTrashed();
		}

		if ($limit != 0) {
			return $db->paginate($limit);
		}
		return $db->get();
	}
}