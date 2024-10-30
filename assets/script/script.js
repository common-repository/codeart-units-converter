
function tgsConverterGetData(calculator, unit, value)  
{  
   var url = CodeArtUnitsConverter.homeUrl+"/wp-json/CodeArtUnitsConverter/v1/"+calculator+"/?u="+unit+"&v="+value;//use any url that have json data  
   var request;  
  
   //alert(url);

   if(window.XMLHttpRequest){    
    request=new XMLHttpRequest();//for Chrome, mozilla etc  
   }    
   else if(window.ActiveXObject){    
    request=new ActiveXObject("Microsoft.XMLHTTP");//for IE only  
   }    
   request.onreadystatechange  = function(){  
      if (request.readyState == 4  )  
      {  
        //alert(request.responseText);
        //var jsonObj = JSON.parse(request.responseText);//JSON.parse() returns JSON object  
        //alert(request.responseText);
        return request.responseText;
        //document.getElementById("date").innerHTML =  jsonObj.date;  
        //document.getElementById("time").innerHTML = jsonObj.time;  
      }  
   }  
   request.open("GET", url, false);  
   request.send();  
}  

