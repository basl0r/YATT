<?php
$this->fetch('navbar');
$this->assign('title', $title);
//Debugger::dump($data);
?>
<div class="container">
    <!--   style="#position:absolute" entfernt, macht alles kapott :) -->
    <h2>Mitarbeiterstatus</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mitarbeiter-ID</th>
                <th>Mitarbeiter-Nachname</th>
                <th>Mitarbeiter-Name</th>
                <th>Mitarbeiter-Soll-Stunden</th>
                <th>Mitarbeiter-Ist-Stunden</th>
                <th>Aktueller Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $user) {
                echo "<tr> ";
                echo "<td>".
                '<a href=' . $this->Html->url(array("controller" => "manager", "action" => "edit_user", $user['Manager']['id'])) . '>'
                . "" . $user['Manager']['id'] . ""
                        . "</td>";
                echo "<td>" . $user['Manager']['name'] . "</td>";
                echo "<td>" . $user['Manager']['first_name'] . "</td>";
//                echo "<td>" . $user['Manager']['max_hours_per_month'] . "</td>";
                echo "<td>" . $user['Manager']['is_active'] . "</td>";
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>
</div>