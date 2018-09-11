<?php
$admin = "srus672@gmail.com";
$admin_2 = "srus672@gmail.com";
$height = $_POST['height'];
$width = $_POST['width'];
$depth = $_POST['depth'];
$quantity = $_POST['quantity'];
$print_color = $_POST['print_color'];
$board_type = $_POST['board_type'];
$outside_paper = $_POST['outside_paper'];
$name = $_POST['name'];
$email = $_POST['email'];
$grand_total = $_POST['grand_total'];
$per_box_price = $_POST['per_box_price'];
$price_with_vat = $_POST['price_with_vat'];
$subject = "Box Cost Quote";
$message = "<html>
			<head>
			<title>Box Cost Quote</title>
			</head>
			<body>
        <p>
          Here's the details of your box, including your quote.
        </p>
				<p>
          <b>Height:</b> $height <br>
          <b>Width:</b> $width <br>
          <b>Depth:</b> $depth <br>
          <b>Quantity:</b> $quantity <br>
          <b>Print Color:</b> $print_color <br>
          <b>Board Type:</b> $board_type <br>
          <b>Outside Paper:</b> $outside_paper <br>
          <b>Price includes VAT:</b> $price_with_vat <br>
          <h2><b>Grand Total:</b> &pound;$grand_total </h2>
          <h4><b>Per Box Price:</b> &pound;$per_box_price </h4>
				</p>
			</body>
			</html>";
$headers  = 'MIME-Version:1.0' . "\r\n";
$headers .= 'Content-type:text/html; charset=utf-8' . "\r\n";
$headers .= 'To: <' . $email . ">\r\n";
$headers .= 'Reply-To: <' . $admin_2 . ">\r\n";
$headers .= 'From: <' . $admin_2 . ">\r\n";
$headers .= 'Cc: <' . $admin_2 . ">\r\n";
$headers .= 'BCc: <' . $admin . ">\r\n";
mail($email, $subject, $message, $headers);
?>
