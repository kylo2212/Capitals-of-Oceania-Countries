<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Kirstie O'Connell
    CSIS279
    Chapter 6 Capitals of Oceania
    Mrs. Yoast
    -->

<head>
<title>Oceania Capitals</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h2>Test your capital knowledge of the Oceania Countries!</h2>
<h4>Please fill in the boxes with the correct capital and check your answers!</h4>
<?php
$CountryCapitals = array(
     "Federated States of Micronesia" => "Palikir",
     "Fiji" => "Suva",
     "Kiribati" => "Tarawa",
     "Marshall Islands" => "Majuro",
     "Nauru" => "Yaren",
     "Palau" => "Ngerulmud",
	 "Papua New Guinea" => "Port Moresby",
     "Samoa" => "Apia",
     "Solomon Islands" => "Honiara",
	 "Tonga" => "Nuku'alofa",
     "Tuvalu" => "Funafuti",
     "Vanuatu" => "Port Vila"    
);
if (isset($_POST['submit'])) {
     $Answers = $_POST['answers'];  //puts the answers into an array from the input
     if (is_array($Answers)) {
          foreach ($Answers as
               $Country => $Response) {
               $Response =                  //puts input into the response variable in array
                    stripslashes($Response);
               if (strlen($Response)>0) {   //checks to make sure there is input
                    if (strcasecmp(
                         $CountryCapitals[$Country],
                         $Response)==0)                 //compares the response to the answer in the capital array and if matches is correct
                         echo "<p>Correct! The
                              capital of $Country is " .    //posts the answer to the screen
                              $CountryCapitals[$Country] .
                              ".</p>\n";
                    else
                         echo "<p>Sorry, the capital
                              of $Country is not '" .   //posts incorrect answer to the screen
                              $Response . "'.</p>\n";
               }
               else
                    echo "<p>You did not enter a
                         value for the capital of    
                         $Country.</p>\n";          //if no entry this is posted
          }
     }
     echo "<p><a href='KirstieOConnell CH6 CSIS279 -OceaniaCapitals.php'>   
          Try again?</a></p>\n";    //the file that this works from
}
else {
     echo "<form action='KirstieOConnell CH6 CSIS279 -OceaniaCapitals.php'
          method='POST'>\n";
          //this loop through the array is what is shown on the screen when first opened to start input
     foreach ($CountryCapitals as
          $Country => $Response)        
          echo "The capital of $Country is:
               <input type='text' name='answers[" .
               $Country . "]' /><br />\n";
          echo "<br>";
          echo "<input type='submit'
               name='submit'
               value='Check Answers' /> ";
          echo "<input type='reset' name='reset'
               value='Reset Form' />\n";
          echo "</form>\n";
}
?>
</body>
</html>

