<html>
<head>
    <meta charset="utf-8">
    <title>strona WWWA</title>
</head>
<body>
<center><h2>ICH LEBIE LOS</h2></center>
<?php
/*  NIE DIZALA XD 
$zmienna = 45;
if($zmienna <= 39)
	{
echo "hello";
	}
elseif($zmienna >= 40 && $zmienna >=54) 
	{
echo "hw";
	}
elseif($zmienna >=55 && $zmienna >=69)
	{
	echo "hvw";
	}
elseif($zmienna >=70 && $zmienna >=85)
	{
	echo "haw";
	}
elseif($zmienna >=86 && $zmienna >=100)
	{
	echo "hww";
	}
*/
/*
	echo "fantastyka - 1
		  dramat - 2
		  thlier - 3
		  romanze - 4
		  informatyczne( nie polecane ) - 5";
	$book=3;
	
    switch($book)
    {
        case 1:
            echo "Wybrałeś fantastyke";
            break;
        case 2:
            echo "Wybrałeś dramat";
            break;
        case 3:
            echo "Wybrałeś thlier";
            break;
        case 4:
            echo "Wybrałeś romans";
            break;
        case 5;
            echo "Wybrałeś inf";
    }
	*/
	$today = date("D");
switch($today){
    case "Mon":
        echo "Today is Monday. Clean your house.";
        break;
    case "Tue":
        echo "Today is Tuesday. Buy some food.";
        break;
    case "Wed":
        echo "Today is Wednesday. Visit a doctor.";
        break;
    case "Thu":
        echo "Today is Thursday. Repair your car.";
        break;
    case "Fri":
        echo "Today is Friday. Party tonight.";
        break;
    case "Sat":
        echo "Today is Saturday. Its movie time.";
        break;
    case "Sun":
        echo "Today is Sunday. Do some rest.";
        break;
    default:
        echo "No information available for that day.";
        break;
}
?>
</body>
</html>