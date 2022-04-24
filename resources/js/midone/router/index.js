import { createRouter, createWebHistory } from "vue-router";
import multiguard from "vue-router-multiguard";
import * as guards from "@/router/guards";
import axios from "@/axios";

import { useUserContextStore } from "@/stores/user-context";

import RouteDashboard from "./route-dashboard";
import RouteAdmin from "./route-admin";

import RouteCompany from "./route-company";
import RouteCash from "./route-cash";
import RouteSupplier from "./route-supplier";
import RouteProduct from "./route-product";
import RouteCustomer from "./route-customer";
import RoutePurchaseOrder from "./route-purchaseorder";
import RouteError from "./route-error";

const routes = [
    RouteDashboard,
    RouteCompany,
    RouteCash,
    RouteSupplier,
    RouteProduct,
    RouteCustomer,
    RoutePurchaseOrder,
    RouteAdmin.Admin(),
    RouteAdmin.DevTool(),
    RouteAdmin.Example(),
    RouteError
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
    scrollBehavior(to, from, savedPosition) {
        return savedPosition || { left: 0, top: 0 };
    },
});

router.beforeEach(async (to, from, next) => {
    if (to.matched.some(r => r.meta.skipBeforeEach) && to.meta.skipBeforeEach) next();

    const userContextStore = useUserContextStore();
    if (userContextStore.userContext.name === undefined) next();

    multiguard([
        guards.canUserAccess(to, userContextStore.userContext, next),
        guards.checkPasswordExpiry(userContextStore.userContext, next), 
        guards.checkUserStatus(userContextStore.userContext, next)
    ]);
});

router.afterEach((to, from) => {
    if (to.matched.some(r => r.meta.log_route)) {
        axios.post('/api/post/dashboard/core/activity/log/route', {
            to: to.name,
            params: to.params
        }).catch(e => { });    
    }

    if (to.matched.some(r => r.meta.remember))
        sessionStorage.setItem('DCSLAB_LAST_ROUTE', to.name);
});

export default router;
