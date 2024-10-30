<template>
  <div>
    <h3 class="text-lg font-semibold mb-4">{{ title }}</h3>
    <BarChart :data="chartData" :options="chartOptions" />
  </div>
</template>

<script setup>
import { Bar } from "vue-chartjs";
import {
  Chart,
  Title,
  Tooltip,
  Legend,
  BarElement,
  CategoryScale,
  LinearScale,
} from "chart.js";

Chart.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale);

defineProps({
  title: String,
  chartData: Object,
  chartOptions: Object,
});

const BarChart = Bar;
</script>
