<div>
    <div class="row m-0">
        <div class="col-md-2 p-0 scrollable" style="height: 100vh;">
            <div class="row m-0 text-center text-white pb-3" style="background-color: #4654d3">
                <i class="bi bi-person-circle" style="font-size: 5em;"></i>
                <p class="fw-bold fs-5">Kaiser</p>
                <div class="row m-0 d-block mb-3">
                    <i class="bi bi-person-circle fs-5 ps-0 "></i>
                    <i class="bi bi-person-circle fs-5 ps-0"></i>
                    <i class="bi bi-person-circle fs-5 ps-0"></i>
                    <i class="bi bi-person-circle fs-5 ps-0"></i>
                    <i class="bi bi-person-circle fs-5 ps-0"></i>
                    <i class="bi bi-person-circle fs-5 ps-0"></i>
                    <i class="bi bi-person-circle fs-5 ps-0"></i>
                    <i class="bi bi-person-circle fs-5 ps-0"></i>
                    <i class="bi bi-person-circle fs-5 ps-0"></i>
                    <i class="bi bi-person-circle fs-5 ps-0"></i>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="defalutcheck" id="today" checked>
                    <label class="form-check-label" for="today">
                        Today
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="defalutcheck" id="this-week">
                    <label class="form-check-label" for="this-week">
                        This week
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="defalutcheck" id="this-month">
                    <label class="form-check-label" for="this-month">
                        This month
                    </label>
                </div>
            </div>
            <div class="row m-0 pt-3 text-white" style="background-color: #273589">
                <div class="row m-0 mb-3">
                    <div class="col-3 m-auto">
                        <i class="bi bi-1-circle fs-3"></i>
                    </div>
                    <div class="col-9 p-0">
                        <p class="m-0 fs14">Total Number of Opportunities</p>
                    </div>
                </div>
                <div class="row m-0 text-center mb-3">
                    <p class="m-0 fs-4" style="color: greenyellow;">0</p>
                </div>

                <div class="row m-0 mb-3">
                    <div class="col-3 m-auto">
                        <i class="bi bi-currency-dollar fs-3"></i>
                    </div>
                    <div class="col-9 p-0">
                        <p class="m-0 fs14">Total Amount of Opportunities</p>
                    </div>
                </div>
                <div class="row m-0 text-center mb-3">
                    <p class="m-0 fs-4" style="color: greenyellow;">0</p>
                </div>

                <div class="row m-0 mb-3">
                    <div class="col-3 m-auto">
                        <i class="bi bi-type-strikethrough fs-3"></i>
                    </div>
                    <div class="col-9 p-0">
                        <p class="m-0 fs14">Average Opportunities Amount</p>
                    </div>
                </div>
                <div class="row m-0 text-center mb-3">
                    <p class="m-0 fs-4" style="color: greenyellow;">0</p>
                </div>

            </div>
        </div>
        <div class="col-md-10 scrollable" style="background-color: aliceblue; height: 100vh;">
            <div class="row m-0 pt-3 pb-3">
                <div class="col-6">
                    <p class="fs-5 m-0">Inbound</p>
                </div>
                <div class="col-6 text-end">
                    <i class="bi bi-question-circle fs-4"></i>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-6">
                    <div class="bg-white m-0 p-0 p-2 rounded-4 row" style="height: 280px;">
                        <p class="fs12 p-0">New Leads</p>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                <th>Lead</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Company</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th>Albert</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>
                                <tr>
                                <th>Alex</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                </tr>
                                <tr>
                                <th>Alok</th>
                                <td>Larry the Bird</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bg-white m-0 p-0 p-2 rounded-4 row" style="height: 280px;">
                        <canvas id="inboundChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="row m-0 pt-3 pb-3">
                <div class="col-6">
                    <p class="fs-5 m-0">Outbound</p>
                </div>
            </div>

            <div class="row m-0 mb-3">
                <div class="col-6">
                    <div class="bg-white m-0 p-0 p-2 rounded-4 row" style="height: 280px;">
                        <canvas id="outboundChart"></canvas>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bg-white m-0 p-0 p-2 rounded-4 row" style="height: 280px;">
                        <p class="fs12 p-0">Task</p>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                <th scope="col">Lead</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Company</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Albert</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>
                                <tr>
                                <td>Alex</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                </tr>
                                <tr>
                                <td>Alok</td>
                                <td>Larry the Bird</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        const ctx = document.getElementById('inboundChart');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [
                    'Red',
                    'Blue',
                    'Yellow'
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: [300, 50, 100],
                    backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                    ],
                    hoverOffset: 4
                }]
            },
            // options: {
            // scales: {
            //     y: {
            //     beginAtZero: true
            //     }
            // }
            // }
        });

        const ctx1 = document.getElementById('outboundChart');

        new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Positive', 'Negative'],
                datasets: [{
                    data: [100, -50],
                    backgroundColor: 'rgb(255, 99, 132)'
                }],
            },
            options: {
                scales: {
                    y: {
                        type: 'linear',
                        grace: '5%'
                    }
                },
                plugins: {
                    legend: false
                }
            }
        });
    </script>
</div>
