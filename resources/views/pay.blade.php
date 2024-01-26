<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="{{  asset('/CSS/pay.css')  }}">
    </head>
<body>
   
<div class="row">
  <div class="col-75">
    <div class="container">
      <table>  
        <form action="">
        
            <h3>Payment</h3>
            
                <div class="col-50">
                <label for="cname">Name on Card</label>
                <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                </div>

                <div class="col-50">
                <label for="ccnum">Credit card number</label>
                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                </div>
            

                <div class="row">
                    <div class="col-50">
                        <label for="expyear">Exp Year</label>
                        <input type="text" id="expyear" name="expyear" placeholder="2018">
                    </div>
                    <div class="col-50">
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="September">
                    </div>
                </div>

                <div class="col-50">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
          
          
                <input type="submit" value="Pay" class="btn">
        </form>  
      </table>
    </div>
  </div>
</div>
</body>
</html>