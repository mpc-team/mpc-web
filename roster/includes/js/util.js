
/* __Constants__ */

/* ##################################################### */

var SEARCH_RESULTS = "#search-results";

var INPUT_EMAIL = "#email";
var INPUT_ALIAS = "#alias";

var FILTER_BY_ALIAS = 0;
var FILTER_BY_EMAIL = 1;

var PERM_PUBLIC = "public";
var PERM_MEMBER = "member";
var PERM_ADMIN = "admin"

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

function updateList(userList, permissions) {
	if (isListEmpty(userList)) { return; }
	var criteria;	
	
	if (permissions.indexOf(PERM_MEMBER) > -1) {
		criteria = ($(INPUT_EMAIL) == null) ? "" : $(INPUT_EMAIL).val();
		userList = doFilter(criteria, userList, FILTER_BY_EMAIL);
	}
	criteria = ($(INPUT_ALIAS) == null) ? "" : $(INPUT_ALIAS).val();
	userList = doFilter(criteria, userList, FILTER_BY_ALIAS);
	
	var result = '';
	var clas; //for applying 'alt' class for alternating colors
	for (var i = 0; i < userList.length; i++)  {
		clas = (i % 2 == 0) ? 'alt' : '';
		result += "<tr class='"+clas+"'>";
		if (permissions.indexOf(PERM_MEMBER) > -1) {
			result += '<td>' + userList[i][1] + '</td>';
		}
		result += '<td>' + userList[i][0] + '</td>';
		result += '</tr>';
	}
	$(SEARCH_RESULTS).html( result );
}


/* #### End of Functions ############################### */




