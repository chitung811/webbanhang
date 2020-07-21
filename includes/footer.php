		<div id="footer">
			
			<!-- content_footer -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h2 class="title_school">5T SHOP</h2>
							<h4 class="title_name">Địa chỉ liên hệ: 280 An Dương Vương phường 4 quận 5</h4>
							<h4 class="title_name">Số điện thoại: 05831613331</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer -->
	</div>
	<!-- wrapper -->
</body>

<!-- Bootstrap 4 -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- JQuery 3.4.1 -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<!-- Vue JS -->
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<!-- Owl Carousel -->
<script src="public/owlcarousel/owl.carousel.min.js"></script>
<script>
	
		$(document).ready(function(){
			
			// owl product
			$('.owl-product').owlCarousel({
			    loop:false,
			    margin:10,
			    autoplay:true,
				autoplayTimeout:5000,
			    responsiveClass:true,
			    responsive:{
			        0:{
			            items:2,
			            nav:false
			        },
			        600:{
			            items:3,
			            nav:false
			        },
			        1000:{
			            items:4,
			            nav:false,
			            loop:false
			        }
			    }
			})

			// owl thumb
			$('.owl-product-thumb').owlCarousel({
			    loop:false,
			    margin:10,
			    autoplay:true,
				autoplayTimeout:3000,
			    responsiveClass:true,
			    responsive:{
			        0:{
			            items:4,
			            nav:false
			        },
			        600:{
			            items:4,
			            nav:false
			        },
			        1000:{
			            items:4,
			            nav:false,
			            loop:false
			        }
			    }
			})

			// owl blog
			$('.owl-blog').owlCarousel({
			    loop: false,
			    margin:10,
			    autoplay:true,
				autoplayTimeout:5000,
			    responsiveClass:true,
			    responsive:{
			        0:{
			            items:1,
			            nav:false
			        },
			        600:{
			            items:3,
			            nav:false
			        },
			        1000:{
			            items:3,
			            nav:false,
			            loop:false
			        }
			    }
			})

			// owl blog
			$('.owl-product-rela').owlCarousel({
			    loop: false,
			    margin:10,
			    autoplay:true,
				autoplayTimeout:5000,
			    responsiveClass:true,
			    responsive:{
			        0:{
			            items:2,
			            nav:false
			        },
			        600:{
			            items:3,
			            nav:false
			        },
			        1000:{
			            items:6,
			            nav:false,
			            loop:false
			        }
			    }
			})

		});


		// toggle menu header
		$( ".iconbar" ).click(function() {
		  $( ".ul_collections" ).slideToggle(400);
		});

		// toggle submenu header
		$(".slide").click(function(){
		    var target = $(this).parent().children(".slideContent");
		    $(target).slideToggle();
		});

		// change image clicked
		var image_show = document.getElementById('img-container');
		function change_img(image){
			image_show.src = image.src;
		}

		// https://css-tricks.com/snippets/jquery/smooth-scrolling/
		// Select all links with hashes
		$('a[href*="#"]')
		  	// Remove links that don't actually link to anything
		  	.not('[href="#"]')
		  	.not('[href="#0"]')
		  	.click(function(event) {
		    // On-page links
		    if (
		      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
		      && 
		      location.hostname == this.hostname
		    ) {
		      // Figure out element to scroll to
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		      // Does a scroll target exist?
		      if (target.length) {
		        // Only prevent default if animation is actually gonna happen
		        event.preventDefault();
		        $('html, body').animate({
		          scrollTop: target.offset().top
		        }, 600, function() {
		          // Callback after animation
		          // Must change focus!
		          var $target = $(target);
		          $target.focus();
		          if ($target.is(":focus")) { // Checking if the target was focused
		            return false;
		          } else {
		            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
		            $target.focus(); // Set focus again
		          };
		        });
		      }
		    }
		});

		// make tab by vue js
		new Vue({
			el: '#app-tabs',
			data: {
				tab1: true,
				tab2: false,
				tab3: false
			},
			create: function () {
				this.tab1btn()
			},
			methods: {
				tab1btn: function () {
					// add class select
					$('#selecttab1').addClass('selection')
					$('#selecttab2').removeClass('selection')
					$('#selecttab3').removeClass('selection')
					// add class active
					$('#tab1btn').addClass('active')
					$('#tab2btn').removeClass('active')
					$('#tab3btn').removeClass('active')
					this.tab1 = true
					this.tab2 = false
					this.tab3 = false
				},
				tab2btn: function () {
					// add class select
					$('#selecttab1').removeClass('selection')
					$('#selecttab2').addClass('selection')
					$('#selecttab3').removeClass('selection')
					// add class active
					$('#tab1btn').removeClass('active')
					$('#tab2btn').addClass('active')
					$('#tab3btn').removeClass('active')
					this.tab1 = false
					this.tab2 = true
					this.tab3 = false
				},
				tab3btn: function () {
					// add class select
					$('#selecttab1').removeClass('selection')
					$('#selecttab2').removeClass('selection')
					$('#selecttab3').addClass('selection')
					// add class active
					$('#tab1btn').removeClass('active')
					$('#tab2btn').removeClass('active')
					$('#tab3btn').addClass('active')
					this.tab1 = false
					this.tab2 = false
					this.tab3 = true
				}
			}
		})

		// back to top
		$('.scrolltop').click(function(){ 
	        $("html, body").animate({ scrollTop: 0 }, 1000); 
	        return false; 
	    });

	    // loading 
	    window.addEventListener("load", function (){
	      const loader = document.querySelector(".loader");
	      loader.className += " hidden";
	    });

</script>
</html>