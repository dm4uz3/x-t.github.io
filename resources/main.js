/***********************************************
 * This file is a part of the f00f.me project
 * More info - https://x-t.github.io/source.html
 * License - https://x-t.github.io/LICENSE.txt
 ***********************************************/

var z = "dmFyIHggPSB7eVpoOlsyNDUtMjA3LDE0MTUxLTE0MTEzLDE5MjkxLTE5MjUxLDk5MC05NTAsMTEzLTc2LDE5OTctMTk1OCw2NjYtNjI5LDE4ODEtMTg0Miw3MjEtNjU1LDkxOTE5LTkxODU0XSx5TmQ6ND4+Mix6TnU6NTw8MSxuVWg6ImEyVjVRMjlrWlE9PSIsdWhQOmZ1bmN0aW9uKGEsYil7cmV0dXJuIGE9PT1ifSxuVXA6IlEyOXVaM0poZEhWc1lYUnBiMjV6TENCMGFHVWdZWGRoY21RZ2FYTTZJRzV2ZEdocGJtY3UiLGlpUDpmdW5jdGlvbihhKXtyZXR1cm4gYXRvYihhKX07";
var i = 0;
eval(atob(z));

window.onload = function() {
	document.body.onkeydown = function(e) {
        i += x["uhP"](x["yZh"][i], e[x["iiP"](x["nUh"])]) ? x["yNd"] : -i;
        if (x["uhP"](i, x["zNu"])) {
            alert(x["iiP"](x["nUp"]));
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
