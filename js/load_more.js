function addStatuses(response) {
    // Appends statuses to page
    document.getElementById("allStatuses").innerHTML += response;
    // Triggers DomContentLoaded event
    var DOMContentLoaded_event = document.createEvent("Event")
    DOMContentLoaded_event.initEvent("DOMContentLoaded", true, true)
    window.document.dispatchEvent(DOMContentLoaded_event)   
}

document.addEventListener("DOMContentLoaded", function(){
    // Changes cursor to a pointer when hovering over the "See more statuses" button
    document.getElementById("moreStatuses").style.cursor = "pointer";
    // Load more pages to page when button clicks
    document.getElementById("moreStatuses").addEventListener("click", function(){ 
        // Call ajax function
        ajaxGet("statuses-1.html", addStatuses);
   });
});