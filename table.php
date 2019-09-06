<tr>
    <th>
        <h3 class="ansPoint">X</h3>
    </th>
    <th>
        <h3 class="ansPoint">Y</h3>
    </th>
    <th>
        <h3 class="ansPoint">R</h3>
    </th>
    <th>
        <h3 class="ansPoint">Result</h3>
    </th>
    <th>
        <h3 class="ansPoint">Time</h3>
    </th>
    <th>
        <h3 class="ansPoint">ScriptTime</h3>
    </th>
</tr>


<?php
foreach ($_SESSION['history'] as $value) { ?>

    <tr>
        <td>
            <p class="ansPoint"><?php echo $value[0] ?></p>
        </td>
        <td>
            <p class="ansPoint"><?php echo $value[1] ?></p>
        </td>
        <td>
            <p class="ansPoint"><?php echo $value[2] ?></p>
        </td>
        <td>
            <p class="ansPoint"><?php echo $value[3] ? "True" : "False" ?></p>
        </td>
        <td>
            <p class="ansPoint"><?php echo $value[4] ?></p>
        </td>
        <td>
            <p class="ansPoint"><?php echo number_format($value[5], 10, ".", "")*1000000 ?></p>
        </td>
    </tr>

<?php }?>