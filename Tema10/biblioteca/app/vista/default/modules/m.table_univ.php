<div class="t"><?php echo $titulo; ?></div>		
    <table border="0" cellspacing="3" cellpadding="0" class="tabla" width="100%" contentEditable="true">
		 <tr>
	    	<th>DNI</th>
	    	<th>Nombre</th>
	    	<th>Apellido1 </th>
	    	<th>Apellido2  </th>
		    <th>Facultad</th>
		  </tr>
	   <?php foreach ($tsArray as $data): ?>		
	   <tr>
	       <td><?php echo $data['DNI'];?></td>
		    <td><?php echo $data['Nombre'];?></td>
		    <td><?php echo $data['Apellido1'];?></td>
	       <td><?php echo $data['Apellido2'];?></td>
	       <td><?php echo $data['Facultad'];?></td>
	       
	   </tr>
	   <?php endforeach; ?>
	</table>		   