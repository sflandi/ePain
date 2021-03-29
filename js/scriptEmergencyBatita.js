// $(document).ready(function(){
//     var nrsLists = new Array(4) 
// nrsLists["empty"] = ["select"]; 
// nrsLists["0"] = ["0"]; 
// nrsLists["1"] = ["1", "2", "3"]; 
// nrsLists["2"] = ["4", "5", "6"]; 
//     // $(".cpotDesc").hide();
//     // $("#111").show();
//     $("#cpotValue").change(function(){
//         // $('.cpotDesc').hide();
//         $('#'+$(this).val()).show();
//     });
// }); 

// var batita = new Array(4) 
// batita["empty"] = ["select"]; 
// batita["0"] = ["woy"]; 
// batita["1"] = ["wo11"]; 
// batita["2"] = ["weyy"];  
//  /* CountryChange() is called from the onchange event of a select element. 
//  * param selectObj - the select object which fired the on change event. 
//  */ 
//  function cpotChange(selectObj) { 
//  // get the index of the selected option 
//     var idx = selectObj.selectedIndex; 
//     // get the value of the selected option 
//     var which = selectObj.options[idx].value; 
//     // use the selected option value to retrieve the list of items from the countryLists array 
//     cList = batita[which]; 
//     // get the country select element via its known id 
//     var cSelect = document.getElementById("cpotDesc1"); 
//     // remove the current options from the country select 
//     var len=cSelect.options.length; 
//     while (cSelect.options.length > 0) { 
//         cSelect.remove(0); 
//     } 
//     var para; 
//     // create new options 
//     for (var i=0; i<cList.length; i++) { 
//         para = document.createElement("P"); 
//         para.innerText = cList[i];
//         document.body.appendChild(para);
//         // para.value = cList[i];  
//         // // assumes option string and value are the same 
//         // para.text=cList[i]; 
//         // add the new option 
//         // try { 
//         // cSelect.add(para);  
//         // // this will fail in DOM browsers but is needed for IE 
//         // } 
//         // catch (e) { 
//         // cSelect.appendChild(para); 
//         // } 
//     } 
//  } 


var faceLists = new Array(4) 
faceLists["empty"] = ["Skor"]; 
faceLists["0"] = ["0"]; 
faceLists["1"] = ["1"]; 
faceLists["2"] = ["2"]; 
//  cpotLists["4"]= ["7", "8", "9", "10"]; 
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function faceChange(selectObj) { 
 // get the index of the selected option 
    var idx = selectObj.selectedIndex; 
    // get the value of the selected option 
    var which = selectObj.options[idx].value; 
    // use the selected option value to retrieve the list of items from the countryLists array 
    cList = faceLists[which]; 
    // get the country select element via its known id 
    var cSelect = document.getElementById("skorFace"); 
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



 var legLists = new Array(4) 
 legLists["empty"] = ["Skor"]; 
 legLists["0"] = ["0"]; 
 legLists["1"] = ["1"]; 
 legLists["2"] = ["2"]; 
//  cpotLists["4"]= ["7", "8", "9", "10"]; 
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function legChange(selectObj) { 
 // get the index of the selected option 
    var idx = selectObj.selectedIndex; 
    // get the value of the selected option 
    var which = selectObj.options[idx].value; 
    // use the selected option value to retrieve the list of items from the countryLists array 
    cList = legLists[which]; 
    // get the country select element via its known id 
    var cSelect = document.getElementById("skorLeg"); 
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

 var aktLists = new Array(4) 
 aktLists["empty"] = ["Skor"]; 
 aktLists["0"] = ["0"]; 
 aktLists["1"] = ["1"]; 
 aktLists["2"] = ["2"]; 
//  cpotLists["4"]= ["7", "8", "9", "10"]; 
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function aktChange(selectObj) { 
 // get the index of the selected option 
    var idx = selectObj.selectedIndex; 
    // get the value of the selected option 
    var which = selectObj.options[idx].value; 
    // use the selected option value to retrieve the list of items from the countryLists array 
    cList = aktLists[which]; 
    // get the country select element via its known id 
    var cSelect = document.getElementById("skorAkt"); 
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

 var cryLists = new Array(4) 
 cryLists["empty"] = ["Skor"]; 
 cryLists["0"] = ["0"]; 
 cryLists["1"] = ["1"]; 
 cryLists["2"] = ["2"]; 
//  cpotLists["4"]= ["7", "8", "9", "10"]; 
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function cryChange(selectObj) { 
 // get the index of the selected option 
    var idx = selectObj.selectedIndex; 
    // get the value of the selected option 
    var which = selectObj.options[idx].value; 
    // use the selected option value to retrieve the list of items from the countryLists array 
    cList = cryLists[which]; 
    // get the country select element via its known id 
    var cSelect = document.getElementById("skorCry"); 
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

 var consLists = new Array(4) 
 consLists["empty"] = ["Skor"]; 
 consLists["0"] = ["0"]; 
 consLists["1"] = ["1"]; 
 consLists["2"] = ["2"]; 
//  cpotLists["4"]= ["7", "8", "9", "10"]; 
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function consChange(selectObj) { 
 // get the index of the selected option 
    var idx = selectObj.selectedIndex; 
    // get the value of the selected option 
    var which = selectObj.options[idx].value; 
    // use the selected option value to retrieve the list of items from the countryLists array 
    cList = consLists[which]; 
    // get the country select element via its known id 
    var cSelect = document.getElementById("skorCons"); 
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
    var idx = selectObj.selectedIndex; 
    // get the value of the selected option 
    var which = selectObj.options[idx].value; 
    // use the selected option value to retrieve the list of items from the countryLists array 
    cList = cpotLists[which]; 
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
 modeLists["0"] = ["0"]; 
 modeLists["1"] = ["1"]; 
 modeLists["2"] = ["2"];
 modeLists["0"] = ["0"];
 modeLists["1"] = ["1"];
 modeLists["2"] = ["2"]; 
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
    cList = modeLists[which]; 
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


