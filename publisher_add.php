<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Publisher</title>
    <link rel="icon" type="image/x-icon" href="Image/logo_icon.jpeg">
  <link rel="stylesheet" href="CSS/publisher_add.css">
</head>
<body>

<div class="form-container">
    <h2>Add New Publisher</h2>
    <form action="publisher_conn.php" method="post" id="publisherForm">
        <div class="form-group">
            <label for="publishername">Publisher Name</label>
            <input type="text" id="publishername" name="publishername" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea id="address" name="address" required></textarea>
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" id="city" name="city" required>
        </div>
        <div class="form-group">
            <label for="state">State</label>
            <select id="state" name="state" required>
            <option value="">Select..</option>
            <option value="AP">Andhra Pradesh</option>
                <option value="AP">Arunachal Pradesh</option>
                <option value="AS">Assam</option>
                <option value="BR">Bihar</option>
                <option value="CG">Chhattisgarh</option>
                <option value="DL">Delhi</option>
                <option value="GA">Goa</option>
                <option value="GJ">Gujarat</option>
                <option value="HR">Haryana</option>
                <option value="HP">Himachal Pradesh</option>
                <option value="JH">Jharkhand</option>
                <option value="KR">Karnataka</option>
                <option value="KL">Kerala</option>
                <option value="MP">Madhya Pradesh</option>
                <option value="MH">Maharashtra</option>
                <option value="MA">Manipur</option>
                <option value="MG">Meghalaya</option>
                <option value="MZ">Mizoram</option>
                <option value="NG">Nagaland</option>
                <option value="OD">Odisha</option>
                <option value="PB">Punjab</option>
                <option value="RJ">Rajasthan</option>
                <option value="SK">Sikkim</option>
                <option value="TM">Tamil Nadu</option>
                <option value="TL">Telangana</option>
                <option value="TP">Tripura</option>
                <option value="UP">Uttar Pradesh</option>
                <option value="UK">Uttarakhand</option>
                <option value="WB">West Bengal</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pincode">Pin Code</label>
            <input type="text" id="pincode" name="pincode" required pattern="\d{6}">
        </div>
        <div class="form-actions">
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</div>
<!-- <script src="form_validation.js"></script> -->

</body>
</html>
