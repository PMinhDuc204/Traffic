import { createRouter, createWebHistory } from 'vue-router'
import HomeView from "./HomeView.js";

const routers = [...HomeView];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
