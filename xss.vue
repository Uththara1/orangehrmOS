<template>
  <div>
    <label for="search">Search Employee:</label>
    <input type="text" id="search" v-model="searchQuery" @input="fetchEmployees" />
    <ul v-if="showResults">
      <li v-for="(employee, index) in searchResults" :key="index">
        {{ employee.name }}
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      searchQuery: '',
      searchResults: [],
      showResults: false,
    };
  },
  methods: {
    fetchEmployees() {
      // Simulating API call
      // Replace this with your actual API call
      this.searchResults = [
        {
          name: "<script>alert('XSS attack!');</script>",
        },
        {
          name: "John Doe",
        },
        {
          name: "Jane Smith",
        },
      ];
      this.showResults = true;
    },
  },
};
</script>

