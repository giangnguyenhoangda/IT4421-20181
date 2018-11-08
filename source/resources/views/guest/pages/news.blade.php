@extends('guest.elements.master')

@section('head')
	<link rel="alternate" type="application/rss+xml" title="Dòng thông tin chuyên mục Demo thegioidiong flatsome &raquo; TIN TỨC" href="http://localhost/TGDD/category/tin-tuc-2/feed/" />
@endsection

@section('title')
	Tin tức
@endsection

@section('main')
	<main id="main" class="">
		<div id="content" class="blog-wrapper blog-archive page-wrapper">		
			<div class="row row-large ">
				<div class="post-sidebar large-3 col">
					@include('guest.elements.post-sidebar')
				</div><!-- .post-sidebar -->
				<div class="large-9 col medium-col-first">		  
    				<div id="row-558489663" class="row large-columns-3 medium-columns- small-columns-1 row-masonry" data-packery-options='{"itemSelector": ".col", "gutter": 0, "presentageWidth" : true}'>
  						<div class="col post-item" >
							<div class="col-inner">
								<a href="{{ route('getNew') }}" class="plain">
									<div class="box box-text-bottom box-blog-post has-hover">
            							<div class="box-image" >
  											<div class="image-cover" style="padding-top:56%;">
  												<img width="300" height="172" src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset('uploads/hinh-nen-y-nghia-cho-may-tinh-2_1510719817-300x172.jpg') }}" class="lazy-load attachment-medium size-medium wp-post-image" alt="" srcset="" data-srcset="{{ asset('uploads/hinh-nen-y-nghia-cho-may-tinh-2_1510719817-300x172.jpg') }} 300w, {{ asset('uploads/hinh-nen-y-nghia-cho-may-tinh-2_1510719817.jpg') }} 454w" sizes="(max-width: 300px) 100vw, 300px" />
  											</div>
  						  				</div><!-- .box-image -->
          								<div class="box-text text-left" >
											<div class="box-text-inner blog-post-inner">					
												<h5 class="post-title is-large ">Tải Hình Nền Ý Nghĩa Cho Máy Tính</h5>
												<div class="is-divider"></div>
												<p class="from_the_blog_excerpt ">Những bạn đang có tâm trạng sâu lắng, dạt dào cảm xúc thì đừng bỏ [...]</p>
					                            <p class="from_the_blog_comments uppercase is-xsmall">1 Comment</p>
                    						</div><!-- .box-text-inner -->
										</div><!-- .box-text -->
										<div class="badge absolute top post-date badge-square">
											<div class="badge-inner">
												<span class="post-date-day">09</span>
												<br>
												<span class="post-date-month is-xsmall">Th3</span>
											</div>
										</div>
									</div><!-- .box -->
								</a><!-- .link -->
							</div><!-- .col-inner -->
						</div><!-- .col -->
						<div class="col post-item" >
							<div class="col-inner">
								<a href="{{ route('getNew') }}" class="plain">
									<div class="box box-text-bottom box-blog-post has-hover">
            							<div class="box-image" >
  											<div class="image-cover" style="padding-top:56%;">
  												<img width="300" height="172" src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset('uploads/hinh-nen-y-nghia-cho-may-tinh-2_1510719817-300x172.jpg') }}" class="lazy-load attachment-medium size-medium wp-post-image" alt="" srcset="" data-srcset="{{ asset('uploads/hinh-nen-y-nghia-cho-may-tinh-2_1510719817-300x172.jpg') }} 300w, {{ asset('uploads/hinh-nen-y-nghia-cho-may-tinh-2_1510719817.jpg') }} 454w" sizes="(max-width: 300px) 100vw, 300px" />
  											</div>
  						  				</div><!-- .box-image -->
          								<div class="box-text text-left" >
											<div class="box-text-inner blog-post-inner">					
												<h5 class="post-title is-large ">Tải Hình Nền Ý Nghĩa Cho Máy Tính</h5>
												<div class="is-divider"></div>
												<p class="from_the_blog_excerpt ">Những bạn đang có tâm trạng sâu lắng, dạt dào cảm xúc thì đừng bỏ [...]</p>
					                            <p class="from_the_blog_comments uppercase is-xsmall">1 Comment</p>
                    						</div><!-- .box-text-inner -->
										</div><!-- .box-text -->
										<div class="badge absolute top post-date badge-square">
											<div class="badge-inner">
												<span class="post-date-day">09</span>
												<br>
												<span class="post-date-month is-xsmall">Th3</span>
											</div>
										</div>
									</div><!-- .box -->
								</a><!-- .link -->
							</div><!-- .col-inner -->
						</div><!-- .col -->
						<div class="col post-item" >
							<div class="col-inner">
								<a href="{{ route('getNew') }}" class="plain">
									<div class="box box-text-bottom box-blog-post has-hover">
            							<div class="box-image" >
  											<div class="image-cover" style="padding-top:56%;">
  												<img width="300" height="172" src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset('uploads/hinh-nen-y-nghia-cho-may-tinh-2_1510719817-300x172.jpg') }}" class="lazy-load attachment-medium size-medium wp-post-image" alt="" srcset="" data-srcset="{{ asset('uploads/hinh-nen-y-nghia-cho-may-tinh-2_1510719817-300x172.jpg') }} 300w, {{ asset('uploads/hinh-nen-y-nghia-cho-may-tinh-2_1510719817.jpg') }} 454w" sizes="(max-width: 300px) 100vw, 300px" />
  											</div>
  						  				</div><!-- .box-image -->
          								<div class="box-text text-left" >
											<div class="box-text-inner blog-post-inner">					
												<h5 class="post-title is-large ">Tải Hình Nền Ý Nghĩa Cho Máy Tính</h5>
												<div class="is-divider"></div>
												<p class="from_the_blog_excerpt ">Những bạn đang có tâm trạng sâu lắng, dạt dào cảm xúc thì đừng bỏ [...]</p>
					                            <p class="from_the_blog_comments uppercase is-xsmall">1 Comment</p>
                    						</div><!-- .box-text-inner -->
										</div><!-- .box-text -->
										<div class="badge absolute top post-date badge-square">
											<div class="badge-inner">
												<span class="post-date-day">09</span>
												<br>
												<span class="post-date-month is-xsmall">Th3</span>
											</div>
										</div>
									</div><!-- .box -->
								</a><!-- .link -->
							</div><!-- .col-inner -->
						</div><!-- .col -->
						<div class="col post-item" >
							<div class="col-inner">
								<a href="{{ route('getNew') }}" class="plain">
									<div class="box box-text-bottom box-blog-post has-hover">
            							<div class="box-image" >
  											<div class="image-cover" style="padding-top:56%;">
  												<img width="300" height="172" src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset('uploads/hinh-nen-y-nghia-cho-may-tinh-2_1510719817-300x172.jpg') }}" class="lazy-load attachment-medium size-medium wp-post-image" alt="" srcset="" data-srcset="{{ asset('uploads/hinh-nen-y-nghia-cho-may-tinh-2_1510719817-300x172.jpg') }} 300w, {{ asset('uploads/hinh-nen-y-nghia-cho-may-tinh-2_1510719817.jpg') }} 454w" sizes="(max-width: 300px) 100vw, 300px" />
  											</div>
  						  				</div><!-- .box-image -->
          								<div class="box-text text-left" >
											<div class="box-text-inner blog-post-inner">					
												<h5 class="post-title is-large ">Tải Hình Nền Ý Nghĩa Cho Máy Tính</h5>
												<div class="is-divider"></div>
												<p class="from_the_blog_excerpt ">Những bạn đang có tâm trạng sâu lắng, dạt dào cảm xúc thì đừng bỏ [...]</p>
					                            <p class="from_the_blog_comments uppercase is-xsmall">1 Comment</p>
                    						</div><!-- .box-text-inner -->
										</div><!-- .box-text -->
										<div class="badge absolute top post-date badge-square">
											<div class="badge-inner">
												<span class="post-date-day">09</span>
												<br>
												<span class="post-date-month is-xsmall">Th3</span>
											</div>
										</div>
									</div><!-- .box -->
								</a><!-- .link -->
							</div><!-- .col-inner -->
						</div><!-- .col -->
						<div class="col post-item" >
							<div class="col-inner">
								<a href="{{ route('getNew') }}" class="plain">
									<div class="box box-text-bottom box-blog-post has-hover">
            							<div class="box-image" >
  											<div class="image-cover" style="padding-top:56%;">
  												<img width="300" height="172" src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset('uploads/hinh-nen-y-nghia-cho-may-tinh-2_1510719817-300x172.jpg') }}" class="lazy-load attachment-medium size-medium wp-post-image" alt="" srcset="" data-srcset="{{ asset('uploads/hinh-nen-y-nghia-cho-may-tinh-2_1510719817-300x172.jpg') }} 300w, {{ asset('uploads/hinh-nen-y-nghia-cho-may-tinh-2_1510719817.jpg') }} 454w" sizes="(max-width: 300px) 100vw, 300px" />
  											</div>
  						  				</div><!-- .box-image -->
          								<div class="box-text text-left" >
											<div class="box-text-inner blog-post-inner">					
												<h5 class="post-title is-large ">Tải Hình Nền Ý Nghĩa Cho Máy Tính</h5>
												<div class="is-divider"></div>
												<p class="from_the_blog_excerpt ">Những bạn đang có tâm trạng sâu lắng, dạt dào cảm xúc thì đừng bỏ [...]</p>
					                            <p class="from_the_blog_comments uppercase is-xsmall">1 Comment</p>
                    						</div><!-- .box-text-inner -->
										</div><!-- .box-text -->
										<div class="badge absolute top post-date badge-square">
											<div class="badge-inner">
												<span class="post-date-day">09</span>
												<br>
												<span class="post-date-month is-xsmall">Th3</span>
											</div>
										</div>
									</div><!-- .box -->
								</a><!-- .link -->
							</div><!-- .col-inner -->
						</div><!-- .col -->
					</div>
				</div> <!-- .large-9 -->
			</div><!-- .row -->
		</div><!-- .page-wrapper .blog-wrapper -->
	</main><!-- #main -->
@endsection

@section('script')
	<script type='text/javascript' src='{{ asset('themes/flatsome/assets/libs/packery.pkgd.min.js?ver=3.5.3') }}'></script>
@endsection