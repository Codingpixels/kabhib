<div class="bill_layout_container">
	<div class="header_content">
		<table>
			<tbody>
				<?php 
				echo '<tr>Name: '.$customer_details['Customer']['name'].'</tr>'; 
				echo '<tr>Contact number: '.$customer_details['Customer']['number'].'</tr>'; 
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
				foreach ($order_details as $key => $order) {
					echo '<tr>';
						echo '<td>';
						echo $order['CustomerOrderDetail']['item_name'];
			      		echo '</td>';
			      		echo '<td>';
			      		echo $order['CustomerOrderDetail']['item_quantity'];
			      		echo '</td>';
			      		echo '<td>';
			      		echo $order['CustomerOrderDetail']['total_bill'];
			      		echo '</td>';
			    	echo '</tr>';
			    }
				echo '<tr>';
					echo 'Total amount: '.$total_amount;
				echo '</tr>';
				echo '<tr>';
					echo 'VAT: '.Configure::read('vat_amt').' %';
				echo '</tr>';
				echo '<tr>';
					echo 'Actual amount: '.$actual_amount;
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