<div class="module mod-itemlist">    <h1 class="h-itemlist">Upgrades</h1>    <?php        try {            if (!empty($this->db_similar)) {                foreach($this->db_similar as $row) {                    echo "                        <a class='link-block' href='/loot?item={$row['urlname']}'>                            <div class='node node-item'>                                <img class='img-itemthumb' src='/img/lena32.png'>                                <h2 class='h-item'>{$row['name']}</h2>                                <p class='text-info'>Level {$row['level']} {$row['classname']}</p>                            </div>                        </a>                    ";                }            } else {                throw new Exception("No Similar Items in Range.");            }        } catch (Exception $e) {            echo "<p class='module mod-notify mod-warning'>" . $e->getMessage(), "</p>\n";        }    ?></div>