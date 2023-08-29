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

		$(document).on('mouseenter', 'header .bottom .center .production-box', function(){
			body[0].classList.add('navigationHovered');
			$('header .bottom .center .production-box .navigation-box').stop().fadeIn().css('display', 'flex');
		});

		$(document).on('mouseleave', 'header .bottom .center .production-box', function(){
			body[0].classList.remove('navigationHovered');
			$('header .bottom .center .production-box .navigation-box').stop().fadeOut();
		});
		
		$(document).on('mouseenter', 'header .bottom .center .production-box .navigation-box .main ul li a', function(e){
			$('header .bottom .center .production-box .navigation-box .sub-category').stop().fadeIn();

			$('header .bottom .center .production-box .navigation-box .sub-category .sub').stop().hide();
			var sub = $(this).attr('data-type');
			$("#"+sub).show();
		});

		$(document).on('mouseleave', 'header .bottom .center .production-box .navigation-box', function(){
			$('header .bottom .center .production-box .navigation-box .sub-category').stop().fadeOut();
			$('header .bottom .center .production-box .navigation-box .sub-category .sub').stop().hide();
		});
	}

	run(){
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
		})

		$(document).on('click', 'main .center .left .bottom .btns .box button.next', function(){
			that.owl.trigger('next.owl.carousel');
			that.owl2.trigger('next.owl.carousel');
		})
	}

	run(){
		this.mainSlider();
		this.subSlider();
		this.buttonClickinit();
	}
}

/* SearchBox */
var searchBox = new SearchBox;
searchBox.run();

/* Navigation */
var navigation = new Navigation;
navigation.run();

/* ProductSlider */
var productSlider = new ProductSlider;
productSlider.run();