
function showMainPage()
{
    $("#content").children().not("div").remove();
    $("#content div").addClass("hide");
//    $('#content').append('<div id="MainPage">');
    var MainPage = "<div id=\"mainPage\">";
    MainPage += "strona gĹ‚Ăłwna";
    MainPage += "</div>";
    $("#content").append(MainPage);
}

function aboutUs()
{
   $("#content").children().not("div").remove();
   $("#content div").addClass("hide");
   var img1 = "http://upload.wikimedia.org/wikipedia/en/a/a0/Sierpinski_carpet.png";
   var img2 = "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQPTIhY2k7ATEOxleEG8lH_3fJDNEalfaj9keybUTiDQQubw5RaNg";
   //$("#content").append("<table><tr>");
   var AboutUs = "<table border=\"1\" style=\" margin-left: auto; width:50%; margin-right: auto\"><tr>";
   AboutUs += "<td style=\"width:50%;\"><img src="+img1+" style=\"width:100%; \" /></td>"; 
   AboutUs += "<td style=\"width:50%;\"><b>Michał‚ Lipiński</b><br>wĹ‚aĹ›nie kodzi</td>"; 
   AboutUs += "</tr><tr>";
   
   AboutUs += "<td><img src="+img2+" style=\"width:100%; \" /></td>"; 
   AboutUs += "<td><b>Adam OĹĽarek</b><br>wymyĹ›liciel</td>"; 
  
   AboutUs += "</tr></table>";
   $("#content").append(AboutUs);
}

function tryLog()
{
    
}

            $("#navigationMenu a").addClass("menupos");
            $("#navigationMenu li").attr("style","display: inline"); 
            $("#loginButton").click(function(){
               logPanel(); 
            });