<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Xuất số thành chữ</title>
    </head>
    <body>
        <?php
            $so = filter_input(INPUT_POST, 'so', FILTER_VALIDATE_INT);
            if($so === false){
                $err = 'dữ liệu nhập không hợp lệ. Vui lòng nhập lại';
            } else if ($so > 9 || $so < 0){
                $err = 'số đã nhập không hợp lệ. Vui lòng nhập lại';
            }else {
                switch($so){
                    case 0 : $chu = 'không'; break;
                    case 1 : $chu = 'một'; break;
                    case 2 : $chu = 'hai'; break;
                    case 3 : $chu = 'ba'; break;
                    case 4 : $chu = 'bốn'; break;
                    case 5 : $chu = 'năm'; break;
                    case 6 : $chu = 'sáu'; break;
                    case 7 : $chu = 'bảy'; break;
                    case 8 : $chu = 'tám'; break;
                    case 9 : $chu = 'chín'; break;
                }
            }
         ?>
        <form action="ex1.php" method="POST" >
            <table width="900" border="1">
                <tr>
                    <td colspan="3">Đọc số</td>
                </tr>
                <tr>
                    <td>Nhập số (0-9)</td>
                    <td width="69" rowspan="2"><input type="submit" name="button" id="button" 
                    value="Submit" /></td>
                    <td> Bằng chữ</td>
                </tr>
                <tr>
                    <td width="177"><p>     
                        <label for="textfield"></label>
                        <input type="text" name="so" id="textfield" />
                        </p>
                    </td>
                    <td width="232" ><label for="textfield2"></label>
                        <input  type="text" style="height: 20px; width: 90%; text-align: left;" name="chu" id="textfield2" value = "
                            <?php 
                                if (isset($err))
                                    echo $err;
                                else 
                                    echo $chu;
                            ?>
                        ">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
