/**
 * cust_checkbox_plugin.js
 * Copyright (c) 2010 myPocket technologies (www.mypocket-technologies.com)
 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:

 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.

 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.

 * @author Darren Mason (djmason9@gmail.com)
 * @date 7/3/2009
 * @projectDescription	Replaces the standard HTML form checkbox or radio buttons. Allows for disable, and very customizable.
 * @version 1.0.6
 * 
 * @requires jquery.js (tested with 1.3.2)
 * 
 * @param disable_all:	false,
 * @param hover:	true,
 * @param wrapperclass:	"group"
 * @param callback:	function(){ * your code here * }
 */

(function($) {	
	$.fn.custCheckBox = function(options){
		
		var defaults = {
				disable_all:	false,				//disables all the elements
				hover:	true,						//adds a hover state to the tag
				wrapperclass:	"group",			//the class name of the wrapper tag
				callback:	function(){}			//a click event call back
			};
		//override defaults
		var opts = $.extend(defaults, options);
		
		return this.each(function() { 
	 		 var obj = $(this);
	 		 
		$.fn.buildbox = function(thisElm){
			
			$(thisElm).css({display:"none"}).before("<span class=\"cust_checkbox\">&nbsp;&nbsp;&nbsp;&nbsp;</span>");
			
			var isChecked = $(thisElm).prop("checked");
			var boxtype = $(thisElm).attr("type");
			var disabled = $(thisElm).attr("disabled");
			
			if(boxtype === "checkbox")
			{
				$(thisElm).prev("span").addClass("checkbox");
				if(disabled || opts.disable_all){boxtype = "checkbox_disabled";}
			}
			else
			{
				$(thisElm).prev("span").addClass("radio");
				if(disabled || opts.disable_all){boxtype = "radio_disabled";}
			}
			
			if(isChecked)
				$(thisElm).prev("span").addClass("cust_"+boxtype+"_on");
			else
				$(thisElm).prev("span").addClass("cust_"+boxtype+"_off");
			
			if(opts.disable_all)
				$(thisElm).attr("disabled","disabled");
			
			
			//attach a click event for each label.
			
			$(thisElm).prev("span").prev("label").unbind().click(function(){
						
				if(!opts.disable_all)
				{
					var custbox = $(this).next("span");
					var boxtype = $(custbox).next("input").attr("type");
					var disabled = $(custbox).next("input").attr("disabled");

					if($(custbox).hasClass("checkbox"))
					{
						if($(custbox).hasClass("cust_"+boxtype+"_off") && !disabled)
						{
							$(custbox).removeClass("cust_"+boxtype+"_off").addClass("cust_"+boxtype+"_on").next("input").prop('checked', true); //turn on
						}
						
						else if(!disabled)		
						{
							$(custbox).removeClass("cust_"+boxtype+"_on").addClass("cust_"+boxtype+"_off").next("input").prop('checked', false); //turn off
							$(custbox).removeClass("cust_"+boxtype+"_hvr");
						}
						
						
					}
					else if(!disabled)
					{
						$(custbox).parent().find(".cust_checkbox").removeClass("cust_"+boxtype+"_on").addClass("cust_"+boxtype+"_off").next("input").prop('checked', false);
						$(custbox).removeClass("cust_"+boxtype+"_off").addClass("cust_"+boxtype+"_on").next("input").prop('checked', true); //turn on
						$(custbox).removeClass("cust_"+boxtype+"_hvr");
					}
					
					opts.callback.call(this);					 
					
				}
						
			}).hover(function(){
				var custbox = $(this).next("span");
				if($(custbox).hasClass("cust_checkbox_on") && opts.hover)
					$(custbox).addClass("cust_checkbox_hvr");
				else if($(custbox).hasClass("cust_radio_on") && opts.hover)
					$(custbox).addClass("cust_radio_hvr");
				
			},function(){
				var custbox = $(this).next("span");
				if($(custbox).hasClass("cust_checkbox_on") && opts.hover)
					$(custbox).removeClass("cust_checkbox_hvr");
				else if($(custbox).hasClass("cust_radio_on") && opts.hover)
					$(custbox).removeClass("cust_radio_hvr");
				
			});
		
			//attach a click event for each checkbox.
			$(thisElm).prev("span").unbind().click(function(){
			
				if(!opts.disable_all)
				{
					var boxtype = $(this).next("input").attr("type");
					var disabled = $(this).next("input").attr("disabled");

					if($(this).hasClass("checkbox"))
					{
						if($(this).hasClass("cust_"+boxtype+"_off") && !disabled){
						
							$(this).removeClass("cust_"+boxtype+"_off").addClass("cust_"+boxtype+"_on").next("input").prop('checked', true); //turn on
						}
						else if(!disabled)
						{
							
							$(this).removeClass("cust_"+boxtype+"_on").addClass("cust_"+boxtype+"_off").next("input").removeProp('checked'); //turn off
							$(this).removeClass("cust_"+boxtype+"_hvr");
						}
					}
					else if(!disabled)
					{
						$(this).parent().find(".cust_checkbox").removeClass("cust_"+boxtype+"_on").addClass("cust_"+boxtype+"_off").next("input").removeProp('checked');
						$(this).removeClass("cust_"+boxtype+"_off").addClass("cust_"+boxtype+"_on").next("input").prop('checked', true); //turn on
					}

					opts.callback.call(this);

				}
			}).hover(function(){
				if($(this).hasClass("cust_checkbox_on") && opts.hover)
					$(this).addClass("cust_checkbox_hvr");
				else if($(this).hasClass("cust_radio_on") && opts.hover)
					$(this).addClass("cust_radio_hvr");
			},function(){
				if($(this).hasClass("cust_checkbox_on") && opts.hover)
					$(this).removeClass("cust_checkbox_hvr");
				else if($(this).hasClass("cust_radio_on") && opts.hover)
					$(this).removeClass("cust_radio_hvr");
			});			
			
		};
		
		//build the boxes
		$.fn.buildbox($(obj));
		
		
		
		
	}); 	
};
	
})(jQuery);
