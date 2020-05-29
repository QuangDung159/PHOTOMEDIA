<template>
  <div class="most_recent_blog">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section_title mb-33">
            <h3>Posts</h3>
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

export default {
  name: "ListPostByAlbumComp",
  data() {
    return {
      albumId: this.$route.params.albumId
    };
  },
  components: {
    FollowComp,
    AllPostByAlbumComp
  }
};
</script>

<style>
</style>