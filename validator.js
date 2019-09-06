var xVal = undefined;


Array.from(document.getElementsByClassName("x")).forEach((e) => {
    e.addEventListener('click', function () {
        xVal = e.valueOf().value;
        Array.from(document.getElementsByClassName("x")).forEach((e) => e.classList.remove("selected"));
        e.classList.add('selected');
    })
});

function validate() {
    let y = document.getElementById('y-value').value;
    let r = document.getElementById('r-value').value;
    document.getElementById('wrong-data').innerText="";

    if (y===""){
        document.getElementById('wrong-data').innerText="Заполните Y";
        return false;
    }else if (isNaN(y)){
        document.getElementById("wrong-data").innerText+="В поле Y допустимы только цифры, знак минуса/плюса и точка/запятая. ";
        return false;
    }else if (y<-3 || y>3){
        document.getElementById("wrong-data").innerText+="В поле Y введено число не из заданного диапазона (-3;3). ";
        return false;
    }

    if (r===""){
        document.getElementById('wrong-data').innerText="Заполните R";
        return false;
    }else if (isNaN(r)){
        document.getElementById("wrong-data").innerText+="В поле R допустимы только цифры, точка/запятая. ";
        return false;
    }else if (r<-2 || r>5){
        document.getElementById("wrong-data").innerText+="В поле R введено число не из заданного диапазона (2;5). ";
        return false;
    }
    let xCheck = false;
    if (xVal !== undefined) {
        xCheck = true;
    }

    if (!xCheck) {
        document.getElementById("wrong-data").innerText+="Не выбрана координата X. ";
        return false
    }
    return true;

}



function submit(e) {
    e.preventDefault();
    if (validate()) {
        const formData = new FormData(document.querySelector('#form'));
        formData.append("x_value", xVal);
        fetch(`checkArea.php?`, {
            method: 'POST',
            body: formData,
        })
            .then(ans => ans.text())
            .then(table => document.querySelector('#ans').innerHTML=table);
    }
    return false;
}

document.addEventListener('DOMContentLoaded', function(){
    document.querySelector('#submit-button').addEventListener('click', submit);
});


function clear(e) {
    e.preventDefault();
    fetch('clear.php', {
        method: 'POST',
    })
        .then(ans => ans.text())
        .then(table => document.querySelector('#ans').innerHTML=table);

};

document.addEventListener('DOMContentLoaded', function(){
    document.querySelector('#clear-button').addEventListener('click', clear);
});

