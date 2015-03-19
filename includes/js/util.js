
/* __Constants__ */

/* ##################################################### */

var SEARCH_RESULTS = "#search-results";

var INPUT_EMAIL = "#email";
var INPUT_ALIAS = "#alias";
var INPUT_PASSWORD = "#password";
var INPUT_CONFIRM = "#confirm";

var FILTER_BY_ALIAS = 0;
var FILTER_BY_EMAIL = 1;

var PERM_PUBLIC = "public";
var PERM_MEMBER = "member";
var PERM_ADMIN = "admin"

var JSON_TYPE = 0;
var JSON_LIST = 1;

/* #### End of Constants ############################### */

/* __Functions__ */

function validateSignup() {
	var password = $(INPUT_PASSWORD).val();
	var confirmed = $(INPUT_CONFIRM).val();
	var passmatch = (password != null && password != "" && (password == confirmed))
	
	var addclass = (!passmatch) ? "has-error" : "has-success";
	var remclass = (!passmatch) ? "has-success" : "has-error";
	
	if (confirmed != null && confirmed != "") {
		$("#signup-confirm").addClass(addclass);
		$("#signup-confirm").removeClass(remclass);
	} else {
		$("#signup-confirm").removeClass("has-error");
		$("#signup-confirm").removeClass("has-success");
	}
	
	return passmatch;
}

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

function doFilterEmail(userList, permissions) {
	var criteria;
	if (permissions.indexOf(PERM_ADMIN) > -1) {
		criteria = ($(INPUT_EMAIL) == null) ? "" : $(INPUT_EMAIL).val();
		userList = doFilter(criteria, userList, FILTER_BY_EMAIL);
	}
	return userList;
}

function doFilterAlias(userList, permissions) {
	var criteria = ($(INPUT_ALIAS) == null) ? "" : $(INPUT_ALIAS).val();
	return doFilter(criteria, userList, FILTER_BY_ALIAS);
}

function htmlTableEmail(user, permissions) {
	if (permissions.indexOf(PERM_ADMIN) > -1) {
		return "<td>" + user[FILTER_BY_EMAIL] + "</td>";
	}
	return "";
}

function htmlTableAlias(user, permissions) {
	return "<td>" + user[FILTER_BY_ALIAS] + "</td>";
}

function htmlTableClass(rownum) {
	return (rownum % 2 == 0) ? "alt" : "";
}

function updateList(userList, permissions) {
	if (isListEmpty(userList)) { return; }
	userList = doFilterEmail(userList, permissions);
	userList = doFilterAlias(userList, permissions);
	var result = '';
	for (var i = 0; i < userList.length; i++)  {
		result += "<tr class='" + htmlTableClass(i) + "'>";
		result += htmlTableEmail(userList[i], permissions);
		result += htmlTableAlias(userList[i], permissions);
		result += '</tr>';
	}
	$(SEARCH_RESULTS).html(result);
}


/* #### End of Functions ############################### */



