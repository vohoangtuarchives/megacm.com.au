<script>
export default {
  props: {
    item: Object,
  },
  data: () => ({
    item: {},
    clicked:false
  }),
  methods:{
    onClick(){
      this.clicked = !this.clicked;
    },
    submitAddon(){
      this.clicked = !this.clicked;
      this.$emit("set-addon", this.item);
    }
  },
}
</script>
<template>
  <div :key="item.id" class="extra-item mb-4">
    <template v-if="!clicked">
      <div class="image position-relative"  v-on:click="onClick">
        <img :src='"extras/" + item.image' :alt='item.name' class="filter-green img-fluid">
        <p>{{ item.name}}</p>
        <div class="extra-quantity" v-if="item.quantity > 0">{{ item.quantity }}</div>
      </div>
    </template>
    <template v-else>
      <input type="number" class="form-control" v-model="item.quantity">
      <button class="btn btn-success mt-2" v-on:click="submitAddon">Submit</button>
    </template>

  </div>
</template>

<style scoped>
  .extra-quantity{

    position: absolute;
    top: 5px;
    right: 5px;
    background: #038732;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
  }
</style>