@extends('layouts.master')


@section('title')
    Dashboard | Bladna
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                 <h4 class="card-title"> Dashboard</h4>
              </div>
                <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Users</h5>
                                <p class="card-text">{{ $totalCounts['users']  }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Vendors</h5>
                                <p class="card-text">{{ $totalCounts['vendors']  }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Products</h5>
                                <p class="card-text">{{ $totalCounts['items']  }}</p>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">posts</h5>
                                <p class="card-text">{{ $totalCounts['posts']  }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                </br> </br> </br>
            <h3> the monthly registered users</h3>


                    <div class="col-md-10">
                        <div id="container"></div>
                        <canvas id="myChart"></canvas>
                       
                    </div>
             </div>
                </br>
                   
                </div>
        </div>
    </div>
</div>
@endsection



@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
                                const ctx = document.getElementById('myChart').getContext('2d');
                                var userChart= new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                    labels: {!! json_encode($labels) !!},
                                    datasets: {!! json_encode($datasets) !!}
                                    },
                                });
                                </script>
@endsection