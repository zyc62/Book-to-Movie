var x;
var y;

var slideIndex = 1;



var currentImage1;

var currentImage2;
 



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
  var slides = [slides0, slides1];
  var l = slides1.length;//2
  var L = slides.length;//2

  if (n > L) {slideIndex = 1;} 

  if (n < 1) {slideIndex = L;}

  

  if(m == 0){


     slides0[slideIndex-1].style.display ="block";
     slides1[slideIndex-1].style.display ="block";

     slides0[slideIndex].style.display ="none";
     slides1[slideIndex].style.display ="none";

     x = slideIndex-1;
     y =x;

     currentImage1 = slides0[x].children;
     currentImage2 = slides1[y].children;




  }

  if(m == 1){

     if(slideIndex-1 == x ){
       
        slideIndex = slideIndex +1;


     }

     if(slideIndex>L){
       slideIndex = 1;
     }

     slides[m-1][slideIndex-1].style.display ="block";
     slides[m-1][x].style.display ="none";

     x = slideIndex-1;
      
     currentImage1 = slides[m-1][x].children;
     
  }

  if (m ==2){
     
     if(slideIndex-1 == y ){
         slideIndex = slideIndex +1;

     }

     if(slideIndex>L){
       slideIndex = 1;
     }

     slides[m-1][slideIndex-1].style.display ="block";
     slides[m-1][y].style.display ="none";
     
     y = slideIndex-1;
     
     currentImage2 = slides[m-1][y].children;
      
  }

  
    
    
  var currentImage =[currentImage1,currentImage2];

  
    

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

  

  var index = Array.prototype.indexOf.call(p.children,e.target);


  


  var re1 = /1$/;
  var re2 = /4$/;

    
  if(re1.test(position)){
 
   document.getElementById("prev"+group).style.display = "none";
     
   
   for(var i = 1; i<p.children.length;i++){
      

     p.children[i].classList.add("shiftRight");



    
  }


}

    if(re2.test(position)){

      document.getElementById("next"+group).style.display = "none";


         for(var i = 0; i< p.children.length-1; i++){

        
            p.children[i].classList.add("shiftLeft");

  }


}

else{

  document.getElementById("prev"+group).style.display = "none";
  document.getElementById("next"+group).style.display = "none";


  for(var i = 0; i< index; i++){

    p.children[i].classList.add("shiftLeft");
   
  }

  for(var i = index+1; i<p.children.length;i++){

     p.children[i].classList.add("shiftRight");
   
  }


}

}



function changesmall(e){

  e.target.classList.remove("bigger");
    
  var position = e.target.id;

  var group = e.target.className;

  group = parseInt(group.replace("tile",""));
  var p = e.target.parentElement;
 
  var index = Array.prototype.indexOf.call(p.children,e.target);

  var re1 = /1$/;
  var re2 = /4$/;
     

 
  

  if(re1.test(position)){

  document.getElementById("prev"+group).style.display = "block";
  for(var i = 1; i< p.children.length;i++){

   p.children[i].classList.remove("shiftRight");
    
  }
p.children[i]

 }

   if(re2.test(position)){


  document.getElementById("next"+group).style.display = "block";
  for(var i = 0; i<p.children.length-1;i++){

    p.children[i].classList.remove("shiftLeft");
    
  }


 }


 else{
  
  
  document.getElementById("prev"+group).style.display = "block";
  document.getElementById("next"+group).style.display = "block";

  for(var i = 0; i< index; i++){

    p.children[i].classList.remove("shiftLeft");
    
  }

  for(var i = index+1; i<p.children.length;i++){

    p.children[i].classList.remove("shiftRight");
    
  }


}

}


