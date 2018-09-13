<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Ajax to vue Component</div>
                    <div class="card-body">
                        <p>I'm an ajax-to-vue component.</p>
                        <p v-for="(value, key) in ajaxData">{{ key+' => '+value }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                ajaxData: {},
            }
        },
        mounted() {
            this.update();
        },
        methods: {
            update: function () {
                axios.get('/ajax_to_vue').then((response) => {
                    this.ajaxData = response.data;
                })
            }
        }
    }
</script>
