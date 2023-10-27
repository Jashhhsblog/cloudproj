<!DOCTYPE html>
<html>
<head>
  <title>Exam Schedule Change Request</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
    
    h2 {
      color: #333;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    
    .form-control {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    
    .form-submit {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .form-submit:hover {
      background-color: #45a049;
    }
    
    .success-message {
      color: #008000;
      font-weight: bold;
    }
    
    .error-message {
      color: #ff0000;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Exam Schedule Change Request</h2>
    
    <?php
    $success = false;
    $error = false;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Process the form data
      
      // Validate and sanitize input fields
      $teacherName = isset($_POST['teacher_name']) ? htmlspecialchars($_POST['teacher_name']) : '';
      $subject = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : '';
      $reason = isset($_POST['reason']) ? htmlspecialchars($_POST['reason']) : '';
      
      // Perform additional validation if required
      
      // Check if all required fields are filled
      if (!empty($teacherName) && !empty($subject) && !empty($reason)) {
        // Send an email or perform any other action to process the request
        // You can add your code here
        
        $success = true;
      } else {
        $error = true;
      }
    }
    ?>
    
    <?php if ($success): ?>
      <p class="success-message">Your exam schedule change request has been submitted successfully.</p>
    <?php elseif ($error): ?>
      <p class="error-message">Please fill in all the required fields.</p>
    <?php endif; ?>
    
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
      <div class="form-group">
        <label for="teacher_name" class="form-label">Teacher Name:</label>
        <input type="text" id="teacher_name" name="teacher_name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="subject" class="form-label">Subject:</label>
        <input type="text" id="subject" name="subject" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="reason" class="form-label">Reason for Change:</label>
        <textarea id="reason" name="reason" class="form-control" required></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="form-submit">Submit Request</button>
      </div>
    </form>
  </div>
</body>
</html>
