@extends('backend.master')
@section('title')
Home Dashboard
@endsection

@section('content')

  
  <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
    <div class="col">
      <div class="alert-success alert mb-0">
        <div class="d-flex align-items-center">
          <div
            class="avatar rounded no-thumbnail bg-success text-light"
          >
            <i class="fa fa-user fa-lg"></i>
          </div>

          
          <div class="flex-fill ms-3 text-truncate">
            <div class="h6 mb-0">Registered Clients</div>
            <span class="small">18,925</span>
          </div>
            
          
          

        </div>
      </div>
    </div>
    <div class="col">
      <div class="alert-danger alert mb-0">
        <div class="d-flex align-items-center">
          <div
            class="avatar rounded no-thumbnail bg-danger text-light"
          >
            <i class="fa fa-credit-card fa-lg"></i>
          </div>
          <div class="flex-fill ms-3 text-truncate">
            <div class="h6 mb-0">Withdrawal Request</div>
            <span class="small">$11,024</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="alert-warning alert mb-0">
        <div class="d-flex align-items-center">
          <div
            class="avatar rounded no-thumbnail bg-warning text-light"
          >
            <i class="fa fa-smile-o fa-lg"></i>
          </div>
          <div class="flex-fill ms-3 text-truncate">
            <div class="h6 mb-0">Diposite</div>
            <span class="small">8,925</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="alert-info alert mb-0">
        <div class="d-flex align-items-center">
          <div class="avatar rounded no-thumbnail bg-info text-light">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
          </div>
          <div class="flex-fill ms-3 text-truncate">
            <div class="h6 mb-0">Total Investor</div>
            <span class="small">8,925</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="alert-success alert mb-0">
        <div class="d-flex align-items-center">
          <div
            class="avatar rounded no-thumbnail bg-success text-light"
          >
            <i class="fa fa-user fa-lg"></i>
          </div>
          <div class="flex-fill ms-3 text-truncate">
            <div class="h6 mb-0">Total ADS</div>
            <span class="small">18,925</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="alert-danger alert mb-0">
        <div class="d-flex align-items-center">
          <div
            class="avatar rounded no-thumbnail bg-danger text-light"
          >
            <i class="fa fa-credit-card fa-lg"></i>
          </div>
          <div class="flex-fill ms-3 text-truncate">
            <div class="h6 mb-0">Pending Diposite Amount</div>
            <span class="small">$11,024</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="alert-warning alert mb-0">
        <div class="d-flex align-items-center">
          <div
            class="avatar rounded no-thumbnail bg-warning text-light"
          >
            <i class="fa fa-smile-o fa-lg"></i>
          </div>
          <div class="flex-fill ms-3 text-truncate">
            <div class="h6 mb-0">Total Registered </div>
            <span class="small">8,925</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="alert-info alert mb-0">
        <div class="d-flex align-items-center">
          <div class="avatar rounded no-thumbnail text-light" style="background:#e4ae3f">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
          </div>
          <div class="flex-fill ms-3 text-truncate">
            <div class="h6 mb-0">Renew Subscription</div>
            <span class="small">85</span>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Row end  -->
  <div class="row g-3 mb-3">
    <div class="col-md-12">
      <div class="card">
        <div
          class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0"
        >
          <h6 class="m-0 fw-bold">Recent Registration</h6>
        </div>
        <div class="card-body">
          <table
            id="myDataTable"
            class="table table-hover align-middle mb-0"
            style="width: 100%"
          >
            <thead>

              <tr>
             
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Plan</th>
                <th>Payment Staus</th>
            
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>#78414</strong></td>
                <td><span> Shakib Hasan </span></td>
                <td>test@gmail.com</td>
                <td>01828066845</td>
                <td>Dimond</td>
                <td>
                  <span class="badge bg-success">Compleate</span>
                </td>
              </tr>
              <tr>
                <td><strong>#78414</strong></td>
                <td><span> Shakib Hasan </span></td>
                <td>test@gmail.com</td>
                <td>01828066845</td>
                <td>Dimond</td>
                <td>
                  <span class="badge bg-warning">Complited</span>
                </td>
              </tr>
              <tr>
                <td><strong>#78414</strong></td>
                <td><span> Shakib Hasan </span></td>
                <td>test@gmail.com</td>
                <td>01828066845</td>
                <td>Dimond</td>
                <td>
                  <span class="badge bg-warning">Progress</span>
                </td>
              </tr>
              <tr>
                <td><strong>#58414</strong></td>
                <td><span> Shakib Hasan </span></td>
                <td>test@gmail.com</td>
                <td>01828066845</td>
                <td>Dimond</td>
                <td>
                  <span class="badge bg-success">Complited</span>
                </td>
              </tr>
              <tr>
                <td><strong>#78414</strong></td>
                <td><span> Shakib Hasan </span></td>
                <td>test@gmail.com</td>
                <td>01828066845</td>
                <td>Dimond</td>
                <td>
                  <span class="badge bg-warning">Progress</span>
                </td>
              </tr>
              <tr>

                
                <td><strong>#58414</strong></td>
                <td><span> Shakib Hasan </span></td>
                <td>test@gmail.com</td>
                <td>01828066845</td>
                <td>Dimond</td>

                <td>
                  <span class="badge bg-success">Complited</span>
                </td>
                  
         
                

              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Row end  -->

@endif
