<html>
<head>
  <title> Purchase Order </title>
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <link rel="stylesheet" type="text/css" href="css/stylesPO.css" />
</head>
<body>
  <div id="page">
    <form method="post" action="Purchase Order.php">
      <table width="100%" height="80%">
        <tr>
          <td>
            <div class="subframe">
              <h3 class="subtitle">Customer Details</h3>
              <h4>Name :</h4>
              <input type="text" name="fname" class="txtsmall" placeholder=" First Name"/>
              <input type="text" name="lname" class="txtsmall" placeholder=" Last Name"/>
              <h4>Gender :</h4>
              <input type="radio" name="gender" class="txtsmall radiobtn" value="M" />Male
              <input type="radio" name="gender" class="txtsmall radiobtn" value="F"/>Female
              <h4>Address :</h4>
              <input type="text" name="customeraddressline1" class="txtsmall txtaddress" placeholder=" Address Line 1"/> <br />
              <input type="text" name="customeraddressline2" class="txtsmall txtaddress" placeholder=" Address Line 2"/> <br />
              <input type="text" name="customercity" class="txtsmall txtaddress" placeholder=" City"/> <br />
              <h4>Contact No :</h4>
              <input type="text" name="contact" class="txtsmall" placeholder=" Contact Number"/> <br />
            </div>
          </td>
          <td>
            <div class="subframe" >
              <h3 class="subtitle">Order Details</h3>
              <h4>Delivery Address :</h4>
              <input type="radio" name="checkaddress" class="txtsmall radiobtn" value="new"/>Use a new delivery address
              <input type="text" name="deliveryaddressline1" class="txtsmall txtaddress" placeholder=" Address Line 1"/> <br />
              <input type="text" name="deliveryaddressline2" class="txtsmall txtaddress" placeholder=" Address Line 2"/> <br />
              <input type="text" name="deliverycity" class="txtsmall txtaddress" placeholder=" City"/> <br />
              <h4>Items :</h4>
              <textarea name="itemlist" class="" readonly="true"></textarea> <br />
              <input type="button" name="additem" class="itembtn" value="Add Item"/>
              <input type="button" name="remitem" class="itembtn" value="Remove Item"/>
              <h4>Advance Payment :</h4>
              <label class="lbladvance"> Total Cost : </label>
              <input type="text" name="totalcost" class="txtpayment" readonly="true"/><br />
              <label class="lbladvance"> Advance Payment :</label>
              <input type="text" name="advance" class="txtpayment" readonly="true"/>
              <input type="checkbox" name="paid" class="checkbtn" value="on"/> Advance Paid
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="2" align="right">
            <input type="submit" name="submit" class="mainbtn" value="Purchase Order"/>
            <input type="reset" name="reset" class="mainbtn" value="Cancel"/>
          </td>
        </tr>
      </table>
    </form>

  </div>
</body>
</html>
