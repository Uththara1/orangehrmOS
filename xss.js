// Sample vulnerable autocomplete function
function autocomplete(input, data) {
  input.addEventListener('input', function() {
    var value = input.value;
    var suggestions = data.filter(function(item) {
      return item.toLowerCase().startsWith(value.toLowerCase());
    });

    // Display the suggestions in a dropdown
    var dropdown = document.createElement('ul');
    suggestions.forEach(function(suggestion) {
      var listItem = document.createElement('li');
      listItem.innerHTML = suggestion; // Vulnerable code: HTML injection issue
      dropdown.appendChild(listItem);
    });

    // Clear previous suggestions and display the dropdown
    while (input.nextSibling) {
      input.nextSibling.remove();
    }
    input.parentNode.appendChild(dropdown);
  });
}

// Example data for autocomplete
var data = ['Apple', 'Banana', 'Cherry'];

// Initialize the autocomplete feature
var autocompleteInput = document.getElementById('autocomplete');
autocomplete(autocompleteInput, data);

