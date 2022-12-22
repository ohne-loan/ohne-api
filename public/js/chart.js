$(document).ready(function () {
    var url = "/admin/chart";
    var Data = new Array();
    var Quantity = new Array();
    $(document).ready( function() {
        $.get(url, function(response) {
            response.forEach(function(data){
                console.log(data.total);
                Data.push(data.month);
                Quantity.push(data.total);
            });
        });
        var ctx = document.getElementById("canvas").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels:Data,
                datasets: [{
                    label: 'Quantity Price',
                    data: Quantity,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    });
});