"use strict";

var _greetingJs = _interopRequireDefault(require("./js/templates/greeting.js"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }

//console.log('Hola mon');
console.log(document);
console.log('document.body');
var name = 'Gerard';
console.log(_greetingJs["default"]);
/* const template = `
<h1>Hola ${name}</h1>
`; */
//document.body.innerHTML = "Hola "+ name;

document.body.innerHTML = template; // import i export