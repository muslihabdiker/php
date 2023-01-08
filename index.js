function orderpageShow() {
var orderpage = document.getElementById("orderpage").classList;
var order = document.getElementById("order").style;
var App = document.getElementById("App").classList;
var perfect = document.getElementById("perfect").value;


if(perfect == 0 ) {
    alert("no input");
}else if(perfect < 10) {
    alert("Please provide the amount to be exchanged(Minimum 100usd , Maximum 10,000 usd)");
}else if(perfect > 100) {
    App.toggle("App-blur");
    order.display = "none";
    setTimeout(function() {
        orderpage.toggle("orderpage-show");  
    
    },100);

}
};

function hideOrderForm() {
var orderpage = document.getElementById("orderpage").classList;
var order = document.getElementById("order").style;
var App = document.getElementById("App").classList;
orderpage.remove("orderpage-show");  
orderpage.add("orderpage");  

setTimeout(function() {
    App.remove("App-blur");
    App.add("App");
    order.display = "block";
},500);
 

};

// calculate price 
function calculate() {
var perfect = document.getElementById("perfect").value;
var bpay = document.getElementById("bpay");

bpay.value = perfect;

};


function searchDatabase(str) {
    if (str.length == 0) {
      document.getElementById("txtHint").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "search.php?q=" + str, true);
      xmlhttp.send();
    }
  }