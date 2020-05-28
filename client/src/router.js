import HomeComp from "./components/HomeComp.vue";
import ListBlogComp from "./components/ListBlogComp.vue";

const routes = [
    {
        path: "/",
        component: HomeComp
    },
    {
        path: "/blogs",
        component: ListBlogComp
    }
];

export default routes;