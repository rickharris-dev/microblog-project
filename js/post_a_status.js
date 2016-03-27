document.addEventListener("DOMContentLoaded", function(){
  var newStatus = document.getElementById("newStatus");
  var statusForm = document.getElementById("statusForm");
  var postButton = document.getElementById("postButton");

  statusForm.style.display = "none";
  newStatus.style.cursor = "pointer";

  function triggerToggle(){
    statusForm.toggle();
    newStatus.toggle();
  }

  newStatus.addEventListener("click", triggerToggle);
  postButton.addEventListener("click", triggerToggle);
});
