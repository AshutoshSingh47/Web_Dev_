let arr=[];

document.getElementById("add").onclick = function () { createRow() }

document.getElementById("submit").onclick = function () { validateDate() }

function createRow() {
    console.log("table");
    let x = document.getElementById("content");
    let y = document.getElementById("cells");
    let row = x.insertRow();
    for (let i = 0; i < y.cells.length; i++) {
        if (i == 0) {
            row.insertCell(i).innerHTML = `<input type="date" name="date_from">`;
        }
        if (i == 1) {
            row.insertCell(i).innerHTML = `<input type="date" name="date_to">`;
        }
        if (i == 2) {
            row.insertCell(i).innerHTML = `<input type="text" name="qty">`;
        }
        if (i == 3) {
            row.insertCell(i).innerHTML = `<input type="text" name="dis">`;
        }
        if (i == 4) {
            row.insertCell(i).innerHTML = `<input type="button" value="delete">`;
        }
    }
}

function validateDate() {
    let content = document.getElementById("content");
    let x=document.querySelectorAll("input[name=date_from]");
    let y=document.querySelectorAll("input[name=date_to]")
    console.log(x[0].value);
    for(let i=0;i<content.rows.length;i++){
        if(x[i].value!="" && y[i]!=""){
            arr={x[i].value,y[i].value};
        }
        else{
            document.getElementById("result").innerHTML="Empty"; 
        }
    }
}

