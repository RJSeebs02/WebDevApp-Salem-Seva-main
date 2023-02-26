<div id="wrapper1">
    <div id="submenu">
        <a href="index.php?page=customers&subpage=create">Create</a> |
        <a href="index.php?page=customers&subpage=records">Read</a>
    </div>
    <div id="content">
        <?php
            switch($subpage){
                case 'create':
                    require_once 'create-customer.php';
                break;
                case 'records':
                    require_once 'read-customer.php';
                break; 
                case 'profile':
                    require_once 'profile-customer.php';
                break; 
                case 'remove':
                    require_once 'remove-customer.php';
                break; 
                default:
                    require_once 'read-customer.php';
                break;
            }
        ?>
    </div>
  </div>