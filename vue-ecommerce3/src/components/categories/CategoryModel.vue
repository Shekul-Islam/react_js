<script setup>
const props = defineProps({
  phototag: Object,
  required: true,
});

</script>

<template>
    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
        <a class="text-decoration-none" href="">
            <div class="cat-item d-flex align-items-center mb-4">
                <div class="overflow-hidden" style="width: 100px; height: 100px;">
                    <img class="img-fluid" :src="phototag?.image" alt="">
                </div>
                <div class="flex-fill pl-3">
                    <h6>Category Name</h6>
                    <small class="text-body">100+ Products</small>
                </div>
            </div>
        </a>
    </div>
</template>


<style scoped>

</style>