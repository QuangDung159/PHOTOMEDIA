<template>
  <div>
    <!-- photography_slider_area_start -->
    <!-- <AlbumSliderComp></AlbumSliderComp> -->
    <!-- photography_slider_area_end -->

    <!-- most_recent_blog_start -->
    <div class="most_recent_blog">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="section_title mb-33">
              <h3>Most Recent</h3>
            </div>
          </div>
          <RecentPostComp></RecentPostComp>
          <FollowComp></FollowComp>
        </div>
      </div>
    </div>
    <!-- most_recent_blog_end -->
  </div>
</template>

<script>
import FollowComp from "./FollowComp";
// import AlbumSliderComp from "./AlbumSliderComp";
import RecentPostComp from "./RecentPostComp";

export default {
  name: "ListPostComp",
  components: {
    FollowComp,
    // AlbumSliderComp,
    RecentPostComp
  }
};
</script>

<style>
</style>