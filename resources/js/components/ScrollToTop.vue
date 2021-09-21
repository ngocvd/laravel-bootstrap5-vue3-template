<template>
    <a @click="scrollTop" v-show="visible" class="align-middle bottom-right" :style="$attrs.style">
        <b-icon-arrow-up-circle-fill />
    </a>
</template>
<script>
export default {
  data () {
    return {
      visible: false
    }
  },
  methods: {
    scrollTop: function () {
    //document.body.scrollTop = document.documentElement.scrollTop = 0;
      window.scrollTo({ top: 0, behavior: 'smooth' });
    },
    scrollListener: function (e) {
      this.visible = window.scrollY > 150
    }
  },
  mounted: function () {
    window.addEventListener('scroll', this.scrollListener)
  },
  beforeDestroy: function () {
    window.removeEventListener('scroll', this.scrollListener)
  }
}
</script>

<style scoped>
.bottom-right {
  position: fixed;
  bottom: 20px;
  right: 20px;
  cursor: pointer;
  z-index: 1000; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: none; /* Set a background color */
  color: red; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  font-size: 50px; 
  text-align: center; 
}
.bottom-right:hover {
  /*background-color: #555; /* Add a dark-grey background on hover */
  color: #555; /* Add a dark-grey background on hover */
}
</style>