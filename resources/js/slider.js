var sheet = document.createElement('style'),  
$rangeInput = $('.range input'),
prefs = ['webkit-slider-runnable-track', 'moz-range-track', 'ms-track'];

document.body.appendChild(sheet);

var getTrackStyle = function (el) {  
var curVal = el.value,
    val = (curVal - 1) * 16.666666667,
    style = '';

// Set active label
$('.range-labels li').removeClass('active selected').addClass('hide');

var curLabel = $('.range-labels').find('li:nth-child(' + curVal + ')');

curLabel.addClass('active selected').removeClass('hide');
curLabel.prevAll().addClass('selected hide').removeClass('selected');

// Change background gradient
for (var i = 0; i < prefs.length; i++) {
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