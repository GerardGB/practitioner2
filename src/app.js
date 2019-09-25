import helpers from '../helpers.js'
/* import { suma, log, saluda} from '../helpers.js' */
import {template} from './templates/task'
document.body.innerHTML = template;

/* log('prova');
saludar();
suma(1,2);
console.log(resultat);
 */
helpers.log('prova');
helpers.saludar();
const resultat = helpers.suma(1,2);
console.log(resultat);