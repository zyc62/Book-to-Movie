var picArray1 = ["game-of-thrones2.jpg", "All-the-Bright-Places-jkt.jpg", "where_d_you_go_bernadette.jpg", "the_girl_in_the_spiders_web.jpg"];
var picArray2 = ["simon-vs-the-homosapiens.jpg", "boy-erased.jpg", "the-jungle-book.jpg", "the-darkest-minds.jpg"];
var picArray3=["ready-player-one.jpg","red_sparrow.jpg","a-wrinkle-in-time.jpg","annihilation.jpg"];

var picArray = [picArray1,picArray2,picArray3];

var capArray1 = ["Game of Thrones", "All the Bright Places", "where'd You Go Bernadette", "The Girl In The Spiders Web"];
var capArray2 = ["Simon Vs The Homosapiens", "Boy Erased", "The Jungle Book", "The Darkest Minds"];
var capArray3=["Ready Player One","Red Sparrow","A Wrinkle In Time","Annihilation"];

var capArray = [capArray1,capArray2,capArray3];

var timer;
var indexId = 0;
	
function showSlide(n)
{
	
	if(n > picArray.length-1)
	{
		indexId = 0;
	}
	if(n < 0) {
		indexId = picArray.length-1;
	}
	$(".tleft").html ("<a href = 'detail.php?id=game of thrones'><img src = './image/"+ picArray[indexId][0]+ "' width = '190px' height = '270px'></a>");
	$(".tmiddle1").html ("<img src='./image/"+ picArray[indexId][1]+ "' width = '190px' height = '270px'>");
	$(".tmiddle2").html ("<img src = './image/"+picArray[indexId][2]+ "' width = '190px' height = '270px'>");
	$(".tright").html ("<img src = './image/"+picArray[indexId][3]+ "' width = '190px' height = '270px'>");

	$(".tleft").append("<div id = 'caption1'>"+capArray[indexId][0]+"</div>");
	$(".tmiddle1").append("<div id = 'caption2'>"+capArray[indexId][1]+"</div>");
	$(".tmiddle2").append("<div id = 'caption3'>"+capArray[indexId][2]+"</div>");
	$(".tright").append("<div id = 'caption4'>"+capArray[indexId][3]+"</div>");


    var dot = $(".dot");
    for (var i = 0; i < dot.length; i++) {
      dot.eq(i).removeClass("active");
    }
    dot.eq(indexId).addClass("active");

}

function plusSlides(n) {
  showSlide(indexId += n);
}


function currentSlide(n) {
  showSlide(indexId = n);
}
