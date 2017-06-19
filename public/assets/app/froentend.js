$(function(){  
	$.froentend = {
		init: function(callback) {
			$("[name=search] [name=btnsearch]").click(function() { $.froentend.search($(this),callback); });
		},
		search:function(ths,callback) {
			 var proceed = true;
			$('[name=search] [required=required]').filter(function() {
				if ($.trim(this.value) == "") {
					$(this).css('background-color', '#F7B9B5').css('border-color','red');
					proceed = false;
				} else {
					$(this).css('background-color', 'white').css('border-color','')
				}
            }); 
            if(proceed) {
			 location.href = "/jobs/keyword=" + ths.closest('form').find('[name=keyword]').val() + "/location=" + ths.closest('form').find('[name=locations]').val();
			}
		},
	}
	$.froentend.init();
})(jQuery);