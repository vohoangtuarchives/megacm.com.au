<script>
import Addon from "@/components/Addon.vue";
import axios from "axios";

export default {
  components: {Addon},
  props: {
    action: String,
    resources: String,
  },
  data: () => ({
    categories: [],
    bedrooms: [],
    bathrooms: [],
    storeys: [],
    category_selected: "NOT_SELECTED",
    bedroom_selected: "NOT_SELECTED",
    bathroom_selected: "NOT_SELECTED",
    storey_selected: "NOT_SELECTED",
    total_amount: 0,
    addons: [],
    firstname: "",
    lastname: "",
    email: "",
    phone: "",
    address: "",
    city: "",
    apt_suite: "",
    post_code: "",
    state: "",
  }),

  created() {
    // fetch on init
    this.fetchData()
  },
  watch: {
    // re-fetch whenever currentBranch changes
    category_selected: 'onChangeCategory',
    bedroom_selected: ['totalAmount', 'onChangeBedroom'],
    bathroom_selected: 'totalAmount',
    storey_selected: 'totalAmount',
    addons: 'totalAmount'
  },
  methods: {
    async submit() {
      let form = {
        category: this.category_selected,
        bedroom: this.bedroom_selected,
        bathroom:  this.bathroom_selected,
        storey: this.storey_selected,
        addons:  this.addons,
        firstname: this.firstname,
        lastname: this.lastname,
        email: this.email,
        phone: this.phone,
        address: this.address,
        city: this.city,
        apt_suite: this.apt_suite,
        post_code: this.post_code,
        state: this.state,
        total_price: this.total_amount,
        _token: this.action
      };

      axios.put("book-now", form).then(function (response){
        if(response.data.success){
          let order = response.data.order;
          alert("Your order is successfully. We will contact you ASAP.");
          location.href = "https://megacm.com.au";
        }
      })
    },
    totalAmount(){
      this.total_amount = 0;
      if(this.bedroom_selected.price){
        this.total_amount += this.bedroom_selected.price;
      }
      if(this.bathroom_selected.price){
        this.total_amount += this.bathroom_selected.price;
      }

      if(this.storey_selected.price){
        this.total_amount += this.storey_selected.price;
      }
      let sum = 0;
      this.addons.forEach(function(item){
        sum += (item.price * item.quantity);
      });
      this.total_amount += sum;
    },
    updateAddon(item){
       let isItemExisted = this.addons.includes(item , 0);
       if(!isItemExisted){
         this.addons.push(item);
       }
       this.totalAmount();
    },
    async fetchData() {
      const url = this.resources;
      this.services = await (await fetch(url)).json();
      this.categories = this.services.tags_info;
      this.storeys = this.services.storeys;
      this.bathrooms = this.services.bathrooms;

    },
    reset(){
          this.bedroom_selected= "NOT_SELECTED";
          this.bathroom_selected= "NOT_SELECTED";
          this.storey_selected= "NOT_SELECTED";
    },

    onChangeBedroom(){
      this.addons = [];
    },
    onChangeCategory(){
      let _this = this;
      this.reset();
      this.bedrooms = this.services.services.filter(function (item){
        return item.tags_info[0].id === _this.category_selected.id;
      });
    },

  }
}
</script>

<template>
  <form class="row" @submit.prevent="submit"  :action='action' method="POST">
      <div class="col-lg-8">
        <div class="mb-4">
          <div class="form-label"><strong>Which service are you interested in?</strong></div>
          <select class="form-select" v-model="category_selected">
            <option selected value="NOT_SELECTED" disabled>Which service are you interested in</option>
            <option v-for="category in categories" :value="category" :key="category.id" >
              {{ category.name }}
            </option>
          </select>
        </div>

        <template v-if="bedrooms.length > 0">
          <div class="row mb-4">
            <div class="col-12">
              <div class="form-label"><strong>How big is your home?</strong></div>
            </div>
            <div class="col-lg-6 mb-4">
              <select class="form-select" v-model="bedroom_selected">
                <option disabled value="NOT_SELECTED" selected>-- Number of Bedrooms --</option>
                <option v-for="bedroom in bedrooms" :value="bedroom" :key="bedroom.id">
                  {{ bedroom.name }}
                </option>
              </select>
            </div>
            <div class="col-lg-6 mb-4">
              <select class="form-select" v-model="storey_selected">
                <option disabled value="NOT_SELECTED" selected>-- Number of storeys --</option>
                <option v-for="storey in storeys" :value="storey" :key="storey.quantity">
                  {{ storey.label }}
                </option>
              </select>
            </div>
            <div class="col-lg-12 mb-4">
              <select class="form-select" v-model="bathroom_selected">
                <option disabled value="NOT_SELECTED" selected>-- Number of bathrooms --</option>
                <option v-for="bathroom in bathrooms" :value="bathroom" :key="bathroom
                                      .quantity">
                  {{ bathroom.label }}
                </option>
              </select>
            </div>
          </div>
        </template>
        <template v-if="bedroom_selected?.extras">
          <div class="row mb-4">
            <div class="col-12 mb-4">
              <div class="form-label"><strong>Select your add-ons</strong></div>
            </div>
            <div class="row">
              <div class="col-lg-3  col-md-4 col-6" v-for="extra in bedroom_selected?.extras">
                <Addon :item="extra" v-on:set-addon="updateAddon(extra)"/>
              </div>
            </div>
          </div>
        </template>
          <div class="row">
            <div class="col-12">
              <div class="form-label"><strong>Contact Information</strong></div>
            </div>
            <div class="col-md-6 col-12 mb-3">
              <input type="text" class="form-control" name="first_name" placeholder="First Name" v-model="firstname">
            </div>
            <div class="col-md-6 col-12 mb-3">
              <input type="text" class="form-control" name="last_name" placeholder="Last Name" v-model="lastname">
            </div>
            <div class="col-md-6 col-12 mb-3">
              <input type="text" class="form-control" name="email" placeholder="Email" v-model="email">
            </div>
            <div class="col-md-6 col-12 mb-3">
              <input type="text" class="form-control" name="phone" placeholder="Phone" v-model="phone">
            </div>
            <div class="col-12 mb-3">
              <input type="text" class="form-control" name="address" placeholder="Address" v-model="address">
            </div>
            <div class="col-3 mb-3">
              <input type="text" class="form-control" name="city" placeholder="City" v-model="city">
            </div>
            <div class="col-3 mb-3">
              <input type="text" class="form-control" name="apt_suite" placeholder="Apt/Suite #" v-model="apt_suite">
            </div>
            <div class="col-3 mb-3">
              <input type="text" class="form-control" name="post_code" placeholder="Post code" v-model="post_code">
            </div>
            <div class="col-3 mb-3">
              <input type="text" class="form-control" name="state" placeholder="State" v-model="state">
            </div>
          </div>
      </div>
    <div class="col-lg-4">
      <div class="position-sticky top-0">
        <div class="row">
          <div class="col-12">
            <div class="table-subtotal">
              <span class="label">Subtotal:</span>
              <span class="value">{{ total_amount }}$</span>
            </div>
          </div>
          <button type="submit" class="d-block btn btn-success btn-book-now mx-auto mx-auto">BOOK NOW</button>
        </div>
      </div>
    </div>
  </form>
</template>
<style scoped lang="scss">
  .table-subtotal{
    margin-bottom: 10px;
    display: flex;
    justify-content: space-between;
    .value{
      font-weight: 600;
      font-size: 20px;
      color:#333;
    }
  }
</style>