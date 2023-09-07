<?php 
$version = "1.0.2";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="/_markup/assets/img/favicon.svg" type="image/svg" sizes="32x32">
	<title>Maxima</title>
	<link rel="stylesheet" type="text/css" href="/_markup/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/_markup/assets/owl/owl.carousel.min.css">
	<link rel="stylesheet" href="/_markup/assets/lightbox/jquery.lightbox.css">
	<link rel="stylesheet" type="text/css" href="/_markup/assets/css/main.css?v=<?=$version?>">
	<link rel="stylesheet" type="text/css" href="/_markup/assets/aos/aos.css">
	<link rel="stylesheet" type="text/css" href="/_markup/assets/css/ge.css?v=<?=$version?>">
	<link rel="stylesheet" type="text/css" href="/_markup/assets/css/responsive_ge.css?v=<?=$version?>">
</head>
<body class="product-page">

<div class="modal" tabindex="-1" id="g-auth-register">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="left-side">
        	<div class="g-flex">
        		<h2>გამარჯობა!</h2>
        		<p>გთხოვთ შეიყვანოთ თქვენი მონაცემები</p>

        		<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item" role="presentation">
				    <button class="nav-link active" id="auth-tab" data-bs-toggle="tab" data-bs-target="#auth" type="button" role="tab" aria-controls="auth" aria-selected="true">ავტორიზაცია</button>
				  </li>
				  <li class="nav-item" role="presentation">
				    <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">რეგისტრაცია</button>
				  </li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  <div class="tab-pane fade show active" id="auth" role="tabpanel" aria-labelledby="auth-tab">
				  	<form action="" method="post">
				  		<div class="input-box">
				  			<label>ელ-ფოსტა</label>
				  			<input type="email" name="email" value="">
				  		</div>

				  		<div class="input-box">
				  			<label>პაროლი</label>
				  			<input type="password" name="password" value="">
				  		</div>

				  		<div class="submit-box">
				  			<div class="save-pass">
				  				<label for="checked-save">
				  					<div class="checkbox">
				  						<input type="checkbox" name="checked-save" id="checked-save" value="1">
				  					</div>
				  					<span>პაროლის დამახსოვრება</span>
				  				</label>
				  			</div>

				  			<div class="btns">
				  				<button type="button" class="close">უკან დაბრუნება</button>
				  				<button type="submit" class="submit-auth">ავტორიზაცია</button>
				  			</div>
				  		</div>

				  		<div class="fb-gm-auth-box">
				  			<h3><span>ავტორიზაცია</span></h3>

				  			<div class="auth-btns">
				  				<a href="" class="fb">fb</a>
				  				<a href="" class="gm">gm</a>
				  			</div>
				  		</div>
				  	</form>
				  </div>
				  <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
				  	<form action="" method="post">
				  		<div class="input-box">
				  			<label>ელ-ფოსტა</label>
				  			<input type="email" name="email" value="">
				  		</div>

				  		<div class="input-box">
				  			<label>პაროლი</label>
				  			<input type="password" name="password" value="">
				  		</div>

				  		<div class="input-box">
				  			<label>გაიმეორეთ პაროლი</label>
				  			<input type="password" name="re-password" value="">
				  		</div>

				  		<div class="submit-box">
				  			<div class="save-pass">
				  				<label>
				  					<span>გაქვთ ანგარიში? </span> <a href="javascript:void(0)" onclick="$('#auth-tab').click();">ავტორიზაცია</a>
				  				</label>
				  			</div>

				  			<div class="btns">
				  				<button type="button" class="close">უკან დაბრუნება</button>
				  				<button type="submit" class="submit-auth">ავტორიზაცია</button>
				  			</div>
				  		</div>

				  		<div class="fb-gm-auth-box">
				  			<h3><span>ავტორიზაცია</span></h3>

				  			<div class="auth-btns">
				  				<a href="" class="fb">fb</a>
				  				<a href="" class="gm">gm</a>
				  			</div>
				  		</div>
				  	</form>
				  </div>
				</div>
        	</div>
        </div>
        <div class="right-side">
        	<div class="image-box">
        		<div class="image" style="background-image:url('/_markup/assets/img/tab1.png');">
        			<img src="/_markup/assets/img/tab1.png" alt="" loading="lazy">
        		</div>

        		<button type="button" class="close">close</button>
        	</div>
        </div>

        <script>
        	var tabs = {
        		tab1:'/_markup/assets/img/tab1.png',
        		tab2:'/_markup/assets/img/tab2.png',
        	};
        </script>

        <div class="clearer"></div>
      </div>
    </div>
  </div>
</div>

<header>
	<div class="top">
		<div class="center">
			<div class="address">
				<span>ბაგრატიონის ქ. #109</span>
			</div>

			<ul class="top-menu">
				<li><a href="">სიახლეები</a></li>
				<li><a href="">კონტაქტი</a></li>
			</ul>

			<div class="right">
				<ul class="social">
					<li><a href="" class="facebook">facebook</a></li>
					<li><a href="" class="instagram">instagram</a></li>
					<li><a href="" class="googlePlus">googlePlus</a></li>
					<li><a href="" class="whatsapp">whatsapp</a></li>
				</ul>

				<div class="phone">
					<a href="tel:0422221122">0422 22 11 22</a>
				</div>
			</div>
		</div>
	</div>

	<div class="middle">
		<div class="center">
			<div class="logo">
				<a href="/_markup">logo</a>
			</div>

			<div class="search-box">
				<form action="/_markup" method="post" id="search-form">
					<input type="text" name="keyword" id="keywords" value="" placeholder="ჩაწერეთ სიტყვა ან კოდი">
					<button type="button" id="search-submit">submit</button>
				</form>
			</div>

			<div class="right g-profile-languages">
				<ul>
					<li>
						<a href="" class="favorite">favorite</a>
					</li>

					<li>
						<a href="javascript:void(0)" class="profile">profile</a>
					</li>

					<li>
						<a href="" class="cart">cart</a>
					</li>

					<li>
						<input type="hidden" name="language" id="language" value="ka">
						<a href="" class="language ka">lang</a>
					</li>
				</ul>
			</div>

			<div class="clearer"></div>
		</div>
	</div>
</header>

<div class="bottom g-sticky-menu">
		<div class="center">
			<div class="production-box">
				<div class="production">
					<em></em>
					<span>პროდუქცია</span>
				</div>

				<div class="navigation-box">
					<nav class="main">
						<ul>
							<li><a href="javascript:void(0)" data-type="page1">ავეჯის აქსესუარები</a></li>
							<li><a href="javascript:void(0)" data-type="page2">ავეჯის მასალა</a></li>
							<li><a href="javascript:void(0)" data-type="page3">კარის მასალა</a></li>
							<li><a href="javascript:void(0)" data-type="page4">ჩაშენებული ტექნიკა</a></li>
							<li><a href="javascript:void(0)" data-type="page5">საწარმოს დანადგარები</a></li>
							<li><a href="javascript:void(0)" data-type="page6">მატრასები</a></li>
							<li><a href="javascript:void(0)" data-type="page7">იატაკის ლამინირებული საფარი</a></li>
							<li><a href="javascript:void(0)" data-type="page8">სამზარეულოს ზედაპირის ჩამოსასხმელი ნედლეული</a></li>
							<li><a href="javascript:void(0)" data-type="page9">სერვისი</a></li>
						</ul>
					</nav>

					<div class="sub-category">
						<div class="sub" id="page1">
							<div class="row">
								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>ავეჯის ფეხები</p>
									</a>
								</div>

								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>მაგიდის აქსესუარები</p>
									</a>
								</div>

								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>სამზარეულოს საწურები</p>
									</a>
								</div>

								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>სახელურები</p>
									</a>
								</div>

								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>სახელურები</p>
									</a>
								</div>
							</div>
						</div>

						<div class="sub" id="page2">
							<div class="row">
								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>ავეჯის ფეხები</p>
									</a>
								</div>

								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>მაგიდის აქსესუარები</p>
									</a>
								</div>
							</div>
						</div>

						<div class="sub" id="page3">
							<div class="row">
								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>ავეჯის ფეხები</p>
									</a>
								</div>

								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>მაგიდის აქსესუარები</p>
									</a>
								</div>
							</div>
						</div>

						<div class="sub" id="page4">
							<div class="row">
								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>ავეჯის ფეხები</p>
									</a>
								</div>

								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>მაგიდის აქსესუარები</p>
									</a>
								</div>
							</div>
						</div>

						<div class="sub" id="page5">
							<div class="row">
								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>ავეჯის ფეხები</p>
									</a>
								</div>

								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>მაგიდის აქსესუარები</p>
									</a>
								</div>
							</div>
						</div>

						<div class="sub" id="page6">
							<div class="row">
								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>ავეჯის ფეხები</p>
									</a>
								</div>

								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>მაგიდის აქსესუარები</p>
									</a>
								</div>
							</div>
						</div>

						<div class="sub" id="page7">
							<div class="row">
								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>ავეჯის ფეხები</p>
									</a>
								</div>

								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>მაგიდის აქსესუარები</p>
									</a>
								</div>
							</div>
						</div>

						<div class="sub" id="page8">
							<div class="row">
								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>ავეჯის ფეხები</p>
									</a>
								</div>

								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>მაგიდის აქსესუარები</p>
									</a>
								</div>
							</div>
						</div>

						<div class="sub" id="page9">
							<div class="row">
								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>ავეჯის ფეხები</p>
									</a>
								</div>

								<div class="col-md-3">
									<a href="" class="item">
										<div class="img-box">
											<img src="/_markup/assets/img/cat1.jpg" alt="" loading="lazy">
										</div>
										<p>მაგიდის აქსესუარები</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="additional-menu">
				<ul>
					<li><a href="">პოპულარული პროდუქცია</a></li>
					<li><a href="">რეკომენდირებული ბრენდები</a></li>
				</ul>
			</div>

			<div class="right g-profile-languages">
				<ul>
					<li>
						<a href="" class="favorite">favorite</a>
					</li>

					<li>
						<a href="javascript:void(0)" class="profile">profile</a>
					</li>

					<li>
						<a href="" class="cart">cart</a>
					</li>

					<li>
						<input type="hidden" name="language" id="language" value="ka">
						<a href="" class="language ka">lang</a>
					</li>
				</ul>
			</div>

			<div class="clearer"></div>
		</div>
</div>


<main>
	<section class="product-section">
		<div class="center">
			<div class="left">
				<div class="box">
					<h2 class="title">კატალოგი</h2>

					<div class="wrapper">
					    <div class="accordion">
					        <!-- First Accordion Item -->
					        <div class="accordion-item">
					            <h2 class="accordion-header" id="item1Heading">
					                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item1Collapse" aria-expanded="false" aria-controls="item1Collapse">
					                    ავეჯის აქსესუარები
					                </button>
					            </h2>
					            <div id="item1Collapse" class="accordion-collapse collapse" aria-labelledby="item1Heading">
					                <div class="accordion-body">
					                    <!-- Nested Accordion -->
					                    <div class="accordion">
					                        <!-- Nested Accordion Item 1 -->
					                        <div class="accordion-item">
					                            <h2 class="accordion-header" id="innerItem1Heading">
					                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#innerItem1Collapse" aria-expanded="false" aria-controls="innerItem1Collapse">
					                                    სახელურები
					                                </button>
					                            </h2>
					                            <div id="innerItem1Collapse" class="accordion-collapse collapse" aria-labelledby="innerItem1Heading">
					                                <div class="accordion-body">
					                                    <form action="" method="post">
					                                    	<label for="brand1">
											  					<div class="checkbox">
											  						<input type="checkbox" name="brand[]" id="brand1" value="1">
											  					</div>
											  					<span>ERKUL</span>
											  				</label>

											  				<label for="brand2">
											  					<div class="checkbox">
											  						<input type="checkbox" name="brand[]" id="brand2" value="2">
											  					</div>
											  					<span>GTV</span>
											  				</label>

											  				<label for="brand3">
											  					<div class="checkbox">
											  						<input type="checkbox" name="brand[]" id="brand3" value="3">
											  					</div>
											  					<span>SEDEF/პლასტმასი</span>
											  				</label>
					                                    </form>
					                                </div>
					                            </div>
					                        </div>
					                        <!-- Nested Accordion Item 2 -->
					                        <div class="accordion-item">
					                            <h2 class="accordion-header" id="innerItem2Heading">
					                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#innerItem2Collapse" aria-expanded="false" aria-controls="innerItem2Collapse">
					                                   ტანსაცმლის საკიდები
					                                </button>
					                            </h2>
					                            <div id="innerItem2Collapse" class="accordion-collapse collapse" aria-labelledby="innerItem2Heading">
					                                <div class="accordion-body">
					                                    ფილტრი 2
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                    <!-- End of Nested Accordion -->
					                </div>
					            </div>
					        </div>
					        <!-- End of First Accordion Item -->

					        <!-- Second Accordion Item -->
					        <div class="accordion-item">
					            <h2 class="accordion-header" id="item2Heading">
					                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item2Collapse" aria-expanded="false" aria-controls="item2Collapse">
					                    ავეჯის მასალები
					                </button>
					            </h2>
					            <div id="item2Collapse" class="accordion-collapse collapse" aria-labelledby="item2Heading">
					                <div class="accordion-body">
					                    ფილტრი 3
					                </div>
					            </div>
					        </div>
					        <!-- End of Second Accordion Item -->
					    </div>
					</div>
				</div>

				<div class="box">
					<h2 class="title">ნანახი პროდუქტი</h2>

					<div class="product-small">
						<div class="item">
							<a href="" class="image-box">
								<div class="image" style="background-image:url('/_markup/assets/img/product1.png')">
									<img src="/_markup/assets/img/product1.png" alt="" loading="lazy">
								</div>
							</a>

							<div class="content">
								<a href="">ორთოპედიული მატრასი</a>
								<div class="price-btns-box">
									<a href="" class="price-box">
										<p>ფასი 1 ერთეულზე</p>
										<p class="price">15.99 ₾</p>
									</a>

									<div class="btns">
										<button type="button" class="favourite">favourite</button>
										<button type="button" class="cart">cart</button>
									</div>
								</div>
							</div>

							<div class="clearer"></div>
						</div>

						<div class="item">
							<a href="" class="image-box">
								<div class="image" style="background-image:url('/_markup/assets/img/product1.png')">
									<img src="/_markup/assets/img/product1.png" alt="" loading="lazy">
								</div>
							</a>

							<div class="content">
								<a href="">ორთოპედიული 222</a>
								<div class="price-btns-box">
									<a href="" class="price-box">
										<p>ფასი 1 ერთეულზე</p>
										<p class="price">25.99 ₾</p>
									</a>

									<div class="btns">
										<button type="button" class="favourite">favourite</button>
										<button type="button" class="cart">cart</button>
									</div>
								</div>
							</div>

							<div class="clearer"></div>
						</div>
					</div>
				</div>

				<div class="box">
					<h2 class="title">ჩვენ გირჩევთ</h2>

					<div class="product-small">
						<div class="item">
							<a href="" class="image-box">
								<div class="image" style="background-image:url('/_markup/assets/img/product1.png')">
									<img src="/_markup/assets/img/product1.png" alt="" loading="lazy">
								</div>
							</a>

							<div class="content">
								<a href="">ორთოპედიული მატრასი</a>
								<div class="price-btns-box">
									<a href="" class="price-box">
										<p>ფასი 1 ერთეულზე</p>
										<p class="price">15.99 ₾</p>
									</a>

									<div class="btns">
										<button type="button" class="favourite">favourite</button>
										<button type="button" class="cart">cart</button>
									</div>
								</div>
							</div>

							<div class="clearer"></div>
						</div>

						<div class="item">
							<a href="" class="image-box">
								<div class="image" style="background-image:url('/_markup/assets/img/product1.png')">
									<img src="/_markup/assets/img/product1.png" alt="" loading="lazy">
								</div>
							</a>

							<div class="content">
								<a href="">ორთოპედიული 222</a>
								<div class="price-btns-box">
									<a href="" class="price-box">
										<p>ფასი 1 ერთეულზე</p>
										<p class="price">25.99 ₾</p>
									</a>

									<div class="btns">
										<button type="button" class="favourite">favourite</button>
										<button type="button" class="cart">cart</button>
									</div>
								</div>
							</div>

							<div class="clearer"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="right">
				<div class="breadcrumbs">
					<ul>
						<li><a href="">მთავარი</a></li>
						<li><a href="">პროდუქცია</a></li>
						<li><a href="">მატრასები</a></li>
						<li><a href="">ორთოპედიული მატრასი</a></li>
					</ul>
					<div class="clearer"></div>

					<div class="list-view-btns">
						<button type="button" class="grid active" data-type="grid">grid</button>
						<button type="button" class="list" data-type="list">list</button>
					</div>
				</div>

				<div class="products"></div>

				<script>
					<?php
					$productList = array(
						array(
							"id"=>1,
							"code"=>"00001",
							"title"=>"იტალიური მატრასი",
							"color"=>"თეთრი",
							"size"=>"20072 (128მმ)",
							"image1"=>"/_markup/assets/img/product1.png",
							"price"=>"15.99",
							"discount"=>"0",
							"link"=>"https://google.com",
							"avaliable"=>"true",
							"description"=>"<p>იატაკის ლამინურებული საფარი.</p><p>უმაღლესი ხარისხის მასალა, სხვადასხვა ფერში</p>",
							"producer"=>"საქართველო"
						),
						array(
							"id"=>2,
							"code"=>"00002",
							"title"=>"იტალიური მატრასი 2",
							"color"=>"თეთრი",
							"size"=>"20072 (128მმ)",
							"image1"=>"/_markup/assets/img/product2.png",
							"price"=>"15.99",
							"discount"=>"10",
							"link"=>"https://google.com",
							"avaliable"=>"true",
							"description"=>"<p>იატაკის ლამინურებული საფარი.</p><p>უმაღლესი ხარისხის მასალა, სხვადასხვა ფერში</p>",
							"producer"=>"საქართველო"
						),
						array(
							"id"=>3,
							"code"=>"00003",
							"title"=>"იტალიური მატრასი 3",
							"color"=>"თეთრი",
							"size"=>"20072 (128მმ)",
							"image1"=>"/_markup/assets/img/product3.png",
							"price"=>"15.99",
							"discount"=>"0",
							"link"=>"https://google.com",
							"avaliable"=>"true",
							"description"=>"<p>იატაკის ლამინურებული საფარი.</p><p>უმაღლესი ხარისხის მასალა, სხვადასხვა ფერში</p>",
							"producer"=>"თურქეთი"
						),
						array(
							"id"=>4,
							"code"=>"00004",
							"title"=>"იტალიური მატრასი 4",
							"color"=>"თეთრი",
							"size"=>"20072 (128მმ)",
							"image1"=>"/_markup/assets/img/product4.png",
							"price"=>"15.99",
							"discount"=>"0",
							"link"=>"https://google.com",
							"avaliable"=>"true",
							"description"=>"<p>იატაკის ლამინურებული საფარი.</p><p>უმაღლესი ხარისხის მასალა, სხვადასხვა ფერში</p>",
							"producer"=>"საქართველო"
						),
						array(
							"id"=>5,
							"code"=>"00005",
							"title"=>"იტალიური მატრასი 5",
							"color"=>"თეთრი",
							"size"=>"20072 (128მმ)",
							"image1"=>"/_markup/assets/img/product5.png",
							"price"=>"15.99",
							"discount"=>"30",
							"link"=>"https://google.com",
							"avaliable"=>"true",
							"description"=>"<p>იატაკის ლამინურებული საფარი.</p><p>უმაღლესი ხარისხის მასალა, სხვადასხვა ფერში</p>",
							"producer"=>"ჩინეთი"
						),
						array(
							"id"=>6,
							"code"=>"00006",
							"title"=>"იტალიური მატრასი 6",
							"color"=>"თეთრი",
							"size"=>"20072 (128მმ)",
							"image1"=>"/_markup/assets/img/product6.png",
							"price"=>"15.99",
							"discount"=>"0",
							"link"=>"https://google.com",
							"avaliable"=>"true",
							"description"=>"<p>იატაკის ლამინურებული საფარი.</p><p>უმაღლესი ხარისხის მასალა, სხვადასხვა ფერში</p>",
							"producer"=>"საქართველო"
						),
						array(
							"id"=>7,
							"code"=>"00007",
							"title"=>"იტალიური მატრასი 7",
							"color"=>"თეთრი",
							"size"=>"20072 (128მმ)",
							"image1"=>"/_markup/assets/img/product7.png",
							"price"=>"15.99",
							"discount"=>"0",
							"link"=>"https://google.com",
							"avaliable"=>"true",
							"description"=>"<p>იატაკის ლამინურებული საფარი.</p><p>უმაღლესი ხარისხის მასალა, სხვადასხვა ფერში</p>",
							"producer"=>"საქართველო"
						),
						array(
							"id"=>8,
							"code"=>"00008",
							"title"=>"იტალიური მატრასი 8",
							"color"=>"თეთრი",
							"size"=>"20072 (128მმ)",
							"image1"=>"/_markup/assets/img/product8.png",
							"price"=>"15.99",
							"discount"=>"0",
							"link"=>"https://google.com",
							"avaliable"=>"true",
							"description"=>"<p>იატაკის ლამინურებული საფარი.</p><p>უმაღლესი ხარისხის მასალა, სხვადასხვა ფერში</p>",
							"producer"=>"იაპონია"
						),
					);
					?>

					var productList = <?=json_encode($productList)?>;
				</script>

			</div>

			<div class="clearer"></div>
		</div>
	</section>
</main>

<footer>
	<div class="center top">
		<div class="row">
			<div class="col-md-4">
				<a href="" class="footer-logo">logo</a>
				<p class="copyright">© ყველა უფლება დაცულია 2020 წელი, ბათუმი</p>

				<div class="social-box">
					<h3>სოციალური ქსელი</h3>
					<ul>
						<li><a href="" class="facebook">facebook</a></li>
						<li><a href="" class="instagram">instagram</a></li>
						<li><a href="" class="googlePlus">googlePlus</a></li>
						<li><a href="" class="whatsapp">whatsapp</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<h3>მენიუ</h3>
				<nav class="footer-menu">
					<ul>
						<li><a href="">ავტორიზაცია / რეგისტრაცია</a></li>
						<li><a href="">კატალოგი</a></li>
						<li><a href="">მისამართები</a></li>
						<li><a href="">ბლოგი</a></li>
						<li><a href="">სურვილების სია</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-md-4">
				<h3>საკონტაქტო ინფორმაცია</h3>
				<p class="address">ბათუმი, საქართველო ბაგრატიონის ქუჩა #109</p>
				<p class="phone"><a href="">+995 0 422 22 11 22</a></p>

				<div class="link-year">
					<p>WWW.MAXIMA.GE - 2022-2023</p>
				</div>
			</div>
		</div>
	</div>

	<div class="shindi-box">
		<div class="center">
			<div class="row">
				<div class="col-md-6">
					<p>POWERED BY <a href="https://shindi.ge" target="_blank">SHINDI.COM</a></p>
				</div>
				<div class="col-md-6">
					<div class="shindi-logo">
						<a href="" class="shindi">shindi</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>



<script src="/_markup/assets/js/jquery.js"></script>
<script src="/_markup/assets/lightbox/jquery.lightbox.js"></script>
<script src="/_markup/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/_markup/assets/js/owl.carousel.min.js"></script>
<script src="/_markup/assets/js/compressed.js?v=<?=$version?>"></script>
<script src="/_markup/assets/aos/aos.js"></script>
</body>

</html>