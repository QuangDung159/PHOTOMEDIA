<template>
  <div class="col-xl-8 col-md-8">
    <div class="row">
      <div class="col-xl-6 col-md-6" v-for="(post, key) of listMostRecent" :key="key">
        <div class="single_blog">
          <div class="blog_thumb">
            <router-link :to="'/single-post/'">
              <img :src="post.post_panel_image" alt />
            </router-link>
          </div>
          <div class="blog_meta">
            <p>
              <router-link :to="'/posts-by-album/' + post.album_id">{{post.album_name}}</router-link>
            </p>
            <h3>
              <router-link :to="'/single-post/' + post.post_id">{{post.post_title}}</router-link>
            </h3>
          </div>
        </div>
      </div>
      <div class="col-xl-12">
        <div class="btn_area text-center">
          <router-link :to="'/all-posts'" class="boxed-btn">Load More</router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "RecentPostComp",
  data() {
    return {
      listMostRecent: []
    };
  },
  mounted() {
    this.getMostRecentFromApi();
  },
  methods: {
    getMostRecentFromApi() {
      axios
        .get(this.appConfig.API_URL + "/get-most-recent")
        .then(res => {
          let data = res.data;
          if (data.statusCode == 200) {
            this.listMostRecent = data.listMostRecent;
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
    }
  }
};
</script>

<style>
</style>