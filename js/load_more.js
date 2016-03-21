document.addEventListener("DOMContentLoaded", function(){
    document.getElementById("moreStatuses").style.cursor = "pointer";
    document.getElementById("moreStatuses").addEventListener("click", function(){
      
var xmlhttp;
  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for older browsers
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById("allStatuses").innerHTML += xmlhttp.responseText;
    
    var DOMContentLoaded_event = document.createEvent("Event")
    DOMContentLoaded_event.initEvent("DOMContentLoaded", true, true)
    window.document.dispatchEvent(DOMContentLoaded_event)   
    }
  };  
       
  xmlhttp.open("GET", "statuses-1.html", true);
  xmlhttp.send();      
   });
});