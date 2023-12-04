/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
import Jquery from 'jquery';
import vue from 'vue/dist/vue.cjs.prod.js';
// import vue from 'vue/dist/vue.runtime.esm-bundler.js';
window.vue = vue;
window.$ = Jquery;
window.axios = axios;


window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

