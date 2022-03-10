<?php

class dalFrontnotice extends DB {
       public function view() {
        $arr = array();
        $this->Connect();
        $sql = "select *

from notice order by notice.title asc";
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            echo "<tr>
                    <div>$d->date</div>
                    <div>$d->title</div>
                    <div>$d->description</div>
<div><img style='width:300px; height:200px;' src='images/notice/notice-{$d->id}.{$d->picture}'/></div>                        
		</tr>";
        }
        // return $arr;
    }

}
