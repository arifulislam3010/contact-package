<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>
<form action="{{route('contact')}}" method="post">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" value="John"><br>
  <label for="lname">Email:</label><br>
  <input type="text" id="email" name="email" value="Doe"><br><br>
  <label for="lname">Message:</label><br>
  <input type="text" id="message" name="message" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>