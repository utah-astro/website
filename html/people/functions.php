<?php
    function membertable($members) {
        try {
            echo "<table class='table table-header-shade table-bordered'>";
            foreach ($members as $name => $member) {
                echo "<tr>";
                echo "    <td width='150'><img src='$member->image' alt='$name' width='150' height='150'></td>";
                echo "    <td>";
                echo "        <h4><a href='$member->homepage'>$name</a></h4>";
                echo "        <span>$member->keywords</span>";
                echo "    </td>";
                echo "</tr>";
            }
            echo "</table>";
        } catch (Exception $e) {
            echo "Exception: '",  $e->getMessage(), "\n";
        }
    }
?>
