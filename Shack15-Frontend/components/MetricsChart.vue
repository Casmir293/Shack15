<script setup lang="ts">
import { Bar } from "vue-chartjs";
import {
  Chart,
  Title,
  Tooltip,
  Legend,
  BarElement,
  CategoryScale,
  LinearScale,
  type ChartData,
  type ChartOptions,
} from "chart.js";

Chart.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale);

const props = defineProps({
  title: String,
  chartData: {
    type: Object as PropType<ChartData<"bar">>,
    default: () => ({
      labels: [],
      datasets: [],
    }),
  },
  chartOptions: Object as PropType<ChartOptions<"bar">>,
});

const BarChart = Bar;
</script>

<template>
  <div>
    <h3 class="mb-4 text-lg font-semibold">{{ title }}</h3>
    <BarChart :data="chartData" :options="chartOptions" />
  </div>
</template>
