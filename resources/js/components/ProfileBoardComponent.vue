<template>
    <div class="col-lg-8">
        <div class="row align-items-center justify-content-between profile-tab">
            <div class="col active">
                Overiview
            </div>
            <div class="col">
                Projects
            </div>
            <div class="col">
                 Posts <mark class="round-fig">  {{ title }}</mark>
            </div>
            <div class="col">
                Followers
            </div>
            <div class="col">
                Profile views
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        title: {
            required: true
        }
    }
}
</script>