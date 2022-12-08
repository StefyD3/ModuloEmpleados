/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('empleados-component', require('./components/EmpleadosComponent.vue').default);
Vue.component('cargos-component', require('./components/CargosComponent.vue').default);
Vue.component('afiliaciones-component', require('./components/AfiliacionesComponent.vue').default);
Vue.component('saluds-component', require('./components/SaludsComponent.vue').default);
Vue.component('riesgos-component', require('./components/RiesgosComponent.vue').default);
Vue.component('pensiones-component', require('./Pensiones/ExampleComponent.vue').default);
Vue.component('ccompensaciones-component', require('./components/CcompensacionesComponent.vue').default);
Vue.component('novedades-component', require('./components/NovedadesComponent.vue').default);
Vue.component('nomina-component', require('./components/NominaComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});