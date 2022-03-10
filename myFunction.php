<?php

function Calc($price, $vat, $discount) {
    $price = $price - ($price * $discount) / 100;
    $price = $price + ($price * $vat) / 100;
    return $price;
}

function BloodCal($price, $service) {
    $price = $price + ($service);
    return $price;
}

function Dropdown($data, $selected) {
    foreach ($data as $dt) {
        if ($dt->id == $selected) {
            echo "<option value = \"{$dt->id}\" selected >$dt->name</option>";
        } else {
            echo "<option value = \"{$dt->id}\">$dt->name</option>";
        }
    }
}

function Redirect($url) {
    echo"<script>";
    echo"self.location=\"{$url}\";";
    echo"</script>";
}



function Table($data, $url) {
    foreach ($data as $dt) {
        $i = 0;
        echo "<tr>";
        foreach ($dt as $d) {
            if ($i != 0) {
                echo "<td>$d</td>";
            }
            $i++;
        }
        echo "<td><a href = \"master.php?{$url}-edit&id=$dt->id\"><i class=\"fa fa-pencil-square btn btn-success\"></i>
</a></td>";
        echo "<td><a href = \"master.php?{$url}-delete&id=$dt->id\"><i class=\"fa fa-trash btn btn-danger\"></i></a></td>";
        echo"</tr>";
    }
}

function Table2($data, $url) {
    foreach ($data as $dt) {
        $i = 0;
        echo "<tr>";
        foreach ($dt as $d) {
            if ($i != 0) {
                echo "<td>$d</td>";
            }
            $i++;
        }
        echo "<td><a href = \"master.php?{$url}-edit&id=$dt->id\"><i class=\"fa fa-pencil-square btn btn-info\"></i>
</a></td>";
        echo "<td><a href = \"master.php?{$url}-delete&id=$dt->id\"><i class=\"fa fa-trash btn btn-danger\"></i></a></td>";
        echo "<td><a href = \"master.php?{$url}-release&id=$dt->id\"><i class=\"fa fa-wheelchair fa-1x btn btn-success\"></i></a></td>";
        echo"</tr>";
    }
}

function Table3($data, $url) {
    foreach ($data as $dt) {
        $i = 0;
        echo "<tr>";
        foreach ($dt as $d) {
            if ($i != 0) {
                echo "<td>$d</td>";
            }
            $i++;
        }
    }
}

function Table4($data, $url) {
    foreach ($data as $dt) {
        $i = 0;
        echo "<tr>";
        foreach ($dt as $d) {
            if ($i != 0) {
                echo "<td>$d</td>";
            }
            $i++;
        }
        echo "<td><a href = \"master.php?{$url}-receiver&id=$dt->id&date=$dt->date\"><i class=\"fa fa-tint btn btn-success\" style=\"color:red\"></i></a></td>";
        echo"</tr>";
    }
}


function FeedBack($data, $url) {
    foreach ($data as $dt) {
        $i = 0;
        foreach ($dt as $d) {
            if ($i != 0) {
                echo "<div>$d</div>";
            }
            $i++;
        }
    }
}

function Selected($url) {
    if ($current == 'home') {
        echo 'class="current"';
    }
}
