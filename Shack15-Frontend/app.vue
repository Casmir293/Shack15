<template>
  <div class="dashboard p-8">
    <div class="flex justify-center items-center mb-7 bg-black py-6 rounded-md">
      <img
        class="w-40 lg:w-80"
        src="https://images.squarespace-cdn.com/content/v1/6656358bbb9e8644fd94bfa1/1716925868304-7FBWW4JVJGX8545EID06/S15-Horizontal-Lockup.png?format=1500w"
        alt=""
      />
    </div>
    <div class="grid grid-cols-2 gap-4 mb-8">
      <MetricCard title="Total Members" :value="dummyData.totalMembers" />
      <MetricCard
        title="Monthly Active Members"
        :value="dummyData.activeMembers"
      />
    </div>
    <div class="mb-8 lg:w-[70%] mx-auto">
      <MetricsChart
        title="Event Attendance"
        :chartData="attendanceData"
        :chartOptions="chartOptions"
      />
    </div>

    <div class="lg:w-[70%] mx-auto">
      <EventHistoryTable :events="dummyData.events" />
    </div>
  </div>
</template>

<script setup>
const dummyData = {
  totalMembers: 500,
  activeMembers: 120,
  events: [
    {
      id: 1,
      name: "Annual Meetup",
      date: "2024-10-01",
      attendance: 90,
      engagement: 85,
    },
    {
      id: 2,
      name: "Monthly Webinar",
      date: "2024-10-15",
      attendance: 45,
      engagement: 70,
    },
    {
      id: 3,
      name: "Hackathon",
      date: "2024-10-20",
      attendance: 120,
      engagement: 95,
    },
  ],
};

const attendanceData = ref({
  labels: dummyData.events.map((event) => event.name),
  datasets: [
    {
      label: "Attendance (members)",
      data: dummyData.events.map((event) => event.attendance),
      backgroundColor: "#4CAF50",
    },
    {
      label: "Engagement Rate (%)",
      data: dummyData.events.map((event) => event.engagement),
      backgroundColor: "#2196F3",
    },
  ],
});

const chartOptions = ref({
  responsive: true,
});
</script>
