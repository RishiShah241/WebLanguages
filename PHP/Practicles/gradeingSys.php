<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>

<body>
    <h1>enetr the marks</h1>
    <form action="" method="post">
        maths:
        <input type="text" name="maths"><br>
        English:
        <input type="text" name="english"><br>
        science:
        <input type="text" name="sc"><br>
        social science:
        <input type="text" name="ss"><br><br>
        <input type="submit" name=""><br>
    <?php
        $maths=$_POST['maths'];
        $english=$_POST['english'];
        $sc=$_POST['sc'];
        $ss=$_POST['ss'];
        switch($maths){
            case ($maths>=85 && $maths<=100):$grade="AA";
                    $result="pass";
                    break;
            case ($maths>=75 && $maths<=84):$grade="AB";
                    $result="pass";
                    break;
            case ($maths>=65 && $maths<=74):$grade="BB";
                    $result="pass";
                    break;
            case ($maths>=55 && $maths<=64):$grade="BC";
                    $result="pass";
                    break;
            case ($maths>=45 && $maths<=54):$grade="CC";
                    $result="pass";
                    break;
            case ($maths>=40 && $maths<=44):$grade="CD";
                    $result="pass";
                    break;
            case ($maths>=35 && $maths<=39):$grade="DD";
                    $result="pass";
                    break;
            case ($maths<=35):$grade="FF";
                    $result="fail";
                    break;
        }
        switch ($english) {
            case ($english>=85 && $english<=100): $grade2="AA";
                    $result2="pass";
                    break;
            case ($english>=75 && $english<=84): $grade2="AB";
                    $result2="pass";
                    break;
            case ($english>=65 && $english<=74): $grade2="BB";
                    $result2="pass";
                    break;
            case ($english>=55 && $english<=64): $grade2="BC";
                    $result2="pass";
                    break;
            case ($english>=45 && $english<=54): $grade2="CC";
                    $result2="pass";
                    break;
            case ($english>=40 && $english<=44): $grade2="CD";
                    $result2="pass";
                    break;
            case ($english>=35 && $english<=39): $grade2="DD";
                    $result2="pass";
                    break;
            case ($english<=35): $grade2="FF";
                    $result2="fail";
                    break;
        }
            switch ($sc) {
            case     ($sc>=85 && $sc<=100): $grade3="AA";
                    $result3="pass";
                    break;
            case ($sc>=75 && $sc<=84): $grade3="AB";
                    $result3="pass";
                    break;
            case ($sc>=65 && $sc<=74): $grade3="BB";
                    $result3="pass";
                    break;
            case ($sc>=55 && $sc<=64): $grade3="BC";
                    $result3="pass";
                    break;
            case ($sc>=45 && $sc<=54): $grade3="CC";
                    $result3="pass";
                    break;
            case ($sc>=40 && $sc<=44): $grade3="CD";
                    $result3="pass";
                    break;
            case ($sc>=35 && $sc<=39): $grade3="DD";
                    $result3="pass";
                    break;
            case ($sc<=35):
            $grade3="FF";
            $result3="fail";
            break;
        }
        switch ($ss) {
            case ($ss>=85 && $ss<=100): $grade4="AA";
                    $result4="pass";
                    break;
            case ($ss>=75 && $ss<=84): $grade4="AB";
                    $result4="pass";
                    break;
            case ($ss>=65 && $ss<=74): $grade4="BB";
                    $result4="pass";
                    break;
            case ($ss>=55 && $ss<=64): $grade4="BC";
                    $result4="pass";
                    break;
            case ($ss>=45 && $ss<=54): $grade4="CC";
                    $result4="pass";
                    break;
            case ($ss>=40 && $ss<=44): $grade4="CD";
                    $result4="pass";
                    break;
            case ($ss>=35 && $ss<=39): $grade4="DD";
                    $result4="pass";
                    break;
            case ($ss<=35): $grade4="FF";
                    $result4="fail";
                    break;
        }
    ?>
        <table border="5">
            <th>subject name</th>
            <th>grade</th>
            <th>pas and ff</th>
            <tr>
                <td>maths</td>
                <td>
                    <?php  echo $grade; ?>
                </td>
                <td>
                    <?php echo $result; ?>
                </td>
            </tr>
            <tr>
                <td>english</td>
                <td>
                    <?php echo $grade2; ?>
                </td>
                <td>
                    <?php echo $result2; ?>
                </td>
            </tr>
            <tr>
                <td>science</td>
                <td>
                    <?php echo $grade3; ?>
                </td>
                <td>
                    <?php echo $result3; ?>
                </td>
            </tr>
            <tr>
                <td>social science</td>
                <td>
                    <?php echo $grade4; ?>
                </td>
                <td>
                    <?php echo $result4; ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>