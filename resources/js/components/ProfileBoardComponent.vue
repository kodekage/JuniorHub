<template>
    <div class="col-lg-8">
        <div class="row align-items-center justify-content-between profile-tab">
            <router-link to='/overview' class="col active">
                Overiview
            </router-link>
            <router-link to="/projects" class="col">
                Projects
            </router-link>
            <router-link :to="{ name: 'Posts', params: { user_post } }" class="col">
                 Posts <mark class="round-fig">  {{ JSON.parse(post).length }} </mark>
            </router-link>
            <router-link to="/followers" class="col">
                Followers
            </router-link>
            <div class="col">
                Profile views
            </div>
        </div>

        <router-view class="active"></router-view>
    </div>
</template>

<script>
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
        {
            path: '/overview',
            // name: 'overview',
            component: require('./profile/OverviewComponent').default
        },
        {
            path: '/projects',
            component: require('./profile/ProjectsComponent').default
        },
        {
            path: '/posts',
            name: 'Posts',
            component: require('./profile/PostsComponent').default,
            props: true
        },
        {
            path: '/followers',
            component: require('./profile/FollowersComponent').default
        }
    ]
});

export default {
    props: {
        post: {
            required: true
        }
    },
    data(){
        return {
            user_post: null
        }
    },
    mounted(){
        this.user_post = JSON.parse(this.post)
    },
  router
}
</script>