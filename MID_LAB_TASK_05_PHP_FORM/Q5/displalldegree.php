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
            <input type="checkbox" name="degree"value="SSC"<?php if(isset($_GET['submit'])&& $_GET['degree']=='SSC')echo 'checked="checked" "' ?>/>SSC
            <input type="checkbox" name="degree"value="HSC"<?php if(isset($_GET['submit'])&& $_GET['degree']=='HSC')echo 'checked="checked"' ?>/>HSC
            <input type="checkbox" name="degree"value="BSc"<?php if(isset($_GET['submit'])&& $_GET['degree']=='BSc')echo 'checked="checked" ' ?>/>BSc
            <input type="checkbox" name="degree"value="MSc"<?php if(isset($_GET['submit'])&& $_GET['degree']=='MSc')echo 'checked="checked" ' ?>/>MSc
     

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