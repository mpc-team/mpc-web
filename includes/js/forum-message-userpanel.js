////////////////////////////////////////////////////////////////////////////////////////////////
//
//	Forum Panel Settings
//
////////////////////////////////////////////////////////////////////////////////////////////////
	var CLASS_BTN_EDIT = '.btn-edit';
	
	var TYPE_SUBMIT = 's';
	var TYPE_CANCEL = 'd';
	var TYPE_DIV_TOGGLE = 'a';
	var TYPE_DIV_CONTENT = 'c';
	var TYPE_EDIT = 'e';
	var TYPE_IN_HIDDEN = 'h';
	var TYPE_UPDATE = 't';
	var TYPE_FORM = 'f';

////////////////////////////////////////////////////////////////////////////////////////////////
//
//	Toggle UI 
//
////////////////////////////////////////////////////////////////////////////////////////////////
	function Html2Text(html) {
		var text = html.trim( );
		text = text.replace(/\\t/g, "");
		text = text.replace(/<br>/g, "\n");
		return text;
	}

	function ToggleEditControl(element, submit, discard, textdiv, content, edit, hidden, textarea, form) {
		var attrid = element.attr('id');
		var id = attrid.substring(1,attrid.length);
		var type = attrid.charAt(0);
		var msgid = element.data("id");
		switch(type) {
			case edit:
				element.attr('disabled','disabled');
				$("#"+content+id).hide();
				$("#"+discard+id).show();
				$("#"+submit+id).show();
				$("#"+textdiv+id).show();
				var htmlcontent = $("#"+textarea+id).val( );
				var html2text = Html2Text(htmlcontent);
				$("#"+textarea+id).html(html2text);
				break;
			case discard:
				$("#"+edit+id).removeAttr('disabled');
				$("#"+textdiv+id).hide();
				$("#"+discard+id).hide();
				$("#"+submit+id).hide();
				$("#"+content+id).show();
				break;
			case submit:
				$("#"+hidden+id).val($("#"+textarea+id).val());
				$("#"+form+id).submit();
				break;
		}
	}
	
////////////////////////////////////////////////////////////////////////////////////////////////
//
//	Initialization
//
////////////////////////////////////////////////////////////////////////////////////////////////
	$(document).ready(function(){
		$('button[id^="'+TYPE_SUBMIT+'"]').hide();
		$('button[id^="'+TYPE_CANCEL+'"]').hide();
		$('div[id^="'+TYPE_DIV_TOGGLE+'"]').hide();
		$(CLASS_BTN_EDIT).click(function(){ 
			ToggleEditControl(
				$(this),	
				TYPE_SUBMIT,
				TYPE_CANCEL,
				TYPE_DIV_TOGGLE,
				TYPE_DIV_CONTENT,
				TYPE_EDIT,
				TYPE_IN_HIDDEN,
				TYPE_UPDATE,
				TYPE_FORM
			);	
		});
	});