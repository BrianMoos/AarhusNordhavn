function existx(x) { return x !== null && typeof x !== "undefined"; }

function lessOrEqual(x, y) {
return x - y;
}

var $ = function (element) {
	return document.getElementById(element);
};

var _ = function (element) {
	return document.getElementsByClassName(element);
};


var E = {
	addListener: function (element, event, handler) {

		try {
			element.addEventListener(event, handler, false);
		} catch (e1) {
			try {
				element.attachEvent('on' + event, handler);
			} catch (e2) {
				alert(e2);
			}
		}

	},

	load: function (codeBlock) {
		this.addListener(window, 'load', codeBlock);
	}
};



var Ajax = {

	oReq: function () {
		try {
			xhr = new XMLHttpRequest();
		} catch (e1) {
			try {
				xhr = new ActiveXObject('Msxml2.XMLHTTP');
			} catch (e2) {
				xhr = false;
			}
		}
		return xhr;
	},

	getFile: function (filename) {
		request = new this.oReq;
		request.open('GET', filename, false);
		request.send('');
		return request.response;
	}
};
