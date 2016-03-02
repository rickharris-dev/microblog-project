document.getElementById("newStatus").style.cursor="pointer";

document.getElementById("newStatus").addEventListener("click", function(){
  document.getElementById("statusForm").style.display="block";
  this.style.display="none";
});
