function hello(){
    alert("Welcome to  y website");
}
function add(){
    document.write(5+6);
}
function changeColor(){
    // if (where == "background"){
    //     document.body.style.backgroundColor = newColor;
    let color = document.getElementById('background').value;
    document.body.style.backgroundColor = color; 
}
function changeFColor(){
    let fcolor = document.getElementById('fcolor').value;
    document.body.style.color = fcolor;
}
// crud

function crud(){
    let fname = (document.form1.fname.value).trim();
    if (fname.length < 5 ){
        alter("First name must be at least 5 characters");
        return false;
    }
}
function fname(){
    let fname = (document.form1.fname.value).trim();
    if (fname.length < 5 ){
        alter("First name must be at least 5 characters");
        return false;
    }
}