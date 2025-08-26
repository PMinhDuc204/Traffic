import { createRouter, createWebHistory } from 'vue-router'
import admin from "./admin.js";

const routers = [...admin];

const router = createRouter({
    history: createWebHistory(),
    routers,
});

export default router;
