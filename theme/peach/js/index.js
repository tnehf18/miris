// index.php
var pos = 0;
var totalSlides = $('#slider-wrap ul li').length;
var sliderWidth = 1280; // $('#slider-wrap').width();
// 모바일의 경우 #slider-wrap의 너비가 기기에 따라 변하여, 이미지 너비만큼 지정함.
var maxWidth = sliderWidth*totalSlides;

function slideLeft(){
    pos--;
    if(pos==-1){ pos = totalSlides-1; }
    $('#slider-wrap ul#slider').css('left', -(sliderWidth*pos));
}

function slideRight(){
    pos++;
    if(pos==totalSlides){ pos = 0; }
    $('#slider-wrap ul#slider').css('left', -(sliderWidth*pos)); 
}

$(document).on('ready', function(){

	/*****************
     BUILD THE SLIDER
    *****************/
	$('#slider-wrap ul#slider').width(maxWidth);
   
    //next slide    
    $('#next').click(function(){
        slideRight();
    });
    
    //previous slide
    $('#previous').click(function(){
        slideLeft();
    });
    
     //automatic slider
    var autoSlider = setInterval(slideRight, 3000);

    //hide/show controls/btns when hover
    //pause automatic slide when hover
    $('#slider-wrap').hover(
      function(){ $(this).addClass('active'); clearInterval(autoSlider); }, 
      function(){ $(this).removeClass('active'); autoSlider = setInterval(slideRight, 3000); }
    );

  	var slideIndex = 0;
	showSlides();

	function showSlides() {
  	var i;
    var slides = $(".mySlides");
    //var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    //for (i = 0; i < dots.length; i++) {
    //    dots[i].className = dots[i].className.replace(" active", "");
    //}
    slides[slideIndex-1].style.display = "block";  
   // dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
	}
});