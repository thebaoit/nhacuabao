@extends('admintpl.layouts.dashboard')
@section('page_heading',(isset($page_heading) ? $page_heading : 'Bảng quản trị'))
@section('section')
<div class="col-sm-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				<a href="{{ url('admin/'.Request::segment(2).'/tao-moi') }}" class="btn btn-success">Tạo mới</a>
			</h3>
		</div>
	</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Thể loại</th>
				<th>Nội dung</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@if(isset($article_items))
			@foreach($article_items as $item)
			<tr>
				<td>{{ $item->id }}</td>
				<td>{{ $item->name }}</td>
				<td>{{ $item->content }}</td>
				<th><i class="fa fa-check"></i> <i class="fa fa-edit"> <i class="fa fa-times"></i></th>
			</tr>
			@endforeach
			@endif
		</tbody>
	</table>
</div>
@stop