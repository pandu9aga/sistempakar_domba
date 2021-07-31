// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';


async function foo() {
  var url= 'http://localhost/sistempakar_domba/admin/home/api';
  var result= await (await fetch(url)).json(); // or .json()
  return result;
}

async function load() {
  var result = await foo();
  var penyakit = result.penyakit;
  var gejala = result.gejala;
  var rule = result.rule;

  // Pie Chart Example
  var ctx = document.getElementById("myPieChart");
  var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["Penyakit", "Gejala", "Rule"],
      datasets: [{
        data: [penyakit, gejala, rule],
        backgroundColor: ['#4e73df', '#1cc88a', '#e74a3b'],
        hoverBackgroundColor: ['#3254b6', '#17a673', '#be2617'],
        hoverBorderColor: "rgba(234, 236, 244, 1)",
      }],
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
      },
      legend: {
        display: false
      },
      cutoutPercentage: 80,
    },
  });
}

load();
