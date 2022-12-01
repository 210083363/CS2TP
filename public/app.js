// function toggleEditMode(id) {
//     // document.getElementById("product_"+id).innerHTML.disabled = true;
//     // console.log(document.querySelector("#product_" + id + " input"));

//     let button = document.querySelector("#product_" + id + " button");

//     if (button.textContent == "Edit") {
//         console.log("Edit");
//         let inputList = document.querySelectorAll("#product_" + id + " input");
//         for (let i = 0; i < inputList.length; i++) {
//             inputList[i].disabled = false;
//         }
//         button.textContent = "Save";
//     }
//     // console.
//     // document.getElementById("product_"+id).getElementsByTagName("input").disabled=true;
// }

window.onload = function() {
    document.getElementById("hideAll").style.display = "none";

    //Code for displaying searched name or key programming
    let search = document.getElementById("search");
    let table = document.getElementById("product-rows");
    if (search != null) {
        search.onkeyup = function() {
            for (var row = 0; row < table.rows.length; row++) {
                let name = table.rows[row].cells[0].innerText;
                if (name.toLowerCase().includes(search.value.toLowerCase())) {
                    table.rows[row].style.display = "";
                } else {
                    table.rows[row].style.display = "none";
                }
            }
        };
    }
};




const menuIcon = document.querySelector(".hamburger-menu");
const navbar = document.querySelector(".navbar");

menuIcon.addEventListener("click", () => {
   navbar.classList.toggle("change");
}); 



const myslide = document.querySelectorAll('.myslide'),
	  dot = document.querySelectorAll('.dot');
let counter = 1;
slidefun(counter);

let timer = setInterval(autoSlide, 8000);
function autoSlide() {
	counter += 1;
	slidefun(counter);
}
function plusSlides(n) {
	counter += n;
	slidefun(counter);
	resetTimer();
}
function currentSlide(n) {
	counter = n;
	slidefun(counter);
	resetTimer();
}
function resetTimer() {
	clearInterval(timer);
	timer = setInterval(autoSlide, 8000);
}

function slidefun(n) {
	
	let i;
	for(i = 0;i<myslide.length;i++){
		myslide[i].style.display = "none";
	}
	for(i = 0;i<dot.length;i++) {
		dot[i].className = dot[i].className.replace(' active', '');
	}
	if(n > myslide.length){
	   counter = 1;
	   }
	if(n < 1){
	   counter = myslide.length;
	   }
	myslide[counter - 1].style.display = "block";
	dot[counter - 1].className += " active";
}