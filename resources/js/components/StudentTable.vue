<template>
  <div v-if="isLoading === true" class="p-6 bg-gray-200 flex items-center mx-24 my-4 rounded lg">
    <strong>
      Loading...
    </strong>
  </div>
  <div v-else class="p-6 bg-gray-200 mx-24 my-4 rounded lg">
    <table class="w-full table-auto border-separate [border-spacing:0.75rem] text-xs">
      <thead>
        <tr>
          <th>Student ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Present?</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(student, i) in students" :key="i">
          <td scope="row">{{ student.studentId }}</td>
          <td scope="row">{{ student.firstName }} {{ student.lastName }}</td>
          <td scope="row">{{ student.email }}</td>
          <td scope="row">
            <button v-if="student.present === 1" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full" @click="toggle(student)">
              {{ present(student) }}
            </button>
            <button v-else class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded-full" @click="toggle(student)">
              {{ present(student) }}
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from 'axios'
export default {

  data() {
    return {
      isLoading: true,
      students: []
    }
  },

  async created() {
    await this.fetchStudents()
  },

  methods: {
    async fetchStudents() {
      this.isLoading = true
      this.students = []
      const studentsResp = await axios.get('http://127.0.0.1/api/students')
        .catch(err => console.log('Error fetching /api/students'))
      studentsResp.data.forEach(student => this.students.push(student))
      return this.isLoading = false
    },

    present(student) { 
      return 'Present' ? student.present === 1 : 'Absent'
    },

    async toggle(student) {
      if (student.present === 1) {
        await axios.put(`http://127.0.0.1/api/students/${student.studentId}`, { present: false })
        return this.fetchStudents() 
      }
      else await axios.put(`http://127.0.0.1/api/students/${student.studentId}`, { present: true })
      return this.fetchStudents()
    }
  },


  
}
</script>
