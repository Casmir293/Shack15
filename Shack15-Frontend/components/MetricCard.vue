<template>
  <div
    class="metric-card p-4 bg-white shadow-md rounded border flex flex-col justify-between"
  >
    <h3 class="lg:text-xl font-semibold">{{ title }}</h3>
    <p class="text-2xl font-bold mt-8">{{ value }}</p>
  </div>
</template>

<script setup>
defineProps({
  title: String,
  value: Number,
});
</script>

<style scoped>
.metric-card {
  min-width: 150px;
  min-height: 100px;
}
</style>
