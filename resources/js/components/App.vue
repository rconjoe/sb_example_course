<template>
  <div class="">
    <nav class="p-6 bg-gray-200 flex justify-between my-5 mx-16 rounded lg">
      <div class="">Attendance Record</div>
      <button @click="populateDB" class="bg-blue-500 hover:bg-blue-700 text-white text-xs py-1 px-2 rounded-full">Seed Data</button>
    </nav>
  </div>
      <StudentTable />
</template>

<script>
import StudentTable from './StudentTable.vue'
import axios from 'axios'

export default {
  components: {
    StudentTable
  },
  methods: {
    async populateDB() {
      await axios.get('/api/populateDatabase')
      .catch(err => console.log(err))
      location.reload()
    }
}
}
</script>
