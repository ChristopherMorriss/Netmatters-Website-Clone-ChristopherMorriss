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


// let acceptButton= document.querySelector('#accept');

// acceptButton.addEventListener('click',()=>{
//   document.cookie = "username=cookie; expires=Thu, 18 Dec 2015 12:00:00 UTC"; //Cookie creation 
//   $('.cookie-popup').css('display','none'); 
//   setCookie('cookie','accepted','730'); //Creates a cookie called cookie with the value accepted and an expiry data of 730 days
//   });

let consentButton = document.querySelector('#fixed-consent'); //Shows the popup when clicked
consentButton.addEventListener('click',()=>{
  $('.cookie-popup').css('display','block');
});

function setCookie(cname, cvalue, exdays) { //Function to create a cookie and set its expiry date and value
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
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

if (getCookie("cookie") === "accepted") { //Used to check if the cookie "cookies" is active. If it is, the cookie menu is hidden
  $('#cookie-popup').hide(); //This is designed to stop the popup from displaying if the cookie has already been accepted
                             //It is not working properly at the moment
}
	
hover_submenu1=document.querySelector('.hover-submenu1');
submenu_1=document.querySelector('.submenu_1');
submenu_1.addEventListener('mouseover',()=>{
  hover_submenu1.style.display="grid";
});
submenu_1.addEventListener('mouseout',()=>{
  hover_submenu1.style.display="none";
});
hover_submenu1.addEventListener('mouseover',()=>{
  hover_submenu1.style.display="grid";
});
hover_submenu1.addEventListener('mouseout',()=>{
  hover_submenu1.style.display="none";
});

hover_submenu2=document.querySelector('.hover-submenu2');
submenu_2=document.querySelector('.submenu_2');
submenu_2.addEventListener('mouseover',()=>{
  hover_submenu2.style.display="grid";
});
submenu_2.addEventListener('mouseout',()=>{
  hover_submenu2.style.display="none";
});
hover_submenu2.addEventListener('mouseover',()=>{
  hover_submenu2.style.display="grid";
});
hover_submenu2.addEventListener('mouseout',()=>{
  hover_submenu2.style.display="none";
});

hover_submenu3=document.querySelector('.hover-submenu3');
submenu_3=document.querySelector('.submenu_3');
submenu_3.addEventListener('mouseover',()=>{
  hover_submenu3.style.display="grid";
});
submenu_3.addEventListener('mouseout',()=>{
  hover_submenu3.style.display="none";
});
hover_submenu3.addEventListener('mouseover',()=>{
  hover_submenu3.style.display="grid";
});
hover_submenu3.addEventListener('mouseout',()=>{
  hover_submenu3.style.display="none";
});

hover_submenu4=document.querySelector('.hover-submenu4');
submenu_4=document.querySelector('.submenu_4');
submenu_4.addEventListener('mouseover',()=>{
  hover_submenu4.style.display="grid";
});
submenu_4.addEventListener('mouseout',()=>{
  hover_submenu4.style.display="none";
});
hover_submenu4.addEventListener('mouseover',()=>{
  hover_submenu4.style.display="grid";
});
hover_submenu4.addEventListener('mouseout',()=>{
  hover_submenu4.style.display="none";
});

hover_submenu5=document.querySelector('.hover-submenu5');
submenu_5=document.querySelector('.submenu_5');
submenu_5.addEventListener('mouseover',()=>{
  hover_submenu5.style.display="grid";
});
submenu_5.addEventListener('mouseout',()=>{
  hover_submenu5.style.display="none";
});
hover_submenu5.addEventListener('mouseover',()=>{
  hover_submenu5.style.display="grid";
});
hover_submenu5.addEventListener('mouseout',()=>{
  hover_submenu5.style.display="none";
});

hover_submenu6=document.querySelector('.hover-submenu6');
submenu_6=document.querySelector('.submenu_6');
submenu_6.addEventListener('mouseover',()=>{
  hover_submenu6.style.display="grid";
});
submenu_6.addEventListener('mouseout',()=>{
  hover_submenu6.style.display="none";
});
hover_submenu6.addEventListener('mouseover',()=>{
  hover_submenu6.style.display="grid";
});
hover_submenu6.addEventListener('mouseout',()=>{
  hover_submenu6.style.display="none";
});

hover_submenu7=document.querySelector('.hover-submenu7');
submenu_7=document.querySelector('.submenu_7');
submenu_7.addEventListener('mouseover',()=>{
  hover_submenu7.style.display="grid";
});
submenu_7.addEventListener('mouseout',()=>{
  hover_submenu7.style.display="none";
});
hover_submenu7.addEventListener('mouseover',()=>{
  hover_submenu7.style.display="grid";
});
hover_submenu7.addEventListener('mouseout',()=>{
  hover_submenu7.style.display="none";
});


hover_partners1=document.querySelector('.triangle-partners-1');
console.log(hover_partners1)
partners1=document.querySelector('.partners-1');
partners1.addEventListener('mouseover',()=>{
  console.log('This is being triggered!');
  hover_partners1.style.display="block";
});