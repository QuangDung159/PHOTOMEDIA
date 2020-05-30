<template>
  <div class="most_recent_blog">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section_title mb-33">
            <h3 v-if="albumId != 0">{{album.album_name}}</h3>
            <h3 v-else>All Posts</h3>
          </div>
        </div>
        <AllPostByAlbumComp :albumId="albumId"></AllPostByAlbumComp>
        <FollowComp></FollowComp>
      </div>
    </div>
  </div>
</template>

<script>
import FollowComp from "./FollowComp";
import AllPostByAlbumComp from "./AllPostByAlbumComp";
import axios from "axios";

export default {
  name: "ListPostByAlbumComp",
  data() {
    return {
      albumId: this.$route.params.albumId,
      album: {}
    };
  },
  mounted() {
    if (this.albumId != 0) {
      this.getAlbumById();
    }
  },
  components: {
    FollowComp,
    AllPostByAlbumComp
  },
  methods: {
    getAlbumById() {
      axios
        .get(this.appConfig.API_URL + "/get-album-by-id/" + this.albumId)
        .then(res => {
          let data = res.data;
          if (data.statusCode == 200) {
            this.album = data.album;
          } else {
            console.log(data.msg);
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
  },
  watch: {
    $route(to) {
      this.albumId = to.params.albumId;
      if (this.albumId != 0) {
        this.getAlbumById();
      }
    }
  }
};
</script>

<style>
</style>