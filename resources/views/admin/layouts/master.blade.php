<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://www.amcharts.com/lib/4/core.js"></script>
 <script src="https://www.amcharts.com/lib/4/maps.js"></script>
 <script src="https://www.amcharts.com/lib/4/geodata/usaLow.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<script src=
"https://code.jquery.com/jquery-3.7.1.min.js"
            integrity=
"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous">
        </script>
</head>
<body class="back-black overflow-hidden">
    <div class="flx-box container">
        <div class="row h-100 position-relative">
            @include('admin.partials.sideber')
            <div class="col  h-100 p-0">
                @include('admin.partials.header')




                @yield('content')
            </div>


        </div>
    </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.5/TweenMax.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>

   <script>



    $(".cancle-btn").click(function(){
        $(".side-bar").toggle()
    })
    $(".s-bar-close").click(function(){
        $(".side-bar").toggle()
    })

// theme
$(".theme").click(function(){
  $("body").toggleClass("white-b")
  $(".white-b").toggleClass("back-black")
})



    // counter

    $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});


    // charts----->


    var options = {
      chart: {
        type: "area",
        height: 300,
        foreColor: "#999",
        stacked: true,
        dropShadow: {
          enabled: true,
          enabledSeries: [0],
          top: -2,
          left: 2,
          blur: 5,
          opacity: 0.06
        }
      },
      colors: ['#00E396', '#0090FF'],
      stroke: {
        curve: "smooth",
        width: 3
      },
      dataLabels: {
        enabled: false
      },
      series: [{
        name: 'Total Views',
        data: generateDayWiseTimeSeries(0, 18)
      }, {
        name: 'Unique Views',
        data: generateDayWiseTimeSeries(1, 18)
      }],
      markers: {
        size: 0,
        strokeColor: "#fff",
        strokeWidth: 3,
        strokeOpacity: 1,
        fillOpacity: 1,
        hover: {
          size: 6
        }
      },
      xaxis: {
        type: "datetime",
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        }
      },
      yaxis: {
        labels: {
          offsetX: 14,
          offsetY: -5
        },
        tooltip: {
          enabled: true
        }
      },
      grid: {
        padding: {
          left: -5,
          right: 5
        }
      },
      tooltip: {
        x: {
          format: "dd MMM yyyy"
        },
      },
      legend: {
        position: 'top',
        horizontalAlign: 'left'
      },
      fill: {
        type: "solid",
        fillOpacity: 0.7
      }
    };

    var chart = new ApexCharts(document.querySelector("#timeline-chart"), options);

    chart.render();

    function generateDayWiseTimeSeries(s, count) {
      var values = [[
        4,3,10,9,29,19,25,9,12,7,19,5,13,9,17,2,7,5
      ], [
        2,3,8,7,22,16,23,7,11,5,12,5,10,4,15,2,6,2
      ]];
      var i = 0;
      var series = [];
      var x = new Date("11 Nov 2012").getTime();
      while (i < count) {
        series.push([x, values[s][i]]);
        x += 86400000;
        i++;
      }
      return series;
    }





    var options = {
  chart: {
    width: "100%",
    height: 380,
    type: "bar"
  },
  plotOptions: {
    bar: {
      horizontal: true
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: 1,
    colors: ["#fff"]
  },
  series: [
    {
      data: [44, 55, 41, 64, 22, 43, 21]
    }
  ],
  xaxis: {
    categories: [
      "Korea",
      "Canada",
      "Poland",
      "Italy",
      "France",
      "Japan",
      "China"
    ]
  },
  tooltip: {
    custom: function({ series, seriesIndex, dataPointIndex, w }) {
      return (
        '<div class="arrow_box">' +
        "<span>" +
        w.globals.labels[dataPointIndex] +
        ": " +
        series[seriesIndex][dataPointIndex] +
        "</span>" +
        "</div>"
      );
    }
  }
};

var chart = new ApexCharts(document.querySelector("#apex-chart"), options);

chart.render();








// pie-chart
const secondView = document.querySelector(".second");
const minuteView = document.querySelector(".minute");
const hourView = document.querySelector(".hour");
const digitalTimeView = document.querySelector(".digital-time");

function setDate() {
  const now = new Date();
  const seconds = now.getSeconds();
  const minutes = now.getMinutes();
  const hours = now.getHours();
  const digitalTime = now.toLocaleTimeString("en-US", {
    hour12: true,
    hour: "numeric",
    minute: "numeric",
    second: "numeric"
  });

  const secondsDegrees = (seconds / 60) * 360;
  const minutesDegrees = (minutes / 60) * 360;
  const hoursDegrees = (hours / 12) * 360;

  secondView.style.transform = `rotate(${secondsDegrees}deg)`;
  minuteView.style.transform = `rotate(${minutesDegrees}deg)`;
  hourView.style.transform = `rotate(${hoursDegrees}deg)`;
  digitalTimeView.textContent = digitalTime;
}

setInterval(setDate, 1000);

// chart-map
var chart = am4core.create("chartdiv", am4maps.MapChart);

// Set map definition
chart.geodata = am4geodata_usaLow;

// Set projection
chart.projection = new am4maps.projections.AlbersUsa();

// Create map polygon series
var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());
polygonSeries.useGeodata = true;

// Configure series
var polygonTemplate = polygonSeries.mapPolygons.template;
polygonTemplate.tooltipText = "{name}";
polygonTemplate.fill = am4core.color("#233d93d1");




  // page-2-charts


  var dData = function() {
  return Math.round(Math.random() * 90) + 10
};

var barChartData = {
  labels: ["dD 1", "dD 2", "dD 3", "dD 4", "dD 5", "dD 6", "dD 7", "dD 8", "dD 9", "dD 10"],
  datasets: [{
    fillColor: "rgba(0,60,100,1)",
    strokeColor: "black",
    data: [dData(), dData(), dData(), dData(), dData(), dData(), dData(), dData(), dData(), dData()]
  }]
}

var index = 11;
var ctx = document.getElementById("canvas").getContext("2d");
var barChartDemo = new Chart(ctx).Bar(barChartData, {
  responsive: true,
  barValueSpacing: 2
});
setInterval(function() {
  barChartDemo.removeData();
  barChartDemo.addData([dData()], "dD " + index);
  index++;
}, 3000);




 const msgerForm = get(".msger-inputarea");
const msgerInput = get(".msger-input");
const msgerChat = get(".msger-chat");

const BOT_MSGS = [
  "Hi, how are you?",
  "Ohh... I can't understand what you trying to say. Sorry!",
  "I like to play games... But I don't know how to play!",
  "Sorry if my answers are not relevant. :))",
  "I feel sleepy! :("
];

// Icons made by Freepik from www.flaticon.com
const BOT_IMG = "https://image.flaticon.com/icons/svg/327/327779.svg";
const PERSON_IMG = "https://image.flaticon.com/icons/svg/145/145867.svg";
const BOT_NAME = "BOT";
const PERSON_NAME = "Sajad";

msgerForm.addEventListener("submit", event => {
  event.preventDefault();

  const msgText = msgerInput.value;
  if (!msgText) return;

  appendMessage(PERSON_NAME, PERSON_IMG, "right", msgText);
  msgerInput.value = "";

  botResponse();
});

function appendMessage(name, img, side, text) {
  //   Simple solution for small apps
  const msgHTML = `
    <div class="msg ${side}-msg">
      <div class="msg-img" style="background-image: url(${img})"></div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">${name}</div>
          <div class="msg-info-time">${formatDate(new Date())}</div>
        </div>

        <div class="msg-text">${text}</div>
      </div>
    </div>
  `;

  msgerChat.insertAdjacentHTML("beforeend", msgHTML);
  msgerChat.scrollTop += 500;
}

function botResponse() {
  const r = random(0, BOT_MSGS.length - 1);
  const msgText = BOT_MSGS[r];
  const delay = msgText.split(" ").length * 100;

  setTimeout(() => {
    appendMessage(BOT_NAME, BOT_IMG, "left", msgText);
  }, delay);
}

// Utils
function get(selector, root = document) {
  return root.querySelector(selector);
}

function formatDate(date) {
  const h = "0" + date.getHours();
  const m = "0" + date.getMinutes();

  return `${h.slice(-2)}:${m.slice(-2)}`;
}

function random(min, max) {
  return Math.floor(Math.random() * (max - min) + min);
}




   </script>
</body>
</html>
