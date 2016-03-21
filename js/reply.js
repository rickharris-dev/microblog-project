document.addEventListener("DOMContentLoaded", function(){

  var replyLinks = document.querySelectorAll('.reply');
  for(i = 0; i < replyLinks.length; i++){
    replyLinks[i].style.cursor = "pointer";
    replyLinks[i].addEventListener("click", function(){
      this.parentElement.toggle();
      this.parentElement.nextElementSibling.toggle();
    });
    replyLinks[i].parentElement.nextElementSibling.querySelector('.post').addEventListener("click", function(){
      this.parentElement.toggle();
      this.parentElement.previousElementSibling.toggle();
      text = this.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling;
      reply = text.value;
      if (reply != ""){
        reply = '<div class="userReply">' + reply + '</div>';
        this.parentElement.nextElementSibling.innerHTML += reply;
        text.value = "";
      }
    });
  }
});
