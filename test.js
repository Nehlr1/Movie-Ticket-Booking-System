function myFunction() {
    var input = document.getElementById("myInput").value;
    var movie_name = ["dolittle", "sonic", "scoob", "no time no die", "joker", 
    "avengers endgame", "star wars", "toy story 4", "jumanji", "captain marvel", "once upon a time", "frozen"];
    for(var i=0; i<movie_name.length; i++){

        if(movie_name[i].indexOf(input) > -1){
            document.getElementById(movie_name[i]).style.display = "";
        }else{
            document.getElementById(movie_name[i]).style.display = "none";
        }
    }
}

function showAmount(){
  var x;
  var day = document.getElementById("daylist").value;
  var time = document.getElementById("timelist").value;
  var ticket = document.getElementById("ticket").value;
  var normaldays = ["monday", "tuesday", "wednesday", "thursday", "friday"];
  var weekends = ["saturday", "sunday"];
  var time_slot1 = ["6.00PM", "6.30PM", "7.00PM", "7.30PM", "8.00PM", "8.30PM", "9.00PM"];
  var time_slot2 = ["9.30PM", "10.00PM", "10.30PM", "11.00PM", "11.30PM", "12.00AM", "12.30AM", "1.00AM", "1.30AM", "2.00AM"];
  var time_slot3 = ["5.00PM", "5.30PM", "6.00PM", "6.30PM", "7.00PM", "7.30PM", "8.00PM", "8.30PM", "9.00PM", "9.30PM", "10.00PM"];
  var time_slot4 = ["10.30PM", "11.00PM", "11.30PM", "12.00AM", "12.30AM", "1.00AM", "1.30AM", "2.00AM"];
  
  if(normaldays.includes(day)){
    if(time_slot1.includes(time)) x = 15;
    else if(time_slot2.includes(time)) x = 20;
    else x = "";
  }else if(weekends.includes(day)){
    if(time_slot3.includes(time)) x = 15;
    else if(time_slot4.includes(time)) x = 20;
    else x = "";
  }else x = "";
  document.getElementById("amount").innerHTML = (x*ticket) + "RM";
}

function showTime(){
  var y = document.getElementById("daylist").value;
  var r = document.getElementById("time");
  r.removeChild(r.childNodes[0]);
  if(y === "sunday"){
    var select1 = document.createElement("select");
    select1.setAttribute("name", "timename");
    select1.setAttribute("onchange", "showAmount()");
    select1.setAttribute("id", "timelist");
    var op1 = document.createElement("option");
    var op2 = document.createElement("option");
    var t1 = document.createTextNode("6.00PM");
    var t2 = document.createTextNode("9.00PM");
    op1.setAttribute("value", "6.00PM");
    op2.setAttribute("value", "9.00PM");
    op1.appendChild(t1);
    op2.appendChild(t2);
    select1.appendChild(op1);
    select1.appendChild(op2);
    var main1 = document.getElementById("time");
    main1.appendChild(select1);
  }else if(y === "monday"){
    var select1 = document.createElement("select");
    select1.setAttribute("name", "timename");
    select1.setAttribute("onchange", "showAmount()");
    select1.setAttribute("id", "timelist");
    var op1 = document.createElement("option");
    var op2 = document.createElement("option");
    var t1 = document.createTextNode("5.00PM");
    var t2 = document.createTextNode("10.00PM");
    op1.setAttribute("value", "5.00PM");
    op2.setAttribute("value", "10.00PM");
    op1.appendChild(t1);
    op2.appendChild(t2);
    select1.appendChild(op1);
    select1.appendChild(op2);
    var main1 = document.getElementById("time");
    main1.appendChild(select1);
  }else if(y === "tuesday"){
    var select1 = document.createElement("select");
    select1.setAttribute("name", "timename");
    select1.setAttribute("onchange", "showAmount()");
    select1.setAttribute("id", "timelist");
    var op1 = document.createElement("option");
    var op2 = document.createElement("option");
    var t1 = document.createTextNode("2.00AM");
    var t2 = document.createTextNode("12.00AM");
    op1.setAttribute("value", "2.00AM");
    op2.setAttribute("value", "12.00AM");
    op1.appendChild(t1);
    op2.appendChild(t2);
    select1.appendChild(op1);
    select1.appendChild(op2);
    var main1 = document.getElementById("time");
    main1.appendChild(select1);
  }else if(y === "wednesday"){
    var select1 = document.createElement("select");
    select1.setAttribute("name", "timename");
    select1.setAttribute("onchange", "showAmount()");
    select1.setAttribute("id", "timelist");
    var op1 = document.createElement("option");
    var op2 = document.createElement("option");
    var t1 = document.createTextNode("7.00PM");
    var t2 = document.createTextNode("11.00PM");
    op1.setAttribute("value", "7.00PM");
    op2.setAttribute("value", "11.00PM");
    op1.appendChild(t1);
    op2.appendChild(t2);
    select1.appendChild(op1);
    select1.appendChild(op2);
    var main1 = document.getElementById("time");
    main1.appendChild(select1);
  }else if(y === "thursday"){
    var select1 = document.createElement("select");
    select1.setAttribute("name", "timename");
    select1.setAttribute("onchange", "showAmount()");
    select1.setAttribute("id", "timelist");
    var op1 = document.createElement("option");
    var op2 = document.createElement("option");
    var t1 = document.createTextNode("1.00AM");
    var t2 = document.createTextNode("8.00PM");
    op1.setAttribute("value", "1.00AM");
    op2.setAttribute("value", "8.00PM");
    op1.appendChild(t1);
    op2.appendChild(t2);
    select1.appendChild(op1);
    select1.appendChild(op2);
    var main1 = document.getElementById("time");
    main1.appendChild(select1);
  }else if(y === "friday"){
    var select1 = document.createElement("select");
    select1.setAttribute("name", "timename");
    select1.setAttribute("onchange", "showAmount()");
    select1.setAttribute("id", "timelist");
    var op1 = document.createElement("option");
    var op2 = document.createElement("option");
    var t1 = document.createTextNode("7.30PM");
    var t2 = document.createTextNode("9.30PM");
    op1.setAttribute("value", "7.30PM");
    op2.setAttribute("value", "9.30PM");
    op1.appendChild(t1);
    op2.appendChild(t2);
    select1.appendChild(op1);
    select1.appendChild(op2);
    var main1 = document.getElementById("time");
    main1.appendChild(select1);
  }else if(y === "saturday"){
    var select1 = document.createElement("select");
    select1.setAttribute("name", "timename");
    select1.setAttribute("onchange", "showAmount()");
    select1.setAttribute("id", "timelist");
    var op1 = document.createElement("option");
    var op2 = document.createElement("option");
    var t1 = document.createTextNode("10.00PM");
    var t2 = document.createTextNode("1.00AM");
    op1.setAttribute("value", "10.00PM");
    op2.setAttribute("value", "1.00AM");
    op1.appendChild(t1);
    op2.appendChild(t2);
    select1.appendChild(op1);
    select1.appendChild(op2);
    var main1 = document.getElementById("time");
    main1.appendChild(select1);
  }
}

function showDay(){
    var x = document.getElementById("movielist").value;
    var check = document.getElementById("day");
    check.removeChild(check.childNodes[0]);
    if(x === "1"){
      var select = document.createElement("select");
      select.setAttribute("name", "dayname");
      select.setAttribute("onchange", "showTime()");
      select.setAttribute("id", "daylist");
      var option1 = document.createElement("option");
      var option2 = document.createElement("option");
      option1.setAttribute("value", "sunday");
      option2.setAttribute("value", "tuesday");
      var text1 = document.createTextNode("Sunday");
      var text2 = document.createTextNode("Tuesday");
      option1.appendChild(text1);
      option2.appendChild(text2);
      select.appendChild(option1);
      select.appendChild(option2);
      var main = document.getElementById("day");
      main.appendChild(select);

    }else if(x === "2"){
      var select = document.createElement("select");
      select.setAttribute("name", "dayname");
      select.setAttribute("onchange", "showTime()");
      select.setAttribute("id", "daylist");
      var option1 = document.createElement("option");
      var option2 = document.createElement("option");
      option1.setAttribute("value", "wednesday");
      option2.setAttribute("value", "friday");
      var text1 = document.createTextNode("Wednesday");
      var text2 = document.createTextNode("Friday");
      option1.appendChild(text1);
      option2.appendChild(text2);
      select.appendChild(option1);
      select.appendChild(option2);
      var main = document.getElementById("day");
      main.appendChild(select); 
    }else if(x === "3"){
      var select = document.createElement("select");
      select.setAttribute("name", "dayname");
      select.setAttribute("onchange", "showTime()");
      select.setAttribute("id", "daylist");
      var option1 = document.createElement("option");
      var option2 = document.createElement("option");
      option1.setAttribute("value", "saturday");
      option2.setAttribute("value", "tuesday");
      var text1 = document.createTextNode("Saturday");
      var text2 = document.createTextNode("Tuesday");
      option1.appendChild(text1);
      option2.appendChild(text2);
      select.appendChild(option1);
      select.appendChild(option2);
      var main = document.getElementById("day");
      main.appendChild(select); 
    }else if(x === "4"){
      var select = document.createElement("select");
      select.setAttribute("name", "dayname");
      select.setAttribute("onchange", "showTime()");
      select.setAttribute("id", "daylist");
      var option1 = document.createElement("option");
      var option2 = document.createElement("option");
      option1.setAttribute("value", "sunday");
      option2.setAttribute("value", "friday");
      var text1 = document.createTextNode("Sunday");
      var text2 = document.createTextNode("Friday");
      option1.appendChild(text1);
      option2.appendChild(text2);
      select.appendChild(option1);
      select.appendChild(option2);
      var main = document.getElementById("day");
      main.appendChild(select); 
    }else if(x === "5"){
      var select = document.createElement("select");
      select.setAttribute("name", "dayname");
      select.setAttribute("onchange", "showTime()");
      select.setAttribute("id", "daylist");
      var option1 = document.createElement("option");
      var option2 = document.createElement("option");
      option1.setAttribute("value", "monday");
      option2.setAttribute("value", "wednesday");
      var text1 = document.createTextNode("Monday");
      var text2 = document.createTextNode("Wednesday");
      option1.appendChild(text1);
      option2.appendChild(text2);
      select.appendChild(option1);
      select.appendChild(option2);
      var main = document.getElementById("day");
      main.appendChild(select); 
    }else if(x === "6"){
      var select = document.createElement("select");
      select.setAttribute("name", "dayname");
      select.setAttribute("onchange", "showTime()");
      select.setAttribute("id", "daylist");
      var option1 = document.createElement("option");
      var option2 = document.createElement("option");
      option1.setAttribute("value", "saturday");
      option2.setAttribute("value", "sunday");
      var text1 = document.createTextNode("Saturday");
      var text2 = document.createTextNode("Sunday");
      option1.appendChild(text1);
      option2.appendChild(text2);
      select.appendChild(option1);
      select.appendChild(option2);
      var main = document.getElementById("day");
      main.appendChild(select); 
    }else if(x === "7"){
      var select = document.createElement("select");
      select.setAttribute("name", "dayname");
      select.setAttribute("onchange", "showTime()");
      select.setAttribute("id", "daylist");
      var option1 = document.createElement("option");
      var option2 = document.createElement("option");
      option1.setAttribute("value", "thursday");
      option2.setAttribute("value", "friday");
      var text1 = document.createTextNode("Thursday");
      var text2 = document.createTextNode("Friday");
      option1.appendChild(text1);
      option2.appendChild(text2);
      select.appendChild(option1);
      select.appendChild(option2);
      var main = document.getElementById("day");
      main.appendChild(select); 
    }else if(x === "8"){
      var select = document.createElement("select");
      select.setAttribute("name", "dayname");
      select.setAttribute("onchange", "showTime()");
      select.setAttribute("id", "daylist");
      var option1 = document.createElement("option");
      var option2 = document.createElement("option");
      option1.setAttribute("value", "sunday");
      option2.setAttribute("value", "tuesday");
      var text1 = document.createTextNode("Sunday");
      var text2 = document.createTextNode("Tuesday");
      option1.appendChild(text1);
      option2.appendChild(text2);
      select.appendChild(option1);
      select.appendChild(option2);
      var main = document.getElementById("day");
      main.appendChild(select); 
    }else if(x === "9"){
      var select = document.createElement("select");
      select.setAttribute("name", "dayname");
      select.setAttribute("onchange", "showTime()");
      select.setAttribute("id", "daylist");
      var option1 = document.createElement("option");
      var option2 = document.createElement("option");
      option1.setAttribute("value", "tuesday");
      option2.setAttribute("value", "thursday");
      var text1 = document.createTextNode("Tuesday");
      var text2 = document.createTextNode("Thursday");
      option1.appendChild(text1);
      option2.appendChild(text2);
      select.appendChild(option1);
      select.appendChild(option2);
      var main = document.getElementById("day");
      main.appendChild(select); 
    }else if(x === "10"){
      var select = document.createElement("select");
      select.setAttribute("name", "dayname");
      select.setAttribute("onchange", "showTime()");
      select.setAttribute("id", "daylist");
      var option1 = document.createElement("option");
      var option2 = document.createElement("option");
      option1.setAttribute("value", "saturday");
      option2.setAttribute("value", "monday");
      var text1 = document.createTextNode("Saturday");
      var text2 = document.createTextNode("Monday");
      option1.appendChild(text1);
      option2.appendChild(text2);
      select.appendChild(option1);
      select.appendChild(option2);
      var main = document.getElementById("day");
      main.appendChild(select); 
    }else if(x === "11"){
      var select = document.createElement("select");
      select.setAttribute("name", "dayname");
      select.setAttribute("onchange", "showTime()");
      select.setAttribute("id", "daylist");
      var option1 = document.createElement("option");
      var option2 = document.createElement("option");
      option1.setAttribute("value", "wednesday");
      option2.setAttribute("value", "friday");
      var text1 = document.createTextNode("Wednesday");
      var text2 = document.createTextNode("Friday");
      option1.appendChild(text1);
      option2.appendChild(text2);
      select.appendChild(option1);
      select.appendChild(option2);
      var main = document.getElementById("day");
      main.appendChild(select); 
    }else if(x === "12"){
      var select = document.createElement("select");
      select.setAttribute("name", "dayname");
      select.setAttribute("onchange", "showTime()");
      select.setAttribute("id", "daylist");
      var option1 = document.createElement("option");
      var option2 = document.createElement("option");
      option1.setAttribute("value", "monday");
      option2.setAttribute("value", "tuesday");
      var text1 = document.createTextNode("Monday");
      var text2 = document.createTextNode("Tuesday");
      option1.appendChild(text1);
      option2.appendChild(text2);
      select.appendChild(option1);
      select.appendChild(option2);
      var main = document.getElementById("day");
      main.appendChild(select); 
    }
}
