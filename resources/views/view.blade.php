<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>
<form action="/search" method="POST">
{{ csrf_field() }}
  <label for="department">Choose a department:</label>
  <select name="department" id="department">ss
    <option value="IT">IT</option>
    <option value="HR">HR</option>
    <option value="HARDWARE">HARDWARE</option> 
  </select>
  
  <input type="submit" value="Search">
</form>
<br><br>

<table border="1">
	<tr>
		<th>ID</th>		
		<th>EMPLOYEE_NAME</th>
		<th>DEPARTMENT</th>	
	</tr>
	@foreach($data as $em)
	<tr>
		<td>{{$em->id}}</td>
		<td>{{$em->empname}}</td>
		<td>{{$em->department}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>