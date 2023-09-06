<?php 
$version = "1.0.3";
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
<body class="home">

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
	<div class="pattern">
		<div class="center g-flex">
			<div class="left">
				<div class="mainslider-box">
					<div class="owl-carousel owl-theme" id="mainslider">
					    <div class="item">
					    	<div class="img-box" style="background-image:url('/_markup/assets/img/saxeluri-min.jpg')">
					    		<img src="/_markup/assets/img/saxeluri-min.jpg" alt="" loading="lazy">
					    	</div>
					    </div>

					    <div class="item">
					    	<div class="img-box" style="background-image:url('/_markup/assets/img/default_name.webp')">
					    		<img src="/_markup/assets/img/saxeluri-min.jpg" alt="" loading="lazy">
					    	</div>
					    </div>

					    <div class="item">
					    	<div class="img-box" style="background-image:url('/_markup/assets/img/CustomMadeBedroomFurniture.jpeg')">
					    		<img src="/_markup/assets/img/saxeluri-min.jpg" alt="" loading="lazy">
					    	</div>
					    </div>				    
					</div>
				</div>

				<div class="bottom">
					<div class="owl-carousel owl-theme" id="subslider">
						<div class="item">
							<div class="brand">
								<img src="/_markup/assets/img/brand.png" alt="" loading="lazy">
							</div>
							<div class="title">
								<div class="box">
									<h2>სახელური 1010</h2>
									<p>კოდი (ზომა): 21860 (160 მმ) / ფერი: ანტიკური ოქრო</p>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="brand">
								<img src="/_markup/assets/img/disney.png" alt="" loading="lazy">
							</div>
							<div class="title">
								<div class="box">
									<h2>ავაჯი 123</h2>
									<p>კოდი (ზომა): 1500 (50 მმ) / ფერი: თეთრი</p>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="brand">
								<img src="/_markup/assets/img/future.png" alt="" loading="lazy">
							</div>
							<div class="title">
								<div class="box">
									<h2>საწოლი 5646</h2>
									<p>კოდი (ზომა): 454 (1600 მმ) / ფერი: შავი</p>
								</div>
							</div>
						</div>
					</div>

					<div class="btns">
						<div class="box">
							<button type="button" class="prev">prev</button>
							<button type="button" class="next">next</button>
						</div>
					</div>
				</div>
			</div>
			<div class="right">
				<ul class="banners">
					<li>
						<a href="">
							<div class="image-box" style="background-image:url('/_markup/assets/img/banner1.png');">
								<img src="/_markup/assets/img/banner1.png" alt="" loading="lazy">
							</div>

							<h3>იატაკის ლამინატი</h3>
						</a>
					</li>

					<li>
						<a href="">
							<div class="image-box" style="background-image:url('/_markup/assets/img/banner2.png');">
								<img src="/_markup/assets/img/banner2.png" alt="" loading="lazy">
							</div>

							<h3>ავეჯის აქსესუარები</h3>
						</a>
					</li>

					<li>
						<a href="">
							<div class="image-box" style="background-image:url('/_markup/assets/img/banner3.png');">
								<img src="/_markup/assets/img/banner3.png" alt="" loading="lazy">
							</div>

							<h3>ავეჯის მასალა</h3>
						</a>
					</li>

					<li>
						<a href="">
							<div class="image-box" style="background-image:url('/_markup/assets/img/banner4.png');">
								<img src="/_markup/assets/img/banner4.png" alt="" loading="lazy">
							</div>

							<h3>ჩასაშენებელი ტექნიკა</h3>
						</a>
					</li>
				</ul>
			</div>

			<div class="clearer"></div>
		</div>
	</div>

	<div class="adresses-box">
		<div class="center">
			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<div class="box">
							<div class="icon hall"></div>
							<div class="data">
								<h2>საგამოფენო დარბაზი</h2>
								<p>ბაგრატიონის ქ. #109 ბათუმი, საქართველო</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<div class="box">
							<div class="icon workshop"></div>
							<div class="data">
								<h2>საამქრო</h2>
								<p>ფრ. ხალვაშის ქ #42ა ბათუმი, საქართველო</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<div class="box">
							<div class="icon warehouse"></div>
							<div class="data">
								<h2>საწყობი</h2>
								<p>ხახულის II შესახვევი ქ #71, შამილიძის ქ #58</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="products-box">
		<div class="center">
			<h2>ტრენდული პროდუქცია</h2>
		</div>

		<div class="pattern">
			<div class="center">
				<div class="products">
					<div class="row">
						
						<div class="col-md-3">
							<div class="item">
								<div class="image-box">
									<a href="">
										<div class="image" style="background-image: url('/_markup/assets/img/product1.png');">
											<img src="/_markup/assets/img/product1.png" alt="" loading="lazy">
										</div>
									</a>
									<button type="button" class="compare">compare</button>
								</div>

								<div class="content">
									<a href="">
										<h3>იტალიური მატრასი</h3>
										<div class="data">
											<p><strong>ფერი:</strong> <span>თეთრი</span></p>	
											<p><strong>კოდი (ზომა):</strong> <span> 20072 (128მმ)</span></p>	
											<p><strong>კოდი (ზომა):</strong> <span> 20072 (128მმ)</span></p>	
											<p><strong>წარმოება:</strong> <span>თურქეთი</span></p>	
										</div>
									</a>
									
									<div class="bottom">
										<div class="price-box">
											<a href="">
												<p>ფასი 1 ერთეულზე</p>
												<p class="price">15.99 ₾</p>
											</a>
										</div>

										<div class="btns">
											<button type="button" class="favourite">favourite</button>
											<button type="button" class="cart">cart</button>
										</div>

										<div class="clearer"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="item">
								<div class="image-box">
									<a href="">
										<div class="image" style="background-image: url('/_markup/assets/img/product2.png');">
											<img src="/_markup/assets/img/product2.png" alt="" loading="lazy">
										</div>
									</a>
									<button type="button" class="compare">compare</button>
								</div>

								<div class="content">
									<a href="">
										<h3>სახელური 2315 (ERKUL)</h3>
										<div class="data">
											<p><strong>ფერი:</strong> <span>თეთრი</span></p>	
											<p><strong>კოდი (ზომა):</strong> <span> 20072 (128მმ)</span></p>	
											<p><strong>კოდი (ზომა):</strong> <span> 20072 (128მმ)</span></p>	
											<p><strong>წარმოება:</strong> <span>თურქეთი</span></p>	
										</div>
									</a>
									
									<div class="bottom">
										<div class="price-box">
											<a href="">
												<p>ფასი 1 ერთეულზე</p>
												<p class="price">15.99 ₾</p>
											</a>
										</div>

										<div class="btns">
											<button type="button" class="favourite">favourite</button>
											<button type="button" class="cart">cart</button>
										</div>

										<div class="clearer"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="item">
								<div class="image-box">
									<a href="">
										<div class="image" style="background-image: url('/_markup/assets/img/product3.png');">
											<img src="/_markup/assets/img/product3.png" alt="" loading="lazy">
										</div>
									</a>
									<button type="button" class="compare">compare</button>
								</div>

								<div class="content">
									<a href="">
										<h3>იატაკის ლამინირებული საფარი</h3>
										<div class="data">
											<p><strong>ფერი:</strong> <span>თეთრი</span></p>	
											<p><strong>კოდი (ზომა):</strong> <span> 20072 (128მმ)</span></p>	
											<p><strong>კოდი (ზომა):</strong> <span> 20072 (128მმ)</span></p>	
											<p><strong>წარმოება:</strong> <span>თურქეთი</span></p>	
										</div>
									</a>
									
									<div class="bottom">
										<div class="price-box">
											<a href="">
												<p>ფასი 1 ერთეულზე</p>
												<p class="price">15.99 ₾</p>
											</a>
										</div>

										<div class="btns">
											<button type="button" class="favourite">favourite</button>
											<button type="button" class="cart">cart</button>
										</div>

										<div class="clearer"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="item">
								<div class="image-box">
									<a href="">
										<div class="image" style="background-image: url('/_markup/assets/img/product4.png');">
											<img src="/_markup/assets/img/product4.png" alt="" loading="lazy">
										</div>
									</a>
									<button type="button" class="compare">compare</button>
								</div>

								<div class="content">
									<a href="">
										<h3>სახელური 20 (ERKUL)</h3>
										<div class="data">
											<p><strong>ფერი:</strong> <span>თეთრი</span></p>	
											<p><strong>კოდი (ზომა):</strong> <span> 20072 (128მმ)</span></p>	
											<p><strong>კოდი (ზომა):</strong> <span> 20072 (128მმ)</span></p>	
											<p><strong>წარმოება:</strong> <span>თურქეთი</span></p>	
										</div>
									</a>
									
									<div class="bottom">
										<div class="price-box">
											<a href="">
												<p>ფასი 1 ერთეულზე</p>
												<p class="price">15.99 ₾</p>
											</a>
										</div>

										<div class="btns">
											<button type="button" class="favourite">favourite</button>
											<button type="button" class="cart">cart</button>
										</div>

										<div class="clearer"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="item">
								<div class="image-box">
									<a href="">
										<div class="image" style="background-image: url('/_markup/assets/img/product5.png');">
											<img src="/_markup/assets/img/product5.png" alt="" loading="lazy">
										</div>
									</a>
									<button type="button" class="compare">compare</button>
								</div>

								<div class="content">
									<a href="">
										<h3>სახელური 188 (ERKUL)</h3>
										<div class="data">
											<p><strong>ფერი:</strong> <span>თეთრი</span></p>	
											<p><strong>კოდი (ზომა):</strong> <span> 20072 (128მმ)</span></p>	
											<p><strong>კოდი (ზომა):</strong> <span> 20072 (128მმ)</span></p>	
											<p><strong>წარმოება:</strong> <span>თურქეთი</span></p>	
										</div>
									</a>
									
									<div class="bottom">
										<div class="price-box">
											<a href="">
												<p>ფასი 1 ერთეულზე</p>
												<p class="price">15.99 ₾</p>
											</a>
										</div>

										<div class="btns">
											<button type="button" class="favourite">favourite</button>
											<button type="button" class="cart">cart</button>
										</div>

										<div class="clearer"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="item">
								<div class="image-box">
									<a href="">
										<div class="image" style="background-image: url('/_markup/assets/img/product6.png');">
											<img src="/_markup/assets/img/product6.png" alt="" loading="lazy">
										</div>
									</a>
									<button type="button" class="compare">compare</button>
								</div>

								<div class="content">
									<a href="">
										<h3>სახელური 1027 (ERKUL)</h3>
										<div class="data">
											<p><strong>ფერი:</strong> <span>თეთრი</span></p>	
											<p><strong>კოდი (ზომა):</strong> <span> 20072 (128მმ)</span></p>	
											<p><strong>კოდი (ზომა):</strong> <span> 20072 (128მმ)</span></p>	
											<p><strong>წარმოება:</strong> <span>თურქეთი</span></p>	
										</div>
									</a>
									
									<div class="bottom">
										<div class="price-box">
											<a href="">
												<p>ფასი 1 ერთეულზე</p>
												<p class="price">15.99 ₾</p>
											</a>
										</div>

										<div class="btns">
											<button type="button" class="favourite">favourite</button>
											<button type="button" class="cart">cart</button>
										</div>

										<div class="clearer"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="item">
								<div class="image-box">
									<a href="">
										<div class="image" style="background-image: url('/_markup/assets/img/product7.png');">
											<img src="/_markup/assets/img/product7.png" alt="" loading="lazy">
										</div>
									</a>
									<button type="button" class="compare">compare</button>
								</div>

								<div class="content">
									<a href="">
										<h3>ჩასაშენებელი ტექნიკა</h3>
										<div class="data">
											<p><strong>ფერი:</strong> <span>თეთრი</span></p>	
											<p><strong>კოდი (ზომა):</strong> <span> 20072 (128მმ)</span></p>	
											<p><strong>კოდი (ზომა):</strong> <span> 20072 (128მმ)</span></p>	
											<p><strong>წარმოება:</strong> <span>თურქეთი</span></p>	
										</div>
									</a>
									
									<div class="bottom">
										<div class="price-box">
											<a href="">
												<p>ფასი 1 ერთეულზე</p>
												<p class="price">15.99 ₾</p>
											</a>
										</div>

										<div class="btns">
											<button type="button" class="favourite">favourite</button>
											<button type="button" class="cart">cart</button>
										</div>

										<div class="clearer"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="item">
								<div class="image-box">
									<a href="">
										<div class="image" style="background-image: url('/_markup/assets/img/product8.png');">
											<img src="/_markup/assets/img/product8.png" alt="" loading="lazy">
										</div>
									</a>
									<button type="button" class="compare">compare</button>

									<div class="discount">30%</div>
								</div>

								<div class="content">
									<a href="">
										<h3>კარის მასალა (MDF)</h3>
										<div class="data">
											<p><strong>ფერი:</strong> <span>თეთრი</span></p>	
											<p><strong>კოდი (ზომა):</strong> <span> 20072 (128მმ)</span></p>	
											<p><strong>კოდი (ზომა):</strong> <span> 20072 (128მმ)</span></p>	
											<p><strong>წარმოება:</strong> <span>თურქეთი</span></p>	
										</div>
									</a>
									
									<div class="bottom">
										<div class="price-box">
											<a href="">
												<p>ფასი 1 ერთეულზე</p>
												<p class="price">15.99 ₾</p>
											</a>
										</div>

										<div class="btns">
											<button type="button" class="favourite">favourite</button>
											<button type="button" class="cart">cart</button>
										</div>

										<div class="clearer"></div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>	

	<section class="discount">
		<div class="owl-carousel owl-theme" id="discount-slider">

			<div class="item">
				<div class="image-box">
					<div class="image" style="background-image: url('/_markup/assets/img/discount.png');">
						<img src="/_markup/assets/img/discount.png" alt="" loading="lazy">
					</div>
				</div>

				<div class="content">
					<div class="center">
						<div class="box">
							<div class="brand">
								<img src="/_markup/assets/img/disney.png" alt="" loading="lazy">
							</div>

							<div class="title">
								<div class="wrapper">
									<h2>იატაკის ლამინირებული საფარი</h2>
									<p>კოდი: 96735 / ფერი: ანტიკური ოქრო</p>
								</div>
							</div>

							<div class="price">
								<div class="wrapper">
									<div class="old-price">
										<strike>180.33 ₾</strike>
									</div>
									<div class="new-price">
										<span>120.33 ₾</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="image-box">
					<div class="image" style="background-image: url('/_markup/assets/img/004.jpeg');">
						<img src="/_markup/assets/img/004.jpeg" alt="" loading="lazy">
					</div>
				</div>

				<div class="content">
					<div class="center">
						<div class="box">
							<div class="brand">
								<img src="/_markup/assets/img/future.png" alt="" loading="lazy">
							</div>

							<div class="title">
								<div class="wrapper">
									<h2>პრიდქტი 1</h2>
									<p>კოდი: 96735 / ზომა: 500 მმ / ფერი: ანტიკური ოქრო</p>
								</div>
							</div>

							<div class="price">
								<div class="wrapper">
									<div class="old-price">
										<strike>11.33 ₾</strike>
									</div>
									<div class="new-price">
										<span>10.33 ₾</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="image-box">
					<div class="image" style="background-image: url('/_markup/assets/img/005.jpeg');">
						<img src="/_markup/assets/img/005.jpeg" alt="" loading="lazy">
					</div>
				</div>

				<div class="content">
					<div class="center">
						<div class="box">
							<div class="brand">
								<img src="/_markup/assets/img/brand.png" alt="" loading="lazy">
							</div>

							<div class="title">
								<div class="wrapper">
									<h2>იატაკის 3</h2>
									<p>კოდი: 96735 / ზომა: 500 მმ</p>
								</div>
							</div>

							<div class="price">
								<div class="wrapper">
									<div class="old-price">
										<strike>18.33 ₾</strike>
									</div>
									<div class="new-price">
										<span>12.33 ₾</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="news">
		<div class="center">
			<div class="title-box">
				<h2>სიახლეები</h2>

				<div class="btns">
					<button type="button" class="prev">prev</button>
					<button type="button" class="next">next</button>
				</div>

				<div class="clearer"></div>
			</div>
		</div>

		<div class="news-slider-box">
				<div class="owl-carousel owl-theme" id="news-pic-slider">
					<a href="https://google.com" class="item">
						<div class="image-box">
							<div class="image" style="background-image:url('/_markup/assets/img/004.jpeg')">
								<img src="/_markup/assets/img/004.jpeg" alt="" loading="lazy">
							</div>

							<div class="text-container">
								<div class="text">ტრენდული ფერთა პალიტრა 2023</div>
							</div>
						</div>
					</a>

					<a href="https://facebook.com" class="item">
						<div class="image-box">
							<div class="image" style="background-image:url('/_markup/assets/img/005.jpeg')">
								<img src="/_markup/assets/img/005.jpeg" alt="" loading="lazy">
							</div>

							<div class="text-container">
								<div class="text">როგორ შევარჩიოთ მატრასი?</div>
							</div>
						</div>
					</a>

					<a href="https://gmail.com" class="item">
						<div class="image-box">
							<div class="image" style="background-image:url('/_markup/assets/img/006.jpeg')">
								<img src="/_markup/assets/img/006.jpeg" alt="" loading="lazy">
							</div>

							<div class="text-container">
								<div class="text">ტექსტი 3</div>
							</div>
						</div>
					</a>

					<a href="https://instagram.com" class="item">
						<div class="image-box">
							<div class="image" style="background-image:url('/_markup/assets/img/007.jpg')">
								<img src="/_markup/assets/img/007.jpg" alt="" loading="lazy">
							</div>

							<div class="text-container">
								<div class="text">ტექსტი 4 ტესტ</div>
							</div>
						</div>
					</a>
				</div>

			</div>
	</section>

	<section class="brands">
		<div class="center">
			<div class="title-box">
				<h2>ბრენდები</h2>

				<div class="btns">
					<button type="button" class="prev" id="scroll-left-button">prev</button>
					<button type="button" class="next" id="scroll-right-button">next</button>
				</div>

				<div class="clearer"></div>
			</div>

			<div class="brand-slider" id="scroll-container">
				<div class="wrapper">
					<a href="" class="item">
						<div class="image-box" style="background-image: url('/_markup/assets/img/brand.png');">
							<img src="/_markup/assets/img/brand.png" alt="" loading="lazy">	
						</div>					
					</a>

					<a href="" class="item">
						<div class="image-box" style="background-image: url('/_markup/assets/img/disney.png');">
							<img src="/_markup/assets/img/disney.png" alt="" loading="lazy">	
						</div>					
					</a>

					<a href="" class="item">
						<div class="image-box" style="background-image: url('/_markup/assets/img/future.png');">
							<img src="/_markup/assets/img/future.png" alt="" loading="lazy">	
						</div>					
					</a>

					<a href="" class="item">
						<div class="image-box" style="background-image: url('/_markup/assets/img/brand2.png');">
							<img src="/_markup/assets/img/brand2.png" alt="" loading="lazy">	
						</div>					
					</a>

					<a href="" class="item">
						<div class="image-box" style="background-image: url('/_markup/assets/img/brand3.png');">
							<img src="/_markup/assets/img/brand3.png" alt="" loading="lazy">	
						</div>					
					</a>

					<a href="" class="item">
						<div class="image-box" style="background-image: url('/_markup/assets/img/brand4.png');">
							<img src="/_markup/assets/img/brand4.png" alt="" loading="lazy">	
						</div>					
					</a>

					<a href="" class="item">
						<div class="image-box" style="background-image: url('/_markup/assets/img/brand.png');">
							<img src="/_markup/assets/img/brand.png" alt="" loading="lazy">	
						</div>					
					</a>

					<a href="" class="item">
						<div class="image-box" style="background-image: url('/_markup/assets/img/disney.png');">
							<img src="/_markup/assets/img/disney.png" alt="" loading="lazy">	
						</div>					
					</a>

					<a href="" class="item">
						<div class="image-box" style="background-image: url('/_markup/assets/img/future.png');">
							<img src="/_markup/assets/img/future.png" alt="" loading="lazy">	
						</div>					
					</a>

					<a href="" class="item">
						<div class="image-box" style="background-image: url('/_markup/assets/img/brand2.png');">
							<img src="/_markup/assets/img/brand2.png" alt="" loading="lazy">	
						</div>					
					</a>

					<a href="" class="item">
						<div class="image-box" style="background-image: url('/_markup/assets/img/brand3.png');">
							<img src="/_markup/assets/img/brand3.png" alt="" loading="lazy">	
						</div>					
					</a>

					<a href="" class="item">
						<div class="image-box" style="background-image: url('/_markup/assets/img/brand4.png');">
							<img src="/_markup/assets/img/brand4.png" alt="" loading="lazy">	
						</div>					
					</a>
				</div>
			</div>
		</div>
	</section>

	<div class="adresses-box politic-box">
		<div class="center">
			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<div class="box">
							<div class="icon hall"></div>
							<div class="data">
								<a href="">მიწოდების პოლიტიკა</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<div class="box">
							<div class="icon workshop"></div>
							<div class="data">
								<a href="">გაცვლის პოლიტიკა</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<div class="box">
							<div class="icon warehouse"></div>
							<div class="data">
								<a href="">დაბრუნების პოლიტიკა</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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