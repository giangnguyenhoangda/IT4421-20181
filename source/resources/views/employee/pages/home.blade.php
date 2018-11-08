@extends('employee.elements.master')
@section('title')
	Trang Quản Lý
@endsection
@section('content')
	<!-- Dashboard content -->
					<div class="row">

						<div class="col-lg-4">

							<!-- Daily sales -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Mua Hàng Gần Đây</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li class="dropdown text-muted">
					                			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-sync"></i> Cập nhật</a></li>
													<li><a href="#"><i class="icon-list-unordered"></i> Xem Danh Sách</a></li>
												</ul>
					                		</li>
					                	</ul>
									</div>
								</div>

								<div class="table-responsive">
									<table class="table text-nowrap">
										<thead>
											<tr>
												<th>Tên</th>
												<th>Thời Gian</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#" class="btn bg-primary-400 btn-rounded btn-icon btn-xs">
															<span class="letter-icon"></span>
														</a>
													</div>

													<div class="media-body">
														<div class="media-heading">
															<a href="#" class="letter-icon-title">Nguyễn Hoàng Giang</a>
														</div>

														<div class="text-muted text-size-small"><i class="icon-checkmark3 text-size-mini position-left"></i> Mã: XXXXX</div>
													</div>
												</td>
												<td>
													<span class="text-muted text-size-small">06:28 pm</span>
												</td>
											</tr>

											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#" class="btn bg-danger-400 btn-rounded btn-icon btn-xs">
															<span class="letter-icon"></span>
														</a>
													</div>

													<div class="media-body">
														<div class="media-heading">
															<a href="#" class="letter-icon-title">Nguyễn Hoàng Giang</a>
														</div>

														<div class="text-muted text-size-small"><i class="icon-spinner11 text-size-mini position-left"></i> Mã: XXXXX</div>
													</div>
												</td>
												<td>
													<span class="text-muted text-size-small">04:52 pm</span>
												</td>
											</tr>

											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#" class="btn bg-indigo-400 btn-rounded btn-icon btn-xs">
															<span class="letter-icon"></span>
														</a>
													</div>

													<div class="media-body">
														<div class="media-heading">
															<a href="#" class="letter-icon-title">Nguyễn Hoàng Giang</a>
														</div>

														<div class="text-muted text-size-small"><i class="icon-lifebuoy text-size-mini position-left"></i> Mã: XXXXX</div>
													</div>
												</td>
												<td>
													<span class="text-muted text-size-small">01:26 pm</span>
												</td>
											</tr>

											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs">
															<span class="letter-icon"></span>
														</a>
													</div>

													<div class="media-body">
														<div class="media-heading">
															<a href="#" class="letter-icon-title">Nguyễn Hoàng Giang</a>
														</div>

														<div class="text-muted text-size-small"><i class="icon-lifebuoy text-size-mini position-left"></i> Mã: XXXXX</div>
													</div>
												</td>
												<td>
													<span class="text-muted text-size-small">11:46 am</span>
												</td>
											</tr>

											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#" class="btn bg-danger-400 btn-rounded btn-icon btn-xs">
															<span class="letter-icon"></span>
														</a>
													</div>

													<div class="media-body">
														<div class="media-heading">
															<a href="#" class="letter-icon-title">Nguyễn Hoàng Giang</a>
														</div>

														<div class="text-muted text-size-small"><i class="icon-spinner11 text-size-mini position-left"></i> Mã: XXXXX</div>
													</div>
												</td>
												<td>
													<span class="text-muted text-size-small">10:29 am</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- /daily sales -->

						</div>

						<div class="col-lg-8">

							<!-- Latest posts -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Bài Đăng Gần Đây</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
			                	</div>

								<div class="panel-body">
									<div class="row">
										<div class="col-lg-6">
											<ul class="media-list content-group">
												<li class="media stack-media-on-mobile">
				                					<div class="media-left">
														<div class="thumb">
															<a href="#">
																<img src="{{ asset('uploads/s_800x449.jpg') }}" class="img-responsive img-rounded media-preview" alt="">
																<span class="zoom-image"><i class="icon-play3"></i></span>
															</a>
														</div>
													</div>

				                					<div class="media-body">
														<h6 class="media-heading"><a href="#">Microsoft sẽ cho phép gỡ cài đặt ứng dụng hệ thống trên Windows 10</a></h6>
							                    		<ul class="list-inline list-inline-separate text-muted mb-5">
							                    			<li><i class="icon-book-play position-left"></i> Chia sẻ</li>
							                    			<li>14 phút trước</li>
							                    		</ul>
														Bản cập nhật tiếp theo của Windows 10 với tên mã là 19H1, dự kiến ​​phát hành vào khoảng tháng 4/2019...
													</div>
												</li>

												<li class="media stack-media-on-mobile">
				                					<div class="media-left">
														<div class="thumb">
															<a href="#">
																<img src="{{ asset('uploads/s_800x449.jpg') }}" class="img-responsive img-rounded media-preview" alt="">
																<span class="zoom-image"><i class="icon-play3"></i></span>
															</a>
														</div>
													</div>

				                					<div class="media-body">
														<h6 class="media-heading"><a href="#">Microsoft sẽ cho phép gỡ cài đặt ứng dụng hệ thống trên Windows 10</a></h6>
							                    		<ul class="list-inline list-inline-separate text-muted mb-5">
							                    			<li><i class="icon-book-play position-left"></i> Chia sẻ</li>
							                    			<li>14 phút trước</li>
							                    		</ul>
														Bản cập nhật tiếp theo của Windows 10 với tên mã là 19H1, dự kiến ​​phát hành vào khoảng tháng 4/2019...
													</div>
												</li>

												<li class="media stack-media-on-mobile">
				                					<div class="media-left">
														<div class="thumb">
															<a href="#">
																<img src="{{ asset('uploads/s_800x449.jpg') }}" class="img-responsive img-rounded media-preview" alt="">
																<span class="zoom-image"><i class="icon-play3"></i></span>
															</a>
														</div>
													</div>

				                					<div class="media-body">
														<h6 class="media-heading"><a href="#">Microsoft sẽ cho phép gỡ cài đặt ứng dụng hệ thống trên Windows 10</a></h6>
							                    		<ul class="list-inline list-inline-separate text-muted mb-5">
							                    			<li><i class="icon-book-play position-left"></i> Chia sẻ</li>
							                    			<li>14 phút trước</li>
							                    		</ul>
														Bản cập nhật tiếp theo của Windows 10 với tên mã là 19H1, dự kiến ​​phát hành vào khoảng tháng 4/2019...
													</div>
												</li>
											</ul>
										</div>

										<div class="col-lg-6">
											<ul class="media-list content-group">
												<li class="media stack-media-on-mobile">
				                					<div class="media-left">
														<div class="thumb">
															<a href="#">
																<img src="{{ asset('uploads/s_800x449.jpg') }}" class="img-responsive img-rounded media-preview" alt="">
																<span class="zoom-image"><i class="icon-play3"></i></span>
															</a>
														</div>
													</div>

				                					<div class="media-body">
														<h6 class="media-heading"><a href="#">Microsoft sẽ cho phép gỡ cài đặt ứng dụng hệ thống trên Windows 10</a></h6>
							                    		<ul class="list-inline list-inline-separate text-muted mb-5">
							                    			<li><i class="icon-book-play position-left"></i> Chia sẻ</li>
							                    			<li>14 phút trước</li>
							                    		</ul>
														Bản cập nhật tiếp theo của Windows 10 với tên mã là 19H1, dự kiến ​​phát hành vào khoảng tháng 4/2019...
													</div>
												</li>

												<li class="media stack-media-on-mobile">
				                					<div class="media-left">
														<div class="thumb">
															<a href="#">
																<img src="{{ asset('uploads/s_800x449.jpg') }}" class="img-responsive img-rounded media-preview" alt="">
																<span class="zoom-image"><i class="icon-play3"></i></span>
															</a>
														</div>
													</div>

				                					<div class="media-body">
														<h6 class="media-heading"><a href="#">Microsoft sẽ cho phép gỡ cài đặt ứng dụng hệ thống trên Windows 10</a></h6>
							                    		<ul class="list-inline list-inline-separate text-muted mb-5">
							                    			<li><i class="icon-book-play position-left"></i> Chia sẻ</li>
							                    			<li>14 phút trước</li>
							                    		</ul>
														Bản cập nhật tiếp theo của Windows 10 với tên mã là 19H1, dự kiến ​​phát hành vào khoảng tháng 4/2019...
													</div>
												</li>

												<li class="media stack-media-on-mobile">
				                					<div class="media-left">
														<div class="thumb">
															<a href="#">
																<img src="{{ asset('uploads/s_800x449.jpg') }}" class="img-responsive img-rounded media-preview" alt="">
																<span class="zoom-image"><i class="icon-play3"></i></span>
															</a>
														</div>
													</div>

				                					<div class="media-body">
														<h6 class="media-heading"><a href="#">Microsoft sẽ cho phép gỡ cài đặt ứng dụng hệ thống trên Windows 10</a></h6>
							                    		<ul class="list-inline list-inline-separate text-muted mb-5">
							                    			<li><i class="icon-book-play position-left"></i> Chia sẻ</li>
							                    			<li>14 phút trước</li>
							                    		</ul>
														Bản cập nhật tiếp theo của Windows 10 với tên mã là 19H1, dự kiến ​​phát hành vào khoảng tháng 4/2019...
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>

							</div>
							<!-- /latest posts -->

						</div>
					</div>
					<!-- /dashboard content -->
@endsection