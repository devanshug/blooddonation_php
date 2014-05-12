<div id="rightarea-content">
    <table id="register_table">
        <th id="heading" class="table_title">Registered Donors</th>
        <?php
            include_once 'controller/controller.php';
            $controller = new Controller();

            $buffer = $controller->getRegisteredDonors();
            $groups = $controller->getBloodGroups();
            $count = 0;
            foreach ($buffer as $val) {
        ?>
                <tr>
                    <td>
                        <?php echo $groups[$count] ?>
                    </td>
                    <td>
                        <?php echo $val ?>
                    </td>
                </tr>
        <?php
                $count = $count + 1;
            }
        ?>
    </table>
</div>