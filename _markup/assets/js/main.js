class VisiableTracker{
	constructor(){
		this.trackElement = "section, footer";
		this.addRemoveClass = "g-visible";
	}

	track(){
		$(document).ready(function(){
			$('body').addClass('loaded');
		});

		const elements = document.querySelectorAll(this.trackElement);

		const observer = new IntersectionObserver(entries => {
		  entries.forEach(entry => {
		    if (entry.isIntersecting) {
		      entry.target.classList.add(this.addRemoveClass);
		    } else {
		      // entry.target.classList.remove(this.addRemoveClass);
		    }
		  });
		});

		elements.forEach(element => {
		  observer.observe(element);
		});
	}

	run(){
		this.track();
	}
}

class SearchBox{
	onFocus(){
		var keywords = document.getElementById('keywords');
  		var searchForm = document.querySelector('header .middle .center .search-box form');

		keywords.addEventListener('focus', function() {
			searchForm.classList.add('focused');
		});

		document.addEventListener("click", function(event) {
		  var form = document.getElementById("search-form");
		  var keywords = document.getElementById("keywords");

		  if (event.target !== keywords && !form.contains(event.target)) {
		    searchForm.classList.remove('focused');
		  }
		});
	}

	onSubmit(){
		var submitBtn = document.getElementById('search-submit');
		var searchForm = document.getElementById('search-form');

		submitBtn.addEventListener('click', function(){
			searchForm.submit();
		});
	}

	run(){
		this.onFocus();
		this.onSubmit();
	}
}

class Navigation{
	hoverOnCatalogInit(){
		var body = document.getElementsByTagName('body');		

		$(document).on('mouseenter', '.g-sticky-menu .center .production-box', function(){
			body[0].classList.add('navigationHovered');
			$('.g-sticky-menu .center .production-box .navigation-box').stop().fadeIn().css('display', 'flex');
		});

		$(document).on('mouseleave', '.g-sticky-menu .center .production-box', function(){
			body[0].classList.remove('navigationHovered');
			$('.g-sticky-menu .center .production-box .navigation-box').stop().fadeOut();
		});
		
		$(document).on('mouseenter', '.g-sticky-menu .center .production-box .navigation-box .main ul li a', function(e){
			$('.g-sticky-menu .center .production-box .navigation-box .sub-category').stop().fadeIn();

			$('.g-sticky-menu .center .production-box .navigation-box .sub-category .sub').stop().hide();
			var sub = $(this).attr('data-type');
			$("#"+sub).show();
		});

		$(document).on('mouseleave', '.g-sticky-menu .center .production-box .navigation-box', function(){
			$('.g-sticky-menu .center .production-box .navigation-box .sub-category').stop().fadeOut();
			$('.g-sticky-menu .center .production-box .navigation-box .sub-category .sub').stop().hide();
		});
	}

	scrollTopChangeHeader(){
  		window.addEventListener('scroll', function() {
			var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
			if(scrollTop > 50){
				$('.g-sticky-menu').addClass('scrolled');
			}else{
				$('.g-sticky-menu').removeClass('scrolled');
			}
		});
  	}

	run(){
		this.scrollTopChangeHeader();
		this.hoverOnCatalogInit();
	}
}

class ProductSlider{
	constructor() {
        this.owl;
        this.owl2;
    }

	mainSlider(){
		this.owl = $('main .center .left .mainslider-box #mainslider').owlCarousel({
			autoplay: true,
        	autoplayTimeout: 5000,
        	smartSpeed:1500,
		    loop:true,
		    margin:0,
		    nav:false,
		    dots:false,
		    mouseDrag: false, 
        	touchDrag: false, 
        	animateOut: 'fadeOut',
      		animateIn: 'fadeIn',
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1000:{
		            items:1
		        }
		    }
		});
	}

	subSlider(){
		this.owl2 = $('main .center .left .bottom #subslider').owlCarousel({
			autoplay: true,
        	autoplayTimeout: 5000,
        	smartSpeed:1500,
		    loop:true,
		    margin:0,
		    nav:false,
		    dots:false,
		    mouseDrag: false, 
        	touchDrag: false, 
        	animateOut: 'fadeOut',
      		animateIn: 'fadeIn',
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1000:{
		            items:1
		        }
		    }
		});
	}

	buttonClickinit(){
		var that = this;
		$(document).on('click', 'main .center .left .bottom .btns .box button.prev', function(){
			that.owl.trigger('prev.owl.carousel');
			that.owl2.trigger('prev.owl.carousel');
		});

		$(document).on('click', 'main .center .left .bottom .btns .box button.next', function(){
			that.owl.trigger('next.owl.carousel');
			that.owl2.trigger('next.owl.carousel');
		});
	}

	run(){
		this.mainSlider();
		this.subSlider();
		this.buttonClickinit();
	}
}

class Discount{
	sliderInit(){
		$('#discount-slider').owlCarousel({
			autoplay: true,
        	autoplayTimeout: 5000,
        	smartSpeed:1500,
		    loop:true,
		    margin:0,
		    nav:true,
		    dots:true,
		    mouseDrag: false, 
        	touchDrag: false, 
        	animateOut: 'fadeOut',
      		animateIn: 'fadeIn',
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1000:{
		            items:1
		        }
		    }
		});
	}

	run(){
		this.sliderInit();
	}
}

class News{
	constructor() {
        this.owl;
    }

	sliderinit(){
		this.owl = $('main .news .news-slider-box #news-pic-slider').owlCarousel({
		    autoplay: true,
		    autoplayTimeout: 10000,
		    smartSpeed: 1500,
		    loop: true,
		    margin: 0,
		    nav: false,
		    dots: false,
		    responsive: {
		        0: {
		            items: 1
		        },
		        600: {
		            items: 1
		        },
		        1000: {
		            items: 3
		        }
		    },
		    onChanged: function (event) {
		    	setTimeout(function(){
		    		var x = 1;
		    		$('main .news .news-slider-box #news-pic-slider .owl-item.active').each(function(){
		        		var text = $('.item', this).attr('data-text');
		        		var href = $('.item', this).attr('href');

		        		if(x==1){
		        			$('main .news .news-slider-box .center .left').text(text);
		        			$('main .news .news-slider-box .center .left').attr('href', href);
		        		}else{
		        			$('main .news .news-slider-box .center .right').text(text);
		        			$('main .news .news-slider-box .center .right').attr('href', href);
		        		}
		        		x=2;
		        	});
		    	}, 500);
		        
		    }
		});
	}

	buttonClickinit(){
		var that = this;
		$(document).on('click', 'main .news .center .title-box .btns button.prev', function(){
			that.owl.trigger('prev.owl.carousel');
		});

		$(document).on('click', 'main .news .center .title-box .btns button.next', function(){
			that.owl.trigger('next.owl.carousel');
		});
	}

	run(){
		this.sliderinit();
		this.buttonClickinit();
	}
}

class Brands{
	constructor() {
		this.sliderSelector = 'main .brands .center .brand-slider';
		this.slider = $(this.sliderSelector);
        this.itemWidth = 240;
        this.itemsLength = $('main .brands .center .brand-slider .wrapper .item').length;
        this.wrapper = $('main .brands .center .brand-slider .wrapper');
        this.container = '#scroll-container';
        this.leftBtn = '#scroll-left-button';
        this.rightBtn = '#scroll-right-button';
        this.autoPlay = 5000;
    }

	setContainerWidth(){
		var totalWidth = this.itemsLength * this.itemWidth;
		this.wrapper.css('width', totalWidth+'px');
	}

	makeBrandsDragable(){
		if(this.slider.length){
			let isMouseDown = false;
			let startX;
			let scrollLeft;

			const scrollContainer = document.querySelector(this.sliderSelector);

			scrollContainer.addEventListener('mousedown', (e) => {
			  isMouseDown = true;
			  startX = e.pageX - scrollContainer.offsetLeft;
			  scrollLeft = scrollContainer.scrollLeft;
			});

			scrollContainer.addEventListener('mouseup', () => {
			  isMouseDown = false;
			});

			scrollContainer.addEventListener('mouseleave', () => {
			  isMouseDown = false;
			});

			scrollContainer.addEventListener('mousemove', (e) => {
			  if (!isMouseDown) return;
			  e.preventDefault();
			  const x = e.pageX - scrollContainer.offsetLeft;
			  const walk = (x - startX) * 2;
			  scrollContainer.scrollLeft = scrollLeft - walk;
			});
		}
	}

	brandsButtonClickInit(){
		var that = this;
		var scrolling = false;		
		$(document).on('click', that.leftBtn, function() {
			if(!scrolling){
				scrolling = true;
				$(that.container).animate({
		      		scrollLeft: '-=240'
		    	}, 'slow', function() {
		    		scrolling = false;	
				});
			}
		});

		$(document).on('click', that.rightBtn, function() {
			if(!scrolling){
				scrolling = true;
				var $element = $(that.container);
				var maxScrollLeft = $element.get(0).scrollWidth - $element.width();
				var scrollLeft = $(that.container).scrollLeft();
				
				if((scrollLeft + 40) >= maxScrollLeft){
					$(that.container).animate({
				      scrollLeft: '0'
				    }, 'slow', function() {
			    		scrolling = false;	
					});
				}else{
					$(that.container).animate({
				      scrollLeft: '+=240'
				    }, 'slow', function() {
			    		scrolling = false;	
					});
				}
			}
		});
	}

	autoPlayInit(){
		var that = this;
		setInterval(function(){
			$(that.rightBtn).click();
		}, that.autoPlay)
	}

	run(){
		this.makeBrandsDragable();
		this.brandsButtonClickInit();
		this.setContainerWidth();
		this.autoPlayInit();
	}
}

class PurchasePage{
	constructor() {
        this.owl;
        this.owl2;
    }

    mainProductSliderinit(){
    	this.owl2 = $('main .product-item .center .product-slider-box #product-slider').owlCarousel({
		    autoplay: true,
		    autoplayTimeout: 10000,
		    smartSpeed: 1500,
		    loop: false,
		    margin: 0,
		    nav: true,
		    dots: false,
		    responsive: {
		        0: {
		            items: 1
		        },
		        600: {
		            items: 1
		        },
		        1000: {
		            items: 1
		        }
		    },
		    onChanged: function(event) {
		    	$('main .product-item .center .product-slider-box .thumbs .image-box').removeClass('active');
		    	$('main .product-item .center .product-slider-box .thumbs .image-box[data-image="'+event.item.index+'"]').addClass('active');
		    }
		});
    }

	similarProductSliderInit(){
		this.owl = $('main .similar-products .center #similar-products-slider').owlCarousel({
		    autoplay: true,
		    autoplayTimeout: 10000,
		    smartSpeed: 1500,
		    loop: true,
		    margin: 30,
		    nav: false,
		    dots: false,
		    responsive: {
		        0: {
		            items: 1
		        },
		        600: {
		            items: 1
		        },
		        1000: {
		            items: 4
		        }
		    }
		});
	}

	productImageButtonClickinit(){
		var that = this;
		$(document).on('click', 'main .product-item .center .product-slider-box .thumbs .image-box', function(){
			var image = $(this).attr('data-image');
			that.owl2.trigger('to.owl.carousel', [image, 500]);
		});
	}

	buttonClickinit(){
		var that = this;
		$(document).on('click', 'main .similar-products .center .title-box .btns button.prev', function(){
			that.owl.trigger('prev.owl.carousel');
		});

		$(document).on('click', 'main .similar-products .center .title-box .btns button.next', function(){
			that.owl.trigger('next.owl.carousel');
		});
	}

	run(){
		this.mainProductSliderinit();
		this.productImageButtonClickinit();
		this.similarProductSliderInit();
		this.buttonClickinit();
	}
}

class RegisterAuthModal{
	modalPopupInit(){
		$(document).on('click', 'header .middle .center .right ul li a.profile', function(){
			$('#g-auth-register').modal('show');
		});

		$(document).on('click', '#g-auth-register .close', function(){
			$('#g-auth-register').modal('hide');
		});
	}

	tabChangeInit(){
		 $(document).on('click', '#myTab .nav-link', function (e) {
            var activatedTab = $(e.target).attr('data-bs-target');
            
            if(activatedTab=="#auth"){
            	$('#g-auth-register .modal-content .modal-body .right-side .image-box .image').css('background-image', 'url("'+tabs.tab1+'")');
            	$('#g-auth-register .modal-content .modal-body .right-side .image-box .image img').attr('src', tabs.tab1);
            }else{
            	$('#g-auth-register .modal-content .modal-body .right-side .image-box .image').css('background-image', 'url("'+tabs.tab2+'")');
            	$('#g-auth-register .modal-content .modal-body .right-side .image-box .image img').attr('src', tabs.tab2);
            }
        });
	}

	checkSavePassInit(){
		$(document).on('click', '#g-auth-register .left-side .g-flex #myTabContent .tab-pane form .submit-box .save-pass', function(){
			if($('#checked-save').prop('checked')){
				$(this).addClass('checked');
			}else{
				$(this).removeClass('checked');
			}
		});
	}

	run(){
		this.modalPopupInit();
		this.tabChangeInit();
		this.checkSavePassInit();
	}
}

class ProductPage{
	filterBox(){
		$(document).on('click', '.product-page main .product-section .left .box .wrapper .accordion form label', function(){
			var input = $('input', this).prop('checked');
			if(input){
				$(this).addClass('checked');
			}else{
				$(this).removeClass('checked');
			}
		});
	}

	gridMarkup(data){
		var html = "";
		html += "<div class=\"row\">";
		$.each(data, function(index, product) {
			// Access individual properties of the product
			var productId = product.id;
			var productCode = product.code;
			var productTitle = product.title;
			var productColor = product.color;
			var productSize = product.size;
			var productImage = product.image1;
			var productPrice = product.price;
			var productDiscount = product.discount;
			var productLink = product.link;
			var productAvailable = product.avaliable;
			var productDescription = product.description;
			var productProducer = product.producer;

			// Perform actions with the product data
			html += "<div class=\"col-md-4\">";
			html += "<div class=\"item\">";	
			html += "<div class=\"image-box\">";	
			html += "<a href=\""+productLink+"\">";
			html += "<div class=\"image\" style=\"background-image: url('"+productImage+"');\">";
			html += "<img src=\""+productImage+"\" alt=\"\" loading=\"lazy\">";
			html += "</div>";
			html += "</a>";
			html += "<button type=\"button\" class=\"compare\" data-id=\""+productId+"\">compare</button>";
			if(productDiscount>0){
				html += "<div class=\"discount\">"+productDiscount+"%</div>";
			}
			html += "</div>";

			html += "<div class=\"content\">";
			html += "<a href=\""+productLink+"\">";
			html += "<h3>"+productTitle+"</h3>";
			html += "<div class=\"data\">";
			html += "<p><strong>ფერი:</strong> <span>"+productPrice+"</span></p>";
			html += "<p><strong>კოდი (ზომა):</strong> <span> "+productCode+" ("+productSize+")</span></p>";
			html += "<p><strong>წარმოება:</strong> <span>"+productProducer+"</span></p>";
			html += "</div>";
			html += "</a>";

			html += "<div class=\"bottom\">";
			html += "<div class=\"price-box\">";
			html += "<a href=\""+productLink+"\">";
			html += "<p>ფასი 1 ერთეულზე</p>";
			html += "<p class=\"price\">"+productPrice+" ₾</p>";
			html += "</a>";
			html += "</div>";

			html += "<div class=\"btns\">";
			html += "<button type=\"button\" class=\"favourite\" data-id=\""+productId+"\">favourite</button>";

			html += "<div class='quentity-box'>";
			html += "<div class='minus' data-id='"+productId+"'>-</div>";
			html += "<input type='text' value='1' min='1' readonly='readonly' data-id='"+productId+"'>";
			html += "<div class='plus' data-id='"+productId+"'>+</div>";
			html += "</div>";

			html += "<button type=\"button\" class=\"cart\" data-id=\""+productId+"\">cart</button>";
			html += "</div>";
			html += "<div class=\"clearer\"></div>";
			html += "</div>";
			html += "</div>";
			html += "</div>";
			html += "</div>";
		});
		html += "</div>";
		return html;
	}

	listMarkup(data){
		var html = "";
		$.each(data, function(index, product) {
			// Access individual properties of the product
			var productId = product.id;
			var productCode = product.code;
			var productTitle = product.title;
			var productColor = product.color;
			var productSize = product.size;
			var productImage = product.image1;
			var productPrice = product.price;
			var productDiscount = product.discount;
			var productLink = product.link;
			var productAvailable = product.avaliable;
			var productDescription = product.description;
			var productProducer = product.producer;

			html += "<div class=\"pro\">";

			html += "<div class=\"row\">";
			
			html += "<div class=\"col-md-4\">";
			html += "<div class=\"image-box\">";
			html += "<div class=\"image\" style=\"background-image:url('"+productImage+"')\">";
			html += "<img src=\""+productImage+"\" alt=\"\" loading=\"lazy\">";
			html += "</div>";
			html += "</div>";
			html += "</div>";

			html += "<div class=\"col-md-8\">";
			html += "<h1>"+productTitle+" <span>#"+productCode+"</span></h1>";
			html += "<div class=\"actions-box\">";
			html += "<div class=\"price\">";
			html += "<span>"+productPrice+" ₾</span>";
			html += "</div>";
			html += "<div class=\"info\">";
			if(productAvailable=="true"){
				html += "<span>მარაგშია</span>";
			}else{
				html += "<span>არ არის მარაგშია</span>";
			}			
			html += "</div>";
			
			html += "<div class=\"right\">";
			html += "<div class=\"btns\">";
			html += "<a href=\"javascript:void(0)\" class=\"favourite\" data-id=\""+productId+"\">favorite</a>";
			html += "<a href=\"javascript:void(0)\" class=\"compare\" data-id=\""+productId+"\">compare</a>";

			html += "<div class='quentity-box'>";
			html += "<div class='minus' data-id='"+productId+"'>-</div>";
			html += "<input type='text' value='1' min='1' readonly='readonly' data-id='"+productId+"'>";
			html += "<div class='plus' data-id='"+productId+"'>+</div>";
			html += "</div>";

			html += "<a href=\"javascript:void(0)\" class=\"cart\" data-id=\""+productId+"\">cart</a>";
			html += "</div>";

			html += "<form action=\"\" method=\"post\">";
			html += "<button type=\"submit\">ყიდვა</button>";
			html += "</form>";
			html += "</div>";

			html += "<div class=\"clearer\"></div>";
			html += "</div>";

			html += "<div class=\"description\">";
			html += "<h2>აღწერა</h2>";
			html += "<p>"+productDescription+"</p>";
			html += "</div>";

			html += "<div class=\"additional-data\">";
			html += "<div class=\"data\">";
			html += "<p>ზომა: "+productSize+"</p>";
			html += "</div>";

			html += "<div class=\"data\">";
			html += "<p>წარმოება: "+productProducer+"</p>";
			html += "</div>";

			html += "<div class=\"data\">";
			html += "<p>ფერი: "+productColor+"</p>";
			html += "</div>";

			html += "</div>";
			html += "</div>";
			html += "</div>";
			html += "</div>";
		});

		return html;
	}

	changeListTypeInit(){
		var that = this;
		$(document).on('click', '.product-page .breadcrumbs .list-view-btns button', function(){
			$('.product-page .breadcrumbs .list-view-btns button').removeClass('active');
			$(this).addClass('active');
			
			var type = $(this).attr('data-type');
			if(type=="grid"){
				var html = that.gridMarkup(productList);
			}else{
				var html = that.listMarkup(productList);
			}

			$('.product-page main .product-section .right .products').html(html);			
		});
	}

	loadMarkup(){
		if(typeof productList !== "undefined"){
			var gridMarkup = this.gridMarkup(productList);
			$('.product-page main .product-section .right .products').html(gridMarkup);
		}
	}

	run(){
		this.filterBox();
		this.loadMarkup();
		this.changeListTypeInit();
	}
}

class ProductQuentity{
	btnClickInit(){
		$(document).on('click', '.quentity-box .minus', function(){
			var id = $(this).attr('data-id');
			var inputVal = parseInt($('input[data-id="'+id+'"]').val());
			var newVal = 1; 

			if(inputVal > 1){
				newVal = inputVal - 1;
			}

			$('input[data-id="'+id+'"]').val(newVal);
		});
		$(document).on('click', '.quentity-box .plus', function(){
			var id = $(this).attr('data-id');
			var inputVal = parseInt($('input[data-id="'+id+'"]').val());
			var newVal = inputVal + 1; 

			$('input[data-id="'+id+'"]').val(newVal);
		});
	}

	run(){
		this.btnClickInit();
	}
}

/* VisiableTracker */
var visiableTracker = new VisiableTracker;
visiableTracker.run();

/* SearchBox */
var searchBox = new SearchBox;
searchBox.run();

/* Navigation */
var navigation = new Navigation;
navigation.run();

/* ProductSlider */
var productSlider = new ProductSlider;
productSlider.run();

/* Discount */
var discount = new Discount;
discount.run();

/* News */
var news = new News;
news.run();

/* Brands */
var brands = new Brands;
brands.run();

/* PurchasePage */
var purchasePage = new PurchasePage;
purchasePage.run();

/* RegisterAuthModal */
var registerAuthModal = new RegisterAuthModal;
registerAuthModal.run();

/* ProductPage */
var productPage = new ProductPage;
productPage.run();

/* ProductQuentity */
var productQuentity = new ProductQuentity;
productQuentity.run();