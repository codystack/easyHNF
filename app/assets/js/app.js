//Greet Agent
var time = new Date().getHours();
if (time < 12) {
    greeting = "Good Morning";
} else if (time < 16) {
    greeting = "Good Afternoon";
} else {
    greeting = "Good Evening";
}
document.getElementById("greet").innerHTML = greeting;