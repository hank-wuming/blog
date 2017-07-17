
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
window.Vue = require('vue');
let vueResource = require('vue-resource');

Vue.use(vueResource);

Vue.http.options.root = '/root';
Vue.http.headers.common['Authorization'] = 'Basic YXBpOnBhc3N3b3Jk';
Vue.http.headers.common['X-CSRF-TOKEN']  = $('meta[name="csrf-token"]').attr('content');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

let data = { message: 0 };
let app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!',
        skills: []
    },
    created() {
        this.$http.get('/ajax').then(response => this.skills = response.data);
    }
});

Vue.component('test', {
    template: '<button v-on:click="hello">{{ message }}</button>',
    data: function () {
        return data;
    },
    methods: {
        hello: function () {
            alert('test')
        }
    }
});

Vue.component('child', {
    props: ['hello'],
    template: '<span>{{ hello }}</span>'
});

Vue.component('test2', require('./components/Test.vue'));

new Vue({
    el: '#app-3'
});

