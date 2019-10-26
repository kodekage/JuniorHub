<template>
  <div class="row margin-down">

    <div class="col card">
      <div class="card-body">
        <h2>About</h2>
        <p>
          <!-- @{{ user }}  -->
        </p>
      </div>
    </div>

    <div class="col card">
      <div class="card-body">
        <h2>Technology Stack</h2>
        <p>
          
        </p>
      </div>
    </div>

    <div class="col-12 card">
      <div class="card-body">
        <h2>Activity</h2>
        <p>
          
        </p>
      </div>
    </div>

    <div class="col card">
      <div class="card-body">
        <h2>Job listing</h2>
        <p>
          
        </p>
      </div>
    </div>

    <div class="col card">
      <div class="card-body">
        <h2>Job listing</h2>
        <p>
          
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['user'],
  mounted(){
    if(this.user){
      JSON.parse(this.user);
    }else{
      console.log('There was an error');
    }
  }
}
</script>

<style scoped>
  .col, .col-12{
    margin: .5em;
  }
</style>