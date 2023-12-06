<div class="app-main flex-column flex-row-fluid mt-4 pt-4 ">

    <div class="app-container">
        <div class="page-title pb-6 d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Dashboard</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Dashboard</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        {{-- <div class="storeSec">
            <div class="container">
                <div class="storeInnerSec">
                    @if (count($stores) < 1) <a
                            href="{{ route('create-store') }}" class="storeBox">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                </svg></span>
                            <h3 class="storeBoxItemText">Create Store</h3>
                        </a>
                    @else
                        <div class="storeInnerbox">
                            @foreach ($stores as $store)
                                <div class="storeBoxItem">
                                    <div class="storeBoxItemImg">
                                        <img src="{{ $store->logo }}" alt="" />
                                    </div>
                                    <h3 class="storeBoxItemText">{{ $store->name }}</h3>
                                </div>
                            @endforeach
                            <div class="storeBoxItem">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span>
                                <h3 class="storeBoxItemText">Create Store</h3>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div> --}}

        <div class="dashbrdSec">
            <div class="dashbrdInnerSec">
                <div class="dashSummeryCard">
                    <div class="card">
                        <div class="cardTextBox">
                            <h4 class="cardText">Total Stores</h4>
                        </div>
                        <h2 class="userEarn">
                            50</h2>
                    </div>
                    <div class="card">
                        <div class="cardTextBox">
                            <h4 class="cardText">Recent Sales</h4>
                            <h5 class="cardTextDate">Last 30 days</h5>
                        </div>
                        <h2 class="totalEarn">
                            2,240</h2>
                    </div>
                    <div class="card">
                        <div class="cardTextBox">
                            <h4 class="cardText">Total Earnings</h4>
                        </div>
                        <h2 class="pendEarn">
                            $50,240</h2>
                    </div>
                    <div class="card">
                        <div class="cardTextBox">
                            <h4 class="cardText">Pending Orders</h4>
                            <h5 class="cardTextPrs">In processing</h5>
                        </div>
                        <h2 class="recentEarn">
                            10</h2>
                    </div>
                </div>
                <div class="graphSec py-8">
                    <div class="lineGraph">
                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                    </div>
                    <div class="pieGraph">
                        <canvas id="myPieChart" style="width:100%;max-width:600px"></canvas>
                    </div>
                </div>
                <div class="dashContent">
                    <div class="leftContent py-8">
                        <div class="orderSec">
                            <div class="orderTable">
                                <table class="w-100 uploadListTable">
                                    <tr class="tableHead text-center">
                                        <th>Order Number</th>
                                        <th>Customer Name</th>
                                        <th>Product</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>

                                    <tbody class="w-100">
                                        <tr class="uploadListRow text-center">
                                            <td>01</td>
                                            <td>John Raw</td>
                                            <td>Grand Court Cloudfoam</td>
                                            <td>Apr 2, 2023</td>
                                            <td><a href="javascript:void(0)" class="Status">Error</a></td>
                                        </tr>

                                        <tr class="uploadListRow text-center">
                                            <td>01</td>
                                            <td>John Raw</td>
                                            <td>Grand Court Cloudfoam</td>
                                            <td>Apr 2, 2023</td>
                                            <td><a href="javascript:void(0)" class="Status">Error</a></td>
                                        </tr>
                                        <tr class="uploadListRow text-center">
                                            <td>01</td>
                                            <td>John Raw</td>
                                            <td>Grand Court Cloudfoam</td>
                                            <td>Apr 2, 2023</td>
                                            <td><a href="javascript:void(0)" class="Status">Error</a></td>
                                        </tr>
                                        <tr class="uploadListRow text-center">
                                            <td>01</td>
                                            <td>John Raw</td>
                                            <td>Grand Court Cloudfoam</td>
                                            <td>Apr 2, 2023</td>
                                            <td><a href="javascript:void(0)" class="Status">Error</a></td>
                                        </tr>
                                        <tr class="uploadListRow text-center">
                                            <td>01</td>
                                            <td>John Raw</td>
                                            <td>Grand Court Cloudfoam</td>
                                            <td>Apr 2, 2023</td>
                                            <td><a href="javascript:void(0)" class="Status">Error</a></td>
                                        </tr>
                                        <tr class="uploadListRow text-center">
                                            <td>01</td>
                                            <td>John Raw</td>
                                            <td>Grand Court Cloudfoam</td>
                                            <td>Apr 2, 2023</td>
                                            <td><a href="javascript:void(0)" class="Status">Error</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="rightContent">
                        <div class="rightContentFeed py-8">
                            <h3 class="feedTitle pt-4">Active Feed</h3>
                            <ul class="d-flex flex-col gap-4 py-8">
                                <li>
                                    <div class="newsFeed d-flex align-items-center justify-content-start">
                                        <div class="newsFeedImg"> <img src="assets/images/customer.png"
                                                alt="image" />
                                        </div>
                                        <p class="text-white font-medium text-sm">Lorem Ipsum is simply dummy text of
                                            the
                                            printing and typesetting industry.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="newsFeed d-flex align-items-center justify-content-start">
                                        <div class="newsFeedImg"> <img src="assets/images/customer.png"
                                                alt="image" />
                                        </div>
                                        <p class="text-white font-medium text-sm">Lorem Ipsum is simply dummy text of
                                            the
                                            printing and typesetting industry.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="newsFeed d-flex align-items-center justify-content-start">
                                        <div class="newsFeedImg"> <img src="assets/images/customer.png"
                                                alt="image" />
                                        </div>
                                        <p class="text-white font-medium text-sm">Lorem Ipsum is simply dummy text of
                                            the
                                            printing and typesetting industry.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="newsFeed d-flex align-items-center justify-content-start">
                                        <div class="newsFeedImg"> <img src="assets/images/customer.png"
                                                alt="image" />
                                        </div>
                                        <p class="text-white font-medium text-sm">Lorem Ipsum is simply dummy text of
                                            the
                                            printing and typesetting industry.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="pieChartBox">
                            <canvas id="piechart"></canvas>
                        </div>
                    </div>



                </div>
            </div>



        </div>
        {{-- <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <script>
            const xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
            const yValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

            new Chart("myChart", {
                type: "line",
                data: {
                    labels: xValues,
                    datasets: [{
                        fill: false,
                        lineTension: 0,
                        backgroundColor: "rgba(0,0,255,1.0)",
                        borderColor: "rgba(0,0,255,0.1)",
                        data: yValues
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                min: 6,
                                max: 16
                            }
                        }],
                    }
                }
            });

            
        </script> --}}


        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx1 = document.getElementById('myChart');
            new Chart(ctx1, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                        'October', 'November', 'December'
                    ],
                    datasets: [{
                        label: '# of Votes',
                        data: [1, 10, 3, 5, 2, 3, 7, 8, 2, 5, 4],
                        borderWidth: 1,
                        borderColor: "#1d3557",
                        backgroundColor: "#1163e9",
                        pointBackgroundColor: "black",
                        pointBorderColor: "#55bae7",
                        pointHoverBackgroundColor: "#55bae7",
                        pointHoverBorderColor: "#55bae7",


                    }],

                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                        // plugins: {
                        //     legend: {
                        //         labels: {
                        //             color: "black",
                        //             font: {
                        //                 size:25
                        //             }
                        //         }
                        //     }
                        // },
                    }
                }
            });

            const ctx2 = document.getElementById('myPieChart');
            new Chart(ctx2, {
                type: 'pie',
                data: {
                    // labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                    //     'October', 'November', 'December'
                    // ],
                    datasets: [{
                        label: '# of Votes',
                        data: [1, 10, 3, 5, 2, 3, 7, 8, 2, 5, 4],
                        borderWidth: 1,
                        borderColor: "#1d3557",
                        backgroundColor: "#a8dadc",
                        // pointBackgroundColor: "black",
                        // pointBorderColor: "#55bae7",
                        // pointHoverBackgroundColor: "#55bae7",
                        // pointHoverBorderColor: "#55bae7",


                    }],

                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                        // plugins: {
                        //     legend: {
                        //         labels: {
                        //             color: "black",
                        //             font: {
                        //                 size:25
                        //             }
                        //         }
                        //     }
                        // },
                    }
                }
            });
        </script>
