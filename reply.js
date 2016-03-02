var replyLinks = document.querySelectorAll(".reply"); //variable replyLinks' value returns all classes in index.html that matches reply
//replyLinks.length: no. of elements or the length of the list; returns an integer #. Integer # stands for the # of items/elements in a list/array/object

for ( i = 0; i < replyLinks.length; i++ ){ //for loop should ??

  replyLinks[i].style.cursor="pointer"; //when upload site, "pointer" is ready

replyLinks[i].addEventListener("click", function(){ //specified document has a class?(querySelector) named reply that, in this case, will listen in on a "click"; after this event, it will take on certin actions within a function (indented)
    this.parentElement.querySelector(".replyForm").style.display="block";//this refers to "document.querySelector(".reply")"; parentElement (replies)...set display to default(show replyForm)
    this.style.display="none";//this refers to "document.querySelector(".reply")"; we are allowing reply link to hide

  });
}
