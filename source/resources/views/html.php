<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>
<form action="sendrequest" method="get">
    <input type="hidden" name="Title" value="VPC 3-Party" />
    <input type="hidden" name="virtualPaymentClientURL" size="63" value="https://mtf.onepay.vn/onecomm-pay/vpc.op" maxlength="250" />
    <input type="hidden" name="vpc_Merchant" value="ONEPAY" size="20" maxlength="16" />
    <input type="hidden" name="vpc_AccessCode" value="D67342C2" size="20" maxlength="8" />
    <input type="hidden" name="vpc_MerchTxnRef" value="<?php echo date ( 'YmdHis' ) . rand (); ?>" size="40" maxlength="40" />
    <input type="hidden" name="vpc_OrderInfo" value="2" size="20" maxlength="34" />
    <input type="hidden" name="vpc_Amount" value="3000.00" size="20" maxlength="10" />
    <input type="hidden" name="vpc_ReturnURL" size="60" value="http://localhost/IT4421-4/source/public/getresponse?soluong=2" maxlength="300" />
    <input type="hidden" name="vpc_Version" value="2" size="20" maxlength="8" />
    <input type="hidden" name="vpc_Command" value="pay" size="20" maxlength="16" />
    <input type="hidden" name="soluong" value="5" size="20" maxlength="16" />
    <input type="hidden" name="vpc_Locale" value="vn" size="20" maxlength="5" />
    <input type="hidden" name="vpc_Currency" value="VND" size="20" maxlength="5" />
    <input type="hidden" name="vpc_TicketNo" maxlength="15" value="<?php echo $_SERVER ['REMOTE_ADDR']; ?>" />
    <input type="hidden" name="vpc_SHIP_Street01" value="Kim Chung" size="20" maxlength="500" />
    <input type="hidden" name="vpc_SHIP_Provice" value="Hoai Duc" size="20" maxlength="50" />
    <input type="hidden" name="vpc_SHIP_City" value="Ha Noi" size="20" maxlength="50" />
    <input type="hidden" name="vpc_SHIP_Country" value="Viet Nam" size="20" maxlength="50" />
    <input type="hidden" name="vpc_Customer_Phone" value="01699417566" size="20" maxlength="50" />
    <input type="hidden" name="vpc_Customer_Email" size="20" value="khai199733@gmail.com" maxlength="50" />
    <input type="hidden" name="vpc_Customer_Id" value="1" size="20" maxlength="50" />
    <script type="text/javascript" src="http://202.9.84.88/documents/payment/logoscript.jsp?logos=v,m&lang=vn"></script>
    <input type="submit" 	value="Đặt phòng ngay với onepay" />
</form>
</body>
</html>