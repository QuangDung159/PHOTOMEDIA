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
            <div class="comments-area">
              <h4>{{commentCount}} comment(s)</h4>
              <div class="comment-list" v-for="(comment, key) in listComment" :key="key">
                <div class="single-comment justify-content-between d-flex">
                  <div class="user justify-content-between d-flex">
                    <div class="thumb">
                      <img src="img/comment/comment_1.png" alt />
                    </div>
                    <div class="desc">
                      <p class="comment">{{comment.comment_content}}</p>
                      <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                          <h5>
                            <a href>{{comment.comment_created_at | formatDateTime}}</a>
                          </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="comment-form">
              <h4>Leave a Reply</h4>
              <form class="form-contact comment_form" id="commentForm">
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
                        v-model="comment.content"
                      ></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button
                    type="button"
                    @click="onSendComment"
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
      listRecentPost: [],
      listComment: [],
      commentCount: 0,
      comment: {
        content: ""
      }
    };
  },
  mounted() {
    this.getPostById();
    this.getListAlbum();
    this.getMostRecentFromApi();
    this.getCommentFromApi();
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
            console.log(res.msg);
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
          } else {
            console.log(res);
          }
        })
        .catch(err => {
          console.log(err);
        });
    },

    getCommentFromApi() {
      axios
        .get(
          this.appConfig.API_URL + "/get-comment-by-post/" + this.postIdFromUrl
        )
        .then(res => {
          let data = res.data;
          if (data.statusCode == 200) {
            this.listComment = data.listComment;
            this.commentCount = data.count;
          } else {
            console.log(res.msg);
          }
        })
        .catch(err => {
          console.log(err);
        });
    },

    onSendComment() {
      axios
        .post(this.appConfig.API_URL + "/send-comment", {
          comment: this.comment,
          postId: this.postIdFromUrl
        })
        .then(res => {
          let data = res.data;
          if (data.statusCode == 200) {
            this.getCommentFromApi();
            this.comment.content = "";
          } else {
            console.log(data.msg);
          }
          console.log(res);
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
    },
    formatDateTime(value) {
      return moment.unix(value).format("lll");
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