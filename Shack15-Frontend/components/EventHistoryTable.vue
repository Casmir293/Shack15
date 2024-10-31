<script setup lang="ts">
defineProps({
  events: {
    type: Array as PropType<Events[] | undefined>,
    required: true,
  },
});
</script>

<template>
  <div class="overflow-x-scroll">
    <table class="bg-white border min-w-[680px] lg:min-w-[100%]">
      <thead class="border-b bg-gray-200">
        <tr>
          <th class="py-3">Event</th>
          <th class="py-3">Date</th>
          <th class="py-3">Attendance</th>
          <th class="py-3">Engagement</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(event, index) in events" :key="index" class="text-center">
          <td class="py-2">{{ event.name }}</td>
          <td class="py-2">{{ event.date }}</td>
          <td class="py-2">{{ event.attendance }}</td>
          <td class="py-2">{{ event.engagement }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
