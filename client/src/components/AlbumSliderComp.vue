<template>
  <div class="photography_slider_area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="photoslider_active owl-carousel">
            <div class="single_photography" v-for="(album, key) in listAlbum" :key="key">
              <img src="client/img/photography/single-1.jpg" alt />
              <div class="photo_title">
                <h4>{{album.album_name}}</h4>
              </div>
            </div>
            <div class="single_photography">
              <img src="client/img/photography/single-2.jpg" alt />
              <div class="photo_title">
                <h4>Travel</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "AlbumSliderComp",
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