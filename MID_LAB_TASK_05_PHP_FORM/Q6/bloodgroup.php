<?php


if(isset($_GET['submit']))
{
if($_GET['blood']== null)
{
    echo "Please put your BoodGroup....";
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
            <legend>Blood Group</legend>
    
            <select name="blood">
                <option value=""></option>  
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
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