<script setup lang="ts">
defineProps({
  title: String,
  value: Number,
});
</script>

<template>
  <div
    class="metric-card min-w-[150px] min-h-[100px] p-4 bg-white shadow-md rounded border flex flex-col justify-between cursor-pointer hover:bg-slate-100 transition-all duration-500"
  >
    <h3 class="lg:text-xl font-semibold">{{ title }}</h3>
    <p class="text-2xl font-bold mt-8">{{ value }}</p>
  </div>
</template>
