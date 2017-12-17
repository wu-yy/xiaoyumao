var scrlSpeed = 1
// decreasing speed for mozilla
scrlSpeed = (document.all) ? scrlSpeed : Math.max(1, scrlSpeed - 1)

function initScroll(container, object) {
    if (document.getElementById(container) != null) {
        var contObj = document.getElementById(container);
        var obj = document.getElementById(object);
        contObj.style.visibility = "visible";
        contObj.scrlSpeed = scrlSpeed;
        widthContainer = contObj.offsetWidth;
        obj.style.left = parseInt(widthContainer) + "px";
        widthObject = obj.offsetWidth;
        interval = setInterval("objScroll('" + container + "','" + object + "'," + widthContainer + ")", 20);
        contObj.onmouseover = function () {
            contObj.scrlSpeed = 0;
        }

        contObj.onmouseout = function () {
            contObj.scrlSpeed = scrlSpeed;
        }
    }
}

function objScroll(container, object, widthContainer) {
    var contObj = document.getElementById(container);
    var obj = document.getElementById(object);
    widthObject = obj.offsetWidth;
    if (parseInt(obj.style.left) > (widthObject * (-1))) {
        obj.style.left = parseInt(obj.style.left) - contObj.scrlSpeed + "px";
    } else {
        obj.style.left = parseInt(widthContainer) + "px";
    }
}



// on page load we initiate scrolling
window.onload = function () {
    initScroll("scrlContainer", "scrlContent");
}