
/* __Constants__ */

var SEARCH_RESULTS = "#search-results";

var INPUT_EMAIL = "#email";
var INPUT_ALIAS = "#alias";

/* __Functions__ */

function filterUsers(criteria, userList) {
	var regx = new RegExp(criteria[0].toLowerCase());
	var users = [];
	var len = userList.length;
	for (var i=0; i < len; i++) {
		var matched = userList[i][0].toLowerCase().match(regx);
		if (matched != null) {
			users.push(userList[i]);
		}
	}
	return users;
}

function update(userList) {
	var criteria = [];
	var users;
	
	criteria.push($(INPUT_EMAIL).val());
	users = filterUsers(criteria, userList);
	
	var result = '';
	for (var i=0; i < users.length; i++)  {
		result += '<tr>';
		result += '<td>' + users[i][0] + '</td>';
		result += '<td>' + users[i][1] + '</td>';
		result += '</tr>';
	}
	$(SEARCH_RESULTS).html( result );
}