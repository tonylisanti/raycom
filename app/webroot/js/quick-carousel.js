$(document).ready(function() {
  // put all your jQuery goodness in here.
	var features = $("div.scrollable");
	//===
	var animating = false;
	
	//create the automatic animation
	features.everyTime(6000, "slider", function() {
		scrollLeft(true);
	});
	
	function scrollLeft(clear){
		//stop the timer
		if(!clear){
			features.stopTime("slider");
		}
		
		if(!animating){
			animating = true;
		
			$("div.items").animate({"marginLeft":"-315px"}, 1200, function(){
				//clone the element so we can add it to the end
        var clone = $("div.items div:first").clone();
			
				//remove the element
				$("div.items div:first").remove();
			
				//set the margin left
				$("div.items").css("marginLeft", "0px");

				//append the cloned element to the end
				$("div.items").append(clone);
			
				//set the animating to false
				animating = false;
			});
		}
	}
	
	function scrollRight(){
		//stop the timer
		features.stopTime("slider");
		
		if(!animating){
			animating = true;
		
			//set the margin left to the negative value
			$("div.items").css("marginLeft", "-315px");
		
			//clone the last in the dive
			var clone = $("div.items div:last").clone();
		
			//remove the element
			$("div.items div:last").remove();

			//prepend the cloned element to the begining so it looks right
			$("div.items").prepend(clone);
		
			//animate it back to 0p
			$("div.items").animate({"marginLeft":"0px"}, 1200, function(){
				//set the animating to false
				animating = false;
			});
		}
	}
	
	$("div.scroll-left").click(scrollLeft);
	$("div.scroll-right").click(scrollRight);
		
})