////////////////////////////////////////////////////////////////////////////////////////////////
//
//	Forum Message User Panel
//
////////////////////////////////////////////////////////////////////////////////////////////////
	var TYPE_DIV_TOGGLE 	= 'edit-content-toggle';
	var TYPE_DIV_CONTENT 	= 'edit-content';
	var TYPE_CANCEL 			= 'edit-content-btn-cancel';
	var TYPE_EDIT 				= 'edit-content-btn-edit';
	var TYPE_UPDATE 			= 'edit-content-btn-update';
	var TYPE_DELETE 			= 'edit-content-btn-delete';
	var TYPE_FORM 				= 'edit-content-form';
	var TYPE_IN_HIDDEN 		= 'edit-content-hidden';
	var TYPE_TEXT 				= 'edit-content-text';
	
	var TYPE_EDIT_BOLD		= 'edit-tag-bold';
	var TYPE_EDIT_ITALIC	= 'edit-tag-italic';
	var TYPE_EDIT_UNDERLINE	= 'edit-tag-underline';
	var TYPE_EDIT_HEAD_1	= 'edit-tag-header1';
	var TYPE_EDIT_HEAD_2	= 'edit-tag-header2';
	var TYPE_EDIT_HEAD_3	= 'edit-tag-header3';
	var TYPE_EDIT_SUP			= 'edit-tag-superscript';
	var TYPE_EDIT_SUB			= 'edit-tag-subscript';
	var TYPE_EDIT_ULIST		= 'edit-tag-ulist';
	var TYPE_EDIT_LISTITEM = 'edit-tag-ulist-item';
	var TYPE_EDIT_PARAGRAPH	= 'edit-tag-paragraph';
	
	var TAGS_BOLD					= ["<b>", "</b>"];
	var TAGS_ITALIC			  = ["<i>", "</i>"];
	var TAGS_UNDERLINE		= ["<u>", "</u>"];
	var TAGS_HEADER1			= ["<h1>", "</h1>"];
	var TAGS_HEADER2			= ["<h2>", "</h2>"];
	var TAGS_HEADER3			= ["<h3>", "</h3>"];
	var TAGS_SUP					= ["<sup>", "</sup>"];
	var TAGS_SUB					= ["<sub>", "</sub>"];
	var TAGS_ULIST				= ["<ul>", "</ul>"];
	var TAGS_LISTITEM			= ["<li>", "</li>"];
	var TAGS_PARAGRAPH		= ["<p>", "</p>"];
	
	function Html2Text(html) {
		var text = html.trim( );
		text = text.replace(/\\t/g, "");
		text = text.replace(/<br>/g, "\n");
		return text;
	}
	
	$(document).ready( function () {
		$("." + TYPE_UPDATE).hide();
		$("." + TYPE_CANCEL).hide();
		$("." + TYPE_DIV_TOGGLE).hide();
		
		$("." + TYPE_EDIT).click( function () {
			var $elem = $(this);
			var msgid = $elem.data("id");
			var $elems = $("[data-id=" + msgid + "]");
			var html = $elems.filter("." + TYPE_TEXT).val();
			var html2text = Html2Text(html);
			
			$elem.attr('disabled','disabled');
			$elems.filter("." + TYPE_DIV_CONTENT).hide();
			$elems.filter("." + TYPE_DIV_TOGGLE).show();
			$elems.filter("." + TYPE_CANCEL).show();
			$elems.filter("." + TYPE_UPDATE).show();
			$elems.filter("." + TYPE_TEXT).html(html2text);
		});
		
		$("." + TYPE_CANCEL).click( function () {
			var $elem = $(this);
			var msgid = $elem.data("id");
			var $elems = $("[data-id=" + msgid + "]");
			
			$elems.filter("." + TYPE_EDIT).removeAttr('disabled');
			$elems.filter("." + TYPE_DIV_TOGGLE).hide();
			$elems.filter("." + TYPE_CANCEL).hide();
			$elems.filter("." + TYPE_UPDATE).hide();
			$elems.filter("." + TYPE_DIV_CONTENT).show();
		});
		
		$("." + TYPE_UPDATE).click( function () {
			var $elem = $(this);
			var msgid = $elem.data("id");
			var $elems = $("[data-id=" + msgid + "]");
			
			$elems.filter("." + TYPE_DELETE).attr('disabled','disabled');
			$elems.filter("." + TYPE_DIV_TOGGLE).hide();
			$elems.filter("." + TYPE_CANCEL).hide();
			$elems.filter("." + TYPE_UPDATE).hide();
			$elems.filter("." + TYPE_DIV_CONTENT).show();
			
			$elems.filter("." + TYPE_IN_HIDDEN).val( $elems.filter("." + TYPE_TEXT).val() );
			$elems.filter("." + TYPE_FORM).submit();
		});
		
		$("." + TYPE_EDIT_BOLD).click( function () {
			var $elem = $(this);
			var msgid = $elem.data("id");
			var $elems = $("[data-id=" + msgid + "]");
			var text = $elems.filter("." + TYPE_TEXT);
			text.fieldSelection(TAGS_BOLD[0] + text.fieldSelection().text + TAGS_BOLD[1]);
		});
		
		$("." + TYPE_EDIT_ITALIC).click( function (){
			var $elem = $(this);
			var msgid = $elem.data("id");
			var $elems = $("[data-id=" + msgid + "]");
			var text = $elems.filter("." + TYPE_TEXT);
			text.fieldSelection(TAGS_ITALIC[0] + text.fieldSelection().text + TAGS_ITALIC[1]);
		});
		
		$("." + TYPE_EDIT_UNDERLINE).click( function (){
			var $elem = $(this);
			var msgid = $elem.data("id");
			var $elems = $("[data-id=" + msgid + "]");
			var text = $elems.filter("." + TYPE_TEXT);
			text.fieldSelection(TAGS_UNDERLINE[0] + text.fieldSelection().text + TAGS_UNDERLINE[1]);
		});
		
		$("." + TYPE_EDIT_HEAD_1).click( function () {
			var $elem = $(this);
			var msgid = $elem.data("id");
			var $elems = $("[data-id=" + msgid + "]");
			var text = $elems.filter("." + TYPE_TEXT);
			text.fieldSelection(TAGS_HEADER1[0] + text.fieldSelection().text + TAGS_HEADER1[1]);
		});
		
		$("." + TYPE_EDIT_HEAD_2).click( function () {
			var $elem = $(this);
			var msgid = $elem.data("id");
			var $elems = $("[data-id=" + msgid + "]");
			var text = $elems.filter("." + TYPE_TEXT);
			text.fieldSelection(TAGS_HEADER2[0] + text.fieldSelection().text + TAGS_HEADER2[1]);
		});
		
		$("." + TYPE_EDIT_HEAD_3).click( function () {
			var $elem = $(this);
			var msgid = $elem.data("id");
			var $elems = $("[data-id=" + msgid + "]");
			var text = $elems.filter("." + TYPE_TEXT);
			text.fieldSelection(TAGS_HEADER3[0] + text.fieldSelection().text + TAGS_HEADER3[1]);
		});
		
		$("." + TYPE_EDIT_SUP).click( function () {
			var $elem = $(this);
			var msgid = $elem.data("id");
			var $elems = $("[data-id=" + msgid + "]");
			var text = $elems.filter("." + TYPE_TEXT);
			text.fieldSelection(TAGS_SUP[0] + text.fieldSelection().text + TAGS_SUP[1]);
		});
		
		$("." + TYPE_EDIT_SUB).click( function () {
			var $elem = $(this);
			var msgid = $elem.data("id");
			var $elems = $("[data-id=" + msgid + "]");
			var text = $elems.filter("." + TYPE_TEXT);
			text.fieldSelection(TAGS_SUB[0] + text.fieldSelection().text + TAGS_SUB[1]);
		});
		
		$("." + TYPE_EDIT_ULIST).click( function () {
			var $elem = $(this);
			var msgid = $elem.data("id");
			var $elems = $("[data-id=" + msgid + "]");
			var text = $elems.filter("." + TYPE_TEXT);
			text.fieldSelection(TAGS_ULIST[0] + text.fieldSelection().text + TAGS_ULIST[1]);
		});
		
		$("." + TYPE_EDIT_LISTITEM).click( function () {
			var $elem = $(this);
			var msgid = $elem.data("id");
			var $elems = $("[data-id=" + msgid + "]");
			var text = $elems.filter("." + TYPE_TEXT);
			text.fieldSelection(TAGS_LISTITEM[0] + text.fieldSelection().text + TAGS_LISTITEM[1]);
		});
		
		$("." + TYPE_EDIT_PARAGRAPH).click( function () {
			var $elem = $(this);
			var msgid = $elem.data("id");
			var $elems = $("[data-id=" + msgid + "]");
			var text = $elems.filter("." + TYPE_TEXT);
			text.fieldSelection(TAGS_PARAGRAPH[0] + text.fieldSelection().text + TAGS_PARAGRAPH[1]);
		});
	});