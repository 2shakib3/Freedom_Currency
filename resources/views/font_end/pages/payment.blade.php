
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>payment</title>
  </head>
  <body>
 
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
           
                <form action="{{ url('payment/post') }}" method="post">
                    @csrf
                    <div>
                      @if (session('status'))
                   <h3>{{ session('status') }}</h3>
                        
                      @endif
                    </div>
                      <h1>Make Your Payment</h1>
                    <div class="form-group">
                        <input type="hidden" class="form-control"  name="user_id">
                      </div>

                      <div class="form-group">
                        <label>Package Name</label>
                        <input type="text" class="form-control"  name="package_name"   value="{{ $packege->package_name }}">
                      </div>
                      
                      <div class="form-group">
                        <label> Amount</label>
                        <input type="number" class="form-control"  name="amount"   value="{{ $packege->invest }}">
                      </div>

                      <div class="form-group">
                        <label>Reciver  Account </label>
                        <input type="number" class="form-control"  name="reciver_account" placeholder="Enter Reciver Account No">
                      </div>


                      <div class="form-group">
                        <label >Enter Payment Method</label>
                        <select name="pay_method" id=""  class="form-control">
                          <option value="0">Choose Your Payment Option</option>
                          <option value="1">Trust Wallet</option>
                            <option value="2">Bkash</option>
                            <option value="3">Nagad</option>
                            <option value="4">Rocket</option>
                            <option value="5">Tab</option>
                            <option value="6">Upay</option>
                            <option value="7">Binance</option>
                        </select>
                      </div>   

                      <div class="form-group">
                        <label>Transaction ID</label>
                        <input type="number" class="form-control"  name="transaction_id" placeholder="Enter Transaction ID">
                      </div>

                      <div class="form-group">
                        <label>Deposit Screenshot</label>
                        <input type="file" class="form-control"  name="deposit_screenshot">
                      </div>

                      <div class="form-group">
                        <label>Date of Submission</label>
                        <input type="date" class="form-control"  name="date_of_submission" placeholder="Enter Transaction ID">
                      </div>

                      <div class="form-group">
                     <input type="submit"  class="form-control">
                      </div>

                </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
