<script setup lang="ts"></script>

<template>
  <div class="bg-black">
    <div class="loading-screen">
      <img src="/imgs/shack15-logo.png" alt="logo" class="w-full" />
      <slot />
    </div>
  </div>
</template>

<style scoped>
.loading-screen {
  @apply flex h-screen w-screen items-center justify-center rounded-lg p-3;
  animation: pulse 2s infinite;
}

@keyframes pulse {
  0% {
    transform: scale(0.7);
  }

  70% {
    transform: scale(1);
  }

  100% {
    transform: scale(0.7);
  }
}
</style>
