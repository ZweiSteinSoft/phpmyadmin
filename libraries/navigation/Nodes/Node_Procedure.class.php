<?php

class Node_Procedure extends Node {
    
    public function __construct($name, $type = Node::OBJECT, $is_group = false)
    {
        parent::__construct($name, $type, $is_group);
        $this->icon = PMA_getImage('b_routines.png');
        $this->links = array(
            'text' => 'db_routines.php?server=' . $GLOBALS['server']
                    . '&amp;db=%2$s&amp;item_name=%1$s&amp;item_type=PROCEDURE'
                    . '&amp;edit_item=1&amp;token=' . $GLOBALS['token'],
            'icon' => 'db_routines.php?server=' . $GLOBALS['server']
                    . '&amp;db=%2$s&amp;item_name=%1$s&amp;item_type=PROCEDURE'
                    . '&amp;export_item=1&amp;token=' . $GLOBALS['token']
        );
    }
}

?>
