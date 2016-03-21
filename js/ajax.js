function ajaxGet(url, onSuccess) {
  var xmlhttp;
  //Checks browser version and establishes request
  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for older browsers
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  // Triggers when readyState changes
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      // Triggers callback function on success
      onSuccess(xmlhttp.responseText);
    }
  };
  // Initializes request
  xmlhttp.open("GET", url, true);
  xmlhttp.send();
}
