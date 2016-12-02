/* Parse page arguments */
var queryString = "";
if (window.location.search.length > 1) queryString = window.location.search.substring(1);
var queryArray = queryString.split ("&");

 queryDict = {};
for(var i in queryArray) { 
    var key = queryArray[i].split("=");
    if (key.length > 1) {
      queryDict[decodeURIComponent(key[0].replace(/\+/g, " "))] = decodeURIComponent(key[1].replace(/\+/g, " "));
    }
}
function buildQuery() {
var result = ""
for(var key in queryDict){
result += "&" +  key + "=" + queryDict[key];
}
return window.location.search = result.substr(1);
}

document.getElementById('headername').onclick=buildFunction("nasc","ndsc");
document.getElementById('headerpublisher').onclick=buildFunction("pasc","pdsc");
document.getElementById('headercategory').onclick=buildFunction("casc","cdsc");

function buildFunction(strA, strB) {
return function(){
queryDict['sort'] = (queryDict.hasOwnProperty('sort') && queryDict['sort'].toLowerCase() == strA) ? strB : strA; buildQuery();
}
}