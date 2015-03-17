
/* __Constants__ */

var SEARCH_RESULTS = "#search-results";

var INPUT_EMAIL = "#email";
var INPUT_ALIAS = "#alias";

/* __Functions__ */

function filterUsers(criteria, userList, index) {
	var regx = new RegExp(criteria.toLowerCase());
	var users = [];
	var len = userList.length;
	for (var i=0; i < len; i++) {
		var matched = userList[i][index].toLowerCase().match(regx);
		if (matched != null) {
			users.push(userList[i]);
		}
	}
	return users;
}

function update(userList) {
	var users;
	var criteria;
	var result;
	criteria = ($(INPUT_EMAIL) == null) ? "" : $(INPUT_EMAIL).val();
	users = filterUsers(criteria, userList, 0);
	criteria = ($(INPUT_ALIAS) == null) ? "" : $(INPUT_ALIAS).val();
	users = filterUsers(criteria, users, 1);
	result = '';
	for (var i=0; i < users.length; i++)  {
		result += '<tr>';
		result += '<td>' + users[i][0] + '</td>';
		result += '<td>' + users[i][1] + '</td>';
		result += '</tr>';
	}
	$(SEARCH_RESULTS).html( result );
}