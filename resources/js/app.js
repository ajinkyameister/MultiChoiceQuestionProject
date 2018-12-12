
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

Vue.component('reseller', require('./components/Reseller.vue'));
Vue.component('modifyreseller', require('./components/ModifyReseller.vue'));
Vue.component('institute', require('./components/Institute.vue'));
Vue.component('modifyinstitute', require('./components/ModifyInstitute.vue'));
Vue.component('standard', require('./components/Standard.vue'));
Vue.component('modifystandard', require('./components/ModifyStandard.vue'));
Vue.component('exams', require('./components/Exam.vue'));
Vue.component('show-exams-under-standard',require('./components/listExamsUnderStandard.vue'));
//-------------------------------------------------------------------------------------//

Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('menu', require('./components/menu_component_try.vue'));
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
