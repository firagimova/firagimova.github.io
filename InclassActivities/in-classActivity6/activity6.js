var level = 1;
var clickCounter= 0;
var marginTop;
var marginLeft;
var button = document.getElementById("button");

function move(){
    
    button.style.marginTop = Math.random()*500+"px";
    button.style.marginLeft = Math.random()*500+"px";

}

function clicked(){
    clickCounter++;

    if(clickCounter >= 3){
        clickCounter = 0;
        alert("You win the level " +level);
        level++;
        
    }
    
}

function TimeOut(){

    switch(level){
        case 1: 
            setTimeout(move, 500);
            break;
        case 2: 
            setTimeout(move, 400);
            break;
        case 3: 
            setTimeout(move, 300);
            break;
        case 4: 
            setTimeout(move, 200);
            break;
        case 5: 
            setTimeout(move, 100);
            break;
        case 6: 
            setTimeout(move, 0);
            break;
    }
    
}