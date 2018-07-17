import Vue          from 'vue'
import VueRouter    from 'vue-router'

Vue.use(VueRouter)

import App          from './views/App'
import Dashboard    from './views/Board'
import Login        from './views/Login'
import Register     from './views/Register'
import Home         from './views/Welcome'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/login',
            name: 'login',
            component: Login,
        },
        {
            path: '/register',
            name: 'register',
            component: Register,
        },
        {
            path: '/board',
            name: 'board',
            component: Dashboard,
        },
    ],
});

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);


const app = new Vue({
    el: '#app',
    components: { App },
    router,
});

