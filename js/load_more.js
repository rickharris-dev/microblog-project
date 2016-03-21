function addStatuses(response){
  // Appends statuses to page
  document.getElementById("allStatuses").innerHTML += response;
  // Triggers DOMContentLoaded event
  var DOMContentLoaded_event = document.createEvent("Event");
  DOMContentLoaded_event.initEvent("DOMContentLoaded", true, true);
  window.document.dispatchEvent(DOMContentLoaded_event);
  // Enables more statuses button
  document.getElementById('moreStatuses').querySelector('input').disabled = false;
}

document.addEventListener("DOMContentLoaded", function(){
  // Changes cursor to a pointer when hovering the 'See more statuses' button
  document.getElementById('moreStatuses').querySelector('input').style.cursor = 'pointer';
  // Load more pages to page when button clicked
  document.getElementById('moreStatuses').addEventListener("click", function(){
    // Disables more statuses button
    this.querySelector('input').disabled = true;
    // Changes cursor to 'no' symbol
    this.querySelector('input').style.cursor = 'not-allowed';
    // Calls ajax function
    ajaxGet("statuses-1.html", addStatuses);
  });
});
