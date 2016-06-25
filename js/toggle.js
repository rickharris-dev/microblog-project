document.addEventListener("DOMContentLoaded", function(){
    Element.prototype.toggle = function() {
    if(this.style.display == "none"){
      this.style.display = "";
    }
    else {
      this.style.display = "none";
    }
  }
});
