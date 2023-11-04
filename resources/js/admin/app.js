import '../bootstrap';


import {createApp} from "vue";
import Router from '@/router'
import store from '@/store'
import { FontAwesomeIcon } from './plugins/font-awesome';
import "bootstrap/dist/css/bootstrap.min.css";
const app = createApp({});
app.use(Router).use(store)
    .component("font-awesome-icon", FontAwesomeIcon);
window.app = app;