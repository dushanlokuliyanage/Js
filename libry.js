function inHTML(qu, content) {
  if (content) {
    document.querySelector(qu).innerHTML = content;
  } else {
    return document.querySelector(qu).innerHTML;
  }
}

function val(qu, value){
    if(value){
        document.querySelector(qu).value = value;
    }else {
        return document.querySelector(qu).value;
    }
}

function addLI(qu, content){
    let li = document.createElement("li").innerHTML = content;
}


function addEvent (qu, event, func){
document.querySelector(qu).addEventListener(event, func);
}