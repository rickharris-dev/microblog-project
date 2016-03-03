document.addEventListener("DOMContentLoaded", function(){
  document.getElementById("newStatus").style.cursor = "pointer";

  document.getElementById("newStatus").addEventListener("click", function(){
    document.getElementById("statusForm").toggle();
    this.toggle();
  });
});
