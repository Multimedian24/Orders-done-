<!DOCTYPE html>
<html>
	<head>
		<title>Goose Down Sleeping Bag</title>

		<script>
            function calculateTotal(quantity, price, taxRate) {
                let subtotal = quantity * price;
                let tax = subtotal * taxRate;
                let orderTotal = subtotal + tax;
                return {
                    subtotal: subtotal.toFixed(2),
                    tax: tax.toFixed(2),
                    orderTotal: orderTotal.toFixed(2),
                };
            }

            function WriteSummary() {
                const quantityInput = document.querySelector('input[name="txtQuantity"]');
                const subtotalInput = document.querySelector('input[name="txtSubTotal"]');
                const taxInput = document.querySelector('input[name="txtTax"]');
                const orderTotalInput = document.querySelector('input[name="txtOrderTotal"]');

                const quantity = parseInt(quantityInput.value);
                const price = parseFloat(document.querySelector('td:nth-child(4)').innerText);
                const taxRate = 0.1; //  (10%)

                if (!isNaN(quantity) && quantity > 0) {
                    const totals = calculateTotal(quantity, price, taxRate);
                    subtotalInput.value = totals.subtotal;
                    taxInput.value = totals.tax;
                    orderTotalInput.value = totals.orderTotal;
                } else {
                    alert('Please enter a valid quantity.');
                }
            }
        </script>
	</head>
	<body>

	<?php
            $price = 259.99;
            $in_stock = "Yes";
        ?>
		<!-- CWT logo and page title -->
		<table width="80%" align="center">
			<tr>
				<td><img src="tents.jpg" width="200" height="174" align="right" style="WIDTH: 200px; HEIGHT: 174px"></td>
				<td><big><b>&nbsp;&nbsp;3-Season Tent</big></B></td>
			</tr>
		</table>
		<!-- inventory data -->
		<form name="frmOrderItem" action="result1.php" method="get">
			<p><table width="80%" border="5" cellspacing="3" cellpadding="5" align="center">
					<tr>
						<th width="20%">
							Selection</th>
						<th width="20%">
							Size</th>
						<th width="20%">
							Color</th>
						<th width="20%">
							Price</th>
						<th width="20%">
							In Stock?</th>
					</tr>
					<tr>
						<td align="center"><input type="radio" checked name="optInvid" value="YES"></td>
						<td align="center">Rectangular</td>
						<td align="center">Blue</td>
						<td align="center">259.99</td>
						<td align="center">Yes</td>
					</tr>
				</table>
			</p>
			<p>
				<!-- form controls -->
				<table width="80%" cellspacing="3" cellpadding="5" align="center">
					<tr>
						<td width="70%"><big>Desired Quantity</big> <input type="text" name="txtQuantity" size="10"></td>
						<td align="right" width="15%"><input type="button" value="Submit" onclick="WriteSummary()" id="Submit" name="Submit"></td>
					</tr>
				</table>
			</p>
			
			<p>
				<table width="80%" align="center" border id="Table1">
					<tr>
						<td align="right">Subtotal:</td>
						<td><input type="text" name="txtSubTotal"></td>
					</tr>
					<tr>
						<td align="right">Tax:</td>
						<td><input type="text" name="txtTax"></td>
					</tr>
					<tr>
						<td align="right">Order Total:</td>
						<td><input type="text" name="txtOrderTotal"></td>
					</tr>
				</table>
				
			</p>
		</form>
	</body>
</html>
