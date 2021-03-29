var faceLists = new Array(4) 
faceLists["empty"] = ["Skor"]; 
faceLists["0"] = ["0"]; 
faceLists["1"] = ["1"]; 
// faceLists["2"] = ["2"]; 
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


  var nafasLists = new Array(4) 
  nafasLists["empty"] = ["Skor"]; 
  nafasLists["0"] = ["0"]; 
  nafasLists["1"] = ["1"]; 
//   cryLists["2"] = ["2"]; 
  //  cpotLists["4"]= ["7", "8", "9", "10"]; 
   /* CountryChange() is called from the onchange event of a select element. 
   * param selectObj - the select object which fired the on change event. 
   */ 
   function nafasChange(selectObj) { 
   // get the index of the selected option 
      var idx = selectObj.selectedIndex; 
      // get the value of the selected option 
      var which = selectObj.options[idx].value; 
      // use the selected option value to retrieve the list of items from the countryLists array 
      cList = nafasLists[which]; 
      // get the country select element via its known id 
      var cSelect = document.getElementById("skorNafas"); 
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


   var handLists = new Array(4) 
   handLists["empty"] = ["Skor"]; 
   handLists["0"] = ["0"]; 
   handLists["1"] = ["1"]; 
 //   cryLists["2"] = ["2"]; 
   //  cpotLists["4"]= ["7", "8", "9", "10"]; 
    /* CountryChange() is called from the onchange event of a select element. 
    * param selectObj - the select object which fired the on change event. 
    */ 
    function handChange(selectObj) { 
    // get the index of the selected option 
       var idx = selectObj.selectedIndex; 
       // get the value of the selected option 
       var which = selectObj.options[idx].value; 
       // use the selected option value to retrieve the list of items from the countryLists array 
       cList = handLists[which]; 
       // get the country select element via its known id 
       var cSelect = document.getElementById("skorHand"); 
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


    var footLists = new Array(4) 
    footLists["empty"] = ["Skor"]; 
    footLists["0"] = ["0"]; 
    footLists["1"] = ["1"]; 
    // faceLists["2"] = ["2"]; 
    //  cpotLists["4"]= ["7", "8", "9", "10"]; 
     /* CountryChange() is called from the onchange event of a select element. 
     * param selectObj - the select object which fired the on change event. 
     */ 
     function footChange(selectObj) { 
     // get the index of the selected option 
        var idx = selectObj.selectedIndex; 
        // get the value of the selected option 
        var which = selectObj.options[idx].value; 
        // use the selected option value to retrieve the list of items from the countryLists array 
        cList = footLists[which]; 
        // get the country select element via its known id 
        var cSelect = document.getElementById("skorFoot"); 
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

     var xLists = new Array(4) 
     xLists["empty"] = ["Skor"]; 
     xLists["0"] = ["0"]; 
     xLists["1"] = ["1"]; 
     // faceLists["2"] = ["2"]; 
     //  cpotLists["4"]= ["7", "8", "9", "10"]; 
      /* CountryChange() is called from the onchange event of a select element. 
      * param selectObj - the select object which fired the on change event. 
      */ 
      function xChange(selectObj) { 
      // get the index of the selected option 
         var idx = selectObj.selectedIndex; 
         // get the value of the selected option 
         var which = selectObj.options[idx].value; 
         // use the selected option value to retrieve the list of items from the countryLists array 
         cList = xLists[which]; 
         // get the country select element via its known id 
         var cSelect = document.getElementById("skorX"); 
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


