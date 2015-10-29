@extends('admintpl.layouts.dashboard')
@section('page_heading',(isset($page_heading) ? $page_heading : 'Bảng quản trị'))
@section('section')
<div class="col-sm-12">
	<form role="form" action="{{ Request::url() }}" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="id" value="{{ (isset($article_item['id']) ? $article_item['id'] : old('id')) }}">
		<div class="form-group">
			<label>Meta Tiêu đề</label>
			<input class="form-control" name="meta_title" value="{{ (isset($article_item['meta_title']) ? $article_item['meta_title'] : old('meta_title')) }}" placeholder="(optional)">
		</div>
		<div class="form-group">
			<label>Meta Từ khoá</label>
			<input class="form-control" name="meta_keywords" value="{{ (isset($article_item['meta_keywords']) ? $article_item['meta_keywords'] : old('meta_keywords')) }}" placeholder="(optional)">
		</div>
		<div class="form-group">
			<label>Meta Mô tả</label>
			<textarea class="form-control" name="meta_description" rows="3">{{ (isset($article_item['meta_description']) ? $article_item['meta_description'] : old('meta_description')) }}</textarea>
		</div>
		<div class="form-group">
			<label>Tiêu đề</label>
			<input class="form-control" name="title" value="{{ (isset($article_item['name']) ? $article_item['name'] : old('title')) }}" required placeholder="(optional)">
		</div>
		<div class="form-group">
			<label>Nội dung</label>
			<textarea class="form-control" name="content" rows="3">{{ (isset($article_item['content']) ? $article_item['content'] : old('content')) }}</textarea>
		</div>
		@if(isset($article_item['image']))
		@if($article_item['image'] != NULL)
		<div class="form-group">
			<label>Hình đã đăng</label>
			<img style="height:150px" class="img-responsive" src="{{ asset('uploads/images/medium_600/'.$article_item['image']) }}">
		</div>
		@endif
		@endif
		<div class="form-group">
			<label>Hình ảnh</label>
			<input type="file" name="f_image">
		</div>
		<div class="form-group">
			<label>Tình trạng</label>
			<div class="radio">
				<label>
					<input type="radio" name="status" {{ (isset($article_item['deleted_at']) ? (is_null($article_item['deleted_at']) ? 'checked' : '') : '') }} id="optionsRadios1" value="0" checked="">Xuất bản
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="status" {{ (isset($article_item['deleted_at']) ? (!is_null($article_item['deleted_at']) ? 'checked' : '') : '') }} id="optionsRadios2" value="1">Chờ duyệt
				</label>
			</div>
		</div>
		<div class="form-group">
			<label>Danh mục</label>
			<select class="form-control" name="category">
				@foreach($categories as $item)
				<option {{ $category_slug == $item['slug'] ? 'selected' : '' }} value="{{ $item['id'] }}">{{ $item['name'] }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label>Từ khoá</label>
			<input class="form-control" name="tags" value="{{ (isset($article_item['tags']) ? $article_item['tags'] : old('tags')) }}" placeholder="(optional)">
		</div>
		<input type="submit" name="submit" class="btn btn-default" value="Xuất bản" />
		<br/><br/><br/>
	</form>
</div>
<script>
	var editor = CKEDITOR.replace( 'content' );
	CKFinder.setupCKEditor( editor ) ;
</script>
@stop