$(function () {
	$('.subnavbar').find ('li').each (function (i) {
		var mod = i % 3;
		if (mod === 2) {
			$(this).addClass ('subnavbar-open-right');
		}
	});
	$('.be-confirmed').on('click', function () {
		return confirm('Do you want to delete?');
	});
});