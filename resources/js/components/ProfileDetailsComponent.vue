<template>
  <div class="col-lg-3">
    <div class="text-center profile-image">
      <img :src="image" alt="profile image">
      <div class="card-header font-dark text-center">
          <div>
              <h2>{{ JSON.parse(user).full_name }} </h2>
              <h4>@{{ JSON.parse(user).name }}</h4>
              <p>{{ JSON.parse(user).email }}</p>
          </div>
      </div>

      <div class="card-body" v-if=" guest !== JSON.parse(user).name">
      <a href="#" class="btn btn-full btn-dark">follow</a></a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    image: {
      required: true
    },
    user: {
      required: true
    }
  },
  data(){
    return {
      guest: JSON.parse(this.user).name
    }
  }
}
</script>
