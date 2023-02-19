<div id="wrapper1">
    <div id="submenu">
        <a href="index.php?page=admins&subpage=create">Create</a> |
        <a href="index.php?page=admins&subpage=records">Read</a>
    </div>
    <div id="content">
        <?php
            switch($subpage){
                case 'create':
                    require_once 'create-admin.php';
                break;
                case 'records':
                    require_once 'read-admin.php';
                break; 
                case 'update':
                    require_once 'update-admin.php';
                break; 
                case 'remove':
                    require_once 'remove-admin.php';
                break; 
                default:
                    require_once 'read-admin.php';
                break;
            }
        ?>
    </div>
  </div>