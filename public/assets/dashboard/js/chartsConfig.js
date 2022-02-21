setTimeout(function() {
    $.getJSON('http://localhost:8000/CommandeByMatrice', function(repnce) {
        const data = {
            labels: repnce.map(({ label }) => label),
            datasets: [{
                label: 'Matrices',
                data: repnce.map(({ value }) => value),
                fill: true,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgb(255, 99, 132)',
                pointBackgroundColor: 'rgb(255, 99, 132)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 99, 132)'
            }]
        };
        const config = {
            type: 'radar',
            data: data,
            options: {

                elements: {
                    line: {
                        borderWidth: 3
                    }
                }
            },
        };
        const myChart = new Chart(
            document.getElementById('matricesPie'),
            config
        );
    });
    $.getJSON('/CommandeByMatrice', function(repnce) {

        const data = {
            labels: repnce.map(({ label }) => label),
            datasets: [{
                label: 'Matrices',
                data: repnce.map(({ value }) => value),
                fill: true,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(255, 159, 64, 0.5)',
                    'rgba(255, 205, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(201, 203, 207, 0.5)'
                ],
                borderColor: 'rgb(255, 99, 132)',
                pointBackgroundColor: 'rgb(255, 99, 132)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 99, 132)'
            }]
        };

        const config = {
            type: 'doughnut',
            data: data,
            options: {
                plugins: {
                    legend: {
                        display: true,
                        padding: '30',
                        layout: {
                            padding: '30'
                        },

                    },
                    layout: {
                        padding: '30',
                        autoPadding: true,
                    },
                    labels: {
                        showZero: true,
                        fontSize: 15,
                        showActualPercentages: true,
                        position: 'outside',
                        outsidePadding: 20,
                        textMargin: 5
                    }
                },
                elements: {
                    line: {
                        borderWidth: 3
                    }
                }
            },
        };
        const myChart = new Chart(
            document.getElementById('matricesRadar'),
            config
        );
    });
    $.getJSON('/cabyzone', function(repnce) {
        const data = {
            labels: repnce.map(({ zone }) => zone),
            datasets: [{
                label: 'CA',
                data: repnce.map(({ value }) => value),
                fill: true,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(255, 159, 64, 0.5)',
                    'rgba(255, 205, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(201, 203, 207, 0.5)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                pointBackgroundColor: 'rgb(255, 99, 132)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 99, 132)',
                borderWidth: 2
            }]
        };
        const config = {
            type: 'bar',
            data: data,
            options: {
                maintainAspectRatio: false,

                plugins: {
                    labels: {
                        render: 'value',
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };
        const myChart = new Chart(
            document.getElementById('CAbyZone'),
            config
        );
    });
    $.getJSON('http://localhost:8000/statistiqueLabo', function(repnce) {
        const data = {
            labels: repnce.map(({ month }) => month),
            datasets: [{
                type: 'bar',
                label: 'Echontillion par moi',
                data: repnce.map(({ value }) => value),
                //fill: true,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(255, 159, 64, 0.5)',
                    'rgba(255, 205, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(201, 203, 207, 0.5)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                pointBackgroundColor: 'rgb(255, 99, 132)',
                borderWidth: 2

                //pointBorderColor: '#fff',
                //pointHoverBackgroundColor: '#fff',
                //pointHoverBorderColor: 'rgb(255, 159, 64)'
            }, {
                type: 'line',
                label: 'Line Dataset',
                data: [250, 250, 250, 250, 250, 250, 250, 250, 250, 250, 250, 250],
                fill: false,
                borderColor: 'rgb(54, 162, 235)'
            }]
        };
        const config = {
            type: 'scatter',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };
        const myChart = new Chart(
            document.getElementById('statistiqueLabo'),
            config
        );
    });
    $.getJSON('/withZone', function(repnce) {
        const data = {
            labels: repnce.map(({ zone }) => zone),
            datasets: [{
                label: 'Echontillion',
                data: repnce.map(({ value }) => value),
                fill: true,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(255, 159, 64, 0.5)',
                    'rgba(255, 205, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(201, 203, 207, 0.5)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                pointBackgroundColor: 'rgb(255, 99, 132)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 99, 132)',
                borderWidth: 2

            }]
        };
        const config = {
            type: 'bar',
            data: data,
            options: {
                plugins: {
                    labels: {
                        render: 'value',
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };
        const myChart = new Chart(
            document.getElementById('echontionParZone'),
            config
        );
    });
}, 1000);