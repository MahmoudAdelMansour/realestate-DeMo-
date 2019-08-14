// Slider Items   | Array.from [ES6 Feature]
//هيجيب ارراي من الـ عنصر دي
// var sliderItems = Array.from(document.querySelectorAll('.slide-number img'));
// // Get Number Of Slides
// var slidesCount = sliderItems.length;
// // Set Current Slide
// var currentSlide = 1;
// // Slide Number String Element | عدد الصور
// // var SlideNumberElement = document.getElementById('slidenumber');
// // previous And Next buttons
// var nextButton = document.getElementById('next'),
//   prevButton = document.getElementById('prev');
// // Handle Click On Pervious And Next Button
// nextButton.onclick = nextSlide;
// prevButton.onclick = prevSlide;

//Create The Main UL ELement
// var paginationElement = document.createElement('ul');
// Set Id On Created element
// paginationElement.setAttribute('id','pagination-ul');
var slideIndex = 0;
carousel();
function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.opacity = "0";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.opacity = "1";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
// START NEW AREA  OF JAVASCRIP

var menuSocial = document.getElementById('social');
var sectionA = document.getElementById('a');
window.addEventListener('scroll',function(){if(document.scrollingElement.scrollTop >= 864) {
	menuSocial.style.opacity = 1 ;}
  else {
	menuSocial.style.opacity = 0 ;
}
});
var buttnav = document.getElementById('barisa');
var thenav  = document.getElementById('yes');
buttnav.onclick = function() {
  if(thenav.classList.contains('trac')){
    thenav.classList.remove('trac');
  }
  else {
    thenav.classList.add('trac');
  }
}
// AREA
