var Vue = require('vue');
var VueResource = require('vue-resource');
var VueRouter = require('vue-route');
Vue.use(VueResource);
Vue.use(VueRouter);

var root = new Vue({
    el: 'body',
    components: {
      home: require('./pages/home')
    },
    routes: {
        '/': {
            componentId: 'home',
            isDefault: true
        }
    }
});
