<?php

$a=array("<b><h1 align = center>Advantages of Tree</b></h1>" , "Trees make life nicer. It has been shown that spending time among trees and green spaces reduces the amount of stress that we carry around with us in our daily lives.",
"Skin cancer is the most common form of cancer in the United States. Trees reduce UV-B exposure by about 50 percent, thus providing protection to children on school campuses and playgrounds - where children spend hours outdoors.",
"Excess carbon dioxide (CO2) is building up in our atmosphere, contributing to climate change. Trees absorb CO2, removing and storing the carbon while releasing oxygen back into the air. In one year, an acre of mature trees absorbs the same amount of CO2 produced when you drive your car 26,000 miles.",
"Many species of wildlife depend on trees for habitat. Trees provide food, protection, and homes for many birds and mammals.",
"Well placed trees can reduce your cooling costs in the summer by shading the south and west sides of your home. If deciduous trees are used they will allow the sun to pass through and warm your home in the winter.");


for($i = 0; $i < 6; $i++)
{
   echo"<li>" .$a[$i]."</li>";
}

