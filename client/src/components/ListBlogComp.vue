<template>
  <div>
    <!-- photography_slider_area_start -->
    <AlbumSliderComp></AlbumSliderComp>
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
          <RecentBlogComp></RecentBlogComp>
          <FollowComp></FollowComp>
        </div>
      </div>
    </div>
    <!-- most_recent_blog_end -->

    <!-- photo_gallery_start -->
    <PhotoGalleryComp></PhotoGalleryComp>
    <!-- photo_gallery_end -->
  </div>
</template>

<script>
import FollowComp from "./FollowComp";
import AlbumSliderComp from "./AlbumSliderComp";
import RecentBlogComp from "./RecentBlogComp";
import PhotoGalleryComp from "./PhotoGalleryComp";

export default {
  name: "ListBlogComp",
  components: {
    FollowComp,
    AlbumSliderComp,
    RecentBlogComp,
    PhotoGalleryComp
  }
};
</script>

<style>
</style>