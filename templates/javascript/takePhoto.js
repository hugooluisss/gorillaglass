$(document).ready(function(){
	var winPhoto = $("#winPhotoUser");
	
	winPhoto.find("#btnTakePhoto").click(function(){
		navigator.getMedia = ( navigator.getUserMedia ||
		navigator.webkitGetUserMedia ||
		navigator.mozGetUserMedia ||
		navigator.msGetUserMedia);
	});

	navigator.getMedia({
			video: true,
			audio: false
		},
		function(stream){
			if (navigator.mozGetUserMedia) {
				video.mozSrcObject = stream;
			} else {
				var vendorURL = window.URL || window.webkitURL;
				video.src = vendorURL.createObjectURL(stream);
			}
			video.play();
		},
		function(err) {
			console.log("An error occured! " + err);
		}
	);
});