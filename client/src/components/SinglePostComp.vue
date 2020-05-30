<template>
  <div>
    <!-- breadcam_area_start -->
    <div class="breadcam_area bradcam_bg overlay2">
      <div class="bradcam_text">
        <h3>single blog</h3>
      </div>
    </div>
    <!-- breadcam_area_end -->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 posts-list">
            <div class="single-post">
              <div class="feature-img">
                <img :src="post.post_panel_image" alt />
              </div>
              <div class="blog_details">
                <h2>{{post.post_summary}}</h2>
                <ul class="blog-info-link mt-3 mb-4">
                  <li>
                    <router-link :to="'/posts-by-album/' + post.album_id">
                      <i class="fa fa-user"></i>
                      {{post.album_name}}
                    </router-link>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-comments"></i> 03 Comments
                    </a>
                  </li>
                </ul>
                <div class="excert feature-img">
                  <span v-html="post.post_content"></span>
                </div>
              </div>
            </div>
            <div class="navigation-top">
              <div class="d-sm-flex justify-content-between text-center">
                <p class="like-info">
                  <span class="align-middle">
                    <i class="fa fa-heart"></i>
                  </span> Lily and 4
                  people like this
                </p>
                <div class="col-sm-4 text-center my-2 my-sm-0">
                  <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                </div>
                <ul class="social-icons">
                  <li>
                    <a href="#">
                      <i class="fa fa-facebook-f"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-dribbble"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-behance"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="navigation-area">
                <div class="row">
                  <div
                    class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center"
                  >
                    <div class="thumb">
                      <a href="#">
                        <img class="img-fluid" src="img/post/preview.png" alt />
                      </a>
                    </div>
                    <div class="arrow">
                      <a href="#">
                        <span class="lnr text-white ti-arrow-left"></span>
                      </a>
                    </div>
                    <div class="detials">
                      <p>Prev Post</p>
                      <a href="#">
                        <h4>Space The Final Frontier</h4>
                      </a>
                    </div>
                  </div>
                  <div
                    class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center"
                  >
                    <div class="detials">
                      <p>Next Post</p>
                      <a href="#">
                        <h4>Telescopes 101</h4>
                      </a>
                    </div>
                    <div class="arrow">
                      <a href="#">
                        <span class="lnr text-white ti-arrow-right"></span>
                      </a>
                    </div>
                    <div class="thumb">
                      <a href="#">
                        <img class="img-fluid" src="img/post/next.png" alt />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="blog-author">
              <div class="media align-items-center">
                <img src="img/blog/author.png" alt />
                <div class="media-body">
                  <a href="#">
                    <h4>Harvard milan</h4>
                  </a>
                  <p>
                    Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                    our dominion twon Second divided from
                  </p>
                </div>
              </div>
            </div>
            <div class="comments-area">
              <h4>05 Comments</h4>
              <div class="comment-list">
                <div class="single-comment justify-content-between d-flex">
                  <div class="user justify-content-between d-flex">
                    <div class="thumb">
                      <img src="img/comment/comment_1.png" alt />
                    </div>
                    <div class="desc">
                      <p class="comment">
                        Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                        Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                      </p>
                      <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                          <h5>
                            <a href="#">Emilly Blunt</a>
                          </h5>
                          <p class="date">December 4, 2017 at 3:12 pm</p>
                        </div>
                        <div class="reply-btn">
                          <a href="#" class="btn-reply text-uppercase">reply</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="comment-list">
                <div class="single-comment justify-content-between d-flex">
                  <div class="user justify-content-between d-flex">
                    <div class="thumb">
                      <img src="img/comment/comment_2.png" alt />
                    </div>
                    <div class="desc">
                      <p class="comment">
                        Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                        Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                      </p>
                      <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                          <h5>
                            <a href="#">Emilly Blunt</a>
                          </h5>
                          <p class="date">December 4, 2017 at 3:12 pm</p>
                        </div>
                        <div class="reply-btn">
                          <a href="#" class="btn-reply text-uppercase">reply</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="comment-list">
                <div class="single-comment justify-content-between d-flex">
                  <div class="user justify-content-between d-flex">
                    <div class="thumb">
                      <img src="img/comment/comment_3.png" alt />
                    </div>
                    <div class="desc">
                      <p class="comment">
                        Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                        Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                      </p>
                      <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                          <h5>
                            <a href="#">Emilly Blunt</a>
                          </h5>
                          <p class="date">December 4, 2017 at 3:12 pm</p>
                        </div>
                        <div class="reply-btn">
                          <a href="#" class="btn-reply text-uppercase">reply</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="comment-form">
              <h4>Leave a Reply</h4>
              <form class="form-contact comment_form" action="#" id="commentForm">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <textarea
                        class="form-control w-100"
                        name="comment"
                        id="comment"
                        cols="30"
                        rows="9"
                        placeholder="Write Comment"
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input
                        class="form-control"
                        name="name"
                        id="name"
                        type="text"
                        placeholder="Name"
                      />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input
                        class="form-control"
                        name="email"
                        id="email"
                        type="email"
                        placeholder="Email"
                      />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <input
                        class="form-control"
                        name="website"
                        id="website"
                        type="text"
                        placeholder="Website"
                      />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button
                    type="submit"
                    class="button button-contactForm btn_1 boxed-btn"
                  >Send Message</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="blog_right_sidebar">
              <aside class="single_sidebar_widget post_category_widget">
                <h4 class="widget_title">Album</h4>
                <ul class="list cat-list">
                  <li v-for="(album, key) in listAlbum" :key="key">
                    <a href="#" class="d-flex">
                      <p>{{album.album_name}}</p>
                    </a>
                  </li>
                </ul>
              </aside>
              <aside class="single_sidebar_widget popular_post_widget">
                <h3 class="widget_title">Recent Post</h3>
                <div class="media post_item" v-for="(post, key) in listRecentPost" :key="key">
                  <div class="media-body">
                    <router-link :to="'/single-post/' + post.post_id">
                      <h3>{{post.post_title}}</h3>
                    </router-link>
                    <p>{{post.post_created_at | formatDate}}</p>
                  </div>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Blog Area end =================-->
  </div>
</template>

<script>
import axios from "axios";
import moment from "moment";
import $ from "jquery";

export default {
  name: "SinglePostComp",
  data() {
    return {
      post: {},
      postIdFromUrl: this.$route.params.postId,
      listAlbum: [],
      listRecentPost: []
    };
  },
  mounted() {
    this.getPostById();
    this.getListAlbum();
    this.getMostRecentFromApi();
    $("img").removeClass("img-fluid");
  },
  methods: {
    getPostById() {
      axios
        .get(this.appConfig.API_URL + "/get-post-by-id/" + this.postIdFromUrl)
        .then(res => {
          let data = res.data;
          if (data.statusCode == 200) {
            this.post = data.post;
          } else {
            console.log(data.msg);
          }
        })
        .catch(err => {
          console.log(err);
        });
    },

    getListAlbum() {
      axios
        .get(this.appConfig.API_URL + "/get-album-slider")
        .then(res => {
          let data = res.data;
          if (data.statusCode == 200) {
            this.listAlbum = data.listAlbum;
          } else {
            console.log(res);
          }
        })
        .catch(err => {
          console.log(err);
        });
    },

    getMostRecentFromApi() {
      axios
        .get(this.appConfig.API_URL + "/get-most-recent")
        .then(res => {
          let data = res.data;
          if (data.statusCode == 200) {
            this.listRecentPost = data.listMostRecent;
            console.log(this.listRecentPost);
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
  },
  filters: {
    formatDate(value) {
      return moment.unix(value).format("LL");
    }
  }
};
</script>

<style>
img {
  max-width: 100%;
  height: auto;
}
</style>