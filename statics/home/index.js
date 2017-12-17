function switchTab(diff, index, count) {

    var curTab = document.getElementById("tab_" + diff + "_" + index)
    var curList = document.getElementById("list_" + diff + "_" + index)

    for (var i = 0; i < count; i++) {
        var tabObj = document.getElementById("tab_" + diff + "_" + i);
        var listObj = document.getElementById("list_" + diff + "_" + i);

        if (i != index) {
            if (tabObj) { tabObj.className = ""; }
            if (listObj) { listObj.className = diff + " clearfix"; }

        }
    }

    if (curTab) { curTab.className = "zc_on"; }
    if (curList) { curList.className = diff + " zc_show clearfix"; }

    return false;
}

var FocusPic = function (BigPicID, SmallPicsID, TitleID, MemoID, width, height) { this.Data = []; this.ImgLoad = []; this.TimeOut = 5000; var isIE = navigator.appVersion.indexOf("MSIE") != -1 ? true : false; this.width = width; this.height = height; this.adNum = 0; var TimeOutObj; if (!FocusPic.childs) { FocusPic.childs = [] }; this.showTime = null; this.showSum = 10; this.ID = FocusPic.childs.push(this) - 1; this.Add = function (BigPic, SmallPic, Title, Url, Memo) { var ls; this.Data.push([BigPic, SmallPic, Title, Url, Memo]); ls = this.ImgLoad.length; this.ImgLoad.push(new Image); this.ImgLoad[ls].src = BigPic }; this.TimeOutBegin = function () { clearInterval(TimeOutObj); TimeOutObj = setInterval("FocusPic.childs[" + this.ID + "].next()", this.TimeOut) }; this.TimeOutEnd = function () { clearInterval(TimeOutObj) }; this.select = function (num) { if (num > this.Data.length - 1) { return }; if (num == this.adNum) { return }; this.TimeOutBegin(); if (BigPicID) { if (this.$(BigPicID)) { var aObj = this.$(BigPicID).getElementsByTagName("a")[0]; aObj.href = this.Data[num][2]; if (this.aImgY) { this.aImgY.style.display = 'none'; this.aImg.style.position = "relative"; this.aImg.style.left = 0; this.aImg.style.top = 0; this.aImg.style.zIndex = 0 }; this.aImgY = this.$('F' + this.ID + 'BF' + this.adNum); this.aImg = this.$('F' + this.ID + 'BF' + num); clearTimeout(this.showTime); this.showSum = 10; this.showTime = setTimeout("FocusPic.childs[" + this.ID + "].show()", 50) } }; if (TitleID) { if (this.$(TitleID)) { this.$(TitleID).innerHTML = "<a href=\"" + this.Data[num][2] + "\" target=\"_blank\">" + this.Data[num][3] + "</a>" } }; if (MemoID) { if (this.$(MemoID)) { this.$(MemoID).innerHTML = this.Data[num][4] } }; if (SmallPicsID) { if (this.$(SmallPicsID)) { var sImg = this.$(SmallPicsID).getElementsByTagName("span"), i; for (i = 0; i < sImg.length; i++) { if (i == num || num == (i - this.Data.length)) { sImg[i].className = "selected" } else { sImg[i].className = "" } } } }; if (this.onselect) { this.onselect() }; this.adNum = num }; var absPosition = function (obj, parentObj) { var left = obj.offsetLeft, top = obj.offsetTop, tempObj = obj; while (tempObj.id != "VBody" & tempObj.id != "VHtml" & tempObj != parentObj) { tempObj = tempObj.offsetParent; left += tempObj.offsetLeft; top += tempObj.offsetTop }; return { left: left, top: top} }; this.show = function () { this.showSum--; this.aImgY.style.display = 'block'; this.aImg.style.position = "absolute"; var XY = absPosition(this.aImgY, this.$(BigPicID)); this.aImg.style.top = XY.top + "px"; this.aImg.style.left = XY.left + "px"; this.aImg.style.display = 'block'; if (isIE) { this.aImg.style.filter = "alpha(opacity=0)"; this.aImg.style.filter = "alpha(opacity=" + (10 - this.showSum) * 10 + ")" } else { this.aImg.style.opacity = 0; this.aImg.style.opacity = (10 - this.showSum) * 0.1 }; if (this.showSum <= 0) { this.aImgY.style.display = 'none'; this.aImg.style.position = "relative"; this.aImg.style.left = 0; this.aImg.style.top = 0; this.aImg.style.zIndex = 0; this.aImgY = null } else { this.aImg.style.zIndex = 2; this.showTime = setTimeout("FocusPic.childs[" + this.ID + "].show()", 50) } }; this.next = function () { var temp = this.adNum; temp++; if (temp >= this.Data.length) { temp = 0 }; this.select(temp) }; this.MInStopEvent = function (ObjID) { if (ObjID) { if (this.$(ObjID)) { if (this.$(ObjID).attachEvent) { this.$(ObjID).attachEvent("onmouseover", Function("FocusPic.childs[" + this.ID + "].TimeOutEnd()")); this.$(ObjID).attachEvent("onmouseout", Function("FocusPic.childs[" + this.ID + "].TimeOutBegin()")) } else { this.$(ObjID).addEventListener("mouseover", Function("FocusPic.childs[" + this.ID + "].TimeOutEnd()"), false); this.$(ObjID).addEventListener("mouseout", Function("FocusPic.childs[" + this.ID + "].TimeOutBegin()"), false) } } } }; this.begin = function () { this.MInStopEvent(TitleID); this.MInStopEvent(SmallPicsID); this.MInStopEvent(BigPicID); this.adNum = 0; var i, temp = ""; if (BigPicID) { if (this.$(BigPicID)) { var aObj = this.$(BigPicID).getElementsByTagName("a")[0]; aObj.style.zoom = 1; this.$(BigPicID).style.position = "relative"; for (i = 0; i < this.Data.length; i++) { temp += '<img src="' + this.Data[i][0] + '" id="F' + this.ID + 'BF' + i + '" style="display:' + (i == this.adNum ? 'block' : 'none') + '" galleryimg="no"' + (this.width ? ' width="' + this.width + '"' : '') + (this.height ? ' height="' + this.height + '"' : '') + ' alt="' + this.Data[i][3] + '" />' }; aObj.innerHTML = temp } }; if (SmallPicsID) { if (this.$(SmallPicsID)) { temp = ""; for (i = 0; i < this.Data.length; i++) { temp += "<span" + (this.adNum == i ? ' class="selected"' : "") + "><a href=\"" + this.Data[i][2] + "\" target=\"_blank\"><img src=\"" + this.Data[i][1] + "\" onmouseover=\"FocusPic.childs[" + this.ID + "].select(" + i + ")\" alt=\"" + this.Data[i][3] + "\" /></a></span>" }; this.$(SmallPicsID).innerHTML = temp } }; if (TitleID) { if (this.$(TitleID)) { this.$(TitleID).innerHTML = "<a href=\"" + this.Data[this.adNum][2] + "\" target=\"_blank\">" + this.Data[this.adNum][3] + "</a>" } }; if (MemoID) { if (this.$(MemoID)) { this.$(MemoID).innerHTML = this.Data[this.adNum][4] } }; this.TimeOutBegin() }; this.$ = function (objName) { if (document.getElementById) { return eval('document.getElementById("' + objName + '")') } else { return eval('document.all.' + objName) } } };

var $ = function (objId) {
    if (!objId) {
        return null
    }
    if (document.getElementById) {
        //        alert("1");
        var b = document.getElementById(objId);
        return eval(b)
    }
    else if (document.layers) {
        //        alert("2");
        var b = document.layers[objId]
        return eval(b)
    }
    else {
//        alert("3");
        return eval('document.all.' + objId)
    }
}