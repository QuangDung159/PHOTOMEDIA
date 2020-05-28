import HomeComp from "./components/HomeComp.vue";
import ListPostComp from "./components/ListPostComp.vue";

const routes = [
    {
        path: "/",
        component: HomeComp
    },
    {
        path: "/blogs",
        component: ListPostComp
    }
];

export default routes;