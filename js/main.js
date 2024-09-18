$('.slider').slick({
  autoplay: true,
  autoplaySpeed: 4000,
  arrows: false,
  dots: true,
  adaptiveHeight: true,
});
$('.all-logos').slick({
  dots:false,
  //slidesToShow: 6,
  autoplay:true,
  autoplaySpeed: 4000,
  variableWidth:true,
  draggable: false

});


let hideOrShow=0; //Variable used to check what should happen after the menu is clicked
                  //It's a boolean variable so it could be represented with true (1) and false (0) instead
let enquiry_pressed=0;
let slideOutMenu = document.querySelector('#hamburger-menu'); //Targets the span which contains the hamburger menu icon
slideOutMenu.addEventListener('click',()=>{
  if (hideOrShow===0){ //If hideOrShow variable =0 (is off) when clicked, display the menu 
    hideOrShow +=1; //The hideOrShow variable is now on
    $('#pop-up-menu').css('display','block'); //The menu is displayed in flexbox
  }
  else if (hideOrShow===1){ //If hideOrShow variable =1 (is on) when clicked, hide the menu
    hideOrShow -=1; //The hideOrShow variable is now off
    $('#pop-up-menu').css('display','none'); //The menu is no longer displayed 
  }
});



let consentButton = document.querySelector('#fixed-consent'); //Shows the popup when clicked
consentButton.addEventListener('click',()=>{
  $('.cookie-popup').css('display','block');
});

let manageConsent=document.querySelector('#fixed-consent');
let cookieShadow=document.querySelector('.cookie-shadow');
let cookiePopup=document.querySelector('.cookie-popup');
let acceptCookies=document.querySelector('#accept');
manageConsent.addEventListener('click',()=>{
  cookieShadow.style.display = "flex";
  cookiePopup.style.display = "flex";
});



  
 

function setCookie(cname, cvalue, exdays) { //Function to create a cookie and set its expiry date and value
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  let cookies = document.cookie;
  //console.log(cookies);
}

function getCookie(cname) { //The function to check if a cookie exists
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

acceptCookies.addEventListener('click',()=>{
  cookieShadow.style.display = "none";
  cookiePopup.style.display = "none";
  document.cookie = "username=cookie; expires=Thu, 18 Dec 2015 12:00:00 UTC"; //Cookie creation 
  setCookie('cookie','accepted','730'); //Creates a cookie called cookie with the value accepted and an expiry data of 730 days
})

if (getCookie("cookie") === "accepted") { //Used to check if the cookie "cookies" is active. If it is, the cookie menu is hidden
  //The code below is designed to stop the popup from displaying if the cookie has already been accepted
  //It works but you can see the popup briefly before it is hidden
  cookieShadow.style.display = "none";
  cookiePopup.style.display = "none";
}
else{
  $('#cookie-popup').css("display","block");
}

let toggle=1; //Toggle is uesd to prevent clicks on the body from having any effect on the menu when it is closed
let page_container=document.querySelector('body');
page_container.addEventListener('click',()=>{
  if (toggle >=2){
    $('header').toggleClass('shade');
    toggle-=1;
    if (toggle !== 2){
      $('#pop-up-menu').css('display','none');
      $('.scroll-container').css('display','none');
      $('#container').css('margin-left','0px');
      $('#hamburger-menu').removeClass('activated'); 
      $('.clone').removeClass('activated');
    }
  }
    

});
let clone=document.querySelector('.clone');
clone.addEventListener('click',()=>{
  $('.scroll-container').css('display','block');
  $('.clone').toggleClass('activated');
  $('#container').css('margin-left','-350px'); 
  $('#pop-up-menu').css('z-index','10');
  $('#pop-up-menu').css('display','block');
  toggle+=2;
});

let hamburger_menu=document.querySelector('#hamburger-menu');
hamburger_menu.addEventListener('click',()=>{
  $('.scroll-container').css('display','block');
  $('#hamburger-menu').toggleClass('activated');
  $('#container').css('margin-left','-350px'); 
  $('#pop-up-menu').css('z-index','10');
  $('#pop-up-menu').css('display','block');
  toggle+=2;
});


let lastScrollTop = 0;
let up_not_down = 0;

window.addEventListener('scroll', function() {
    //Code that triggers when scrolling upwards
    let currentScrollTop = window.scrollY || document.documentElement.scrollTop;
    if (currentScrollTop < lastScrollTop) {
        //console.log('Scrolling up');
        up_not_down = 1;
        $('.sticky-header').css('display','block');
        $('.sticky-header').removeClass('slideOutUp');
    }
    else{
      up_not_down =0;
    } 

    lastScrollTop = currentScrollTop;
});

window.addEventListener('scroll', (event) => {
  if (up_not_down != 1){
    $('.sticky-header').addClass('slideOutUp'); 
  }
  up_not_down = 0;
});

document.getElementById('scroll1').addEventListener('scroll', function() {
  document.getElementById('scroll1').scrollTop = this.scrollTop;
  document.getElementById('scroll1').scrollLeft = this.scrollLeft;
});

window.addEventListener('scroll', function() {
  if (window.scrollY === 0) {
      $('.sticky-header').css('display','none');
  }
});

accordion=document.querySelector('.accordion');
accordion.addEventListener('click',()=>{
  $('.hidden-accordion').toggleClass('active');
  $('.hidden-accordion').slideToggle("slow",function(){ //Gives the accordion its sliding animation

  });
});


enquiry_btn=document.querySelector('#send-enquiry');
enquiry_btn.addEventListener('click',()=>{
  enquiry_pressed=1;
  let email = $('#email').val();
  let telephone = $('#telephone').val();
  let name1 = $('#name').val();
  let message = $('#message').val();
  if (email === ""){
    $('#email').addClass('error');
  }
  if(telephone === ""){
    $('#telephone').addClass('error');
  }
  if(name1 === ""){
    $('#name').addClass('error');
  }
  if(message === ""){
    $('#message').addClass('error');
  }

});

/* Tasks to complete:
Add news articles to database
Add project to CPanel
*/

//id,category,tag,image,title,description readtime null author authorimage,date

function validInput(){
  if (enquiry_pressed === 1){
    let email = $('#email').val();
    let telephone = $('#telephone').val();
    let name1 = $('#name').val();
    let message = $('#message').val();
    if (email === ""){
      $('#email').addClass('error');
    }
    else{
      $('#email').removeClass('error');
    }
    if(telephone === ""){
      $('#telephone').addClass('error');
    }
    else{
      $('#telephone').removeClass('error');
    }
    if(name1 === ""){
      $('#name').addClass('error');
    }
    else{
      $('#name').removeClass('error');
    }
    if(message === ""){
      $('#message').addClass('error');
    }
    else{
      $('#message').removeClass('error');
    }

  }
}