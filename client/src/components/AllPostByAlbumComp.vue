<template>
  <div class="col-xl-8 col-md-8">
    <div class="row">
      <div class="col-xl-6 col-md-6" v-for="(post, key) of listPost" :key="key">
        <div class="single_blog">
          <div class="blog_thumb">
            <router-link :to="'/single-post/' + post.post_id">
              <img :src="post.post_panel_image" alt />
            </router-link>
          </div>
          <div class="blog_meta">
            <p>
              <router-link :to="'/posts-by-album/' + post.album_id">{{post.album_name}}</router-link>
              <br />
              {{post.post_created_at | formatDate}}
            </p>

            <h3>
              <router-link :to="'/single-post/' + post.post_id">{{post.post_title}}</router-link>
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import moment from "moment";

export default {
  name: "AllPostByAlbumComp",
  data() {
    return {
      listPost: []
    };
  },
  mounted() {
    this.getMostRecentFromApi();
  },
  methods: {
    getMostRecentFromApi() {
      axios
        .get(this.appConfig.API_URL + "/get-post-by-album-id/" + this.albumId)
        .then(res => {
          let data = res.data;
          if (data.statusCode == 200) {
            this.listPost = data.listPost;
          } else {
            console.log(res);
          }
        })
        .catch(err => {
          console.log(err);
        });
    }
  },
  props: {
    appConfig: {
      type: Object,
      default: () => {
        return {
          API_URL: "http://localhost:8000/api/client"
        };
      }
    },
    albumId: {
      type: [Number, String],
      default: 0
    }
  },
  filters: {
    formatDate(value) {
      return moment.unix(value).format("LL");
    }
  }
};
</script>

<style>
</style>