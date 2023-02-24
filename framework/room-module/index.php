<div id="wrapper1">
    <div id="submenu">
        <a href="index.php?page=rooms&subpage=create">Create</a> |
        <a href="index.php?page=rooms&subpage=records">Read</a>
    </div>
    <div id="content">
        <?php
        switch($subpage){
                case 'create':
                    require_once 'create-room.php';
                break;
                case 'records':
                    require_once 'read-room.php';
                break; 
                case 'update':
                    require_once 'update-room.php';
                break; 
                case 'remove':
                    require_once 'remove-room.php';
                break; 
                default:
                    require_once 'read-room.php';
                break;
            }
        ?>
    </div>
</div>