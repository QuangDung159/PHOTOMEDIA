<template>
  <div class="col-xl-4 col-md-4">
    <div class="blog_right_side">
      <div class="section_title mb-33">
        <h3>Follow Us</h3>
      </div>
      <div class="foollow_links">
        <ul class="d-flex align-items-center justify-content-between">
          <li>
            <router-link :to="'/'">
              <i class="fa fa-facebook"></i>
              <h2>142K</h2>
              <p>followers</p>
            </router-link>
          </li>
          <li>
            <router-link :to="'/'">
              <i class="fa fa-twitter"></i>
              <h2>142K</h2>
              <p>followers</p>
            </router-link>
          </li>
          <li>
            <router-link :to="'/'">
              <i class="fa fa-youtube"></i>
              <h2>142K</h2>
              <p>followers</p>
            </router-link>
          </li>
        </ul>
      </div>
      <div class="add_here text-center">
        <a href="#">
          <img src="client/img/most_recent/googleAdd.jpg" alt />
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "FollowComp"
};
</script>

<style>
</style>