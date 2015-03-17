
/* __Constants__ */

var ALIAS_CASE = "alias";
var ALIAS_INPUT = "#alias";
var ALIAS_RESULT = "#search-alias";

var EMAIL_CASE = "email";
var EMAIL_INPUT = "#email";
var EMAIL_RESULT = "#search-email";

/* __Functions__ */

function filterUsers(criteria, userList, index) {
	var regx = new RegExp(criteria.toLowerCase());
	var users = [];
	var len = userList.length;
	for (var i=0; i < len; i++) {
		var matched = userList[i][index].toLowerCase().match(regx);
		if (matched != null) {
			users.push(userList[i][index]);
		}
	}
	return users;
}

function update(category, userList) {
	var email = $(EMAIL_INPUT).val();
	switch (category) {
		case EMAIL_CASE:
			var result = '<p style="color:black">';
			if (email != null && email != "") {
				var users = filterUsers(email, userList, 0);
				for (var i=0; i < users.length; i++) 
					result += users[i] + '</br>';
				result += '</p>';
			} else {
				result = '<p style="color:black"> </br> </p>';
			}
			$(EMAIL_RESULT).html( result );
			break;
	}
}