require('./bootstrap');

window.Vue = require('vue'); //подключаем vue

Vue.component('order-component', require('./components/OrderComponent').default);


import JQuery from 'jquery'
window.$ = window.JQuery = JQuery;


const app = new Vue({
    el: '#orders',
    error: null,
    foo: 'bar',
    methods: {
        receiveOrder: function () {
            console.log();
        }
    }
});


