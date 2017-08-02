$(document).ready(function(){
	var comment_slider = $(".comment-slider").owlCarousel({
		items: 1,
		nav:false,
		margin:10,
		loop:false,
		dots:true
	});
	$('.comment-image-dots .image-dot').click(function(){
		$('.comment-image-dots .image-dot').removeClass('active');
		$(this).addClass('active');
		var active = $(this).index();
	  	comment_slider.trigger('to.owl.carousel',active);
	});
	comment_slider.on('changed.owl.carousel', function(e) {
		var active = e.item.index;
		$('.comment-image-dots .image-dot').removeClass('active');
		$('.comment-image-dots .image-dot').eq(active).addClass('active');
	});

	// menu links
	  $(".navbar-left").on("click","a", function (event) {
	      event.preventDefault();
	      var id  = $(this).attr('href'),
	        top = $(id).offset().top;
	      $('body,html').animate({scrollTop: top}, 700);
	  });

	//back top link
	  $(".back-top-link").hide();
	     
	  $(function () {
	      $(window).scroll(function () {
	          if ($(this).scrollTop() > 100) {
	              $('.back-top-link').fadeIn();
	          } else {
	              $('.back-top-link').fadeOut();
	          }
	      });

	      $('.back-top-link').click(function () {
	          $('body,html').animate({
	              scrollTop: 0
	          }, 700);
	          return false;
	      });
	  });

	  $('.navbar-toggle').click(function(){

	  	$(this).toggleClass('active');
	  });
	  $('.product-image-bg').click(function(e){
	  	e.preventDefault();
	  	$('#productModal .modal-body img').attr('src',$(this).attr('modal-image'));
	  	$('#productModal .modal-header h2').text($(this).parent().parent().find('h3').text());
	  	$('#productModal .character').html($(this).parent().parent().find('.product-info').clone());
	  });
});
$(window).on('load',function(){
	$('.ymaps-image-with-content-content').append('<img src="http://lestnicy-back.nolimit.by/assets/images/icons/map-marker.png" alt="" class="img-fluid" style="padding: 10px;height:70px;position: absolute;left: -22px;top: -17px;">');
});