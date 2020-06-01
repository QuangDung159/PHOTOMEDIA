<template>
  <header>
    <div class="header-area">
      <div class="header_top">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-4 col-md-4 d-none d-md-block">
              <div class="header_links">
                <ul>
                  <li>
                    <a href="https://www.facebook.com/dung.luquang" target="blank">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="insta"
                      href="https://www.youtube.com/channel/UCZhiXSiz4ZYafLml3uDU6uA?view_as=subscriber"
                      target="blank"
                    >
                      <i class="fa fa-youtube"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4 col-md-4">
              <div class="logo">
                <a href="index.html">
                  <img src="client/img/logo.png" alt />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="sticky-header" class="main-header-area white-bg">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-7 col-lg-7">
              <div class="main-menu d-none d-lg-block">
                <nav>
                  <ul id="navigation">
                    <li>
                      <router-link :to="'/'" :class="{active: $route.path == '/'}">Home</router-link>
                    </li>
                    <li>
                      <router-link
                        :to="'/posts-by-album/0'"
                        :class="{active: $route.path == '/all-posts'}"
                      >
                        Posts
                        <i class="ti-angle-down"></i>
                      </router-link>
                      <ul class="submenu">
                        <li v-for="(album, key) in listAlbum" :key="key">
                          <router-link
                            :to="'/posts-by-album/' + album.album_id"
                          >{{album.album_name}}</router-link>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <router-link :to="'/about'">About</router-link>
                    </li>
                    <li>
                      <router-link :to="'/contact'">Contact</router-link>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-12">
              <div class="mobile_menu d-block d-lg-none"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
import axios from "axios";
export default {
  name: "HeaderComp",
  data() {
    return {
      listAlbum: []
    };
  },
  mounted() {
    this.getAlbumSliderFromApi();
  },
  methods: {
    getAlbumSliderFromApi() {
      axios
        .get(this.appConfig.API_URL + "/get-album-slider")
        .then(res => {
          let data = res.data;
          if (data.statusCode == 200) {
            this.listAlbum = data.listAlbum;
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
  }
};
</script>

<style>
</style>