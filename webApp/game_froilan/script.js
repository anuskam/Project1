
  function checkCombo(){

   let text = "";

    if (document.querySelector(' #hathole').firstChild.id == "draghat1") {
      text += "This hat is hitting it. <br>";
    }else{
      text += "This hat sucks. <br>";
    }


    if(document.querySelector(' #shirthole').firstChild.id == "dragshirt1"){
      text += "This shirt is shuper. <br>";
    } else{
      text += "This shirt sucks. <br>";
    }

    if (document.querySelector(' #pantshole').firstChild.id == "dragpants1") {
      text += "These pants are the cat's pajamas! Well, not literally. <br>";
    } else{
      text += "These pants suck. <br>"
    }
    
    if (document.querySelector(' #shoeshole').firstChild.id == "dragshoes1") {
      text += "These shoes are shpectacular!";
    } else{
      text += "I am not wearing these shoes.";
    }

    document.querySelector('#feedback').innerHTML = text;
  }









var dragged;

/* events fired on the draggable target */
 document.addEventListener("drag", function(event) {
   
}, false);

document.addEventListener("dragstart", function(event) {
  // store a ref. on the dragged elem
  dragged = event.target;
  // make it half transparent
   event.target.style.backgroundColor = "blue";
}, false);

document.addEventListener("dragend", function(event) {
  // reset the transparency
   event.target.style.backgroundColor = "rgb(0, 174, 255)";
}, false);

/* events fired on the drop targets */
document.addEventListener("dragover", function(event) {
  // prevent default to allow drop
  event.preventDefault();
}, false);



//Drop Zone event listeners

//HAT event listeners

document.addEventListener("dragenter", function(event) {
  // highlight potential drop target when the draggable element enters it
  if (event.target.className == "dropzone hat" ) {
    event.target.style.background = "grey";
  }

}, false);

document.addEventListener("dragleave", function(event) {
  // reset background of potential drop target when the draggable element leaves it
  if (event.target.className == "dropzone hat" ) {
    event.target.style.background = "";
  }

}, false);

document.addEventListener("drop", function(event) {
  // prevent default action (open as link for some elements)
  event.preventDefault();
  // move dragged elem to the selected drop target
  if (event.target.className == "dropzone hat" && dragged.className=="dragHat") {
    dragged.parentNode.removeChild( dragged );
    event.target.appendChild( dragged );
  }
  event.target.style.background = "";
}, false);


//SHIRT event listeners

document.addEventListener("dragenter", function(event) {
    // highlight potential drop target when the draggable element enters it
    if (event.target.className == "dropzone shirt" ) {
      event.target.style.background = "grey";
    }
  
  }, false);
  
  document.addEventListener("dragleave", function(event) {
    // reset background of potential drop target when the draggable element leaves it
    if (event.target.className == "dropzone shirt" ) {
      event.target.style.background = "";
    }
  
  }, false);
  
  document.addEventListener("drop", function(event) {
    // prevent default action (open as link for some elements)
    event.preventDefault();
    // move dragged elem to the selected drop target
    if (event.target.className == "dropzone shirt" && dragged.className=="dragShirt") {
      dragged.parentNode.removeChild( dragged );
      event.target.appendChild( dragged );
    }
    event.target.style.background = "";
  }, false);
  

//PANTS event listeners

document.addEventListener("dragenter", function(event) {
    // highlight potential drop target when the draggable element enters it
    if (event.target.className == "dropzone pants" ) {
      event.target.style.background = "grey";
    }
  
  }, false);
  
  document.addEventListener("dragleave", function(event) {
    // reset background of potential drop target when the draggable element leaves it
    if (event.target.className == "dropzone pants" ) {
      event.target.style.background = "";
    }
  
  }, false);
  
  document.addEventListener("drop", function(event) {
    // prevent default action (open as link for some elements)
    event.preventDefault();
    // move dragged elem to the selected drop target
    if (event.target.className == "dropzone pants" && dragged.className=="dragPants") {
      dragged.parentNode.removeChild( dragged );
      event.target.appendChild( dragged );
    }
    event.target.style.background = "";
  }, false);


//SHOES event listeners

document.addEventListener("dragenter", function(event) {
    // highlight potential drop target when the draggable element enters it
    if (event.target.className == "dropzone shoes" ) {
      event.target.style.background = "grey";
    }
  
  }, false);
  
  document.addEventListener("dragleave", function(event) {
    // reset background of potential drop target when the draggable element leaves it
    if (event.target.className == "dropzone shoes" ) {
      event.target.style.background = "";
    }
  
  }, false);
  
  document.addEventListener("drop", function(event) {
    // prevent default action (open as link for some elements)
    event.preventDefault();
    // move dragged elem to the selected drop target
    if (event.target.className == "dropzone shoes" && dragged.className=="dragShoes") {
      dragged.parentNode.removeChild( dragged );
      event.target.appendChild( dragged );
    }
    event.target.style.background = "";
  }, false);