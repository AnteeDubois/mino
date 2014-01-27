<ul class="notification-sub list-unstyled">
    <li>
        <span class="navbar-nav-sub-arrow octicons octicons-triangle-up"></span>
        <span class="pull-left">Notifications</span>
        <a class="pull-right" href="#" title="Settings"><span class="octicons octicons-settings"></span> <span>Settings</span></a>
    </li>
    <?php
        $status = '<p class="notification-status quoted">Quoted</p>';
        $title = '[RFC|Mergred] notification box';
        $avatar = 'assets/img/user.png';
        $usertype = 'user';
        $user = 'bojangles';
        $time = 'Today, 01:00 PM';
    ?>
    <?php include("includes/notification-item.php"); ?>

    <?php
        $status = '<p class="notification-status replied">Replied</p>';
        $title = '[3.x] Discussion';
        $avatar = 'http://www.gravatar.com/avatar/' . md5(strtolower(trim("midaym@gmail.com")));
        $usertype = 'admin';
        $user = 'hanakin';
        $time = 'April, 15';
    ?>
    <?php include("includes/notification-item.php"); ?>

    <?php
        $status = '<p class="notification-status approved">Approved</p>';
        $title = '[RFC|Mergred] notification box';
        $avatar = 'assets/img/user.png';
        $usertype = 'user';
        $user = 'bojangles';
        $time = 'Today, 07:45 PM';
    ?>
    <?php include("includes/notification-item.php"); ?>

    <?php
        $status = '<p class="notification-status rejected">Rejected</p>';
        $title = '[RFC|Mergred] notification box';
        $avatar = 'assets/img/user.png';
        $usertype = 'mod';
        $user = 'JonnyB';
        $time = 'Sun Jan 12, 2014 8:27 pm';
    ?>
    <?php include("includes/notification-item.php"); ?>

    <?php
        $status = '<p class="notification-status created">Created</p>';
        $title = '[3.x] Discussion';
        $avatar = 'assets/img/user.png';
        $usertype = 'user';
        $user = 'bojangles';
        $time = '22 mins ago';
    ?>
    <?php include("includes/notification-item.php"); ?>
    <li class="notification-more"><a href="#" title="See All" data-toogle="tooltip" data-placement="bottom" data-container=".navbar"><span class="octicons octicons-chevron-down"></span> <span>See All</span></a></li>
</ul>