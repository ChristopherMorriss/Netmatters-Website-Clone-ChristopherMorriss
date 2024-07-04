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


let acceptButton= document.querySelector('#accept');

acceptButton.addEventListener('click',()=>{
  document.cookie = "username=cookie; expires=Thu, 18 Dec 2015 12:00:00 UTC"; //Cookie creation 
  $('.cookie-popup').css('display','none'); 
  setCookie('cookie','accepted','730'); //Creates a cookie called cookie with the value accepted and an expiry data of 730 days
  });

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
	

	





	