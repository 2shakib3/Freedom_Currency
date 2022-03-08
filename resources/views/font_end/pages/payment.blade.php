
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
                        <label>Payment Method</label>
                        <select name="pay_method" id="" class="form-control">
                            <option value="1">Nagad</option>
                            <option value="2">Bkash</option>
                            <option value="3">Rocket</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Payment Number</label>
                        <input type="number" class="form-control"  name="pay_number" placeholder="Enter Payment Number">
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
