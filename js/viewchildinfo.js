let acc1 = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < acc1.length; i++) {
  acc1[i].addEventListener("click", function() {
    this.classList.toggle("active-accordion");
    let panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

let acc2 = document.getElementsByClassName("key-button");
let x;

for (x = 0; x < acc2.length; x++) {
  acc2[x].addEventListener("click", function() {
    this.classList.toggle("active-key");
    let panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

let acc3 = document.getElementsByClassName("chartbtn");
let y;

for (y = 0; y < acc3.length; y++) {
  acc3[y].addEventListener("click", function() {
    this.classList.toggle("active-accordion");
    let panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}




