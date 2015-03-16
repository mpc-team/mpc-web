
/* __Constants__ */

var ALIAS_CASE = "alias";
var ALIAS_INPUT = "#alias";
var ALIAS_RESULT = "#search-alias";

/* __Functions__ */

function filterUsers(criteria, userList) {
	var regx = new RegExp(criteria.toLowerCase());
	var users = [];
	var len = userList.length;
	for (var i=0; i < len; i++) {
		var matched = userList[i].toLowerCase().match(regx);
		if (matched != null) {
			users.push(userList[i]);
		}
	}
	return users;
}

function update(category, userList) {
	switch (category) {
		case ALIAS_CASE:
			var users = filterUsers( $(ALIAS_INPUT).val(), userList );
			var str = '';
			for (var i=0; i < users.length; i++) {
				str = str + users[i] + '</br>';
			}
			$(ALIAS_RESULT).html( "<p style='color:black'>" + str + "</p>" );
			break;
	}
}