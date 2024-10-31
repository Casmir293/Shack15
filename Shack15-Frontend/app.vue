<script setup lang="ts">
import { fetchMetrics } from "./services/useMetrics";

/** Head meta data **/
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

/** Fetch and store API data **/
const metrics = ref<Metrics | null>(null);
const isLoading = ref(false);

onMounted(async () => {
  isLoading.value = true;
  metrics.value = await fetchMetrics();
  isLoading.value = false;
});

/** Chart prop data **/
const attendanceData = computed(() => {
  return {
    labels: metrics.value?.events.map((event) => event.name),
    datasets: [
      {
        label: "Attendance (members)",
        data: metrics.value?.events.map((event) => event.attendance),
        backgroundColor: "black",
      },
      {
        label: "Engagement Rate (%)",
        data: metrics.value?.events.map((event) => event.engagement),
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
        class="mb-7 flex items-center justify-center rounded-md bg-black py-6"
      >
        <NuxtLink to="/">
          <img
            class="w-40 cursor-pointer lg:w-80"
            src="/imgs/shack15-logo.png"
            alt="shack15-logo"
          />
        </NuxtLink>
      </header>

      <!-- Cards -->
      <section class="mb-8 grid grid-cols-2 gap-4">
        <MetricCard title="Total Members" :value="metrics?.total_members" />
        <MetricCard
          title="Monthly Active Members"
          :value="metrics?.active_members"
        />
      </section>

      <!-- Bar Chart -->
      <section class="mx-auto mb-8 lg:w-[70%]">
        <MetricsChart
          title="Event Attendance"
          :chartData="attendanceData"
          :chartOptions="chartOptions"
        />
      </section>

      <!-- Data Table -->
      <section class="mx-auto lg:w-[70%]">
        <EventHistoryTable :events="metrics?.events" />
      </section>
    </section>
  </template>
</template>
