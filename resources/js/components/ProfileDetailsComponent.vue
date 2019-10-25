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
      <!-- {{-- <div class="card-body"> --}} -->
          <!-- {{-- <a href="/profile/{{$user->id}}" class="btn btn-full btn-dark">edit profile</a> --}} -->
      <!-- {{-- </div> --}} -->
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
  }
}
</script>