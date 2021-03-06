window.Vue = require("vue");
require("./bootstrap");

// load vue router and use it ----------
import VueRouter from "vue-router"; // import vue router
Vue.use(VueRouter);

import index from "./components/pages/index";
import service from "./components/pages/services";
import recycling from "./components/pages/recycling";
import recycling2 from "./components/pages/recycling2";
import aPropos from "./components/pages/aPropos";
import blog from "./components/pages/posts";
import articleDetails from "./components/pages/post";
import contact from "./components/pages/contact";
import notFound from "./components/pages/not-found";

let routes = [
  {
    path: "/",
    name: "index",
    component: index
  },
  {
    path: "/service",
    name: "service",
    component: service
  },
  {
    path: "/recyclage",
    name: "recyclage",
    component: recycling
  },
  {
    path: "/recyclage2",
    name: "recyclage2",
    component: recycling2
  },
  {
    path: "/aPropos",
    name: "aPropos",
    component: aPropos
  },
  {
    path: "/blog",
    name: "blog",
    component: blog
  },
  {
    path: "/articleDetails/:id",
    name: "articleDetails",
    component: articleDetails
  },
  {
    path: "/contact",
    name: "contact",
    component: contact
  },
  {
    path: "*",
    name: "any",
    component: notFound
  }
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes
});

window.Router = router;

// vform plugin
import { Form, HasError, AlertError } from "vform";
window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

// components global
Vue.component("nav-bar", require("./components/layout/nav").default);
Vue.component("loading", require("./components/layout/spinner").default);

// // vue meta
import VueMeta from "vue-meta";
Vue.use(VueMeta, {
  keyName: "metaInfo",
  attribute: "data-vue-meta",
  ssrAttribute: "data-vue-meta-server-rendered",
  tagIDKeyName: "vmid",
  refreshOnceOnNavigation: true
});

// pagination
Vue.component('pagination', require('laravel-vue-pagination'));

const app = new Vue({
  el: "#app",
  router
});