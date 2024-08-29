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
  //console.log('Needs to be accepted before it disappears')
}

// for (i=0;i<7;i++){
//   hover_submenu=document.querySelector(`.hover-submenu${i}`);
//   submenu=document.querySelector(`.submenu_${i}`);
//   submenu.addEventListener('mouseover',()=>{
//     hover_submenu.style.display="grid";
//     $(`.submenu_${i}`).css('background-color','#67809F');
//     $(`.btn-${i} span`).css('color','white');
//   });
//   submenu_[i].addEventListener('mouseout',()=>{
//     hover_submenu[i].style.display="none";
//     $(`.submenu_${i}`).css('background-color','#333645');
//     $(`.btn-${i} span`).css('color','#67809F');
//   });
//   hover_submenu[i].addEventListener('mouseover',()=>{
//     hover_submenu[i].style.display="grid";
//     $(`.submenu_${i}`).css('background-color','#67809F');
//     $(`.btn-${i} span`).css('color','white');
//   });
//   hover_submenu[i].addEventListener('mouseout',()=>{
//     hover_submenu[i].style.display="none";
//     $(`.submenu_${i}`).css('background-color','#333645');
//     $(`.btn-${i} span`).css('color','#67809F');
// });
// }
	
//Code for the navigation bar - needs to be made much more efficient
//hover_submenu1=document.querySelector('.hover-submenu1');
//submenu_1=document.querySelector('.submenu_1');
// submenu_1.addEventListener('mouseover',()=>{
//   console.log('Being activated');
//   hover_submenu1.style.display="grid";
//   $('.submenu_1').css('background-color','#67809F');
//   $('.btn-1 span').css('color','white');
// });
// submenu_1.addEventListener('mouseout',()=>{
//   hover_submenu1.style.display="none";
//   $('.submenu_1').css('background-color','#333645');
//   $('.btn-1 span').css('color','#67809F');
// });
// hover_submenu1.addEventListener('mouseover',()=>{
//   hover_submenu1.style.display="grid";
//   $('.submenu_1').css('background-color','#67809F');
//   $('.btn-1 span').css('color','white');
// });
// hover_submenu1.addEventListener('mouseout',()=>{
//   hover_submenu1.style.display="none";
//   $('.submenu_1').css('background-color','#333645');
//   $('.btn-1 span').css('color','#67809F');
// });

// hover_submenu2=document.querySelector('.hover-submenu2');
// submenu_2=document.querySelector('.submenu_2');
// submenu_2.addEventListener('mouseover',()=>{
//   hover_submenu2.style.display="grid";
//   $('.submenu_2').css('background-color','#4183D7');
//   $('.btn-2 span').css('color','white');
// });
// submenu_2.addEventListener('mouseout',()=>{
//   hover_submenu2.style.display="none";
//   $('.submenu_2').css('background-color','#333645');
//   $('.btn-2 span').css('color','#4183D7');
// });
// hover_submenu2.addEventListener('mouseover',()=>{
//   hover_submenu2.style.display="grid";
//   $('.submenu_2').css('background-color','#4183D7');
//   $('.btn-2 span').css('color','white');
// });
// hover_submenu2.addEventListener('mouseout',()=>{
//   hover_submenu2.style.display="none";
//   $('.submenu_2').css('background-color','#333645');
//   $('.btn-2 span').css('color','#4183D7');
// });

// hover_submenu3=document.querySelector('.hover-submenu3');
// submenu_3=document.querySelector('.submenu_3');
// submenu_3.addEventListener('mouseover',()=>{
//   hover_submenu3.style.display="grid";
//   $('.submenu_3').css('background-color','#2ECC71');
//   $('.btn-3 span').css('color','white');
// });
// submenu_3.addEventListener('mouseout',()=>{
//   hover_submenu3.style.display="none";
//   $('.submenu_3').css('background-color','#333645');
//   $('.btn-3 span').css('color','#2ECC71');
// });
// hover_submenu3.addEventListener('mouseover',()=>{
//   hover_submenu3.style.display="grid";
//   $('.submenu_3').css('background-color','#2ECC71');
//   $('.btn-3 span').css('color','white');
// });
// hover_submenu3.addEventListener('mouseout',()=>{
//   hover_submenu3.style.display="none";
//   $('.submenu_3').css('background-color','#333645');
//   $('.btn-3 span').css('color','#2ECC71');
// });

// hover_submenu4=document.querySelector('.hover-submenu4');
// submenu_4=document.querySelector('.submenu_4');
// submenu_4.addEventListener('mouseover',()=>{
//   hover_submenu4.style.display="grid";
//   $('.submenu_4').css('background-color','#CE4125');
//   $('.btn-4 span').css('color','white');
// });
// submenu_4.addEventListener('mouseout',()=>{
//   hover_submenu4.style.display="none";
//   $('.submenu_4').css('background-color','#333645');
//   $('.btn-4 span').css('color','#CE4125');
// });
// hover_submenu4.addEventListener('mouseover',()=>{
//   hover_submenu4.style.display="grid";
//   $('.submenu_4').css('background-color','#CE4125');
//   $('.btn-4 span').css('color','white');
// });
// hover_submenu4.addEventListener('mouseout',()=>{
//   hover_submenu4.style.display="none";
//   $('.submenu_4').css('background-color','#333645');
//   $('.btn-4 span').css('color','#CE4125');
// });

// hover_submenu5=document.querySelector('.hover-submenu5');
// submenu_5=document.querySelector('.submenu_5');
// submenu_5.addEventListener('mouseover',()=>{
//   hover_submenu5.style.display="grid";
//   $('.submenu_5').css('background-color','#926fb1');
//   $('.btn-5 span').css('color','white');
// });
// submenu_5.addEventListener('mouseout',()=>{
//   hover_submenu5.style.display="none";
//   $('.submenu_5').css('background-color','#333645');
//   $('.btn-5 span').css('color','#926fb1');
// });
// hover_submenu5.addEventListener('mouseover',()=>{
//   hover_submenu5.style.display="grid";
//   $('.submenu_5').css('background-color','#926fb1');
//   $('.btn-5 span').css('color','white');
// });
// hover_submenu5.addEventListener('mouseout',()=>{
//   hover_submenu5.style.display="none";
//   $('.submenu_5').css('background-color','#333645');
//   $('.btn-5 span').css('color','#926fb1');
// });

// hover_submenu6=document.querySelector('.hover-submenu6');
// submenu_6=document.querySelector('.submenu_6');
// submenu_6.addEventListener('mouseover',()=>{
//   hover_submenu6.style.display="grid";
//   $('.submenu_6').css('background-color','#f62459');
//   $('.btn-6 span').css('color','white');
// });
// submenu_6.addEventListener('mouseout',()=>{
//   hover_submenu6.style.display="none";
//   $('.submenu_6').css('background-color','#333645');
//   $('.btn-6 span').css('color','#f62459');
// });
// hover_submenu6.addEventListener('mouseover',()=>{
//   hover_submenu6.style.display="grid";
//   $('.submenu_6').css('background-color','#f62459');
//   $('.btn-6 span').css('color','white');
// });
// hover_submenu6.addEventListener('mouseout',()=>{
//   hover_submenu6.style.display="none";
//   $('.submenu_6').css('background-color','#333645');
//   $('.btn-6 span').css('color','#f62459');
// });

// hover_submenu7=document.querySelector('.hover-submenu7');
// submenu_7=document.querySelector('.submenu_7');
// submenu_7.addEventListener('mouseover',()=>{
//   hover_submenu7.style.display="grid";
//   $('.submenu_7').css('background-color','#CE4125');
//   $('.btn-7 span').css('color','white');
// });
// submenu_7.addEventListener('mouseout',()=>{
//   hover_submenu7.style.display="none";
//   $('.submenu_7').css('background-color','#333645');
//   $('.btn-7 span').css('color','#CE4125');
// });
// hover_submenu7.addEventListener('mouseover',()=>{
//   hover_submenu7.style.display="grid";
//   $('.submenu_7').css('background-color','#CE4125');
//   $('.btn-7 span').css('color','white');
// });
// hover_submenu7.addEventListener('mouseout',()=>{
//   hover_submenu7.style.display="none";
//   $('.submenu_7').css('background-color','#333645');
//   $('.btn-7 span').css('color','#CE4125');
// });




let toggle=1;
let page_container=document.querySelector('body');
page_container.addEventListener('click',()=>{
  if (toggle >=2){
    $('header').toggleClass('shade');
    toggle-=1;
    if (toggle !== 2){
      $('#pop-up-menu').css('display','none');
      $('#container').css('margin-left','0px'); 
    }
  }
    

});
let clone=document.querySelector('.clone');
clone.addEventListener('click',()=>{
  $('.scroll-container').css('display','block');
  $('line').toggleClass('activated');
  $('#container').css('margin-left','-350px'); 
  $('#pop-up-menu').css('z-index','10');
  $('#pop-up-menu').css('display','block');
  toggle+=2;
});

let hamburger_menu=document.querySelector('#hamburger-menu');
hamburger_menu.addEventListener('click',()=>{
  $('.scroll-container').css('display','block');
  $('line').toggleClass('activated');
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
        console.log('Scrolling up');
        // Add your code for scroll up event here
        up_not_down = 1;
        $('.sticky-header').css('display','block');
    }
    else{
      up_not_down =0;
    } 

    lastScrollTop = currentScrollTop;
});

window.addEventListener('scroll', (event) => {
  // console.log(up_not_down);
  if (up_not_down != 1){
    $('.sticky-header').css('display','none');
    console.log('scrolling down');
  }
  up_not_down = 0;
  //console.log(up_not_down);
  
});

document.getElementById('scroll1').addEventListener('scroll', function() {
  document.getElementById('scroll1').scrollTop = this.scrollTop;
  document.getElementById('scroll1').scrollLeft = this.scrollLeft;
});

//Important things to do:
//Improve partners carousel slide functionality
//Implement sticky header
//Add transition to hamburger menu
//Improve slide out menu style

//Second priority:
//Improve efficiency of navigation hover effects
//Change button elements to styled <a> tags
