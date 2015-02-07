var dom = document.getElementById("myForm");
var operation;
var numChancesLeft = 0;
var score = 0;
var inMixMode = false;
var questionNum = 0;
var numAttemptedQuestions = 0;
var attempted;
var subtractionCount = 0;
var additionCount = 0;
var multiplicationCount = 0;

function generateValues(){
	
	attempted = false;

	var intervalSelection, num1, num2;
	
	if (dom.range1.checked)
		intervalSelection = dom.range1.value;
	
	else if (dom.range2.checked)
		intervalSelection = dom.range2.value;
		
	else if (dom.range3.checked)
		intervalSelection = dom.range3.value;

	if (intervalSelection){

		if (inMixMode)
			document.getElementById("operationSign").innerHTML = randOp ();

			if (questionNum == 0) {
				dom.renew.value = "Next Question >>";
			}
			
			var questionString = String("Q"+ ++questionNum +".&nbsp;")
			document.getElementById("questionNumber").innerHTML = questionString;
			
			dom.chances.value = numChancesLeft = 3;
			dom.answer.value = "";
			
			num1 = valueGenerator (intervalSelection);
			num2 = valueGenerator (intervalSelection);
			
			if (num1 > num2) {
				dom.num1.value = num1;
				dom.num2.value = num2;
			} else {
				dom.num1.value = num2;
				dom.num2.value = num1;
		}		
	} else
		alert("Select the range of numbers first");
}


function valueGenerator (maxValue){

		var number = Math.floor(Math.random()*parseInt(maxValue));
		return number;
}

function addition (a, b){
	return parseInt(a)+parseInt(b);
}

function subtraction (a, b){
	return a-b;

}

function multiply (a, b){
	return a*b;
}

function randOp (){

	var operations = ["+", "-", "x"];
	var option = Math.floor(Math.random()*3);
	
	operation = operations[option];
	return operation;
}

function updateOpCount(operation){
	if (operation == "+"){
		additionCount++;
	
	}else if (operation == "-"){
		subtractionCount++;
	
	}else if (operation == "x"){
		multiplicationCount++;
	}
}

function getAnswer (a, b , operation){

	if (operation == "+"){
		return addition (a, b);
	
	}else if (operation == "-"){
		return subtraction (a, b);
	
	}else if (operation == "x"){
		return multiply (a, b);
	}
}

function checkAnswer(){

		var num1, num2, answer;
		
		num1 = dom.num1.value;
		num2 = dom.num2.value;
		
		answer = dom.answer.value;
	if (dom.range1.checked | dom.range2.checked | dom.range3.checked){

		if (!isNaN(answer) & !isNaN(num1) & !isNaN(num2)){
			
			if (!attempted) {
				attempted = !attempted;
				numAttemptedQuestions++;
				updateOpCount(operation);
			}

			if (inMixMode)
				document.getElementById("declaration2").innerHTML = String(additionCount+" Addition(s), "+subtractionCount+
																" Subtraction(s) and "+multiplicationCount+" Multiplication(s). ");
			document.getElementById("declaration").innerHTML = String(" You've attempted "+numAttemptedQuestions+" question(s).");

			if(getAnswer(num1,num2, operation) == parseInt(answer)) {
						alert("Correct answer");
						var addedScore;
							switch (numChancesLeft) {
								case 3: addedScore = 30;
								break;
								case 2: addedScore = 20;
								break;
								case 1: addedScore = 10;
								break;
							}
							
							score += addedScore;
							
							var xmlhttp = new XMLHttpRequest();
							
							if (operation == "+"){
								xmlhttp.open("GET","../php/add.php?addscore="+addedScore);
							}else if (operation == "-"){
								xmlhttp.open("GET","../php/sub.php?subscore="+addedScore);
							}else if (operation == "x"){
								xmlhttp.open("GET","../php/multi.php?multiscore="+addedScore);
							}	
							xmlhttp.send();
					
							dom.correctAnswer.value = score;
							numChancesLeft = 0;
			} else {

				dom.chances.value = --numChancesLeft;
			
				if (numChancesLeft > 0)
					alert("Wrong answer... Please try again");
				else {
					alert("Wrong answer... The correct answer is: "+getAnswer(num1,num2, operation));
					generateValues();
				}
			}
		}
	}
}