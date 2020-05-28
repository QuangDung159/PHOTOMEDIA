<template>
  <div>
    <HeaderComp></HeaderComp>

    <router-view></router-view>

    <!-- footer_start -->
    <FooterComp></FooterComp>
    <!-- footer_end -->
  </div>
</template>

<script>
import HeaderComp from "./HeaderComp";
import FooterComp from "./FooterComp";

export default {
  name: "MainComp",
  components: {
    HeaderComp,
    FooterComp
  }
};
</script>

<style>
</style>