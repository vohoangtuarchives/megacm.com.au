import './bootstrap';
import * as bootstrap from 'bootstrap';
import Alpine from 'alpinejs';
import Cart from "@/components/Cart.vue";
window.Alpine = Alpine;
window.bootstrap = bootstrap;

Alpine.start();
const app = vue.createApp({});
app.component("Cart", Cart);
window.app = app;
