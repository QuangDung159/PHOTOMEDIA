<template>
  <div>
    <!-- welcome_protomedia_start -->
    <div class="welcome_protomedia">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-md-7">
            <h3>
              Welcome to Photomedia |
              <br />| Travel - Photography blog
            </h3>
          </div>
          <div class="col-xl-6 col-md-6">
            <div class="add_here">
              <a href="#">
                <img src="img/add/add.jpg" alt />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- welcome_protomedia_end -->

    <!-- photographi_area_start -->
    <!-- <div class="photographi_area">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-md-6">
            <div class="single_photography photography_bg_1">
              <div class="info">
                <div class="info_inner">
                  <h3>
                    <a href="#">
                      Essential Photography: Back
                      <br />Button Focus
                    </a>
                  </h3>
                  <div class="date_catagory d-flex align-items-center justify-content-between">
                    <span>12 jun 2019</span>
                    <span class="catagory">lightroom</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-6">
            <div class="single_photography photography_bg_2">
              <div class="info">
                <div class="info_inner">
                  <h3>
                    <a href="#">
                      Think Tank Photo Retrospective
                      <br />Shoulder
                    </a>
                  </h3>
                  <div class="date_catagory d-flex align-items-center justify-content-between">
                    <span>12 jun 2019</span>
                    <span class="catagory">lightroom</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- photographi_area_end -->

    <ListPostComp></ListPostComp>
  </div>
</template>

<script>
import ListPostComp from "./ListPostComp";

export default {
  name: "HomeComp",
  components: {
    ListPostComp
  }
};
</script>

<style>
</style>