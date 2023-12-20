
function change() {
var element;
let boxes = document.querySelectorAll('input[type="checkbox"]');
    for(let i = 0; i < boxes.length; i++){
        if(boxes[i].checked) {
            // チェックが入っていたら、送信ボタンのdisabledを外す
            element = document.getElementById("submit");
            element.disabled = false;
            break;
        }else {
            // チェックが外れていたら、送信ボタンにdisabledを付ける
            element = document.getElementById("submit");
            element.disabled = true;   
        }
    } 
    for(let i = 0; i < boxes.length; i++){
        if(boxes[i].checked) {
            // チェックが入っていたら、送信ボタンのdisabledを外す
            element = document.getElementById("submit2");
            element.disabled = false;
            break;
        }else {
            // チェックが外れていたら、送信ボタンにdisabledを付ける
            element = document.getElementById("submit2");
            element.disabled = true;   
        }  
    } 
}     
 // ボタンにonclick属性を追加
const btn = document.querySelector("#btn");
btn.onclick = checked;

function unChecked() {
    let boxes = document.querySelectorAll('input[type="checkbox"]');
    for (let i = 0; i < boxes.length; i++) {
        boxes[i].checked = false;
        this.onclick = checked;
        
    }
    element = document.getElementById("submit2");
        element.disabled = true; 
        element = document.getElementById("submit");
        element.disabled = true;  
}

function checked() {
    let boxes = document.querySelectorAll('input[type="checkbox"]');
    for (let i = 0; i < boxes.length; i++) {
        boxes[i].checked = true;
        this.onclick = unChecked;
    }
    element = document.getElementById("submit2");
        element.disabled = false;
        element = document.getElementById("submit");
        element.disabled = false;
}
