<script setup lang="ts">
import { fetchMetrics } from "./services/useMetrics";

useHead({
  title: "SHACK15",
  link: [
    {
      rel: "icon",
      type: "image/jpeg",
      href: "/imgs/shack15-icon.png",
    },
  ],
});

const metrics = ref<Metrics | null>(null);
const isLoading = ref(false);

onMounted(async () => {
  isLoading.value = true;
  metrics.value = await fetchMetrics();
  isLoading.value = false;
});

const attendanceData = computed(() => {
  return {
    labels: metrics.value?.events
      ? metrics.value.events.map((event) => event.name)
      : [],
    datasets: [
      {
        label: "Attendance (members)",
        data: metrics.value?.events
          ? metrics.value.events.map((event) => event.attendance)
          : [],
        backgroundColor: "black",
      },
      {
        label: "Engagement Rate (%)",
        data: metrics.value?.events
          ? metrics.value.events.map((event) => event.engagement)
          : [],
        backgroundColor: "gray",
      },
    ],
  };
});

const chartOptions = ref({
  responsive: true,
});
</script>

<template>
  <template v-if="isLoading">
    <IsLoading />
  </template>

  <template v-else>
    <section class="dashboard p-8">
      <!-- Header -->
      <header
        class="flex justify-center items-center mb-7 bg-black py-6 rounded-md"
      >
        <NuxtLink to="/">
          <img
            class="w-40 lg:w-80 cursor-pointer"
            src="/imgs/shack15-logo.png"
            alt="shack15-logo"
          />
        </NuxtLink>
      </header>

      <!-- Cards -->
      <section class="grid grid-cols-2 gap-4 mb-8">
        <MetricCard title="Total Members" :value="metrics?.total_members" />
        <MetricCard
          title="Monthly Active Members"
          :value="metrics?.active_members"
        />
      </section>

      <!-- Bar Chart -->
      <section class="mb-8 lg:w-[70%] mx-auto">
        <MetricsChart
          title="Event Attendance"
          :chartData="attendanceData"
          :chartOptions="chartOptions"
        />
      </section>

      <!-- Data Table -->
      <section class="lg:w-[70%] mx-auto">
        <EventHistoryTable :events="metrics?.events" />
      </section>
    </section>
  </template>
</template>
