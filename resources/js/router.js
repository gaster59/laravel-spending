import { useCookies } from "vue3-cookies";

import { createRouter, createWebHistory } from "vue-router";

// import HomeComponent from "./components/HomeComponent.vue";
import AboutComponent from "./components/AboutComponent.vue";
import LoginView from "./views/LoginView";
import BlankView from "./views/BlankView";

const routes = [
    {
        name: "home",
        path: "/",
        component: LoginView,
    },
    {
        name: "about",
        path: "/about",
        component: AboutComponent,
        meta: { requireAuth: true },
    },
    {
        name: "blank",
        path: "/blank",
        component: BlankView,
        meta: { requireAuth: true },
    },
    //   {
    //       name: 'create',
    //       path: '/create',
    //       component: CreateComponent
    //   },
    //   {
    //       name: 'posts',
    //       path: '/posts',
    //       component: IndexComponent
    //   },
    //   {
    //       name: 'edit',
    //       path: '/edit/:id',
    //       component: EditComponent
    //   }
];

//init cookie
const { cookies } = useCookies();

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from, next) => {
    if (to.matched.some((record) => record.meta.requireAuth)) {
        // const token = localStorage.getItem("token");
        const isLogin = cookies.get("login");
        if (isLogin) {
            next();
        } else {
            next({ name: "home" });
        }
    } else {
        next(); // make sure to always call next()!
    }
});

export default router;
