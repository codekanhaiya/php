function myIcon(x) {
  x.classList.toggle("change");
}


function numbersOnly(input) {
  var num = /[^0-9]/gi;
  input.value = input.value.replace(num, "");
}


function myNav(){
  document.getElementById('navbar').classList.toggle('act');
}

function myLinks() {
  document.getElementById("myLinks").classList.toggle('active');
}

//for top button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


// about content
function myReading() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("Btn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}



function myScience1(){
  var x = document.getElementById("specialIcon");
  var y = document.getElementById("proceIcon");
    x.style.display="block";
    y.style.display="none";
}
function myScience2(){
  var x = document.getElementById("specialIcon");
  var y = document.getElementById("proceIcon");
  y.style.display="block";
  x.style.display="none";
}


// Contact Form Controlling 

function myClick1(){
  var a = document.getElementById("enquiryForm");
  var b = document.getElementById("complimentsForm");
  var c = document.getElementById("complaintsForm");
  var d = document.getElementById("othersForm");
  a.style.display="block";
  b.style.display="none";
  c.style.display="none";
  d.style.display="none";
}
function myClick2(){
  var a = document.getElementById("enquiryForm");
  var b = document.getElementById("complimentsForm");
  var c = document.getElementById("complaintsForm");
  var d = document.getElementById("othersForm");
  a.style.display="none";
  b.style.display="block";
  c.style.display="none";
  d.style.display="none";
}
function myClick3(){
  var a = document.getElementById("enquiryForm");
  var b = document.getElementById("complimentsForm");
  var c = document.getElementById("complaintsForm");
  var d = document.getElementById("othersForm");
  a.style.display="none";
  b.style.display="none";
  c.style.display="block";
  d.style.display="none";
}
function myClick4(){
  var a = document.getElementById("enquiryForm");
  var b = document.getElementById("complimentsForm");
  var c = document.getElementById("complaintsForm");
  var d = document.getElementById("othersForm");
  a.style.display="none";
  b.style.display="none";
  c.style.display="none";
  d.style.display="block";
}