const admin = [
  {
    path: "/admin",
    component: () => import("../layouts/admin.vue"),
    children: [
      {
        path: "traffic-lights",
        name: "admin-traffic-lights",
        component: () => import("../pages/admin/traffic-lights/index.vue"),
      },
      {
        path: "traffic-lights/create",
        name: "admin-traffic-lights-create",
        component: () => import("../pages/admin/traffic-lights/create.vue"),
      },
      {
        path: "traffic-lights/:id/edit",
        name: "admin-traffic-lights-edit",
        component: () => import("../pages/admin/traffic-lights/edit.vue"),
      },

      {
        path: "incidents",
        name: "admin-incidents",
        component: () => import("../pages/admin/incidents/index.vue"),
      },
      {
        path: "incidents/:id/edit",
        name: "admin-incidents-edit",
        component: () => import("../pages/admin/incidents/edit.vue"),
      },

      {
        path: "logs",
        name: "admin-logs",
        component: () => import("../pages/admin/logs/index.vue"),
      },

      {
        path: "users",
        name: "admin-users",
        component: () => import("../pages/admin/users/index.vue"),
      },
      {
        path: "roles",
        name: "admin-roles",
        component: () => import("../pages/admin/roles/index.vue"),
      },

      {
        path: "settings",
        name: "admin-settings",
        component: () => import("../pages/admin/settings/index.vue"),
      },
    ],
  },
];

export default admin;
