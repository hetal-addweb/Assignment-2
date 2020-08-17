<form method="POST">
{{ csrf_field() }}
  <label for="department">Choose a department:</label>
  <select name="department" id="department">ss
    <option value="IT">IT</option>
    <option value="HR">HR</option>
    <option value="HARDWARE">HARDWARE</option> 
  </select>
  
  <input type="submit" value="Submit">
</form>
@if(isset($user))

<table border="1">
	<tr>
    <th>ID</th>		
		<th>EMPLOYEE_NAME</th>
		<th>DEPARTMENT</th>
	</tr>
	@foreach($user as $em)
	<tr>
		<td>{{$em->id}}</td>
		<td>{{$em->empname}}</td>
		<td>{{$em->department}}</td>
    </tr>
    @endforeach
</table>
@endif