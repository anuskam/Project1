
let hat;
let shirt;
let pants;
let shoes;

let points;
let pointLimit = 1;

newCombo();
initPoints();
document.querySelector('#counter').innerHTML = 'Score: ' + window.points;
console.log(window.points);

function increasePoints(){
 
  if(window.points < pointLimit){
    window.points++;
  } 
}

function initPoints(){
  window.points = 0;
}

function displayUpdateScore(){
  
  if(window.points == pointLimit){
    document.querySelector('#counter').innerHTML = 'Score: ' + window.points + " (Point limit reached)";
  }else{
    document.querySelector('#counter').innerHTML = 'Score: ' + window.points;
  }
  
  console.log(window.points);
}

//Function to check selected clothes items
function checkCombo() {
  let checkHat = false;
  let checkShirt = false;
  let checkPants = false;
  let checkShoes = false;
  let text = "";
  let text2 = "Keep trying.";

  if (document.querySelector(' #hathole').firstChild.id == window.hat) {
    text += "Great hat! <br>";
    checkHat = true;
  } else {
    text += "This hat sucks. <br>";
  }

  if (document.querySelector(' #shirthole').firstChild.id == window.shirt) {
    text += "Great shirt! <br>";
    checkShirt = true;
  } else {
    text += "This shirt sucks. <br>";
  }

  if (document.querySelector(' #pantshole').firstChild.id == window.pants) {
    text += "Great pants! <br>";
    checkPants = true;
  } else {
    text += "These pants suck. <br>"
  }

  if (document.querySelector(' #shoeshole').firstChild.id == window.shoes) {
    text += "Great shoes! <br>";
    checkShoes = true;
  } else {
    text += "These shoes suck.";
  }

  if ( checkHat && checkShirt && checkPants && checkShoes){
    text2 = "You got me the perfect outfit!";
    increasePoints();
    displayUpdateScore();
    document.querySelector('#next').disabled = false;
    document.querySelector('#check').disabled = true;
  }
  
  document.querySelector('#feedback').innerHTML = text;
  document.querySelector('#winner').innerHTML = text2;
}

//Function to generate new outfit
function newCombo() {
  let hatNum = Math.floor((Math.random() * 6) + 1);
  let shirtNum = Math.floor((Math.random() * 6) + 1);
  let pantsNum = Math.floor((Math.random() * 6) + 1);
  let shoesNum = Math.floor((Math.random() * 6) + 1);

  switch (hatNum) {
    case 1:
      window.hat = "draghat1";
      break;
    case 2:
      window.hat = "draghat2";
      break;
    case 3:
      window.hat = "draghat3";
      break;
    case 4:
      window.hat = "draghat4";
      break;
    case 5:
      window.hat = "draghat5";
      break;
    case 6:
      window.hat = "draghat6";
      break;
    default:
      break;
  }

  switch (shirtNum) {
    case 1:
      window.shirt = "dragshirt1";
      break;
    case 2:
      window.shirt = "dragshirt2";
      break;
    case 3:
      window.shirt = "dragshirt3";
      break;
    case 4:
      window.shirt = "dragshirt4";
      break;
    case 5:
      window.shirt = "dragshirt5";
      break;
    case 6:
      window.shirt = "dragshirt6";
      break;
    default:
      break;
  }

  switch (pantsNum) {
    case 1:
      window.pants = "dragpants1";
      break;
    case 2:
      window.pants = "dragpants2";
      break;
    case 3:
      window.pants = "dragpants3";
      break;
    case 4:
      window.pants = "dragpants4";
      break;
    case 5:
      window.pants = "dragpants5";
      break;
    case 6:
      window.pants = "dragpants6";
      break;
    default:
      break;
  }


  switch (shoesNum) {
    case 1:
      window.shoes = "dragshoes1";
      break;
    case 2:
      window.shoes = "dragshoes2";
      break;
    case 3:
      window.shoes = "dragshoes3";
      break;
    case 4:
      window.shoes = "dragshoes4";
      break;
    case 5:
      window.shoes = "dragshoes5";
      break;
    case 6:
      window.shoes = "dragshoes6";
      break;
    default:
      break;
  }
  console.log(hatNum + " " + shirtNum + " " + pantsNum + " " + shoesNum); //DELETE ME

  resetGame();

}

function resetGame(){
  document.querySelector('#feedback').innerHTML = "";
  document.querySelector('#winner').innerHTML = "";
  
  document.querySelector('#next').disabled = true;
  document.querySelector('#check').disabled = false;

  document.querySelector(".container").innerHTML = ` <div class="shelf" id="hats">
  <div class="dropzone hat" id="hatzone1">
      <div id="draghat1" class="dragHat" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)"></div>
  </div>
  <div class="dropzone hat" id="hatzone2">
      <div id="draghat2" class="dragHat" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)"></div>
  </div>
  <div class="dropzone hat" id="hatzone3">
      <div id="draghat3" class="dragHat" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)"></div>
  </div>

  <div class="center">
      <div class="dropzone hat" id="hathole"></div>
      
  </div>

  <div class="dropzone hat" id="hatzone4">
      <div id="draghat4" class="dragHat" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)"></div>
  </div>
  <div class="dropzone hat" id="hatzone5">
      <div id="draghat5" class="dragHat" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)"></div>
  </div>
  <div class="dropzone hat" id="hatzone6">
      <div id="draghat6" class="dragHat" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)"></div>
  </div>
</div>


<div class="shelf" id="shirts">
  <div class="dropzone shirt">
      <div id="dragshirt1" class="dragShirt" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)">
          
      </div>
  </div>
  <div class="dropzone shirt">
      <div id="dragshirt2" class="dragShirt" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)">
          
      </div>
  </div>
  <div class="dropzone shirt">
      <div id="dragshirt3" class="dragShirt" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)">
          
      </div>
  </div>

  <div class="center">
      <div class="dropzone shirt" id="shirthole"></div>
      
  </div>

  <div class="dropzone shirt">
      <div id="dragshirt4" class="dragShirt" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)">
          
      </div>
  </div>
  <div class="dropzone shirt">
      <div id="dragshirt5" class="dragShirt" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)">
          
      </div>
  </div>
  <div class="dropzone shirt">
      <div id="dragshirt6" class="dragShirt" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)">
          
      </div>
  </div>
</div>

<div class="shelf" id="pants">
  <div class="dropzone pants">
      <div id="dragpants1" class="dragPants" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)">
          
      </div>
  </div>
  <div class="dropzone pants">
      <div id="dragpants2" class="dragPants" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)">
          
      </div>
  </div>
  <div class="dropzone pants">
      <div id="dragpants3" class="dragPants" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)">
          
      </div>
  </div>

  <div class="center">
      <div class="dropzone pants" id="pantshole"></div>
  </div>

  <div class="dropzone pants">
      <div id="dragpants4" class="dragPants" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)">
          
      </div>
  </div>
  <div class="dropzone pants">
      <div id="dragpants5" class="dragPants" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)">
          
      </div>
  </div>
  <div class="dropzone pants">
      <div id="dragpants6" class="dragPants" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)">
          
      </div>
  </div>
</div>


<div class="shelf" id="shoes">
  <div class="dropzone shoes">
      <div id="dragshoes1" class="dragShoes" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)">
          
      </div>
  </div>
  <div class="dropzone shoes">
      <div id="dragshoes2" class="dragShoes" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)">
          
      </div>
  </div>
  <div class="dropzone shoes">
      <div id="dragshoes3" class="dragShoes" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)">
          
      </div>
  </div>

  <div class="center">
      <div class="dropzone shoes" id="shoeshole" ></div>
  </div>

  <div class="dropzone shoes">
      <div id="dragshoes4" class="dragShoes" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)">
          
      </div>
  </div>
  <div class="dropzone shoes">
      <div id="dragshoes5" class="dragShoes" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)">
          
      </div>
  </div>
  <div class="dropzone shoes">
      <div id="dragshoes6" class="dragShoes" draggable="true"
          ondragstart="event.dataTransfer.setData('text/plain',null)">
          
      </div>
  </div>
</div>
`;
}