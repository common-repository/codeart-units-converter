<?php

function tgc_converter_speed()
{
    return tgc_converter_speed_form();
}

function tgc_converter_speed_form()
{
    return <<<HTML
    <div class="CodeArtUnitsConverterContainer">
        <form name="GreatConverterAreaform" autocomplete="off">
            <table class="calc2">
            <tbody>
            <tr>
                <td><label for="Kilometres-per-hour">Enter Kilometres per hour:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Kilometres_per_hour" name="Kilometres-per-hour" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">km/h</td>
                <td><input onclick="tgsSpeedGetData('speed', 'Kilometres-per-hour', document.getElementById('Kilometres_per_hour').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Kilometres-per-second">Enter Kilometres per second:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Kilometres_per_second" name="Kilometres-per-second" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">km/s</td>
                <td><input onclick="tgsSpeedGetData('speed', 'Kilometres-per-second', document.getElementById('Kilometres_per_second').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Knots">Enter Knots:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Knots" name="Knots" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">knot</td>
                <td><input onclick="tgsSpeedGetData('speed', 'Knots', document.getElementById('Knots').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Metres-per-second">Enter Metres per second:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Metres_per_second" name="Metres_per_second" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">m/s</td>
                <td><input onclick="tgsSpeedGetData('speed', 'Metres-per-second', document.getElementById('Metres_per_second').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Millimetres-per-second">Enter Millimetres per second:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Millimetres_per_second" name="Millimetres_per_second" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">mm/s</td>
                <td><input onclick="tgsSpeedGetData('speed', 'Millimetres-per-second', document.getElementById('Millimetres_per_second').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Miles-per-hour">Enter Miles per hour:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Miles_per_hour" name="Miles-per-hour" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">mph</td>
                <td><input onclick="tgsSpeedGetData('speed', 'Miles-per-hour', document.getElementById('Miles_per_hour').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Micrometres-per-second">Enter Micrometres per second:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Micrometres_per_second" name="Micrometres-per-second" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">µm/s</td>
                <td><input onclick="tgsSpeedGetData('speed', 'Micrometres-per-second', document.getElementById('Micrometres_per_second').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Speed-of-light">Enter Speed of light:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Speed_of_light" name="Speed-of-light" autofocus="" tabindex="1"></td>
                <td class="mathsymbol"></td>
                <td><input onclick="tgsSpeedGetData('speed', 'Speed-of-light', document.getElementById('Speed_of_light').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Feet-per-second">Enter Feet per second:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Feet_per_second" name="Feet-per-second" autofocus="" tabindex="1"></td>
                <td class="mathsymbol"></td>
                <td><input onclick="tgsSpeedGetData('speed', 'Feet-per-second', document.getElementById('Feet_per_second').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Miles-per-second">Enter Miles per second:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Miles_per_second" name="Miles-per-second" autofocus="" tabindex="1"></td>
                <td class="mathsymbol"></td>
                <td><input onclick="tgsSpeedGetData('speed', 'Miles-per-second', document.getElementById('Miles_per_second').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Speed-of-sound">Enter Speed of sound:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Speed_of_sound" name="Speed-of-sound" autofocus="" tabindex="1"></td>
                <td class="mathsymbol"></td>
                <td><input onclick="tgsSpeedGetData('speed', 'Speed-of-sound', document.getElementById('Speed_of_sound').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
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
                function tgsSpeedGetData(calculator, unit, value){
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
                            document.getElementById("Kilometres_per_hour").value =  jsonObj.Kilometres_per_hour;
                            document.getElementById("Kilometres_per_second").value =  jsonObj.Kilometres_per_second;
                            document.getElementById("Knots").value =  jsonObj.Knots;
                            document.getElementById("Metres_per_second").value =  jsonObj.Metres_per_second;
                            document.getElementById("Millimetres_per_second").value =  jsonObj.Millimetres_per_second;
                            document.getElementById("Miles_per_hour").value =  jsonObj.Miles_per_hour;
                            document.getElementById("Micrometres_per_second").value =  jsonObj.Micrometres_per_second;
                            document.getElementById("Speed_of_light").value =  jsonObj.Speed_of_light;
                            document.getElementById("Feet_per_second").value =  jsonObj.Feet_per_second;
                            document.getElementById("Miles_per_second").value =  jsonObj.Miles_per_second;
                            document.getElementById("Speed_of_sound").value =  jsonObj.Speed_of_sound;
                        }
                    }
                    request.open("GET", url, true);
                    request.send();
                }
            </script>
    HTML;
}
