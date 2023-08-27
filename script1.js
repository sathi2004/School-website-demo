// Add event listener to form submission
document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent form from being submitted
  
    // Get form values
    var name = document.getElementById('name').value;
    var email = document.getElementById('id').value;
    var message = document.getElementById('password').value;
  
    // Create object to send data to the server
    var data = {
      name: name,
      id: email,
      password:password
    };
  
    // Send data to the server using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'submit.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
      if (xhr.status === 200) {
        alert('sign in successfully!');
      } else {
        alert('An error occurred. Please try again.');
      }
    };
    xhr.send('data=' + JSON.stringify(data));
  });