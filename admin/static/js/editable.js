/**
 * Created by lincg on 18-1-26.
 */
function editCell(event){
    var currentCell;

    if(event == null){
        currentCell = window.event.srcElement;
    }else{
        currentCell = event.target;
    }

    if(currentCell.tagName.toLowerCase() == "td" && currentCell.getAttribute("editable") !== null){
        var input = document.createElement("input");
        input.type = "text";
        input.value = currentCell.innerHTML;
        input.width = currentCell.style.width;

        input.onblur = function(){
            currentCell.innerHTML = input.value;
            input.remove();
        };
        input.onkeydown = function(event){
            if(event.keyCode == 13){
                input.blur();
            }
        };

        currentCell.innerHTML = "";
        currentCell.appendChild(input);
        input.focus();
    }
}

function setToEditable(tableid){
    document.getElementById(tableid).onclick=editCell;
}
