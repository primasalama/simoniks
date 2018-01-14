 var showChar = 10;  // How many characters are shown by default
		    var ellipsestext = "...";
		    var moretext = "Show more >";
		    var lesstext = "Show less";
		    

		    $('.more').each(function() {
		        var content = $(this).html();
		 		
		        if(content.length > showChar) {
		 
		            var c = content.substr(0, showChar);
		            var h = content.substr(showChar, content.length - showChar);
		 
		            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
		 
		            $(this).html(html);
		            console.log('content : ',html);
		        }
		 
		    });
		 
		    $(".morelink").click(function(){
		        if($(this).hasClass("less")) {
		        	console.log("1");
		            $(this).removeClass("less");
		            $(this).html(moretext);
		        } else {
		        	console.log("0");
		            $(this).addClass("less");
		            $(this).html(lesstext);
		        }
		        $(this).parent().prev().toggle();
		        $(this).prev().toggle();
		        return false;
		    });