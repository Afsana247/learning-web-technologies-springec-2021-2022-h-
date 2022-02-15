<?php

if(isset($_GET['submit']))
{
if($_GET['degree']== null)
{
    echo "Please put your degree....";
}


else 
{
    echo "Submitted....";
}

}




?>


<html>
<head>

    <title></title>
</head>
<body>
    <form  method="GET" action="">
        <fieldset>
            <legend>DEGREE</legend>
            <input type="checkbox" name="degree"value="SSC">SSC
            <input type="checkbox" name="degree"value="HSC">HSC
            <input type="checkbox" name="degree"value="BSc">BSc
            <input type="checkbox" name="degree"value="MSc">MSc
     

        <hr>
        <table>
            <tr>
                <td><input type="submit" name="submit"value="Submit"><br></td>
            </tr>
        </table>
            
        </fieldset>
    </form>

</body>
</html>