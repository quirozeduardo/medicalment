import Vue from 'vue';
import App from './App.vue';
import Vuetify from 'vuetify';

Vue.config.productionTip = false;
Vue.use(Vuetify, {
    theme: {
    }
});
new Vue({
    data: () => ({
        drawer: null
    })
}).$mount('#app');
