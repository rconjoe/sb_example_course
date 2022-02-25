<template>
  <div class="">
      <nav class="p-6 bg-gray-200 flex justify-between my-5 mx-16 rounded lg">
      <div class="">Attendance Record</div>
      <a href="https://github.com/rconjoe/sb_example_course" class="text-gray-600 no-underline hover:underline">Source</a>
    </nav>
  </div>
      <StudentTable />
</template>

<script>
import StudentTable from './StudentTable.vue'

export default {
  components: {
    StudentTable
  }
}
</script>
