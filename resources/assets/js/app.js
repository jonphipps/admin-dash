
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * We will require in our components.js file, which contains our component
 * files.  Putting them in their own file reduces clutter.
 */

require('./components');


const app = new Vue({

    el: '#app'


});
