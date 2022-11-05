var overlay = document.getElementById("overlay");


// Buttons to 'switch' the page
var openSignUpButton = document.getElementById("slide-left-button");
var openSignInButton = document.getElementById("slide-right-button");

// The sidebars
var leftText = document.getElementById("sign-in");
var rightText = document.getElementById("sign-up");

// The forms
var accountForm = document.getElementById("sign-in-info")
var signinForm = document.getElementById("sign-up-info");

// Open the Sign Up page
openSignUp = () => {
    // Remove classes so that animations can restart on the next 'switch'
    leftText.classList.remove("overlay-text-left-animation-out");
    overlay.classList.remove("open-sign-in");
    rightText.classList.remove("overlay-text-right-animation");
    // Add classes for animations
    accountForm.className += " form-left-slide-out"
    rightText.className += " overlay-text-right-animation-out";
    overlay.className += " open-sign-up";
    leftText.className += " overlay-text-left-animation";
    // hide the sign up form once it is out of view
    setTimeout(function () {
        accountForm.classList.remove("form-left-slide-in");
        accountForm.style.display = "none";
        accountForm.classList.remove("form-left-slide-out");
    }, 700);
    // display the sign in form once the overlay begins moving right
    setTimeout(function () {
        signinForm.style.display = "flex";
        signinForm.classList += " form-right-slide-in";
    }, 200);
}

// Open the Sign In page
openSignIn = () => {
    // Remove classes so that animations can restart on the next 'switch'
    leftText.classList.remove("overlay-text-left-animation");
    overlay.classList.remove("open-sign-up");
    rightText.classList.remove("overlay-text-right-animation-out");
    // Add classes for animations
    signinForm.classList += " form-right-slide-out";
    leftText.className += " overlay-text-left-animation-out";
    overlay.className += " open-sign-in";
    rightText.className += " overlay-text-right-animation";
    // hide the sign in form once it is out of view
    setTimeout(function () {
        signinForm.classList.remove("form-right-slide-in")
        signinForm.style.display = "none";
        signinForm.classList.remove("form-right-slide-out")
    }, 700);
    // display the sign up form once the overlay begins moving left
    setTimeout(function () {
        accountForm.style.display = "flex";
        accountForm.classList += " form-left-slide-in";
    }, 200);
}






// Buttons to 'switch' the page in sign-up 
var babysitterButton = document.getElementById("babysitterButton");
var parentButton = document.getElementById("parentButton");


// The forms of the sign-up
var babysitterForm = document.getElementById("sign-up-form-babtsitter");
var parentForm = document.getElementById("sign-up-form-parent");


babysitterFun = () => {
    
    
    // hide the sign up form once it is out of view
    setTimeout(function () {
        parentForm.style.display="none";
        babysitterForm.style.display="block";
        
        
    }, 700);
}

parentFun = () =>{
    // hide the sign up form once it is out of view
    setTimeout(function () {
        
        babysitterForm.style.display="none";
        parentForm.style.display="block";
    }, 700);
    
  }


// When a 'switch' button is pressed, switch page
openSignUpButton.addEventListener("click", openSignUp, false);
openSignInButton.addEventListener("click", openSignIn, false);

// When a 'switch' button is pressed, switch page in sign-up 
babysitterButton.addEventListener("click", babysitterFun, false);
parentButton.addEventListener("click", parentFun, false);

function allowDrop(ev) {
    ev.preventDefault();
  }
  
  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
  }
  
  function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
  }
  $( document ).ready( function() {

    $('body').noisy({
        intensity: 0.2,
        size: 200,
        opacity: 0.28,
        randomColors: false, // true by default
        color: '#000000'
    });
      
        //Google Maps JS
        //Set Map
        function initialize() {
                var myLatlng = new google.maps.LatLng(53.3333,-3.08333);
                var imagePath = 'http://m.schuepfen.ch/icons/helveticons/black/60/Pin-location.png'
                var mapOptions = {
                    zoom: 11,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
    
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
            //Callout Content
            var contentString = 'Some address here..';
            //Set window width + content
            var infowindow = new google.maps.InfoWindow({
                content: contentString,
                maxWidth: 500
            });
    
            //Add Marker
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                icon: imagePath,
                title: 'image title'
            });
    
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });
    
            //Resize Function
            google.maps.event.addDomListener(window, "resize", function() {
                var center = map.getCenter();
                google.maps.event.trigger(map, "resize");
                map.setCenter(center);
            });
        }
    
        google.maps.event.addDomListener(window, 'load', initialize);
    
    });
  window.initMap = initMap;


  function update(){
    document.getElementById("input").value = "This is an auto-generated value";
   }