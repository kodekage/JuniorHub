<template>
  <!-- <div class="margin-down"> -->
    <!-- <h2>Posts</h2> -->
      <div class="row">
        <div class="col-lg-6 margin-down" v-for="post in user_post" :key="post.id">
        <div class="card">
          <div class="card-body profile-post">
            <a href="#">
              <h2>{{ post.title }}</h2>
            </a>

            <span> <strong>Written:</strong> {{ post.created_at }}</span>
          </div>
        </div>
    </div>
      </div>
  <!-- </div> -->
</template>

<script>
export default {
  props: ['user_post']
}
</script>

<style scoped>
.card{
  border-width: 3px;
}
</style>