<template>
  <div class="overflow-x-scroll">
    <table class="bg-white border min-w-[680px] lg:min-w-[945px]">
      <thead>
        <tr>
          <th class="py-2">Event</th>
          <th class="py-2">Date</th>
          <th class="py-2">Attendance</th>
          <th class="py-2">Engagement</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="event in events" :key="event.id" class="text-center">
          <td class="py-2">{{ event.name }}</td>
          <td class="py-2">{{ event.date }}</td>
          <td class="py-2">{{ event.attendance }}</td>
          <td class="py-2">{{ event.engagement }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script setup>
defineProps({
  events: Array,
});
</script>
