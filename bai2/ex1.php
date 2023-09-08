<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Chào các bạn</title>
        <style>
            body {
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <?php 
            $a = filter_input(INPUT_POST, 'a', FILTER_VALIDATE_INT);
            $b = filter_input(INPUT_POST, 'b', FILTER_VALIDATE_INT);

            if ($a === false || $b === false){
                $err ="dữ liệu nhập không hợp lệ";
            }

            else if (isset($a) && isset($b)){
                if ( $a == 0){
                    if ($b == 0){
                        $nghiem = "phương trình có vô số nghiệm";
                    }else {
                        $nghiem = "phương trình vô nghiệm";
                    }
                }else {
                    $x = round((-$b/ $a), 5);
                    $nghiem = 'x = ' . $x ;
                }
            }
        ?>

        <form action="ex1.php" method="post" >
        <table width="800" border="1">
        <tr>
            <td colspan="3" bgcolor="#336699"><strong>Giải phương trình bậc 1 </strong></td>
        </tr>
        <tr>
            <td width="120">Phương trình </td>
            <td width="250">
                <input name="a" type="text" /> X + 
            </td>
                <td width="352"><label for="textfield"></label>
                <input name="b" type="text" id="textfield" /> = 0
            </td>
        </tr>
        <tr>
            <td colspan="3"> Nghiệm
                <input style="width: 60%;"  name="kq"type="text" id="textfield2" value= 
                   "<?php  
                        if (isset($err)){
                            echo $err;
                        }
                        else if (isset($nghiem)){
                            echo $nghiem;
                        }        
                    ?>  "
                >
            </td>
        </tr>
            <tr>
                <td colspan="3" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất" /> </td>
            </tr>
        </table>
        </form>
    </body>
</html>
