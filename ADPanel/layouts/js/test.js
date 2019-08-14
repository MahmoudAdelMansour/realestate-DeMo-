// Slider Items   | Array.from [ES6 Feature]
//هيجيب ارراي من الـ عنصر دي
var sliderItems = Array.from(document.querySelectorAll('.slide-number img'));
// Get Number Of Slides
var slidesCount = sliderItems.length;
// Set Current Slide
var currentSlide = 1;
// Slide Number String Element | عدد الصور
// var SlideNumberElement = document.getElementById('slidenumber');
// previous And Next buttons
var nextButton = document.getElementById('next'),
  prevButton = document.getElementById('prev');
// Handle Click On Pervious And Next Button
nextButton.onclick = nextSlide;
prevButton.onclick = prevSlide;

//Create The Main UL ELement
// var paginationElement = document.createElement('ul');
// Set Id On Created element
// paginationElement.setAttribute('id','pagination-ul');

//Function NextSlide ->
function nextSlide() {

}
//Function PrevSlide ->
function prevSlide() {

}

// Create The chacker Function
function theView() {
  'use strict';
  // Set Active Class On Current Slide
  sliderItems[currentSlide - 1].classList.add('active');
}
// Trigger The function
theView();
alert(1);
