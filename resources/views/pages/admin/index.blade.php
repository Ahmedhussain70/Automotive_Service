@include('../componantes/navadmin')
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
</head>

<body>

      <!--  Header End -->
      <div class="container-fluid">
       
        <div class="row">
          <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Sales Overview</h5>
                  </div>
                  <div>
                  </div>
                </div>
                {!! $chart->container() !!}
              </div>
            </div>
          </div>
          <script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Yearly Earnings</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <!-- <h4 class="fw-semibold mb-3">$36,358</h4> -->
          
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                          <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                          <p class="fs-3 mb-0">last year</p>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-center">
                        </div>
                      </div>
                    </div>
                    {!! $yearlySales->container() !!}
                          <script src="{{ $yearlySales->cdn() }}"></script>

{{ $yearlySales->script() }}
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <!-- Monthly Earnings -->
                <div class="card">
                  <div class="card-body">
                    <div class="row alig n-items-start">
                      <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold"> Monthly Earnings </h5>
                        <h4 class="fw-semibold mb-3">$6,820</h4>
                        <div class="d-flex align-items-center pb-1">
                          <span
                            class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-down-right text-danger"></i>
                          </span>
                          <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                          <p class="fs-3 mb-0">last year</p>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                          <div
                            class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                            <i class="ti ti-currency-dollar fs-6"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="earning"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Product</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Date</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Budget</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
  @foreach($recentTransactions as $transaction)
  <tr>
    <td class="border-bottom-0">
      <h6 class="fw-semibold mb-1">{{ $transaction->name }}</h6>
      <span class="fw-normal"></span>
    </td>
    <td class="border-bottom-0">
      <p class="mb-0 fw-normal">{{ $transaction->proName }}</p>
    </td>
    <td class="border-bottom-0">
      <h6 class="fw-semibold mb-0 fs-4">{{ $transaction->pur_date }}</h6>
    </td>
    <td class="border-bottom-0">
      <h6 class="fw-semibold mb-0 fs-4">${{ $transaction->budget }}</h6>
    </td>
  </tr>
  @endforeach
</tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
          
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="#" class="pe-1 text-primary text-decoration-underline">Team 58 @El Shorouk Academy</a></p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>