<?php

function tgc_converter_area()
{
    return tgc_converter_area_form();
}

function tgc_converter_area_form()
{
    return <<<HTML
    <div class="CodeArtUnitsConverterContainer">
        <form name="GreatConverterAreaform" autocomplete="off">
            <table class="calc2">
            <tbody>
            <tr>
                <td><label for="Ares">Enter Ares:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Ares" name="Ares" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">a</td>
                <td><input onclick="tgsAreaGetData('area', 'ares', document.getElementById('Ares').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Square-centimetres">Enter Square centimetres:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Square-centimetres" name="Square-centimetres" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">cm²</td>
                <td><input onclick="tgsAreaGetData('area', 'Square_centimetres', document.getElementById('Square-centimetres').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Square-decimetres">Enter Square decimetres:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Square-decimetres" name="Square-decimetres" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">dm²</td>
                <td><input onclick="tgsAreaGetData('area', 'Square_decimetres', document.getElementById('Square-decimetres').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Square-feet">Enter Square feet:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Square-feet" name="Square-feet" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">ft²</td>
                <td><input onclick="tgsAreaGetData('area', 'Square_feet', document.getElementById('Square-feet').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Hectares">Enter Hectares:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Hectares" name="Hectares" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">ha</td>
                <td><input onclick="tgsAreaGetData('area', 'Hectares', document.getElementById('Hectares').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Square-inches">Enter Square inches:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Square-inches" name="Square-inches" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">in²</td>
                <td><input onclick="tgsAreaGetData('area', 'Square_inches', document.getElementById('Square-inches').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Square-kilometres">Enter Square kilometres:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Square-kilometres" name="Square-kilometres" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">km²</td>
                <td><input onclick="tgsAreaGetData('area', 'Square_kilometres', document.getElementById('Square-kilometres').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Square-millimetres">Enter Square millimetres:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Square-millimetres" name="Square-millimetres" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">mm²</td>
                <td><input onclick="tgsAreaGetData('area', 'Square_millimetres', document.getElementById('Square-millimetres').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Square-metres">Enter Square metres:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Square-metres" name="Square-metres" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">m²</td>
                <td><input onclick="tgsAreaGetData('area', 'Square_metres', document.getElementById('Square-metres').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Square-nanometres">Enter Square nanometres:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Square-nanometres" name="Square-nanometres" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">nm²</td>
                <td><input onclick="tgsAreaGetData('area', 'Square_nanometres', document.getElementById('Square-nanometres').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Square-yards">Enter Square yards:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Square-yards" name="Square-yards" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">yd²</td>
                <td><input onclick="tgsAreaGetData('area', 'Square_yards', document.getElementById('Square-yards').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Square-micrometres">Enter Square micrometres:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Square-micrometres" name="Square-micrometres" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">µm²</td>
                <td><input onclick="tgsAreaGetData('area', 'Square_micrometres', document.getElementById('Square-micrometres').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Square-rods">Enter Square rods:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Square-rods" name="Square-rods" autofocus="" tabindex="1"></td>
                <td class="mathsymbol"></td>
                <td><input onclick="tgsAreaGetData('area', 'Square_rods', document.getElementById('Square-rods').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Roods">Enter Roods:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Roods" name="Roods" autofocus="" tabindex="1"></td>
                <td class="mathsymbol"></td>
                <td><input onclick="tgsAreaGetData('area', 'Roods', document.getElementById('Roods').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Acres">Enter Acres:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Acres" name="Acres" autofocus="" tabindex="1"></td>
                <td class="mathsymbol"></td>
                <td><input onclick="tgsAreaGetData('area', 'Acres', document.getElementById('Acres').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Homesteads">Enter Homesteads:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Homesteads" name="Homesteads" autofocus="" tabindex="1"></td>
                <td class="mathsymbol"></td>
                <td><input onclick="tgsAreaGetData('area', 'Homesteads', document.getElementById('Homesteads').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Square-miles">Enter Square miles:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Square-miles" name="Square-miles" autofocus="" tabindex="1"></td>
                <td class="mathsymbol"></td>
                <td><input onclick="tgsAreaGetData('area', 'Square_miles', document.getElementById('Square-miles').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Townships">Enter Townships:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Townships" name="Townships" autofocus="" tabindex="1"></td>
                <td class="mathsymbol"></td>
                <td><input onclick="tgsAreaGetData('area', 'Townships', document.getElementById('Townships').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td colspan="4"><input type="reset" value="Reset" class="btn"></td>
            </tr>
            </tbody>
            </table>
            </form>
            <a class="CodeArtUnitsConverterby" href='https://www.codeisart.net/' style='display:none;'>www.codeisart.net</a>
    </div>
            <script>
                function tgsAreaGetData(calculator, unit, value){
                    var url = CodeArtUnitsConverter.homeUrl+"/wp-json/CodeArtUnitsConverter/v1/"+calculator+"/?u="+unit+"&v="+value;//use any url that have json data
                    var request;
                    if(window.XMLHttpRequest){
                        request=new XMLHttpRequest();//for Chrome, mozilla etc
                    }
                    else if(window.ActiveXObject){
                        request=new ActiveXObject("Microsoft.XMLHTTP");//for IE only
                    }
                    request.onreadystatechange  = function(){
                        if (this.readyState == 4  )
                        {
                            var jsonObj = JSON.parse(this.responseText);//JSON.parse() returns JSON object
                            console.log(jsonObj);
                            //console.log(request.responseText);
                            document.getElementById("Ares").value =  jsonObj.ares;
                            document.getElementById("Square-centimetres").value = jsonObj.square_centimeter;
                            document.getElementById("Square-decimetres").value = jsonObj.square_decimetres;
                            document.getElementById("Square-feet").value = jsonObj.square_feet;
                            document.getElementById("Hectares").value = jsonObj.hectares;
                            document.getElementById("Square-inches").value = jsonObj.square_inches;
                            document.getElementById("Square-kilometres").value = jsonObj.square_kilometres;
                            document.getElementById("Square-millimetres").value = jsonObj.square_millimetres;
                            document.getElementById("Square-metres").value = jsonObj.square_meters;
                            document.getElementById("Square-nanometres").value = jsonObj.square_nanometres;
                            document.getElementById("Square-yards").value = jsonObj.square_yards;
                            document.getElementById("Square-micrometres").value = jsonObj.square_micrometres;
                            document.getElementById("Square-rods").value = jsonObj.square_rods;
                            document.getElementById("Roods").value = jsonObj.roods;
                            document.getElementById("Acres").value = jsonObj.acres;
                            document.getElementById("Homesteads").value = jsonObj.homesteads;
                            document.getElementById("Square-miles").value = jsonObj.square_miles;
                            document.getElementById("Townships").value = jsonObj.townships;
                            document.getElementById("Square-metres").value = jsonObj.square_meters;
                        }
                    }
                    request.open("GET", url, true);
                    request.send();
                }
            </script>
    HTML;
}
