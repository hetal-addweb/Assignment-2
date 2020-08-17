<form method="POST">
<?php echo e(csrf_field()); ?>

  <label for="department">Choose a department:</label>
  <select name="department" id="department">ss
    <option value="IT">IT</option>
    <option value="HR">HR</option>
    <option value="HARDWARE">HARDWARE</option> 
  </select>
  
  <input type="submit" value="Submit">
</form>
<?php if(isset($user)): ?>

<table border="1">
	<tr>
    <th>ID</th>		
		<th>EMPLOYEE_NAME</th>
		<th>DEPARTMENT</th>
	</tr>
	<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $em): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($em->id); ?></td>
		<td><?php echo e($em->empname); ?></td>
		<td><?php echo e($em->department); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\empdept\resources\views/search.blade.php ENDPATH**/ ?>