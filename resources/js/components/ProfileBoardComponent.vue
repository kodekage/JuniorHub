<template>
    <div class="col-lg-8">
        <div class="row align-items-center justify-content-between profile-tab">
            <router-link :to="{ name: 'Overview', params: {user} }" class="col active">
                Overiview
            </router-link>
            <router-link :to="{ name: 'Posts', params: { user_post } }" class="col">
                 Posts <mark class="round-fig">  {{ JSON.parse(post).length }} </mark>
            </router-link>
            <router-link to="/projects" class="col">
                Projects
            </router-link>
            <router-link to="/followers" class="col">
                Followers
            </router-link>
            <router-link to="following" class="col">
                Following
            </router-link>
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
            name: 'Overview',
            component: require('./profile/OverviewComponent').default,
            props: true
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
        },
        {
            path: '/following',
            component: require('./profile/FollowingComponent').default
        }
    ]
});

export default {
    props: {
        post: {
            required: true
        },
        user: {
            required: true
        }
    },
    data(){
        return {
            user_post: JSON.parse(this.post),
            // user: JSON.parse(this.user)
        }
    },
    // mounted(){
        // console.log(this)
    // },
  router
}
</script>

<style scoped>
    a{
        color: black;
        font-size: 16px;
        text-decoration: none;
        background: rgb(236, 236, 236);
        margin: .3em;
    }
</style>