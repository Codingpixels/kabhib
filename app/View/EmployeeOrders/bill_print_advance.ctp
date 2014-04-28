<div class="bill_layout_container">
	<div class="header_content">
		<table>
			<tbody>
				<?php 
				echo '<tr>Name: '.$customer_name.'</tr></br>'; 
				echo '<tr>Contact number: '.$customer_number.'</tr></br>'; 
				echo '<tr>Delivery Date: '.$delivery_date.'</tr></br>'; 
				echo '<tr>Advance: '.$advance.'</tr></br>'; 
				?>	
			</tbody>
		</table>
	</div>	
	<div class="bill_content">
		<table>
			<thead>
				<tr>
					<td>Particulars</td>
					<td>Quantity</td>
					<td>Amount</td>
				</tr>	
			</thead>	
			<tbody>
				<?php 
				foreach ($data_details as $key => $data) {//echo"<pre>";print_r($data_details);exit;
					echo '<tr>';
						echo '<td>';
						echo $data['item_name'];
			      		echo '</td>';
			      		echo '<td>';
			      		echo $data['item_quantity'];
			      		echo '</td>';
			      		echo '<td>';
			      		echo $data['total_bill'];
			      		echo '</td>';
			    	echo '</tr>';
			    }
				echo '<tr>';
					echo 'Total amount: '.$data['total_bill'];
				echo '</tr>';
				echo '<tr>';
					echo 'VAT: '.Configure::read('vat_amt').' %';
				echo '</tr>';
				echo '<tr>';
					echo 'Actual amount: '.$data['total_bill'];
				echo '</tr>';			
				?>

			</tbody>
		</table>
		
	</div>	
	<div class="footer_content">
		<table>
			<thead>

			</thead>	
		</table>
	</div>	
</div>	