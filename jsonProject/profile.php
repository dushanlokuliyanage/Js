<!-- <!DOCTYPE html>
<html>
<head>
  <title>Profile Update (AJAX)</title>
</head>
<body>
  <h2>Update Profile</h2>

  <form id="updateForm">
    <input type="text" id="firstName" placeholder="First Name" value="Dushan"><br><br>
    <input type="text" id="lastName" placeholder="Last Name" value="Loku Liyanage"><br><br>
    <input type="email" id="email" placeholder="Email" value="dushan@example.com"><br><br>
    <input type="text" id="mobile" placeholder="Mobile" value="0771234567"><br><br>

    <button type="button" onclick="updateProfile()">Update</button>
  </form>

  <p id="responseMessage"></p>

  <script>
    function updateProfile() {
      // Get form values
      const data = {
        firstName: document.getElementById('firstName').value,
        lastName: document.getElementById('lastName').value,
        email: document.getElementById('email').value,
        mobile: document.getElementById('mobile').value
      };

      // Send data to PHP
      fetch("update.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify(data) // convert JS object → JSON text
      })
      .then(response => response.json()) // convert JSON text → JS object
      .then(result => {
        // Show success message
        document.getElementById('responseMessage').innerText = result.message;
      })
      .catch(error => console.error("Error:", error));
    }
  </script>
</body>
</html> -->
