// var nrsLists = new Array(4) 
// nrsLists["empty"] = ["select"]; 
// nrsLists["1"] = ["0"]; 
// nrsLists["2"] = ["1", "2", "3"]; 
// nrsLists["3"] = ["4", "5", "6"]; 
// nrsLists["4"]= ["7", "8", "9", "10"]; 
//  /* CountryChange() is called from the onchange event of a select element. 
//  * param selectObj - the select object which fired the on change event. 
//  */ 
//  function nrsChange(selectObj) { 
//  // get the index of the selected option 
//     var idx = selectObj.selectedIndex; 
//     // get the value of the selected option 
//     var which = selectObj.options[idx].value; 
//     // use the selected option value to retrieve the list of items from the countryLists array 
//     cList = nrsLists[which]; 
//     // get the country select element via its known id 
//     var cSelect = document.getElementById("skalaNrs"); 
//     // remove the current options from the country select 
//     var len=cSelect.options.length; 
//     while (cSelect.options.length > 0) { 
//         cSelect.remove(0); 
//     } 
//     var newOption; 
//     // create new options 
//     for (var i=0; i<cList.length; i++) { 
//         newOption = document.createElement("option"); 
//         newOption.value = cList[i];  // assumes option string and value are the same 
//         newOption.text=cList[i]; 
//         // add the new option 
//         try { 
//         cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
//         } 
//         catch (e) { 
//         cSelect.appendChild(newOption); 
//         } 
//     } 
//  } 






 

 var cpotLists = new Array(4) 
 cpotLists["empty"] = ["Skor"]; 
 cpotLists["0"] = ["0"]; 
 cpotLists["1"] = ["1"]; 
 cpotLists["2"] = ["2"]; 
//  cpotLists["4"]= ["7", "8", "9", "10"]; 
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function cpotChange(selectObj) { 
 // get the index of the selected option 
    var idx1 = selectObj.selectedIndex; 
    // get the value of the selected option 
    var which1 = selectObj.options[idx1].value; 
    // use the selected option value to retrieve the list of items from the countryLists array 
    cList = cpotLists[which1]; 
    // get the country select element via its known id 
    var cSelect = document.getElementById("skalaCpot"); 
    // remove the current options from the country select 
    var len=cSelect.options.length; 
    while (cSelect.options.length > 0) { 
        cSelect.remove(0); 
    } 
    var newOption; 
    // create new options 
    for (var i=0; i<cList.length; i++) { 
        newOption = document.createElement("option"); 
        newOption.value = cList[i];  // assumes option string and value are the same 
        newOption.text=cList[i]; 
        // add the new option 
        try { 
        cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
        } 
        catch (e) { 
        cSelect.appendChild(newOption); 
        } 
    } 
 } 






 var gtLists = new Array(4) 
 gtLists[""] = ["Skor"]; 
 gtLists["0"] = ["0"]; 
 gtLists["1"] = ["1"]; 
 gtLists["2"] = ["2"]; 
//  cpotLists["4"]= ["7", "8", "9", "10"]; 
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function gtChange(selectObj) { 
 // get the index of the selected option 
    var idx = selectObj.selectedIndex; 
    // get the value of the selected option 
    var which = selectObj.options[idx].value; 
    // use the selected option value to retrieve the list of items from the countryLists array 
    cList = gtLists[which]; 
    // get the country select element via its known id 
    var cSelect = document.getElementById("skalaGt"); 
    // remove the current options from the country select 
    var len=cSelect.options.length; 
    while (cSelect.options.length > 0) { 
        cSelect.remove(0); 
    } 
    var newOption; 
    // create new options 
    for (var i=0; i<cList.length; i++) { 
        newOption = document.createElement("option"); 
        newOption.value = cList[i];  // assumes option string and value are the same 
        newOption.text=cList[i]; 
        // add the new option 
        try { 
        cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
        } 
        catch (e) { 
        cSelect.appendChild(newOption); 
        } 
    } 
 } 



 var modeLists = new Array(4) 
 modeLists["empty"] = ["Skor"]; 
 modeLists["1"] = ["0"]; 
 modeLists["2"] = ["1"]; 
 modeLists["3"] = ["2"];
 modeLists["4"] = ["0"];
 modeLists["5"] = ["1"];
 modeLists["6"] = ["2"]; 
//  cpotLists["4"]= ["7", "8", "9", "10"]; 
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function modeChange(selectObj) { 
 // get the index of the selected option 
    var idx = selectObj.selectedIndex; 
    // get the value of the selected option 
    var which = selectObj.options[idx].value; 
    // use the selected option value to retrieve the list of items from the countryLists array 
    cList = modeLists[which]; 
    // get the country select element via its known id 
    var cSelect = document.getElementById("skalaMode"); 
    // remove the current options from the country select 
    var len=cSelect.options.length; 
    while (cSelect.options.length > 0) { 
        cSelect.remove(0); 
    } 
    var newOption; 
    // create new options 
    for (var i=0; i<cList.length; i++) { 
        newOption = document.createElement("option"); 
        newOption.value = cList[i];  // assumes option string and value are the same 
        newOption.text=cList[i]; 
        // add the new option 
        try { 
        cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
        } 
        catch (e) { 
        cSelect.appendChild(newOption); 
        } 
    } 
 } 




 var ototLists = new Array(4) 
 ototLists["empty"] = ["Skor"]; 
 ototLists["0"] = ["0"]; 
 ototLists["1"] = ["1"]; 
 ototLists["2"] = ["2"];
//  ototLists["4"] = ["4"];
//  ototLists["5"] = ["5"];
//  ototLists["6"] = ["6"]; 
//  cpotLists["4"]= ["7", "8", "9", "10"]; 
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function ototChange(selectObj) { 
 // get the index of the selected option 
    var idx = selectObj.selectedIndex; 
    // get the value of the selected option 
    var which = selectObj.options[idx].value; 
    // use the selected option value to retrieve the list of items from the countryLists array 
    cList = ototLists[which]; 
    // get the country select element via its known id 
    var cSelect = document.getElementById("skalaOtot"); 
    // remove the current options from the country select 
    var len=cSelect.options.length; 
    while (cSelect.options.length > 0) { 
        cSelect.remove(0); 
    } 
    var newOption; 
    // create new options 
    for (var i=0; i<cList.length; i++) { 
        newOption = document.createElement("option"); 
        newOption.value = cList[i];  // assumes option string and value are the same 
        newOption.text=cList[i]; 
        // add the new option 
        try { 
        cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
        } 
        catch (e) { 
        cSelect.appendChild(newOption); 
        } 
    } 
 } 


