var $first 	= $('.first');
var $second = $('.second');
var $last 	= $('.last');
var $answer = $('.Answer');

var $start_button = $('.start-button');
var $random_button = $('.random-button');

var iter = 0;

$start_button.on('click', function(e){
	$first.removeClass('active');
	$second.addClass('active');
});

$random_button.on('click', function(e){
	$.ajax({
		url: 'api/random.get',
		error: function(error){
			alert(error);
			console.log(error);
		},
		success: function(data){
			$second.removeClass('active');
			$last.addClass('active');
			data = JSON.parse(data);
			data = data['response']['result'];
			$answer.empty().html(data['name']);
			console.log(data);
		}
	});
});
