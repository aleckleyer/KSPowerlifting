<?php exit; ?>
1453410511
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (kspmoderator_cache m) LEFT JOIN kspusers u ON (m.user_id = u.user_id) LEFT JOIN kspgroups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}