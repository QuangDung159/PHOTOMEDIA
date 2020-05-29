import HomeComp from "./components/HomeComp.vue";
import ListPostComp from "./components/ListPostComp.vue";
import SinglePostComp from './components/SinglePostComp.vue';
import ListPostByAlbumComp from './components/ListPostByAlbumComp.vue';

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
    },
    {
        path: "/posts-by-album/:albumId",
        component: ListPostByAlbumComp
    }
];

export default routes;