
/* __Constants__ */

/* ##################################################### */

var SEARCH_RESULTS = "#search-results";

var INPUT_EMAIL = "#email";
var INPUT_ALIAS = "#alias";

var FILTER_BY_ALIAS = 0;
var FILTER_BY_EMAIL = 1;

var LIST_TYPE_PUBLIC = "public";
var LIST_TYPE_MEMBERS = "members";

var JSON_TYPE = 0;
var JSON_LIST = 1;

/* #### End of Constants ############################### */

/* __Functions__ */

function isListEmpty(list) {
	return (list.length == 0);
}

function doFilter(criteria, userList, filterBy) {
	var regx = new RegExp(criteria.toLowerCase());
	var users = [];
	var len = userList.length;
	for (var i=0; i < len; i++) {
		var matched = userList[i][filterBy].toLowerCase().match(regx);
		if (matched != null) {
			users.push(userList[i]);
		}
	}
	return users;
}

function updateList(userList) {
	if (isListEmpty(userList[JSON_LIST])) { return; }
	var users;
	var criteria;
	var type = userList[JSON_TYPE];
	userList = userList[JSON_LIST];	
	
	switch (type) {
		case LIST_TYPE_MEMBERS:
			criteria = ($(INPUT_EMAIL) == null) ? "" : $(INPUT_EMAIL).val();
			users = doFilter(criteria, userList, FILTER_BY_EMAIL);
			userList = users;
		case LIST_TYPE_PUBLIC:	
			criteria = ($(INPUT_ALIAS) == null) ? "" : $(INPUT_ALIAS).val();
			users = doFilter(criteria, userList, FILTER_BY_ALIAS);
			break;
	}	
	
	var clas;
	var result = '';
	for (var i = 0; i < users.length; i++)  {
		clas = (i % 2 == 0) ? 'alt' : '';
		result += '<tr class='+clas+'>';
		if (type == LIST_TYPE_MEMBERS)
			result += '<td>' + users[i][1] + '</td>';
		result += '<td>' + users[i][0] + '</td>';
		result += '</tr>';
	}
	$(SEARCH_RESULTS).html( result );
}


/* #### End of Functions ############################### */




