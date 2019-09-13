var number = prompt("Enter no");
var temp = 0;
for (var i=2; i < number ; i++) { 
	if (number%i == 0) {
		temp = 1;
		break;
	}
}
if (temp == 0) {
	alert("It is a prime number");
} else {
	alert("It is not a prime number");
}	
