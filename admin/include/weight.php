<?php






function codeart_units_converter_weight_settings(){
    echo <<<HTML
            <h1>CodeArt Units Converter - Weight Calculator Settings</h1>
            <form method="post">
            <table>
            <tr>
            <th>Unit</th>
            <th>Show/Hide</th>
            </tr>
            <tr>
            <td><label for="">Show Centigrams</label></td>
            <td><input class="tgl tgl-ios" id="Centigrams" name="Centigrams" type="checkbox" {Centigrams_checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Carats</label></td>
            <td><input class="tgl tgl-ios" id="Carats" name="Carats" type="checkbox" {Carats_checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Drams</label></td>
            <td><input class="tgl tgl-ios" id="Drams" name="Drams" type="checkbox" {Drams_checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Grams</label></td>
            <td><input class="tgl tgl-ios" id="Grams" name="Grams" type="checkbox" {Grams_checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Grains</label></td>
            <td><input class="tgl tgl-ios" id="Grains" name="Grains" type="checkbox" {Grains_checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Troy grains</label></td>
            <td><input class="tgl tgl-ios" id="Troy_grains" name="Troy_grains" type="checkbox" {Troy_grains_checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Hectograms</label></td>
            <td><input class="tgl tgl-ios" id="Hectograms" name="Hectograms" type="checkbox" {Hectograms_checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Kilos</label></td>
            <td><input class="tgl tgl-ios" id="Kilos" name="Kilos" type="checkbox" {Kilos_checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Kilonewtons </label></td>
            <td><input class="tgl tgl-ios" id="Kilonewtons" name="Kilonewtons" type="checkbox" {Kilonewtons_checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Pounds</label></td>
            <td><input class="tgl tgl-ios" id="Pounds" name="Pounds" type="checkbox" {Pounds_checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Troy pounds</label></td>
            <td><input class="tgl tgl-ios" id="Troy_pounds" name="Troy_pounds" type="checkbox" {Troy_pounds_checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Long tons</label></td>
            <td><input class="tgl tgl-ios" id="" name="" type="checkbox" {checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Milligrams</label></td>
            <td><input class="tgl tgl-ios" id="Long_tons" name="Long_tons" type="checkbox" {Long_tons_checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Nanograms</label></td>
            <td><input class="tgl tgl-ios" id="Nanograms" name="Nanograms" type="checkbox" {Nanograms_checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Ounces</label></td>
            <td><input class="tgl tgl-ios" id="Ounces" name="Ounces" type="checkbox" {Ounces_checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Troy ounces</label></td>
            <td><input class="tgl tgl-ios" id="Troy_ounces" name="Troy_ounces" type="checkbox" {Troy_ounces_checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Short tons</label></td>
            <td><input class="tgl tgl-ios" id="Short_tons" name="Short_tons" type="checkbox" {Short_tons_checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Stones</label></td>
            <td><input class="tgl tgl-ios" id="Stones" name="Stones" type="checkbox" {Stones_checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Tons</label></td>
            <td><input class="tgl tgl-ios" id="Tons" name="Tons" type="checkbox" {Tons_checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Troy carats</label></td>
            <td><input class="tgl tgl-ios" id="Troy_carats" name="Troy_carats" type="checkbox" {Troy_carats_checked}></td>
            </tr>
            <tr>
            <td><label for="">Show Micrograms</label></td>
            <td><input class="tgl tgl-ios" id="" name="" type="checkbox" {checked}></td>
            </tr>
            </table>
            <br /><br />
            <input type="submit" value="Save Settings">
            </form>
        HTML;
}