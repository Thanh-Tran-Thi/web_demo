<html>
    <head>
        <meta charset="UTF-8">
        <title>Task A</title>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <h2>Vietnamese full names</h2> 
        <table  border="1" cellpadding="3">
            <tr>
                <th>No.</th>
                <th>Last name</th>
                <th>First name</th>
            </tr>
            <?php
            $name = array("Nguyen Xuan Thang",
                "Trinh Bao Ngoc", "Tring Thi Thu Huyen",
                "Le Minh Duc", "Nguyen Dinh Tran Long",
                "Dang Dinh Quan", "Nguyen Van Cong"
            );

            foreach ($name as $key => $parts) {
                $elements = explode(" ", $parts);
                if (count($elements) > 1) {
                    $lastname = array_pop($elements);
                    $firstname = implode(" ", $elements);
                } else {
                    $firstname = $name;
                    $lastname = " ";
                }
                
//                if (count($elements) > 1) {
//                    $firstname = $elements[count($elements) - 1];
//                    unset($elements[count($elements) - 1]);
//                    $lastname = implode(" ", $elements);
//                } else {
//                    $firstname = $name;
//                    $lastname = " ";
//                }
                
                $first = array($firstname);
                $last = array($lastname);
                ?>
                <tr>   
                    <td><?php echo $key + 1; ?></td>                  
                    <td><?php
                        foreach ($first as $key => $value) {
                            echo "$value";
                        }
                        ?>
                    </td>
                    <td><?php
                        foreach ($last as $key => $value) {
                            echo "$value";
                        }
                        ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>
