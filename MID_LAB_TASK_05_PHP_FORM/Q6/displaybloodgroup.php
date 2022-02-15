<?php

$blood="";
if(isset($_GET['submit']))
{
if($_GET['blood']== null)
{
    echo "Please put your BoodGroup....";
}


else 
{
    echo $blood=$_GET['blood'];
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
            <legend>Blood Group</legend>
    
            <select name="blood">
                <option value=""></option>  
                <option value="A+"<?php if(isset($_GET['submit'])&& $_GET['blood']=='A+')echo "selected='selected' " ?>>A+</option>
                <option value="A-"<?php if(isset($_GET['submit'])&& $_GET['blood']=='A-')echo "selected='selected' " ?>/>A-</option>
                <option value="B+"<?php if(isset($_GET['submit'])&& $_GET['blood']=='B+')echo "selected='selected' " ?>/>B+</option>
                <option value="B-"<?php if(isset($_GET['submit'])&& $_GET['blood']=='B-')echo "selected='selected' " ?>/>B-</option>
                <option value="AB+"<?php if(isset($_GET['submit'])&& $_GET['blood']=='AB+')echo "selected='selected' " ?>/>AB+</option>
                <option value="AB-"<?php if(isset($_GET['submit'])&& $_GET['blood']=='AB-')echo "selected='selected' " ?>/>AB</option>
                <option value="O+"<?php if(isset($_GET['submit'])&& $_GET['blood']=='O+')echo "selected='selected' " ?>/>O+</option>
                <option value="O-"<?php if(isset($_GET['submit'])&& $_GET['blood']=='O-')echo "selected='selected' " ?>/>O-</option>
            </select>

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