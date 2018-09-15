/***********************************************
 * This file is a part of the f00f.me project
 * More info - https://x-t.github.io/source.html
 * License - https://x-t.github.io/LICENSE.txt
 ***********************************************/

var x = {
    yZh: [38,38,40,40,37,39,37,39,66,65],
    yNd: 1,
    zNu: 10,
    nUh: "keyCode",
    uhP: function (a, b) { return a === b; },
    nUp: "Congratulations, the award is: nothing."
};
var i = 0;

window.onload = function() {
	document.body.onkeydown = function(e) {
        i += x["uhP"](x["yZh"][i], e[x["nUh"]]) ? x["yNd"] : -i;
        if (x["uhP"](i, x["zNu"])) {
            alert(x["nUp"]);
        }
	};

	var showContactEmail = document.getElementsByClassName('showContact1');
    var overlayEmail = document.getElementById('contactEmail');
	var showSupport = document.getElementsByClassName('showSupport');
	var overlaySupport = document.getElementById('support');

    // There are two navbars - one for mobile,
    // one for desktop.

    showContactEmail[0].onclick = function() {
        overlayEmail.style.display = 'block';
    };
    showSupport[0].onclick = function() {
        overlaySupport.style.display = 'block';
    };
    showContactEmail[1].onclick = function() {
        overlayEmail.style.display = 'block';
    };
    showSupport[1].onclick = function() {
        overlaySupport.style.display = 'block';
    };

    window.onclick = function(event) {
        if (event.target == overlayEmail) {
            overlayEmail.style.display = 'none';
        } else if (event.target == overlaySupport) {
        	overlaySupport.style.display = 'none';
        }
    };
};

console.log("Hello.");
console.log("I don't hire. In fact, legally (and financially) I can't.");
console.log("But you're free to look.");
console.log("Find the licensing information here -> https://x-t.github.io/source.html");
