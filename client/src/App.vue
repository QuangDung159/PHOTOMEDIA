<template>
  <div id="app">
    <MainComp :appConfig="appConfig"></MainComp>
  </div>
</template>

<script>
import MainComp from "./components/MainComp";
import config from "../config";

export default {
  name: "App",
  components: {
    MainComp
  },
  data() {
    return {
      appConfig: config
    };
  }
};
</script>

<style>
</style>
