<div style="margin-top: 31px; margin-left: -5px;">
	<div class="billno">BillNo:<?php echo $billno; ?></div>
	<div class="cdate">Date:<?php echo $current_date; ?></div>
	<div class="ddate">Delivery Date:<?php echo $delivery_date; ?></div>
	<div class="time">Time:<?php echo $time; ?></div>
</div>

<div class="list1">
	<label>Particulars</label>
	<label id="kg">Kg</label>
	<label id="amt">Amount:</label>
</div>
<div class="itmname"><?php echo $flavour; ?></div>
<div class="weight"><?php echo $weight;  ?></div>
<div class="samount"><?php echo $total_amt; ?></div>
<div id="bill">
	<div style="height: 17px; margin-top: 4px; margin-left: 0px;">Gross Amount:
		<div id="grossamount"><?php echo $total_amt; ?></div>
	</div>
	<div style="height: 17px; margin-top: 4px; margin-left: 0px;">Advance Payment:
		<div id="adv"><?php echo $advance; ?></div>
	</div>
	<div style="height: 17px; margin-top: 4px; margin-left: 0px;" >VAT:
		<div id="vat">15%</div>
	</div>
	<div style="height: 17px; margin-top: 4px; margin-left: 0px;">Deposite:
		<div id="lftamt"><?php echo $deposite; ?></div>
	</div>
	<div style="height: 17px; margin-top: 4px; margin-left: 0px;">Left Amt:
		<div id="lftamt"><?php echo $left_amt; ?></div>
	</div>

</div>
