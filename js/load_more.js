function addStatuses(response){
  // Appends statuses to page
  document.getElementById("allStatuses").innerHTML += response;
  // Triggers DOMContentLoaded event
  var DOMContentLoaded_event = document.createEvent("Event");
  DOMContentLoaded_event.initEvent("DOMContentLoaded", true, true);
  window.document.dispatchEvent(DOMContentLoaded_event);
}

document.addEventListener("DOMContentLoaded", function(){
  // Changes cursor to a pointer when hovering the 'See more statuses' button
  document.getElementById('moreStatuses').style.cursor = 'pointer';
  // Load more pages to page when button clicked
  document.getElementById('moreStatuses').addEventListener("click", function(){
    // Calls ajax function
    ajaxGet("statuses-1.html", addStatuses);
  });
});
