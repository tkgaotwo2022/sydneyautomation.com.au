$(window).scroll(function () {
var scroll = $(window).scrollTop();
if (scroll < 100) {
$('.fixed-top').css({
"background": "transparent",
"box-shadow": "none"
});
} else {
$('.fixed-top').css({
"background": "#fff",
"box-shadow": "9px 8px 15px -1px rgb(0 0 0 / 10%)"

});
}
});


// var owl = $('.what_slider');
// owl.owlCarousel({
// items:3,
// loop:true,
// margin:8,
// navText: [
// "<img src='image/arrow-left.png'>",
// "<img src='image/arrow-right.png'>",
// ],
// autoplay:true,
// autoplayTimeout:5000,
// autoplayHoverPause:true,
// responsive:{
// 0:{
// items:1
// },
// 600:{
// items:2
// },
// 1000:{
// items:3
// }
// }
// });
// $('.play').on('click',function(){
// owl.trigger('play.owl.autoplay',[5000])
// })
// $('.stop').on('click',function(){
// owl.trigger('stop.owl.autoplay')
// })



const menu = document.querySelector(".menu");
const times = document.querySelector(".times");
const small = document.querySelector(".small");
const large = document.querySelector(".large");
const overlay = document.querySelector(".overlay");

menu.addEventListener("click", function () {
  small.classList.add("show");
  overlay.classList.add("show");
});
times.addEventListener("click", function () {
  small.classList.remove("show");
  overlay.classList.remove("show");
});

overlay.addEventListener("click", () => {
  small.classList.remove("show");
  overlay.classList.remove("show");
});


const linkSms = document.querySelectorAll(".link-sm");
linkSms.forEach((linkSm) => {
  linkSm.onclick = function () {
    const innerMenu = linkSm.children[2];
    console.log(innerMenu);
    if (innerMenu.style.maxHeight) {
      innerMenu.style.maxHeight = null;
    } else {
      innerMenu.style.maxHeight = innerMenu.scrollHeight + "px";
    }
  };
});






// add media===========================================================
// =======================================================================


document.getElementById('files').addEventListener('change', previewFile, false);

/*
Function to preview the files loaded
*/
function previewFile() {

  // New files attached
  var files = document.querySelector('input[type=file]').files;

  if (files) {

    iterateFile(files);

  } else {
    alert("File no detected");
    //If the file is not detected it will     be removed
    $('#imagen' + nFiles).remove();
  }

}

function iterateFile(file2) {
  alert("Number of Files adding : " + file2.length);
  for (x = 0; x < file2.length; x++) {
    var file = file2[x];
    var reader = new FileReader()

    reader.addEventListener("load", function(event) {
      //Thumbnail generated
      var picFile = event.target;
      $('<img class="box"  height="80" width="80" src="' + picFile.result + '">').appendTo('.container');

      $('.box').draggable({
        cursor: 'move',
        containment : '.container'
      });

    });

    reader.readAsDataURL(file);

  }

}


// nav tab====================================
// // ---------------------------------------------------------
// editor

function boldText(){
  var target = document.getElementById("TextArea");
  if( target.style.fontWeight == "bolder" ) {
      target.style.fontWeight = "normal";
  } else {
      target.style.fontWeight = "bolder";
  }
}



function italicText(){
  var target = document.getElementById("TextArea");
  if( target.style.fontStyle == "italic" ) {
      target.style.fontStyle = "normal";
  } else {
      target.style.fontStyle = "italic";
  }
}

function underlineText(){
  var target = document.getElementById("TextArea");
  if( target.style.textDecoration == "underline" ) {
      target.style.textDecoration = "none";
  } else {
      target.style.textDecoration = "underline";
  }
}
  function justifyRight(){
  var target = document.getElementById("TextArea");
  if( target.style.textAlign == "justifyLeft" ) {
      target.style.textAlign = "inherit";
  } else {
      target.style.textAlign = "justifyLeft";
  }
  }
   function justifyRight(){
  var target = document.getElementById("TextArea");
  if( target.style.textAlign == "justifyCenter" ) {
      target.style.textAlign = "inherit";
  } else {
      target.style.textAlign = "justifyCenter";
  }
   }
   function insertOrderedList(){
  var target = document.getElementById("TextArea");
  if( target.style.insertUnorderedList == "insertUnorderedList" ) {
      target.style.insertUnorderedList = "inherit";
  } else {
      target.style.insertOrderedList = "insertUnorderedList";
  }
   }
   

//link   
function link()
  {
  var target = document.getElementById("TextArea");
      var url = prompt("Enter the URL");
      document.execCommand("createLink", false, url);
  }


// 
  window.addEventListener("load", function(){
      
      if(document.contentEditable != undefined && document.execCommand != undefined)
     {
         alert("HTML5 Document Editing API Is Not Supported");
      }
      else
      {
          document.execCommand('styleWithCSS', false, true);
      }
  }, false);
  
 
  
 
  function link()
  {
      var url = prompt("Enter the URL");
      document.execCommand("createLink", false, url);
  }
   function image()
  {
      var url = prompt("Enter the URL");
      document.execCommand("insertImage", false, url);
  }



  // part-2

