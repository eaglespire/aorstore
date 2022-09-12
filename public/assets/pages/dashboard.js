
/*
 Template Name: Veltrix - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: Dashboard init js
 */


/***** Datepicker ******/

$('#date-pick-widget').datepicker({ 
  todayHighlight: true
});


/***** Vector map ******/

$('#world-map-markers').vectorMap({
   map : 'world_mill_en',
   scaleColors : ['rgba(255, 255, 255,0.55)', 'rgba(255, 255, 255,0.55)'],
   normalizeFunction : 'polynomial',
   hoverOpacity : 0.7,
   hoverColor : false,
   regionStyle : {
       initial : {
           fill : '#d5e7f2'
       }
   },
   markerStyle: {
       initial: {
           r: 5,
           'fill': '#e74c5e',
           'fill-opacity': 0.9,
           'stroke': '#fff',
           'stroke-width' : 4,
           'stroke-opacity': 0.4
       },

       hover: {
           'stroke': '#fff',
           'fill-opacity': 1,
           'stroke-width': 2,
       }
   },
   backgroundColor : 'transparent',
   markers : [ {
       latLng : [61.52, 105.31],
       name : 'Russia'
   }, {
       latLng : [-25.27, 133.77],
       name : 'Australia'
   },  {
       latLng : [20.59, 78.96],
       name : 'India'
   }, {
       latLng : [39.52, -87.12],
       name : 'Brazil'
   }],
   series: {
       regions: [{
           values: {
               "US": 'rgba(64, 144, 203, 0.6)',
               "AU": 'rgba(64, 144, 203, 0.6)',
               "IN": 'rgba(64, 144, 203, 0.6)',
               "RU": 'rgba(64, 144, 203, 0.6)',
           },
           attribute: 'fill'
       }]
   },
});
  

/********** Area chart ********/

var options = {
  chart: {
      height: 300,
      type: 'area',
      toolbar: {
        show: false,
      },
      foreColor: '#adb5bd'
  },
  dataLabels: {
      enabled: false
  },
  stroke: {
      curve: 'smooth',
      width: 2
  },
  series: [{
      name: 'series1',
      data: [22, 54, 42, 84, 48 ]
  },{
    name: 'series2',
    data: [11, 32, 60, 32, 34]
  }],
  colors: ['#4090cb', '#e74c5e'],
  xaxis: {
    categories: ['1', '2', '3', '4', '5'],
    title: {
      text: 'Week',
    }                
  },
  grid: {
    yaxis: {
      lines: {
        show: false,
      }
    }
  },
}

var chart = new ApexCharts(
  document.querySelector("#area-chart"),
  options
);
    
chart.render();


/********** column chart ********/

var options = {

  chart: {
    height: 300,
    type: 'bar',
    toolbar: {
      show: false,
    },
    foreColor: '#adb5bd'
  },
  plotOptions: {
    bar: {
      columnWidth: '14%',
      endingShape: 'rounded'
    }
  },
  dataLabels: {
    enabled: false
  },

  series: [{
    name: 'Series 1',
    data: [42, 56, 40, 64, 26, 42, 56, 35, 62, 46, 32, 26]
  }],
  grid: {
    yaxis: {
      lines: {
        show: false,
      }
    }
  },
  xaxis: {
    labels: {
      rotate: -90
    },
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug','Sep', 'Oct', 'Nov', 'Dec'],
    title: {
      text: 'Month',
    }
  },
  colors: ['#e74c5e'],

  fill: {
    type: 'gradient',
    gradient: {
      shade: 'dark',
      type: "vertical",
      shadeIntensity: 1,
      gradientToColors: [ '#4090cb'],
      inverseColors: true,
      opacityFrom: 0.85,
      opacityTo: 0.85,
      stops: [0, 100, 100, 100]
    },
  },

}

var chart = new ApexCharts(
  document.querySelector("#column-chart"),
  options
);

chart.render();



/********** spakline chart ********/

var options1 = {
  chart: {
    type: 'line',
    height: 60,
    sparkline: {
      enabled: true
    }
  },
  series: [{
    data: [24, 66, 42, 88, 62, 24, 45, 12, 36, 10]
  }],
  stroke: {
    curve: 'smooth',
    width: 3
  },
  colors: ['#4090cb'],
  tooltip: {
    fixed: {
      enabled: false
    },
    x: {
      show: false
    },
    y: {
      title: {
        formatter: function (seriesName) {
          return ''
        }
      }
    },
    marker: {
      show: false
    }
  }
}

new ApexCharts(document.querySelector("#chart1"), options1).render();



var options2 = {
  chart: {
    type: 'line',
    height: 60,
    sparkline: {
      enabled: true
    }
  },
  series: [{
    data: [54, 12, 24, 66, 42, 25, 44, 12, 36, 9]
  }],
  stroke: {
    curve: 'smooth',
    width: 3
  },
  colors: ['#e74c5e'],
  tooltip: {
    fixed: {
      enabled: false
    },
    x: {
      show: false
    },
    y: {
      title: {
        formatter: function (seriesName) {
          return ''
        }
      }
    },
    marker: {
      show: false
    }
  }
}

new ApexCharts(document.querySelector("#chart2"), options2).render();


var options3 = {
  chart: {
    type: 'line',
    height: 60,
    sparkline: {
      enabled: true
    }
  },
  series: [{
    data: [10, 36, 12, 44, 63, 24, 44, 12, 56, 24]
  }],
  stroke: {
    curve: 'smooth',
    width: 3
  },
  colors: ['#47bd9a'],
  tooltip: {
    fixed: {
      enabled: false
    },
    x: {
      show: false
    },
    y: {
      title: {
        formatter: function (seriesName) {
          return ''
        }
      }
    },
    marker: {
      show: false
    }
  }
}

new ApexCharts(document.querySelector("#chart3"), options3).render();



/********** peity chart ********/


$('.peity-donut').each(function () {
    $(this).peity("donut", $(this).data());
});



/********** radial chart ********/

var options = {
  chart: {
      type: 'radialBar',
      height: 210,
  },
  plotOptions: {
      radialBar: {
          startAngle: -90,
          endAngle: 90,
          track: {
              background: "#e7e7e7",
              strokeWidth: '97%',
              margin: 5, // margin is in pixels
              shadow: {
                  enabled: true,
                  top: 2,
                  left: 0,
                  color: '#999',
                  opacity: 1,
                  blur: 2
              }
          },
          dataLabels: {
              name: {
                  show: false
              },   
              value: {
                  offsetY: 10,
                  fontSize: '20px'
              }                     
          }
      },
      
  },
  colors: ['#e74c5e'],
  fill: {
      type: 'gradient',
      gradient: {
          shade: 'dark',
          type: 'horizontal',
          shadeIntensity: 0.4,
          gradientToColors: [ '#4090cb'],
          inverseColors: false,
          opacityFrom: 0.85,
          opacityTo: 0.85,
          stops: [0, 100]
      },
  },
  series: [76],
  labels: ['Average Results'],
 
}

var chart = new ApexCharts(
  document.querySelector("#radial-chart"),
  options
);

chart.render();


var options = {
  chart: {
      type: 'radialBar',
      height: 210,
  },
  plotOptions: {
      radialBar: {
          startAngle: -90,
          endAngle: 90,
          track: {
              background: "#e7e7e7",
              strokeWidth: '97%',
              margin: 5, // margin is in pixels
              shadow: {
                  enabled: true,
                  top: 2,
                  left: 0,
                  color: '#999',
                  opacity: 1,
                  blur: 2
              }
          },
          dataLabels: {
              name: {
                  show: false
              },   
              value: {
                  offsetY: 10,
                  fontSize: '20px'
              }                     
          }
      },
      
  },
  colors: ['#4090cb'],
  fill: {
      type: 'gradient',
      gradient: {
          shade: 'dark',
          type: 'horizontal',
          shadeIntensity: 0.4,
          gradientToColors: [ '#e74c5e'],
          inverseColors: false,
          opacityFrom: 0.85,
          opacityTo: 0.85,
          stops: [0, 100]
      },
  },
  series: [68],
  labels: ['Average Results'],
 
}

var chart = new ApexCharts(
  document.querySelector("#radial-chart-2"),
  options
);

chart.render();

/*********** multiple-radial-chart ************/

var options = {
  chart: {
      height: 265,
      type: 'radialBar',
  },
  plotOptions: {
      radialBar: {
          offsetY: 10,
          startAngle: 0,
          endAngle: 270,
          hollow: {
              margin: 5,
              size: '50%',
              background: 'transparent',
              image: undefined,
          },
          
          dataLabels: {
              name: {
                  show: false,
                  
              },
              value: {
                  show: false,
              }
          }
      }
  },
  colors: ['#4090cb', '#06c2de', '#eb6776'],
  series: [76,67,61],
  stroke: {
    lineCap: 'round'
  },
  labels: ['Facebook', 'Twitter', 'Instagram'],
  legend: {
      show: true,
      floating: true,
      fontSize: '12px',
      position: 'left',
      offsetX: -30,
      offsetY: 10,
      labels: {
          useSeriesColors: true,
      },
      markers: {
          size: 0
      },
      formatter: function(seriesName, opts) {
          return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex]
      },
      itemMargin: {
          horizontal: 3,
      }
  },
  responsive: [{
      breakpoint: 480,
      options: {
          legend: {
              show: false
          }
      }
  }]
}

var chart = new ApexCharts(
  document.querySelector("#multiple-radial-chart"),
  options
);

chart.render();