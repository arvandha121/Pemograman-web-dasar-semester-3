var input_box = document.getElementById("calculation");
var historyData = [];
var expressionData = "";
var resultData = "";
// 
var selection = "Deg"

function calc_sin(){
  var input = input_box.value;
  if (selection == "Rad"){
    input_box.value = Math.sin(input)
  } else if (selection == "Deg"){
    input_box.value = Math.sin(input * (Math.PI / 180))
  }
  console.log("Click");
  input1 = input_box.value.replace('"', "");
  var result = eval(input1);
  resultData = result;
  historyData.push({ expression: expressionData, result: resultData });
  showLogdataSienceSin();
  resultData = "";
  expressionData = "";
}

function calc_cos(){
  var input = input_box.value;
  if (selection == "Rad"){
    input_box.value = Math.cos(input)
  } else if (selection == "Deg"){
    input_box.value = Math.cos(input * (Math.PI / 180))
  }
  console.log("Click");
  input1 = input_box.value.replace('"', "");
  var result = eval(input1);
  resultData = result;
  historyData.push({ expression: expressionData, result: resultData });
  showLogdataSienceCos();
  resultData = "";
  expressionData = "";
}
    
function calc_tan(){
  var input = input_box.value;
  if (selection == "Rad"){
  input_box.value = Math.tan(input)
  } else if (selection == "Deg"){
    input_box.value = Math.tan(input * (Math.PI / 180))
  }
  console.log("Click");
  input1 = input_box.value.replace('"', "");
  var result = eval(input1);
  resultData = result;
  historyData.push({ expression: expressionData, result: resultData });
  showLogdataSienceTan();
  resultData = "";
  expressionData = "";
}

function calc_sqrt(){
  var input = input_box.value;
 input_box.value = Math.sqrt(input);
}

function calc_percent(){
  var input = input_box.value;
  input_box.value = input/100
}

function change_label_selection(){
  var label = document.getElementById("info")
  label.innerHTML = "<b>"+selection.toUpperCase()+"</b>"
}

function calc_deg(){
  var element = document.getElementById("Deg")
  element.style.color = ' red';
  var element2 = document.getElementById("Rad")
  element2.style.color = 'white';
  
  selection = "Deg" //Set selection to deg
  change_label_selection()
  

  
}

function calc_rad(){
  var element2 = document.getElementById("Rad")
  element2.style.color = "red"
  var element = document.getElementById("Deg")
  element.style.color = "white"
  
  selection = "Rad" //Set selection to rad
  change_label_selection()
}

function calc_log(){
  var input = input_box.value;
  input_box.value = Math.log10(input)
  // 
  console.log("Click");
  input1 = input_box.value.replace('"', "");
  var result = eval(input1);
  resultData = result;
  historyData.push({ expression: expressionData, result: resultData });
  showLogdataSience();
  resultData = "";
  expressionData = "";
 
  // 
}

function calc_exp(){
  var input = input_box.value;
  input_box.value = Math.exp(input)
// 
  console.log("Click");
  input1 = input_box.value.replace('"', "");
  var result = eval(input1);
  resultData = result;
  historyData.push({ expression: expressionData, result: resultData });
  showLogdataSienceExp();
  resultData = "";
  expressionData = "";
  // 

}


function calc_pi(){
  var input = input_box.value;
  input_box.value = input * 3.141;

  // 
  console.log("Click");
  input1 = input_box.value.replace('"', "");
  var result = eval(input1);
  resultData = result;
  historyData.push({ expression: expressionData, result: resultData });
  showLogdataSiencePI();
  resultData = "";
  expressionData = "";
 
  // 
}

function calc_fact(){
  var input = input_box.value;
  let answer = 1;
  if (n == 0 || n == 1) {
    answer = 1;
  }else{
    for (let i = n; i >= 1; i--) {
      answer = answer * i;
    }
  }
  input_box.value = factorial(input)
}

function calc_per(){
  var input = input_box.value;
  var temp = eval(input); 
  var anpercent = temp*100 + "%";
  input_box.value = anpercent;
}

function calc_square(){
  var input = input_box.value;
  input_box.value = Math.pow(input, 2)
}

function calc_lan(){
  var input = input_box.value;
  input_box.value = Math.log(input);
}


//----------------------------------------------------------------


input_box.onkeydown = function () {
  console.log(input_box.value);
};

function UserClickButton(input) {
  var oldinput = input_box.value;
  var newinput = oldinput + input;
  expressionData = newinput;
  input_box.value = newinput;
}
function CalculateValue() {
  console.log("Click");
  var input = input_box.value;
  input = input.replace('"', "").replace("'", "");
  var result = eval(input);
  resultData = result;
  historyData.push({ expression: expressionData, result: resultData });
  showLogdata();
  resultData = "";
  expressionData = "";
  input_box.value = result;
}
function ClearData() {
  input_box.value = "";
}

function showLogdata() {
  var log = document.getElementById("history_log");
  var string = "";
  for (var key in historyData) {
    if ( key in historyData == "log") {
    showLogdataSience();
    } else {
    string +=
      "" +
      historyData[key]["expression"] +
      " = " +
      historyData[key]["result"] +
      "<br>";
  }
}
  log.innerHTML = string;
}


// khusus Log 
function showLogdataSience() {
  var log = document.getElementById("history_log");
  var string = "";
  for (var key in historyData) {
    
    string +=
      "log " +
      historyData[key]["expression"] +
      " = " +
      historyData[key]["result"] +
      "<br>";
  }
  console.log(string);
  log.innerHTML = string;
}
// sin
function showLogdataSienceSin() {
  var log = document.getElementById("history_log");
  var string = "";
  for (var key in historyData) {
    
    string +=
      "sin " +
      historyData[key]["expression"] +
      " = " +
      historyData[key]["result"] +
      "<br>";
  }
  console.log(string);
  log.innerHTML = string;
  
}

// cos

function showLogdataSienceCos() {
  var log = document.getElementById("history_log");
  var string = "";
  for (var key in historyData) {
    
    string +=
      "cos " +
      historyData[key]["expression"] +
      " = " +
      historyData[key]["result"] +
      "<br>";
  }
  console.log(string);
  log.innerHTML = string;
}

// tan

function showLogdataSienceTan() {
  var log = document.getElementById("history_log");
  var string = "";
  for (var key in historyData) {
    
    string +=
      "tan " +
      historyData[key]["expression"] +
      " = " +
      historyData[key]["result"] +
      "<br>";
  }
  console.log(string);
  log.innerHTML = string;
}

// sqrt
function showLogdataSienceSqrt() {
  var log = document.getElementById("history_log");
  var string = "";
  for (var key in historyData) {
    
    string +=
      "sqrt " +
      historyData[key]["expression"] +
      " = " +
      historyData[key]["result"] +
      "<br>";
  }
  console.log(string);
  log.innerHTML = string;
}
// PI

function showLogdataSiencePI() {
  var log = document.getElementById("history_log");
  var string = "";
  for (var key in historyData) {
    
    string +=
      "&pi; " +
      historyData[key]["expression"] +
      " = " +
      historyData[key]["result"] +
      "<br>";
  }
  console.log(string);
  log.innerHTML = string;
}
//  fact

function showLogdataSienceFact() {
  var log = document.getElementById("history_log");
  var string = "";
  for (var key in historyData) {
    
    string +=
      "factorial " +
      historyData[key]["expression"] +
      " = " +
      historyData[key]["result"] +
      "<br>";
  }
  console.log(string);
  log.innerHTML = string;
}

