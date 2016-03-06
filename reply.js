document.addEventListener("DOMContentLoaded", function(){
  var replyLinks = document.querySelectorAll('.reply');
  for(i = 0; i < replyLinks.length; i++){
    replyLinks[i].style.cursor = "pointer";
    replyLinks[i].addEventListener("click", function(){
      this.parentElement.toggle();
      this.parentElement.nextElementSibling.toggle();
    });
  }
});
