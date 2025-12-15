<html>

<head>
     <title>Deposit n Carry</title>
</head>

<body>

    <div>
      <h2>Deposit n Carry Login Page</h2>

        <form method= "POST" action="config.php">

            <div>
              <input name="username" type="text" autocomplete="off" required>
              Username
            </div><br>

            <div>
              <input name="email" type="text" autocomplete="off" required>
              Email 
            </div><br>

            <div>
               <input name="password" type="password" autocomplete="off" required>
               Password
            </div><br>

            <hr><br>

            <div>
               <input name="gender" type="radio" value="male">
               Male
            </div><br>

            <div>
               <input name="gender" type="radio" value="female">
               Female
            </div><br>

            <div>
               <input name="gender" type="radio" value="other">
               Other
            </div><br>

             <hr><br>

             <select name="paymentmethods">
             <option value="BTC">BTC</option>
             <option value="ETH">ETH</option>
             <option value="PAYPAL">PAYPAL</option>
             <option value="BankTransfers">BANK TRANSFERS</option>
             </select>
             Payment Method

             <hr><br>

            <div>
               <input name="ccn" type="tel" inputmode="numeric" maxlength="19" placeholder="xxxx xxxx xxxx xxxx">
               Enter Your CCN
            </div><br>


            <div>
               <input name="expiry" type="tel" inputmode="numeric" maxlength="7" placeholder="MM / YY">
               Expiry
            </div><br>

           <div>
               <input name="cvc" type="tel" inputmode="numeric" maxlength="4" placeholder="CVC">
               CVC
            </div><br>
            

            <hr><br>

           <input type="submit" value="Submit">

        </form>    

    </div>   

</body>

</html>
