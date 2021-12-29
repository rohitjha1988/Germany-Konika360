(function ($, Drupal, drupalSettings) {

// These slider range component was used in my other component:
// https://github.com/yairEO/color-picker

var settings = {
  visible: 0, 
  theme: {
    backgroud: "rgba(0,0,0,.9)",
  },
  CSSVarTarget: document.querySelector('.range-slider'),
  knobs: [
    "Thumb",
    {
      cssVar: ['thumb-size', 'px'],
      label: 'thumb-size',
      type: 'range',
      min: 6, max: 33 //  value: 16,
    },
    "Value",
    {
      cssVar: ['value-active-color'], // alias for the CSS variable
      label: 'value active color',
      type: 'color',
      value: 'white'
    },
    {
      cssVar: ['value-background'], // alias for the CSS variable
      label: 'value-background',
      type: 'color',
    },
    {
      cssVar: ['value-background-hover'], // alias for the CSS variable
      label: 'value-background-hover',
      type: 'color',
    },
    {
      cssVar: ['primary-color'], // alias for the CSS variable
      label: 'primary-color',
      type: 'color',
    },
    {
      cssVar: ['value-offset-y', 'px'],
      label: 'value-offset-y',
      type: 'range', value: 5, min: -10, max: 20
    },
    "Track",
    {
      cssVar: ['track-height', 'px'],
      label: 'track-height',
      type: 'range', value: 8, min: 6, max: 33
    },
    {
      cssVar: ['progress-radius', 'px'],
      label: 'progress-radius',
      type: 'range', value: 20, min: 0, max: 33
    },
    {
      cssVar: ['progress-color'], // alias for the CSS variable
      label: 'progress-color',
      type: 'color',
      value: '#EEEEEE'
    },
    {
      cssVar: ['fill-color'], // alias for the CSS variable
      label: 'fill-color',
      type: 'color',
      value: '#0366D6'
    },
    "Ticks",
    {
      cssVar: ['show-min-max'],
      label: 'hide min/max',
      type: 'checkbox',
      value: 'none'
    },
    {
      cssVar: ['ticks-thickness', 'px'],
      label: 'ticks-thickness',
      type: 'range',
      value: 1, min: 0, max: 10
    },
    {
      cssVar: ['ticks-height', 'px'],
      label: 'ticks-height',
      type: 'range',
      value: 5, min: 0, max: 15
    },
    {
      cssVar: ['ticks-gap', 'px'],
      label: 'ticks-gap',
      type: 'range',
      value: 5, min: 0, max: 15
    },
    {
      cssVar: ['min-max-x-offset', '%'],
      label: 'min-max-x-offset',
      type: 'range',
      value: 10, step: 1, min: 0, max: 100
    },
    {
      cssVar: ['min-max-opacity'],
      label: 'min-max-opacity',
      type: 'range', value: .5, step: .1, min: 0, max: 1
    },
    {
      cssVar: ['ticks-color'], // alias for the CSS variable
      label: 'ticks-color',
      type: 'color',
      value: '#AAAAAA'
    },
  ]
}




var sheet = document.createElement('style'),  
  $rangeInput = $('.range input'),
  prefs = ['webkit-slider-runnable-track', 'moz-range-track', 'ms-track'];

document.body.appendChild(sheet);

var getTrackStyle = function (el) {  
  var curVal = el.value,
      val = (curVal - 1) * 24.666666667,
      style = '';
  
  // Set active label
  $('.range-labels li').removeClass('active selected');
  
  var curLabel = $('.range-labels').find('li:nth-child(' + curVal + ')');
  
  curLabel.addClass('active selected');
  curLabel.prevAll().addClass('selected');
  
  // Change background gradient
   for (var i = 0; i < prefs.length; i++) {
    style += '.rangesss {background: linear-gradient(to right, #b3e7ff    0%, #2196f3       ' + val + '%, #000 ' + val + '%, #000 100%)}';
    style += '.range input::-' + prefs[i] + '{background: linear-gradient(to right, #c6b7f2    0%, #8478c0    ' + val + '%, #e1e1e1' + val + '%, #e1e1e1 10%)}';
  }


  return style;
}

$rangeInput.on('input', function () {
  sheet.textContent = getTrackStyle(this);
});

// Change input value on label click
$('.range-labels li').on('click', function () {
  var index = $(this).index();
  
  $rangeInput.val(index + 1).trigger('input');
  
});


var sheet1 = document.createElement('style'),  
  $rangeInput1 = $('.ranges input'),
  prefs2 = ['webkit-slider-runnable-track', 'moz-range-track', 'ms-track'];

document.body.appendChild(sheet1);

var getTrackStylew = function (el) {  
  var curVal2 = el.value,
      val = (curVal2 - 1) * 24.666666667,
      style = '';
  
  // Set active label
  $('.range-labelss li').removeClass('active selected');
  
  var curLabel1 = $('.range-labelss').find('li:nth-child(' + curVal2 + ')');
  
  curLabel1.addClass('active selected');
  curLabel1.prevAll().addClass('selected');
  
  // Change background gradient
  for (var i = 0; i < prefs2.length; i++) {
    style += '.rangess {background: linear-gradient(to right, #f00    0%, #2196f3       ' + val + '%, #fff ' + val + '%, #fff 100%)}';
    style += '.ranges input::-' + prefs2[i] + '{background: linear-gradient(to right, #88ddea   0%, #017bba     ' + val + '%, #e1e1e1 ' + val + '%, #e1e1e1 100%)}';
  }


  return style;
}

$rangeInput1.on('input', function () {
  sheet1.textContent = getTrackStylew(this);
});

// Change input value on label click
$('.range-labelss li').on('click', function () {
  var index2 = $(this).index();
  
  $rangeInput1.val(index2 + 1).trigger('input');
  
});

  
})(jQuery, Drupal, drupalSettings);

