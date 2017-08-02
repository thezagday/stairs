'use strict';

(function ($) {
  'use strict';

  function badgesWithScrollAnimationExample() {
    var $badges = $('#demo-badges').find('.badge');

    $badges.waypoint({
      handler: function handler(direction) {
        var $element = $(this.element),
            cssClasses = ['animated', 'bounceInUp'];

        if (direction === 'up') return;

        $element.addClass(cssClasses.join(' '));

        var removeCssClasses = function removeCssClasses() {
          $element.removeClass(cssClasses.join(' '));
        };

        $.support.animation ? $element.one('bsAnimationEnd', removeCssClasses) : removeCssClasses();
      },
      offset: 'bottom-in-view'
    });
  }

  function toastNotificationsExample() {
    var $showToast, $clearToasts;

    $showToast = $('#demo-show-toast');
    $showToast.on('click', function (evt) {
      var options = {},
          messages = ['Toastr is a Javascript library for non-blocking notifications.', 'Progress Bar - Visually indicate how long before a toast expires.', 'Timeouts - Control how toastr interacts with users by setting timeouts appropriately.', 'Animation Method - Use the jQuery show/hide method of your choice.', 'Easings - Optionally override the animation easing to show or hide the toasts.', 'Callbacks - Define a callback for when the toast is shown/hidden', 'Close Button - Optionally enable a close button.'];

      $(':input').each(function (index) {
        var input = $(this),
            key = input.attr('id'),
            val = input.val();

        if (input.is("input[type='checkbox']")) val = input.prop('checked');

        if (key && val) options[key] = val;
      });

      var title = options.title || '',
          message = options.message || messages[Math.floor(Math.random() * messages.length)];

      toastr[options.type](message, title, options);
    });

    $clearToasts = $('#demo-clear-toasts');
    $clearToasts.click(function (evt) {
      toastr.clear();
    });
  }

  function imageCropperBasicExample() {
    var $cropper, $cropperImg;

    $cropper = $('#demo-cropper');
    $cropper.on('change', 'input', function (evt) {
      var $this = $(this),
          name = $this.attr('name'),
          options = {};

      if ($cropperImg.data('cropper')) {
        options[name] = $this.val();

        $cropperImg.cropper('destroy').cropper(options);
      }
    });

    $cropper.on('click', '[data-method]', function (evt) {
      var $this = $(this),
          data = $this.data();

      if ($cropperImg.data('cropper') && data.method) {
        $cropperImg.cropper(data.method, data.option);

        if (data.method === 'scaleX' || data.method === 'scaleY') {
          $this.data('option', -data.option);
        }
      }
    });

    $cropperImg = $('#demo-cropper-img');
    $cropperImg.cropper();
  }

  function formWizardBasicExample() {
    var $formWizard = $('#demo-form-wizard-1');

    $formWizard.bootstrapWizard({
      nextSelector: '.btn-next',
      tabClass: 'steps'
    });
  }

  function formWizardWithValidationExample() {
    var $formWizard = $('#demo-form-wizard-2');

    $formWizard.bootstrapWizard({
      nextSelector: '.btn-next',
      tabClass: 'steps',
      onNext: function onNext(tab, navigation, index) {
        return $formWizard.valid();
      },
      onTabClick: function onTabClick(tab, navigation, index) {
        return $formWizard.valid();
      }
    });
  }

  function inputMaskBasicExample() {
    var $inputmask = $('#demo-inputmask');

    $inputmask.find(':input').each(function (idx, el) {
      $(this).inputmask();
    });
  }

  function datepickerWithLeftButtonTrigger() {
    var $datepicker = $('#demo-datepicker-1'),
        $datepickerBtn = $('#demo-datepicker-1-btn');

    $datepicker.datepicker({
      autoclose: true,
      orientation: 'top right',
      showOnFocus: false
    });

    $datepickerBtn.on('click', function (evt) {
      $datepicker.datepicker('show');
    });
  }

  function datepickerWithRightButtonTrigger() {
    var $datepicker = $('#demo-datepicker-2'),
        $datepickerBtn = $('#demo-datepicker-2-btn');

    $datepicker.datepicker({
      autoclose: true,
      orientation: 'top left',
      showOnFocus: false
    });

    $datepickerBtn.on('click', function (evt) {
      $datepicker.datepicker('show');
    });
  }

  function timepickerBasicExample() {
    var $timepicker = $('#demo-timepicker-1');
    $timepicker.timepicker();
  }

  function timepickerWithNowButtonTrigger() {
    var $timepicker = $('#demo-timepicker-2'),
        $timepickerBtn = $('#demo-timepicker-2-btn');

    $timepicker.timepicker();

    $timepickerBtn.on('click', function () {
      $timepicker.timepicker('setTime', new Date());
    });
  }

  function timepickerWithDurationFromStartingTime() {
    var $datepair = $('#demo-timepicker-3'),
        $timepicker = $datepair.find('.time');

    $timepicker.timepicker({
      'showDuration': true,
      'timeFormat': 'g:ia'
    });

    $datepair.datepair();
  }

  function timepickerWithDisableTimeRanges() {
    var $timepicker = $('#demo-timepicker-4');
    $timepicker.timepicker({
      'disableTimeRanges': [['12am', '9am'], ['6:01pm', '11:31pm']]
    });
  }

  function timepickerWith24hours(argument) {
    var $timepicker = $('#demo-timepicker-5');
    $timepicker.timepicker({
      'timeFormat': 'H:i:s'
    });
  }

  function timepickerWithDatepicker() {
    var $datepair = $('#demo-timepicker-6'),
        $timepicker = $datepair.find('.time'),
        $datepicker = $datepair.find('.date');

    $timepicker.timepicker({
      'showDuration': true,
      'timeFormat': 'g:ia'
    });

    $datepicker.datepicker({
      'format': 'MM d, yyyy',
      'autoclose': true
    });

    $datepair.datepair();
  }

  function timepickerWithCustomOption(argument) {
    var $timepicker = $('#demo-timepicker-7');
    $timepicker.timepicker({
      'noneOption': [{
        'label': 'Board meeting',
        'className': 'ui-timepicker-pm',
        'value': '6:00pm'
      }]
    });
  }

  function timepickerWithDifferentIntervals() {
    var $timepicker = $('#demo-timepicker-8');
    $timepicker.timepicker({
      'step': 15
    });
  }

  function select2BasicExample() {
    var $timeZone = $('#demo-select2-1');
    $timeZone.select2();
  }

  function select2WithMultipleSelectionsExample() {
    var $userRoles = $('#demo-select2-2');
    $userRoles.select2();
  }

  function select2WithCommaSeparatedListExample() {
    var $list = $('#demo-select2-3');
    $list.select2({
      tags: true,
      tokenSeparators: [',', ' ']
    });
  }

  function select2WithCustomTemplateExample() {
    var $country = $('#demo-select2-4');
    $country.select2({
      templateResult: getCountryFlag,
      templateSelection: getCountryFlag
    });
  }

  function select2WithMobilePhoneExample() {
    var $mobilePhone = $('#demo-select2-5'),
        $mobilePhoneInput = $('#demo-select2-5-input');

    $mobilePhone.select2({
      templateResult: getCountryFlag,
      templateSelection: getCountryFlag
    });

    $mobilePhone.on('change', function (evt) {
      var countryCode = $(this).find(':selected').data('countryCode');
      $mobilePhoneInput.val(countryCode + ' ');
      $mobilePhoneInput.focus();
    });
  }

  function getCountryFlag(country) {
    var countryId, countryName, countryCode, countryFlag;

    if ((countryName = country.text) && !(countryId = country.id)) {
      return countryName;
    }

    countryCode = country.element.value.toLowerCase();
    countryFlag = 'img/flags/4x3/' + countryCode + '.svg';

    var $countryFlag = $('<span/>', {
      'text': countryName
    });

    $('<img>', {
      'class': 'img-flag',
      'src': countryFlag
    }).prependTo($countryFlag);

    return $countryFlag;
  }

  function sliderWithDonationExample() {
    var $donationSlider = $('#demo-slider-1');

    $donationSlider.slider({
      slider: 'danger',
      start: 5,
      step: 5,
      tooltips: [wNumb({
        decimals: 2,
        prefix: '$'
      })],
      pips: {
        mode: 'steps',
        filter: function filter(value, type) {
          return value % 10 ? 2 : 1;
        },
        format: wNumb({
          decimals: 2,
          prefix: '$'
        })
      }
    });

    $donationSlider = $donationSlider.slider('instance');
    $donationSlider.on('change', function (evt, values, handle) {
      if ($donationSlider.get() > 5) return;

      $donationSlider.set(5);
      toastr.warning('The minimum amount a donor can make is $5.');
    });
  }

  function sliderWithFashionModelExample() {
    var $fashionModelSlider = $('#demo-slider-2'),
        $fashionModelSliderImg = $('#demo-slider-2-img');

    $fashionModelSlider.slider({
      direction: 'rtl',
      orientation: 'vertical',
      slider: 'danger',
      start: 170,
      tooltips: [wNumb({
        decimals: 0,
        postfix: 'cm'
      })],
      range: {
        'min': 0,
        '20%': 50,
        '40%': 100,
        '60%': 150,
        '80%': 200,
        'max': 250
      },
      pips: {
        mode: 'steps',
        filter: function filter(value, type) {
          return value % 100 ? 2 : 1;
        },
        format: wNumb({
          decimals: 0
        })
      }
    });

    $fashionModelSlider = $fashionModelSlider.slider('instance');
    $fashionModelSlider.on('update', function (evt, values, handle) {
      if ($fashionModelSlider.get() < 170) {
        $fashionModelSlider.set(170);
        toastr.warning('The minimum height in order to become a model in our ' + 'agency is currently 170 cm in height (without heels).');
      }

      $fashionModelSliderImg.height($fashionModelSlider.get() * 1.6);
    });
  }

  function fileUploaderBasicExample() {
    var $uploader = $('#demo-uploader');
    $uploader.fileupload({
      autoUpload: true,
      filesContainer: '.file-list'
    });
  }

  function dynamicTableBasicExample() {
    var $dynamicTable = $('#demo-dynamic-tables-1');

    $dynamicTable.DataTable({
      columnDefs: [{
        orderable: false,
        targets: [-1, 0]
      }],
      dom: "<'row'<'col-sm-6'i><'col-sm-6'f>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-12'p>>",
      info: false,
      language: {
        paginate: {
          previous: '&laquo;',
          next: '&raquo;'
        }
      },
      order: [[3, "desc"]],
      searching: false
    });
  }

  function dynamicTableWithSearchBoxExample() {
    var $dynamicTable = $('#demo-dynamic-tables-2');

    $dynamicTable.DataTable({
      columnDefs: [{
        orderable: false,
        targets: [-1, 0]
      }],
      dom: "<'row'<'col-sm-6'i><'col-sm-6'f>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-12'p>>",
      language: {
        paginate: {
          previous: '&laquo;',
          next: '&raquo;'
        },
        search: "_INPUT_",
        searchPlaceholder: "Search…"
      },
      order: [[3, "desc"]]
    });
  }

  function googleMapBasicExample() {
    var $basicMap = $('#demo-map-1');
    if ($basicMap.length) {
      new GMaps({
        div: $basicMap[0],
        height: '300px',
        lat: 37.77,
        lng: -122.447,
        zoom: 12
      });
    }
  }

  function googleMapWithMarkersExample() {
    var $markersMap = $('#demo-map-2');
    if ($markersMap.length) {
      var markersMap = new GMaps({
        div: $markersMap[0],
        height: '300px',
        lat: 37.77,
        lng: -122.447,
        zoom: 11
      });

      markersMap.addMarker({
        title: 'Walk Over the Golden Gate Bridge',
        content: 'The Golden Gate Bridge is a suspension bridge spanning the Golden Gate strait, the one-mile-wide, three-mile-long channel between San Francisco Bay and the Pacific Ocean.',
        lat: 37.819929,
        lng: -122.478255,
        click: function click(evt) {
          toastr.info(evt.content, evt.title);
        }
      });

      markersMap.addMarker({
        title: 'RIde a Cable Car',
        content: 'The San Francisco cable car system is the world\'s last manually operated cable car system. An icon of San Francisco, the cable car system forms part of the intermodal urban transport network operated by the San Francisco Municipal Railway.',
        lat: 37.805755,
        lng: -122.414127,
        click: function click(evt) {
          toastr.info(evt.content, evt.title);
        }
      });

      markersMap.addMarker({
        title: 'Visit the Rock',
        content: 'Alcatraz Island is located in the San Francisco Bay, 1.25 miles offshore from San Francisco, California, United States.',
        lat: 37.826977,
        lng: -122.422956,
        click: function click(evt) {
          toastr.info(evt.content, evt.title);
        }
      });

      markersMap.addMarker({
        title: 'Shop in Union Square',
        content: 'Union Square is a 2.6-acre public plaza bordered by Geary, Powell, Post and Stockton Streets in downtown San Francisco, California.',
        lat: 37.787994,
        lng: -122.407437,
        click: function click(evt) {
          toastr.info(evt.content, evt.title);
        }
      });

      markersMap.addMarker({
        title: 'Explore North Beach',
        content: 'North Beach is a neighborhood in the northeast of San Francisco adjacent to Chinatown, Fisherman\'s Wharf and Russian Hill. The neighborhood is San Francisco\'s "Little Italy", and has historically been home to a large Italian American population.',
        lat: 37.806053,
        lng: -122.410331,
        click: function click(evt) {
          toastr.info(evt.content, evt.title);
        }
      });
    }
  }

  function googleMapWithPolylinesExample() {
    var $polylinesMap = $('#demo-map-3');
    if ($polylinesMap.length) {
      var polylinesMap = new GMaps({
        div: $polylinesMap[0],
        height: '300px',
        lat: 0,
        lng: -180,
        zoom: 2
      });

      var polylinesPaths = [[37.772, -122.214], [21.291, -157.821], [-18.142, 178.431], [-27.467, 153.027]];

      polylinesMap.drawPolyline({
        path: polylinesPaths,
        strokeColor: '#ff0000',
        strokeOpacity: 1.0,
        strokeWeight: 3
      });
    }
  }

  function googleMapWithPolygonsExample() {
    var $polygonsMap = $('#demo-map-4');
    if ($polygonsMap.length) {
      var polygonsMap = new GMaps({
        div: $polygonsMap[0],
        height: '300px',
        lat: 24.886,
        lng: -70.268,
        zoom: 4
      });

      var polygonsPaths = [[25.774, -80.190], [18.466, -66.118], [32.321, -64.757], [25.774, -80.190]];

      polygonsMap.drawPolygon({
        fillColor: '#ff0000',
        fillOpacity: 0.35,
        paths: polygonsPaths,
        strokeColor: '#ff0000',
        strokeOpacity: 0.8,
        strokeWeight: 2
      });
    }
  }

  function googleMapWithDrawRouteExample() {
    var $drawRoute = $('#demo-map-5');
    if ($drawRoute.length) {
      var drawRoute = new GMaps({
        div: $drawRoute[0],
        height: '300px',
        lat: 37.769040,
        lng: -122.483519,
        zoom: 12
      });

      drawRoute.drawRoute({
        destination: [37.819929, -122.478255],
        origin: [37.769040, -122.483519],
        strokeColor: '#ff0000',
        strokeOpacity: 0.75,
        strokeWeight: 6,
        travelMode: 'driving'
      });
    }
  }

  function googleMapWithDrawRouteStepByStepExample() {
    var $drawRoute = $('#demo-map-6'),
        $drawRouteBtn = $('#demo-map-6-btn');
    if ($drawRoute.length) {
      var drawRoute = new GMaps({
        div: $drawRoute[0],
        height: '300px',
        lat: 37.769040,
        lng: -122.483519,
        zoom: 12
      });

      $drawRouteBtn.on('click', function (evt) {
        drawRoute.cleanRoute();
        drawRoute.travelRoute({
          destination: [37.819929, -122.478255],
          origin: [37.769040, -122.483519],
          travelMode: 'driving',
          step: function step(evt) {
            var delay = evt.step_number * 1000;
            setTimeout(function () {
              toastr.info(evt.instructions);

              drawRoute.setCenter(evt.end_location.lat(), evt.end_location.lng());

              drawRoute.drawPolyline({
                path: evt.path,
                strokeColor: '#ff0000',
                strokeOpacity: 0.6,
                strokeWeight: 6
              });
            }, delay);
          }
        });
        evt.preventDefault();
      });
    }
  }

  function googleMapWithOpenStreetMapExample() {
    var $openStreetMap = $('#demo-map-7');
    if ($openStreetMap.length) {
      var openStreetMap = new GMaps({
        div: $openStreetMap[0],
        height: '300px',
        lat: 37.77,
        lng: -122.447,
        zoom: 12,
        mapTypeControlOptions: {
          mapTypeIds: ['hybrid', 'osm', 'roadmap', 'satellite', 'terrain']
        }
      });

      openStreetMap.addMapType('osm', {
        getTileUrl: function getTileUrl(coord, zoom) {
          return 'https://a.tile.openstreetmap.org/' + zoom + '/' + coord.x + '/' + coord.y + '.png';
        },
        maxZoom: 18,
        name: 'OpenStreetMap',
        tileSize: new google.maps.Size(256, 256)
      });

      openStreetMap.setMapTypeId('osm');
    }
  }

  var getRandomNum = function getRandomNum(min, max) {
    return Math.random() * (max - min) + min;
  };

  var getRandomInt = function getRandomInt(min, max) {
    return Math.round(getRandomNum(min, max));
  };

  var getRandomColor = function getRandomColor(opacity) {
    var values = [];
    values.push(getRandomInt(0, 255));
    values.push(getRandomInt(0, 255));
    values.push(getRandomInt(0, 255));
    values.push(opacity || '0.3');
    return 'rgba(' + values.toString() + ')';
  };

  function chartWithBubblesExample() {
    var $bubbleChart, bubbleChart, breakpoint, config, categories, randomSales, randomDifference, randomPercentage;

    $bubbleChart = $('#demo-chart-1');

    if ($bubbleChart.length) {
      categories = ['Cellphones', 'Accessories', 'Cameras', 'Computers', 'Tablets', 'Vehicle Electronics', 'Video Games', 'TV', 'Audio', 'Surveillance'];
      randomSales = function randomSales() {
        return getRandomInt(1000000, 2000000);
      };

      randomDifference = function randomDifference() {
        return getRandomNum(-0.1, 0.1);
      };

      randomPercentage = function randomPercentage() {
        return getRandomNum(5, 25);
      };

      config = {
        type: 'bubble',
        data: {
          datasets: []
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: true,
            position: 'right'
          },
          scales: {
            xAxes: [{
              scaleLabel: {
                display: true,
                labelString: 'The difference with the previous year.'
              },
              ticks: {
                userCallback: function userCallback(tick) {
                  return numeral(tick).format('0 %');
                }
              }
            }],
            yAxes: [{
              scaleLabel: {
                display: true,
                labelString: 'This Year Electronic Sales'
              },
              ticks: {
                userCallback: function userCallback(tick) {
                  return numeral(tick).format('$ 0.00 a');
                }
              }
            }]
          },
          tooltips: {
            callbacks: {
              label: function label(tooltipItem, data) {
                var datasetLabel = data.datasets[tooltipItem.datasetIndex].label,
                    dataPoint = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                return datasetLabel + ': ' + numeral(dataPoint.y).format('$0,0.00');
              }
            }
          }
        }
      };

      $.each(categories, function (i, category) {
        var data, background;

        data = {};
        background = getRandomColor(1);

        data.label = category;
        data.borderColor = background;
        data.backgroundColor = background;
        data.pointBorderColor = background;
        data.pointBackgroundColor = background;
        data.pointBorderWidth = 1;
        data.data = [{
          x: randomDifference(),
          y: randomSales(),
          r: randomPercentage()
        }];

        config.data.datasets.push(data);
      });

      bubbleChart = new Chart($bubbleChart, config);

      breakpoint = window.matchMedia('(max-width: 992px)');
      breakpoint.addListener(function (mediaQuery) {
        var legendPosition = mediaQuery.matches ? 'bottom' : 'right';
        config.options.legend.position = legendPosition;

        bubbleChart.update();
      });
    }
  }

  function chartIssuesExample() {
    var $issuesChart, config, months, types, randomIssues, randomRankings;

    $issuesChart = $('#demo-chart-2');

    if ($issuesChart.length) {
      months = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
      types = ['Questions', 'Incidents', 'Problems', 'Tasks'];

      randomIssues = function randomIssues() {
        return getRandomInt(1000, 2000);
      };

      randomRankings = function randomRankings() {
        return getRandomInt(5, 25);
      };

      config = {
        type: 'line',
        data: {
          labels: months,
          datasets: []
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            position: 'bottom'
          },
          hover: {
            mode: 'label'
          },
          scales: {
            xAxes: [{
              display: true,
              scaleLabel: {
                display: true,
                labelString: 'Month'
              }
            }],
            yAxes: [{
              display: true,
              scaleLabel: {
                display: true,
                labelString: 'Number of tickets'
              }
            }]
          },
          title: {
            display: true,
            text: 'Monthly Report'
          }
        }
      };

      $.each(types, function (i, type) {
        var issues, rankings, background, data;

        issues = [];
        rankings = [];

        $.each(months, function (i, month) {
          issues.push(randomIssues());
          rankings.push(randomRankings());
        });

        background = getRandomColor(0.5);
        data = {};

        data.backgroundColor = background;
        data.borderColor = background;
        data.data = issues;
        data.fill = false;
        data.label = type;
        data.pointBackgroundColor = background;
        data.pointBorderColor = background;
        data.pointBorderWidth = 1;
        data.pointHoverRadius = rankings;
        data.pointRadius = rankings;

        if (i % 2 == 0) {
          data.borderDash = [5, 5];
        }

        config.data.datasets.push(data);
      });

      new Chart($issuesChart, config);
    }
  }

  function chartCombinationExample() {
    var $combinationChart, randomData, config;

    $combinationChart = $('#demo-chart-3');

    if ($combinationChart.length) {
      randomData = function randomData() {
        return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
      };

      config = {
        type: 'bar',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
          datasets: [{
            data: [randomData(), randomData(), randomData(), randomData(), randomData(), randomData(), randomData()],
            label: 'Dataset 1',
            type: 'bar'
          }, {
            data: [randomData(), randomData(), randomData(), randomData(), randomData(), randomData(), randomData()],
            label: 'Dataset 2',
            type: 'bar'
          }, {
            borderDash: [5, 5],
            data: [randomData(), randomData(), randomData(), randomData(), randomData(), randomData(), randomData()],
            fill: false,
            label: 'Dataset 3',
            type: 'line'
          }]
        },
        options: {
          maintainAspectRatio: false,
          title: {
            display: true,
            text: 'Bar Line Combination Chart'
          },
          animation: {
            onComplete: function onComplete() {
              var chartInstance = this.chart;
              var ctx = chartInstance.ctx;
              ctx.textAlign = "center";

              Chart.helpers.each(this.data.datasets.forEach(function (dataset, i) {
                var meta = chartInstance.controller.getDatasetMeta(i);
                Chart.helpers.each(meta.data.forEach(function (bar, index) {
                  ctx.fillText(dataset.data[index], bar._model.x, bar._model.y - 10);
                }), this);
              }), this);
            }
          },
          legend: {
            display: false
          }
        }
      };

      $.each(config.data.datasets, function (i, dataset) {
        var background = getRandomColor(0.5);
        dataset.borderColor = background;
        dataset.backgroundColor = background;
        dataset.pointBorderColor = background;
        dataset.pointBackgroundColor = background;
        dataset.pointBorderWidth = 2;
      });

      new Chart($combinationChart, config);
    }
  }

  function chartCombinationFilledExample() {
    var $combinationChart, randomData, config;

    $combinationChart = $('#demo-chart-4');

    if ($combinationChart.length) {
      randomData = function randomData() {
        return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
      };

      config = {
        type: 'bar',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
          datasets: [{
            backgroundColor: "rgba(151,187,205,0.5)",
            borderColor: 'white',
            borderWidth: 2,
            data: [randomData(), randomData(), randomData(), randomData(), randomData(), randomData(), randomData()],
            label: 'Dataset 1',
            type: 'bar'
          }, {
            backgroundColor: "rgba(151,187,205,0.5)",
            borderColor: 'white',
            borderWidth: 2,
            data: [randomData(), randomData(), randomData(), randomData(), randomData(), randomData(), randomData()],
            label: 'Dataset 2',
            type: 'line'
          }, {
            backgroundColor: "rgba(220,220,220,0.5)",
            data: [randomData(), randomData(), randomData(), randomData(), randomData(), randomData(), randomData()],
            label: 'Dataset 3',
            type: 'bar'
          }]
        },
        options: {
          maintainAspectRatio: false,
          title: {
            display: true,
            text: 'Bar Line Combination Chart'
          },
          animation: {
            onComplete: function onComplete() {
              var chartInstance = this.chart;
              var ctx = chartInstance.ctx;
              ctx.textAlign = "center";

              Chart.helpers.each(this.data.datasets.forEach(function (dataset, i) {
                var meta = chartInstance.controller.getDatasetMeta(i);
                Chart.helpers.each(meta.data.forEach(function (bar, index) {
                  ctx.fillText(dataset.data[index], bar._model.x, bar._model.y - 10);
                }), this);
              }), this);
            }
          },
          legend: {
            display: false
          }
        }
      };

      new Chart($combinationChart, config);
    }
  }

  // Badges
  badgesWithScrollAnimationExample();

  // Toast
  toastNotificationsExample();

  // Image cropper
  imageCropperBasicExample();

  // Form wizards
  formWizardBasicExample();
  formWizardWithValidationExample();

  // Input masks
  inputMaskBasicExample();

  // Datepicker
  datepickerWithLeftButtonTrigger();
  datepickerWithRightButtonTrigger();

  // Timepicker
  timepickerBasicExample();
  timepickerWithNowButtonTrigger();
  timepickerWithDurationFromStartingTime();
  timepickerWithDisableTimeRanges();
  timepickerWith24hours();
  timepickerWithDatepicker();
  timepickerWithCustomOption();
  timepickerWithDifferentIntervals();

  // Select2
  select2BasicExample();
  select2WithMultipleSelectionsExample();
  select2WithCommaSeparatedListExample();
  select2WithCustomTemplateExample();
  select2WithMobilePhoneExample();

  // Slider
  sliderWithDonationExample();
  sliderWithFashionModelExample();

  // File uploader
  fileUploaderBasicExample();

  // Dynamic tables
  dynamicTableBasicExample();
  dynamicTableWithSearchBoxExample();

  // Google Maps
  googleMapBasicExample();
  googleMapWithMarkersExample();
  googleMapWithPolylinesExample();
  googleMapWithPolygonsExample();
  googleMapWithDrawRouteExample();
  googleMapWithDrawRouteStepByStepExample();
  googleMapWithOpenStreetMapExample();

  // Charts
  chartWithBubblesExample();
  chartIssuesExample();
  chartCombinationExample();
  chartCombinationFilledExample();
})(jQuery);
