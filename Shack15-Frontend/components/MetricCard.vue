<script setup lang="ts">
defineProps({
  title: String,
  value: Number,
});
</script>

<template>
  <div
    class="flex min-h-[100px] min-w-[150px] cursor-pointer flex-col justify-between rounded border bg-white p-4 shadow-md transition-all duration-500 hover:bg-slate-100"
  >
    <h3 class="font-semibold lg:text-xl">{{ title }}</h3>
    <p class="mt-8 text-2xl font-bold">{{ value }}</p>
  </div>
</template>
