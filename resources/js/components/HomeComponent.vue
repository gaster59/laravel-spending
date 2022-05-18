<template>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header">Home Component 111</div>

        <div class="card-body">I'm the Home Component component.</div>
      </div>
    </div>
  </div>
  <div>
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" v-model="this.email" />
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label"
        >Password</label
      >
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputPassword3" v-model="this.password" />
      </div>
    </div>
    <button type="button" v-on:click="SignIn" class="btn btn-primary">Sign in</button>
  </div>
</template>

<script>
import { useCookies } from "vue3-cookies";

export default {
  data() {
    return {
      email: '123',
      password: '123'
    }
  },
  setup() {
    const { cookies } = useCookies()
    return {
      cookies,
    };
  },
  methods: {
    SignIn: function() {
      const email = this.email
      const password = this.password
      if (email == '123' && password == '123') {
        this.cookies.set('login', true)
        this.$router.push('/about')
      }
    }
  },
  mounted() {
    console.log("Component mounted.");
  },
};
</script>