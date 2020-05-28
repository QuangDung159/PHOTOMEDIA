import HomeComp from "./components/HomeComp.vue";
import ListPostComp from "./components/ListPostComp.vue";
import SinglePostComp from './components/SinglePostComp.vue';

const routes = [
    {
        path: "/",
        component: HomeComp
    },
    {
        path: "/blogs",
        component: ListPostComp
    },
    {
        path: "/single-post/:postId",
        component: SinglePostComp
    }
];

export default routes;