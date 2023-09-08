<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>

        <style>
            body {
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <?php 
             function giai_pt_bac2($a1, $b1, $c1){
                if ($a1===0){
                    if ($b1 ===0 ){
                        if ($c1 ===0)
                            $nghiem = 'phương trình có vô số nghiệm';
                        else 
                            $nghiem = 'phương trình vô nghiệm';
                    } else {
                        $nghiem = 'phương trình có một nghiệm: x = ' . round((-$c1/$b1), 3);
                    }
                } else {
                    $delta = pow($b1, 2) - 4*$a1*$c1;
                    if ($delta < 0){
                        $nghiem = "Phương trình vô nghiệm";
                    }
                    else if ($delta ==0){
                        $nghiem = 'phương trình có nghiệm kép:  x1 = x2 = ' . round((-$b1  / (2* $a1)), 3);
                    } 
                    else {
                        $nghiem = 'phương trình có hai nghiệm phân biệt: x1 = ' . round((-$b1 - sqrt($delta))/(2*$a1), 3) .'và x2 = ' . round((-$b1 + sqrt($delta))/(2*$a1), 3); 
                    }
                }
                return $nghiem;
            }

            $a = filter_input(INPUT_POST, 'a', FILTER_VALIDATE_INT);
            $b = filter_input(INPUT_POST, 'b', FILTER_VALIDATE_INT);
            $c = filter_input(INPUT_POST, 'c', FILTER_VALIDATE_INT);

            if ($a == null || $b == null || $c == null) {
                $err = 'Nhập sai dữ liệu. Vui lòng nhập lại dữ liệu';
            } else {
                $nghiem = giai_pt_bac2($a, $b, $c);
            }
        ?>

        <form action="ex1.php" method="post" >
            <table width="1000" border="1">
            <tr>
                 <td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
            </tr>
            <tr>
                 <td colspan="4" bgcolor="#D72317"><strong><?php if (isset($err)) echo $err ?></strong></td>
            </tr>
            <tr>
                 <td width="83">Phương trình </td>
                <td width="236"><input name="a" type="text" value="<?php if (isset($a)) echo $a; ?>" />X^2 + </td>
                <td width="218">    
                    <label for="textfield3"></label>
                    <input type="text" name="b" id="textfield3" value="<?php if (isset($b)) echo $b; ?>" /> X+
                </td>
                <td width="241">
                    <label for="textfield"></label>
                    <input type="text" name="c" id="textfield" value="<?php if (isset($c)) echo $c; ?>" /> =0
                </td>
            </tr>
            <tr>
                <td colspan="4"> Nghiệm 
                <label for="textfield2"></label>
                <input name="textfield" type="text" id="textfield2" style="width: 90%;" value="<?php if (isset($nghiem)) echo $nghiem; ?>" />
            </tr>
            Trang 21
            <tr>
                <td colspan="4" align="center" valign="middle"><input type="submit" name="chao" 
                id="chao" value="Xuất" /></td>
            </tr>
            </table>
        </form>
    </body>
</html>
