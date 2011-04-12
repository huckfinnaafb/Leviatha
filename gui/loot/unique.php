<?php include(F3::get('GUI') . "/includes/header.php") ?>
<div class="line">
    <div class="unit size2of3">
        <div class="mod mod-item">
            <div class="node">
                <h1 class="h-item" style="color:#fee25e"><?php echo $this->db_item["common"]["name"] ?></h1>
                <p>Level <?php echo $this->db_item["common"]["level"] . " " . ucwords($this->db_item["common"]["rarity"]) . " " . ucwords($this->db_item["common"]["class"]) ?></p>
                <p>Required Level: <?php echo $this->db_item["common"]["levelreq"]; ?></p>
                <img class="img-item" src="/img/stormshield.png">
            </div>
            <div class="node node-info">
                <!-- Normal Properties -->
                <?php include(F3::get('GUI') . "loot/modules/props_normal.php") ?>
            </div>
            <div class="node node-info">
                <!-- Magic Properties -->
                <?php include(F3::get('GUI') . "loot/modules/props_magic.php") ?>
            </div>
        </div>
    </div>
    <div class="unit size2of3 lastUnit">
        <!-- Similar Items -->
        <?php include(F3::get('GUI') . "loot/modules/similar.php") ?>
    </div>
</div>
<!-- Footer -->
<?php include(F3::get('GUI') . "/includes/footer.php") ?>
