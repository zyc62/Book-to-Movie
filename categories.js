var x1;
var x2;
var x3;
var x4;
var x5;
var x6;
var x7;

var slideIndex = 1;



var currentImage1;
var currentImage2;
var currentImage3;
var currentImage3;
var currentImage4;
var currentImage5;
var currentImage6;
var currentImage7;




showSlides(slideIndex,0);



function plusSlide(event) {

 var id = event.target.id;

 var name = event.target.className;

 var groupIndex;

  
 if( name == "prev"){


 	 slideIndex = slideIndex-1;

 	 groupIndex = parseInt(id.replace("prev",""));
 

     showSlides(slideIndex,groupIndex);

 }



if(name == "next"){


 	  slideIndex = slideIndex+1;

 	  groupIndex = parseInt(id.replace("next",""));

 	  showSlides(slideIndex,groupIndex);

 }
 
 

}


function showSlides(n,m) {
  

  var i;

  var slides0 = document.getElementsByClassName("tv");//length 2
  var slides1 = document.getElementsByClassName("th");//length 2
  var slides2 = document.getElementsByClassName("ro");
  var slides3 = document.getElementsByClassName("si");
  var slides4 = document.getElementsByClassName("his");
  var slides5 = document.getElementsByClassName("act");
  var slides6 = document.getElementsByClassName("an");

  var slides = [slides0,slides1,slides2,slides3,slides4,slides5,slides6];
  var l = slides1.length;
  var L = slides.length;


  if (n > l) {slideIndex = 1;} 

  if (n < 1) {slideIndex = l;}

  

  if(m == 0){


     slides0[slideIndex-1].style.display ="block";
     slides1[slideIndex-1].style.display ="block";
     slides2[slideIndex-1].style.display ="block";
     slides3[slideIndex-1].style.display ="block";
     slides4[slideIndex-1].style.display ="block";
     slides5[slideIndex-1].style.display ="block";
     slides6[slideIndex-1].style.display ="block";

     slides0[slideIndex].style.display ="none";
     slides1[slideIndex].style.display ="none";
     slides2[slideIndex].style.display ="none";
     slides3[slideIndex].style.display ="none";
     slides4[slideIndex].style.display ="none";
     slides5[slideIndex].style.display ="none";
     slides6[slideIndex].style.display ="none";


     x1 = slideIndex-1;
     x2 = x1;
     x3 = x1;
     x4 = x1;
     x5 = x1;
     x6 = x1;
     x7 = x1;

     currentImage1 = slides0[x1].children;
     currentImage2 = slides1[x2].children;
     currentImage3 = slides2[x3].children;
     currentImage4 = slides3[x4].children;
     currentImage5 = slides4[x5].children;
     currentImage6 = slides5[x6].children;
     currentImage7 = slides6[x7].children;



  }

  if(m == 1){

     if(slideIndex-1 == x1 ){
       
        slideIndex = slideIndex +1;


     }

     if(slideIndex>l){
       slideIndex = 1;
     }

     slides[m-1][slideIndex-1].style.display ="block";
     slides[m-1][x1].style.display ="none";

     x1 = slideIndex-1;
      
     currentImage1 = slides[m-1][x1].children;
     
  }

  if (m ==2){
     
     if(slideIndex-1 == x2 ){
         
         slideIndex = slideIndex +1;

     }

     if(slideIndex>l){
       slideIndex = 1;
     }

     slides[m-1][slideIndex-1].style.display ="block";
     slides[m-1][x2].style.display ="none";
     
     x2 = slideIndex-1;
     
     currentImage2 = slides[m-1][x2].children;
      
  }

  if(m ==3){

    
     if(slideIndex-1 == x3 ){
       
        slideIndex = slideIndex +1;


     }

     if(slideIndex>l){
       slideIndex = 1;
     }

     slides[m-1][slideIndex-1].style.display ="block";
     slides[m-1][x3].style.display ="none";

     x3= slideIndex-1;
      
     currentImage3 = slides[m-1][x3].children;
      
  }


  if(m == 4){

    
     if(slideIndex-1 == x4){
       
        slideIndex = slideIndex +1;


     }

     if(slideIndex>l){
       slideIndex = 1;
     }

     slides[m-1][slideIndex-1].style.display ="block";
     slides[m-1][x4].style.display ="none";

     x4= slideIndex-1;
      
     currentImage4 = slides[m-1][x4].children;
      
  }


  if(m == 5){

    
     if(slideIndex -1 == x5){
       
        slideIndex = slideIndex +1;


     }

     if(slideIndex>l){
       slideIndex = 1;
     }

     slides[m-1][slideIndex-1].style.display ="block";
     slides[m-1][x5].style.display ="none";

     x5= slideIndex-1;
      
     currentImage5 = slides[m-1][x5].children;
      
  }

  if(m == 6){

    
     if(slideIndex-1 == x6){
       
        slideIndex = slideIndex +1;


     }

     if(slideIndex>l){
       slideIndex = 1;
     }

     slides[m-1][slideIndex-1].style.display ="block";
     slides[m-1][x6].style.display ="none";

     x6= slideIndex-1;
      
     currentImage6 = slides[m-1][x6].children;
      
  }


if(m == 7){

    
     if(slideIndex-1 == x7){
       
        slideIndex = slideIndex +1;


     }

     if(slideIndex>l){
       slideIndex = 1;
     }

     slides[m-1][slideIndex-1].style.display ="block";
     slides[m-1][x7].style.display ="none";

     x7= slideIndex-1;
      
     currentImage7 = slides[m-1][x7].children;
      
  }


  
var currentImage =[currentImage1,currentImage2,currentImage3,currentImage4,currentImage5,currentImage6,currentImage7];

  
    

for(var i = 0; i< currentImage.length;i++){
    
    for (var j = 0; j<4;j++){

      currentImage[i][j].addEventListener("mouseover", changebig);

      currentImage[i][j].addEventListener("mouseout", changesmall);

    }
  
  }


}



function changebig(e) {
 
  e.target.classList.add("bigger");

    
  var position = e.target.id;




  var group = e.target.className.split(" ")[0];
  

  group = parseInt(group.replace("tile",""));

  var p = e.target.parentElement;
  var q = p.parentElement;

  

  var index = Array.prototype.indexOf.call(q.children,p);


  


  var re1 = /1$/;
  var re2 = /4$/;

    
  if(re1.test(position)){
 
   document.getElementById("prev"+group).style.display = "none";
     
   
   for(var i = 1; i<q.children.length;i++){
      

     q.children[i].classList.add("shiftRight");



    
  }


}

    if(re2.test(position)){

      document.getElementById("next"+group).style.display = "none";


         for(var i = 0; i< q.children.length-1; i++){

        
            q.children[i].classList.add("shiftLeft");

  }


}

else{

  document.getElementById("prev"+group).style.display = "none";
  document.getElementById("next"+group).style.display = "none";


  for(var i = 0; i< index; i++){

    q.children[i].classList.add("shiftLeft");
   
  }

  for(var i = index+1; i<q.children.length;i++){

     q.children[i].classList.add("shiftRight");
   
  }


}

}



function changesmall(e){

  e.target.classList.remove("bigger");
    
  var position = e.target.id;

  var group = e.target.className;

  group = parseInt(group.replace("tile",""));
  var p = e.target.parentElement;
  var q = p.parentElement;
 
  var index = Array.prototype.indexOf.call(q.children,p);

  var re1 = /1$/;
  var re2 = /4$/;
     

 
  

  if(re1.test(position)){

  document.getElementById("prev"+group).style.display = "block";
  for(var i = 1; i< q.children.length;i++){

   q.children[i].classList.remove("shiftRight");
    
  }


 }

   if(re2.test(position)){


  document.getElementById("next"+group).style.display = "block";
  for(var i = 0; i<q.children.length-1;i++){

    q.children[i].classList.remove("shiftLeft");
    
  }


 }


 else{
  
  
  document.getElementById("prev"+group).style.display = "block";
  document.getElementById("next"+group).style.display = "block";

  for(var i = 0; i< index; i++){

    q.children[i].classList.remove("shiftLeft");
    
  }

  for(var i = index+1; i<q.children.length;i++){

    q.children[i].classList.remove("shiftRight");
    
  }


}

}


