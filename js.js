const myObj = {
    Connected: "ZERO Connection Sucessfuill",
    Router: 14,
    Server: {
    server1: "VPN Activate ?",
    server2: "Activate the Proxy?",
    server3: "Connected with the Server , Thanks !!"
    }
  }
  document.getElementById("demo").innerHTML = myObj.Server.server3.toUpperCase(); /*hace todo en mayuscula toUpperacse*/




  //---------------------------------------

 /* let x = "";
const myObj = {
  name: "John",
  age: 30,
  cars: [
    {name:"Ford", models:["Fiesta", "Focus", "Mustang"]},
    {name:"BMW", models:["320", "X3", "X5"]},
    {name:"Fiat", models:["500", "Panda"]}
  ]
}

for (let i in myObj.cars) {
  x += "<h2>" + myObj.cars[i].name + "</h2>";
  for (let j in myObj.cars[i].models) {
    x += myObj.cars[i].models[j] + "<br>";
  }
}

document.getElementById("demo").innerHTML = x; */