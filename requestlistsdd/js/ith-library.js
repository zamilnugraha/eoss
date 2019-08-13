// independent library
function loadModule(modul) {
	window.location.href = '?m='+modul;
}

function loadXMLDoc(dname) 
{
	if (window.XMLHttpRequest)
	{
		xhttp=new XMLHttpRequest();
	}
	else
	{
		xhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xhttp.open("GET",dname,false);
	xhttp.send();
	return xhttp.responseXML;
}

function getTimeStamp() {
	var ts = new Date();
	var tm = Date.parse(ts);
	
	return tm;
}

function getElePosY (obj) {
	var curtop = 0;
	while (obj.offsetParent) {
		curtop += obj.offsetTop;
		obj = obj.offsetParent;
	}
	return curtop;
}

function getElePosX (obj) {
	var curleft = 0;
	while (obj.offsetParent) {
		curleft += obj.offsetLeft;
		obj = obj.offsetParent;
	}
	return curleft;
}

function regex(pattern, string) {
	return pattern.test(string);
}

function explore(str) {
	var data = str.split(';');
	var _data = new Array();
	for (i=0;i<data.length;i++) {
		var val = data[i].split('::');
		_data[val[0]] = val[1];
	}
	
	return _data;
}

function openWindow(url,type) {
	if (type === undefined) {
		type = 1;
	}
	
	switch(type) {
		case 1: window.open(url,'hdWindow',"width=900,height=600,location=no,menubar=no,resizable=no,scrollbars=yes,status=no,titlebar=no,toolbar=no");break;
		case 2: window.open(url,"ithwindow","width=900,height=600");break;
	}
}
