@extends('frontend.layouts.layout')
@section('section')
<div class="nopadding">
	<header>
		<div class="nav_menu">
			<div class="menu container">
				<ul id="nav-menus">
					<li class="item"><a href="{{ URL::to('') }}">Nhà tui</a></li>
					<li class="item"><a href="{{ URL::to('ve-tui-day') }}">Về tui đây</a></li>
					<li class="item"><a href="{{ URL::to('tui-binh-loan') }}">Tui bình loạn</a></li>
					<li class="item"><a href="{{ URL::to('lien-he-tui-di') }}">Liên hệ tui đi</a></li>
				</ul>
				<ul id="nav-social" class="pull-right">
					<li class="item">Tìm tui trên</li>
					<li class="item social"><a target="_blank" href="http://facebook.com/thebaoit"><img src="{{ asset('images/fb.png') }}"></a></li>
					<li class="item social"><a href="#"><img src="{{ asset('images/twiter.png') }}"></a></li>
					<li class="item social"><a target="_blank" href="http://instagram.com/thebaoit/"><img src="{{ asset('images/instagram.png') }}"></a></li>
					<li id="search" class="item search">
						<form action="{{ URL::to('search') }}" method="get" accept-charset="utf-8" enctype="multipart/form-data">
							<input type="text" class="search_text" name="keyword" value="" placeholder="Tìm bài viết của tui...">
							<input type="submit" class="search_button" name="" value="">
						</form>
					</li>
				</ul>
			</div>
		</div>
		<div class="logo_area">
			<h1 class="logo"><a href="{{ URL::to('') }}">nhacuabao.com</a></h1>
			<h2 class="inner">------------  Lang Thang Trong Nhà TUI Vui Vẻ Nhé  ------------</h2>
		</div>
	</header><!-- /header -->
	<div class="content_area">
		<!-- <div class="main_slide"></div> -->
		<div class="wrapper_content container nopadding">
			<div class="col-md-12 nopadding">
				<div class="left_area col-md-9 nopadding">
					@foreach($article_items as $item)
					<div class="main_content col-md-12 nopadding">
						<div class="show_img_category col-md-1 nopadding"><img class="img-responsive" src="{{ asset('images/'.$item->category["image"]) }}" /></div>
						<div class="show_content col-md-11">
							<h2 class="content_title"><a href="{{ URL::to('detail/'.$item["id"]."-".$item["slug"]) }}" title="{{ $item["name"] }}">{{ $item["name"] }}</a></h2>
							@if($item["image"])
							<div class="content_image">
								<img class="img-home-thumb img-responsive" src="{{ asset('uploads/images/'.$item["image"]) }}" />
							</div>
							@endif
							<div class="content_description">{{ $item["content"] }}</div>
							<div class="content_social">
								<div class="fb">
									<div class="fb-like" data-href="{{ URL::to(''.$item["id"]."-".$item["slug"]) }}" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false">
									</div>
								</div>
								<div class="gp">
									<div class="g-plusone" data-size="medium" data-href="{{ URL::to(''.$item["id"]."-".$item["slug"]) }}"></div>
									<a class="twitter-share-button"
									href="{{ URL::to(''.$item["id"]."-".$item["slug"]) }}"
									data-counturl="{{ URL::to(''.$item["id"]."-".$item["slug"]) }}">
									Tweet</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				<div class="right_area col-md-3">
					<div class="categories_area">
						<h2 class="title_category">Nhóm bài viết của tui ^^</h2>
						<ul>
							@foreach($category_items as $item)
							<li><a href="{{ URL::to($item['slug']) }}"> <i class="fa fa-gg"></i> {{ $item['name'] }}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="tagcloud_area">
						<h2 class="title_category">Tìm bài viết bằng thẻ</h2>
						<ul>
							<?php 
							for($i = 0; $i < count($array_tags); $i++) { 
								if($i != 0) {
									?>
									<li><a href="{{ URL::to('search?keyword='.trim($array_tags[$i])) }}">{{ trim($array_tags[$i]) }}</a></li>
									<?php 
								}
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.content_area -->
</div>
@stop