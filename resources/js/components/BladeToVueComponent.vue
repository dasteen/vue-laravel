<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Blade to vue Component</div>

                    <div class="card-body">
                        <p>I'm an blade-to-vue component.</p>
                        <p v-for="(value, key) in bladeData">{{ key+' => '+value }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'bladeData'
        ],
        mounted() {
            this.show();
        },
        methods: {
            show: function () {
                console.log(this.bladeData);
            }
        }
    }
</script>
