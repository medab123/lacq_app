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
            document.getElementById('matricesRadar'),
            config
        );
    });
    $.getJSON('http://localhost:8000/statistiqueLabo', function(repnce) {
        const data = {
            labels: repnce.map(({ Moi }) => Moi),
            datasets: [{
                label: 'Matrices',
                data: repnce.map(({ commandes }) => commandes),
                fill: true,
                backgroundColor: 'rgba(255, 159, 64, 0.2)',
                borderColor: 'rgb(255, 159, 64)',
                pointBackgroundColor: 'rgb(255, 99, 132)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 159, 64)'
            }]
        };
        const config = {
            type: 'line',
            data: data,
        };
        const myChart = new Chart(
            document.getElementById('statistiqueLabo'),
            config
        );
    });
}, 1000);