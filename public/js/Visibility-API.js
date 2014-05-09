// main visibility API function 
// use visibility API to check if current tab is active or not
var vis = (function(){
    var stateKey, 
        eventKey, 
        keys = {
                hidden: "visibilitychange",
                webkitHidden: "webkitvisibilitychange",
                mozHidden: "mozvisibilitychange",
                msHidden: "msvisibilitychange"
    };
    for (stateKey in keys) {
        if (stateKey in document) {
            eventKey = keys[stateKey];
            break;
        }
    }
    return function(c) {
        if (c) document.addEventListener(eventKey, c);
        return !document[stateKey];
    }
})();

// check if current tab is active or not
vis(function(){
					
    if(vis()){
	
        // tween resume() code goes here
        $(document).ready(FillWatermark);
	setTimeout(function(){            
        },300);		
												
    } else {
	
        // tween pause() code goes here
        $(document).ready();	 
    }
});

// check if browser window has focus		
var notIE = (document.documentMode === undefined),
    isChromium = window.chrome;
      
if (notIE && !isChromium) {

    // checks for Firefox and other  NON IE Chrome versions
    $(window).on("focusin", function () { 

        // tween resume() code goes here
        $(document).ready(FillWatermark);
        setTimeout(function(){            
            console.log("focus");
        },300);

    }).on("focusout", function () {

        // tween pause() code goes here
        $(document).ready();
        console.log("blur");

    });

} else {
    
    // checks for IE and Chromium versions
    if (window.addEventListener) {

        // bind focus event
        window.addEventListener("focus", function (event) {

            // tween resume() code goes here
            $(document).ready(FillWatermark);
            setTimeout(function(){                 
                 console.log("focus");
            },300);

        }, false);

        // bind blur event
        window.addEventListener("blur", function (event) {

            // tween pause() code goes here
            $(document).ready();
             console.log("blur");

        }, false);

    } else {

        // bind focus event
        window.attachEvent("focus", function (event) {

            // tween resume() code goes here
            $(document).ready(FillWatermark);
            setTimeout(function(){                 
                 console.log("focus");
            },300);

        });

        // bind focus event
        window.attachEvent("blur", function (event) {

            // tween pause() code goes here
            $(document).ready();
            console.log("blur");

        });
    }
}
