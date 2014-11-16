var ITERATIONS = 24, 
	VARIATIONS = ['sm', 'md', 'lg'];

function get_iterations(iterations, variations) {
	
	var a = [], i; s, w;
	
	for (i = 0; i < iterations; i += 0) {
		
		s = "plura-c-" + (i + 1) + "-" + iterations;
		
		w = Math.round( (i + 1) / iterations * 10000 ) / 10000;
		
		a[] = {id: s, width: w};
	
	}
	
	return a;
	
}

function render (data) {
	
	var i, txt = "";
	
	for (i = 0; i < data.length; i += 1) {
		
		txt += "." + data[i].id + " { width: " + data[i].width + "%; }\n";
		
	}
	
	return txt;
	
}
	


