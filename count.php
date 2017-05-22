<?php
$multi_dim_array = array(

'paper' => array(
  'copier' => "Copier & Multipurpose",
'inkjet' => "Inkjet Printer",
'laser' => "Laser Printer",
'photo' => "Photographic Paper"
),

'pens'=> array(
  'ball' => "Ball Point",
'hilite' => "Highlighters",
'marker' => "Markers"
),


);
echo count($multi_dim_array,1);
echo '<br>';
$tem = explode(' ','hello i am koushik');
print_r($tem);
 ?>
