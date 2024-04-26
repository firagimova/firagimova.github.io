var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };



window.onload = function () {
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
	$("add").onclick = addScore;
	
	document.getElementById("name").focus();
};


function addScore(){
	var getName = document.getElementById("name").value;
	var getScore = document.getElementById("score").value;

	if(getName == "" || (parseFloat(getScore) < 0 || parseFloat(getScore) >100)){
		alert("You must enter a name and a valid score");
	}
	else{
		names.push(getName);
		scores.push(parseFloat(getScore));
	}

	document.getElementById("name").focus();
}

function displayResults()
{
	var average = 0;
	var top=0;
	var index = 0;
	for(var i=0;i<scores.length;i++)
	{	
		average= (average*(i)+scores[i])/(i+1);
		if(top< scores[i]){
			top = scores[i];
			index = i;
		}
	}
	
	document.getElementById("results").innerHTML="<h2> Results </h2><br /> Average score = "+average+ "<br \> High Score = " +names[index]+ " with a score of " +scores[index];
}

function displayScores(){
	var mainText = "<h2> Scores </h2><br /><table><tr><th style='text-align:start'>Name</th><th style='text-align:start'>Score</th></tr>";
	
	function generate(){
		var textt = "";
		for(var i = 0; i<names.length; i++){
			textt += "<tr><td>"+names[i]+"</td><td>"+scores[i]+"</td></tr>"
		}
		return textt;
	}
	var text = generate();
	mainText += text + "</table>";
	
	document.getElementById("scores_table").innerHTML = mainText;
}


