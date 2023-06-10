

$(document).ready(function () {
  //For Travel Pillow slider
  const travelItems = document.querySelectorAll('.travel-product-slider-img');
  const travelItemCount = travelItems.length;

  //changing arrow color
  if(travelItemCount == 1){
    $('.travel-slider-next .fa').css('color', 'gray')
    $('.travel-slider-previous .fa').css('color', 'gray')
  }
  else{
     $('.travel-slider-next .fa').css('color', 'black')
    $('.travel-slider-previous .fa').css('color', 'black')
  }

  let travelCount = {
    count: 0
  };
  
  function showNextItem(items, count, itemCount) {
    items[count.count].classList.remove('active');
  
    if(count.count < itemCount - 1) {
      count.count = count.count + 1;
    } else {
      count.count = 0;
    }
  
    items[count.count].classList.add('active');
  }
  
  function showPreviousItem(items, count, itemCount) {
    items[count.count].classList.remove('active');
  
    if(count.count > 0) {
      count.count = count.count - 1;;
    } else {
      count.count = itemCount - 1;
    }
  
    items[count.count].classList.add('active');
  }
  
  $('.travel-slider-next').click(()=>showNextItem(travelItems, travelCount, travelItemCount));
  $('.travel-slider-previous').click(()=>showPreviousItem(travelItems, travelCount, travelItemCount));
  
  //For Home Pillow slider
  const homeItems = document.querySelectorAll('.home-product-slider-img');
  const homeItemCount = homeItems.length;
  let homeCount = {
    count: 0
  };

  //changing arrow color
  if(homeItemCount == 1){
    $('.home-slider-next .fa').css('color', 'gray')
    $('.home-slider-previous .fa').css('color', 'gray')
  }
  else{
     $('.home-slider-next .fa').css('color', 'black')
    $('.home-slider-previous .fa').css('color', 'black')
  }

  $('.home-slider-next').click(()=>showNextItem(homeItems, homeCount, homeItemCount));
  $('.home-slider-previous').click(()=>showPreviousItem(homeItems, homeCount, homeItemCount));
  

});