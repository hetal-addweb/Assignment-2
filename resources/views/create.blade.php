<!DOCTYPE html>
<html>
<head>
    <title>Employee</title>
</head>
<body>
<form action="/em" method="post">
    {{csrf_field()}}
    <input type="text" name="empname" placeholder="Employee Name">
  <label for="department">Choose a department:</label>
  <select name="department" id="department">
    <option value="IT">IT</option>
    <option value="HR">HR</option>
    <option value="HARDWARE">HARDWARE</option> 
  </select>
  <input type="submit" value="Submit">
</form>
</body>
</html>