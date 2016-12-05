/* * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Filename: site.js                                   *
 * Andrew Wong 2016                                    *
 * https://github.com/bearbear12345/school_2017_12SDD  *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * */

/* Parse url search arguments */
var queryString = "";
if (window.location.search.length > 1) queryString = window.location.search.substring(1);
var queryArray = queryString.split("&");

queryDict = {}; // Expose the key dict pair to the page
for (var i in queryArray) {
	var key = queryArray[i].split("=");
	if (key.length > 1) {
		queryDict[decodeURIComponent(key[0].replace(/\+/g, " "))] = decodeURIComponent(key[1].replace(/\+/g, " "));
	}
}

function buildQuery() {
	var result = ""
	for (var key in queryDict) {
		result += "&" + key + "=" + queryDict[key];
	}
	return window.location.search = result.substr(1);
}

/* Handler for sorting links */
document.getElementById('headername').onclick = buildFunction("nasc", "ndsc");
document.getElementById('headerpublisher').onclick = buildFunction("pasc", "pdsc");
document.getElementById('headercategory').onclick = buildFunction("casc", "cdsc");

function buildFunction(strA, strB) {
	return function () {
		queryDict['sort'] = (queryDict.hasOwnProperty('sort') && queryDict['sort'].toLowerCase() == strA) ? strB : strA;
		buildQuery();
	}
}
