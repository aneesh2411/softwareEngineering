<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Complaint Form</h3>
<i>Please inform if there is any wrong updation of attendance</i>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Rollno</label>
    <input type="text" id="lname" name="lastname" placeholder="Your Roll no..">
	
    <label for="sub">Subject</label>
    <input type="text" id="lname" name="lastname" placeholder="Subject for updation..">

    <label for="country">Section</label>
    <select id="country" name="country">
      <option value="australia">A</option>
      <option value="canada">B</option>
      <option value="usa">C</option>

      <option value="usa">D</option>

      <option value="usa">E</option>

      <option value="usa">F</option>
    </select>

    <label for="subject">Please mention the complaint clearly</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
