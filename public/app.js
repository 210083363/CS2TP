function toggleEditMode(id) {
    // document.getElementById("product_"+id).innerHTML.disabled = true;
    document.getElementById("product_"+id).getElementsByTagName("input").disabled=true;
}