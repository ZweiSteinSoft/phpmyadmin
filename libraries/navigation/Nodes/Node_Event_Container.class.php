<?php

class Node_Event_Container extends Node {
    
    public function __construct()
    {
        parent::__construct(__('Events'), Node::CONTAINER);
        $this->icon = PMA_getImage('b_events.png', '');
        $this->links = array(
            'text' => 'db_events.php?server=' . $GLOBALS['server']
                    . '&amp;db=%1$s&amp;token=' . $GLOBALS['token'],
            'icon' => 'db_events.php?server=' . $GLOBALS['server']
                    . '&amp;db=%1$s&amp;token=' . $GLOBALS['token'],
        );
        $this->real_name = 'events';
    }
}

?>
