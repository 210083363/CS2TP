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