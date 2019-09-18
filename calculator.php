<?php

print("welke operatie wil je uitvoeren? (-/+/%)");
$keuze = readline(":");
readline_add_history($keuze);

print("eerste getal?");
$een = readline(":");
readline_add_history($een);

print("tweede getal?");
$twee = readline(":");
readline_add_history($twee);

if (is_numeric($een) && is_numeric($twee)) { 

 } 
 else { 
print_r("is geen getal");
 exit(); }

if ($keuze == "+") {
	print_r("uw resultaat is:") && print_r($een + $twee);
};

if ($keuze == "-") {
	print_r("uw resultaat is:") && print_r($een - $twee);
};
if ($keuze == "%") {
	print_r("uw resultaat is:") && print_r($een % $twee);
};

