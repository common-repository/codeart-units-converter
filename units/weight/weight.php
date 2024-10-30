<?php

function tgc_converter_weight()
{
    return tgc_converter_weight_form();
}

function tgc_converter_weight_form()
{
    return <<<HTML
    <div class="CodeArtUnitsConverterContainer">
        <form name="GreatConverterAreaform" autocomplete="off">
            <table class="calc2">
            <tbody>
            <tr>
                <td><label for="Centigrams">Enter Centigrams:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Centigrams" name="Centigrams" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">cg</td>
                <td><input onclick="tgsWeightGetData('weight', 'Centigrams', document.getElementById('Centigrams').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Carats">Enter Carats:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Carats" name="Carats" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">ct</td>
                <td><input onclick="tgsWeightGetData('weight', 'Carats', document.getElementById('Carats').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Drams">Enter Drams:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Drams" name="Drams" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">dr</td>
                <td><input onclick="tgsWeightGetData('weight', 'Drams', document.getElementById('Drams').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Grams">Enter Grams:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Grams" name="Grams" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">g</td>
                <td><input onclick="tgsWeightGetData('weight', 'Grams', document.getElementById('Grams').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Grains">Enter Grains:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Grains" name="Grains" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">gr</td>
                <td><input onclick="tgsWeightGetData('weight', 'Grains', document.getElementById('Grains').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Troy-grains">Enter Troy grains:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Troy_grains" name="Troy-grains" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">gr t </td>
                <td><input onclick="tgsWeightGetData('weight', 'Troy_grains', document.getElementById('Troy_grains').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Hectograms">Enter Hectograms:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Hectograms" name="Hectograms" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">hg</td>
                <td><input onclick="tgsWeightGetData('weight', 'Hectograms', document.getElementById('Hectograms').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Kilos">Enter Kilos:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Kilos" name="Kilos" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">kg</td>
                <td><input onclick="tgsWeightGetData('weight', 'Kilos', document.getElementById('Kilos').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Kilonewtons">Enter Kilonewtons (mass):</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Kilonewtons" name="Kilonewtons" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">kN</td>
                <td><input onclick="tgsWeightGetData('weight', 'Kilonewtons', document.getElementById('Kilonewtons').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Pounds">Enter Pounds:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Pounds" name="Pounds" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">lb</td>
                <td><input onclick="tgsWeightGetData('weight', 'Pounds', document.getElementById('Pounds').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Troy-pounds">Enter Troy pounds:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Troy_pounds" name="Troy-pounds" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">lb t</td>
                <td><input onclick="tgsWeightGetData('weight', 'Troy_pounds', document.getElementById('Troy_pounds').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Long-tons">Enter Long tons:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Long_tons" name="Long-tons" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">lo tn</td>
                <td><input onclick="tgsWeightGetData('weight', 'Long_tons', document.getElementById('Long_tons').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Milligrams">Enter Milligrams:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Milligrams" name="Milligrams" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">mg</td>
                <td><input onclick="tgsWeightGetData('weight', 'Milligrams', document.getElementById('Milligrams').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Nanograms">Enter Nanograms:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Nanograms" name="Nanograms" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">ng</td>
                <td><input onclick="tgsWeightGetData('weight', 'Nanograms', document.getElementById('Nanograms').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Ounces">Enter Ounces:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Ounces" name="Ounces" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">oz</td>
                <td><input onclick="tgsWeightGetData('weight', 'Ounces', document.getElementById('Ounces').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Troy-ounces">Enter Troy ounces:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Troy_ounces" name="Troy-ounces" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">oz t</td>
                <td><input onclick="tgsWeightGetData('weight', 'Troy_ounces', document.getElementById('Troy_ounces').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Short-tons">Enter Short tons:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Short_tons" name="Short-tons" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">sh tn</td>
                <td><input onclick="tgsWeightGetData('weight', 'Short_tons', document.getElementById('Short_tons').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Stones">Enter Stones:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Stones" name="Stones" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">st</td>
                <td><input onclick="tgsWeightGetData('weight', 'Stones', document.getElementById('Stones').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Tons">Enter Tons:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Tons" name="Tons" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">t</td>
                <td><input onclick="tgsWeightGetData('weight', 'Tons', document.getElementById('Tons').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Troy-carats">Enter Troy carats:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Troy_carats" name="Troy-carats" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">tr ct</td>
                <td><input onclick="tgsWeightGetData('weight', 'Troy_carats', document.getElementById('Troy_carats').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
            </tr>
            <tr>
                <td><label for="Micrograms">Enter Micrograms:</label></td>
                <td class="math"><input type="number" placeholder="0" min="0" step="any" id="Micrograms" name="Micrograms" autofocus="" tabindex="1"></td>
                <td class="mathsymbol">μg</td>
                <td><input onclick="tgsWeightGetData('weight', 'Micrograms', document.getElementById('Micrograms').value)" type="button" value="Convert" tabindex="2" class="btn"></td>
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
                function tgsWeightGetData(calculator, unit, value){
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
                            document.getElementById("Centigrams").value =  jsonObj.Centigrams;
                            document.getElementById("Carats").value =  jsonObj.Carats;
                            document.getElementById("Drams").value =  jsonObj.Drams;
                            document.getElementById("Grams").value =  jsonObj.Grams;
                            document.getElementById("Grains").value =  jsonObj.Grains;
                            document.getElementById("Troy_grains").value =  jsonObj.Troy_grains;
                            document.getElementById("Hectograms").value =  jsonObj.Hectograms;
                            document.getElementById("Kilos").value =  jsonObj.Kilos;
                            document.getElementById("Kilonewtons").value =  jsonObj.Kilonewtons;
                            document.getElementById("Pounds").value =  jsonObj.Pounds;
                            document.getElementById("Troy_pounds").value =  jsonObj.Troy_pounds;
                            document.getElementById("Long_tons").value =  jsonObj.Long_tons;
                            document.getElementById("Milligrams").value =  jsonObj.Milligrams;
                            document.getElementById("Nanograms").value =  jsonObj.Nanograms;
                            document.getElementById("Ounces").value =  jsonObj.Ounces;
                            document.getElementById("Troy_ounces").value =  jsonObj.Troy_ounces;
                            document.getElementById("Short_tons").value =  jsonObj.Short_tons;
                            document.getElementById("Stones").value =  jsonObj.Stones;
                            document.getElementById("Tons").value =  jsonObj.Tons;
                            document.getElementById("Troy_carats").value =  jsonObj.Troy_carats;
                            document.getElementById("Micrograms").value =  jsonObj.Micrograms;
                        }
                    }
                    request.open("GET", url, true);
                    request.send();
                }
            </script>
    HTML;
}
