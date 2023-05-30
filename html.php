<!DOCTYPE html>
<html>
<head>
    <title>Autocomplete Dropdown with HTML Values</title>
    <style>
        #htmlInput {
            padding: 5px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <input type="text" id="htmlInput" placeholder="Enter HTML value" />

    <script>
        // Function to fetch HTML values from the server
        function fetchHTMLValues(searchTerm) {
            return new Promise((resolve, reject) => {
                // Send an AJAX request to the server
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            // Parse the response as JSON
                            var response = JSON.parse(xhr.responseText);
                            resolve(response);
                        } else {
                            reject(xhr.statusText);
                        }
                    }
                };

                // Set the URL and request parameters
                xhr.open("GET", "fetch_html_values.php?searchTerm=" + encodeURIComponent(searchTerm), true);
                xhr.send();
            });
        }

        // Autocomplete functionality
        var htmlInput = document.getElementById("htmlInput");
        htmlInput.addEventListener("input", function() {
            var searchTerm = this.value;
            if (searchTerm.length > 0) {
                fetchHTMLValues(searchTerm).then(function(htmlValues) {
                    var autocompleteOptions = "";
                    for (var i = 0; i < htmlValues.length; i++) {
                        autocompleteOptions += "<div>" + htmlValues[i] + "</div>";
                    }
                    htmlInput.setAttribute("data-autocomplete-options", autocompleteOptions);
                }).catch(function(error) {
                    console.error(error);
                });
            } else {
                htmlInput.removeAttribute("data-autocomplete-options");
            }
        });
    </script>
</body>
</html>

