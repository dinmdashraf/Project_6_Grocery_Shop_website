document.getElementById("myBtn").addEventListener("click", myFunction);

function myFunction() {
  alert ("Your request has been sent successfully.");
  document.getElementById('demo').value = '';
  document.getElementById('demo1').value = '';
  document.getElementById('demo2').value = '';
}


function openPage(){

  var x = document.getElementById("search").value;

  if(x === "Cabbage" || x === "cabbage"){
    window.open("order_1.html");
  }
  if (x === "Potato" || x === "potato"){
    window.open("order_2.html");
  }
  if (x === "Tomato" || x === "tomato"){
    window.open("order_3.html");
  }
  if (x === "Bottle Gourd" || x === "bottle gourd"){
    window.open("order_4.html");
  }
  if (x === "Ilish" || x === "ilish"){
    window.open("order_5.html");
  }
  if (x === "Boaal" || x=== "boaal"){
    window.open("order_6.html");
  }
  if (x === "Catla" || x === "catla"){
    window.open("order_7.html");
  }
  if (x === "Rui" || x === "rui"){
    window.open("order_8.html");
  }
  if (x === "Onion" || x === "onion"){
    window.open("order_9.html");
  }
  if (x === "Ginger" || x === "ginger"){
    window.open("order_10.html");
  }
  if (x === "Garam masala" || x === "garam masala"){
    window.open("order_11.html");
  }
  if (x === "Chilli Powder" || x === "chilli powder"){
    window.open("order_12.html");
  }
  if (x === "Chicken" || x === "chicken"){
    window.open("/order_13.html");
  }
  if (x === "Goat meat" || x === "goat meat"){
    window.open("order_14.html");
  }
  if (x === "Kuyal meat" || x === "kuyal meat"){
    window.open("order_15.html");
  }
  if (x === "Cow meat" || x === "cow meat"){
    window.open("order_16.html");
  }
  
}