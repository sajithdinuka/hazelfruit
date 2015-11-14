$(document).mousemove(function(){
   var randText = text[Math.floor(Math.random()*text.length)];
   var div = $("#textDiv");
   div.stop().animate({"opacity": "0"}, 100, function(){
       $(this).html(randText);
       $(this).stop().animate({"opacity": "1.0"}, 100);
   });
});