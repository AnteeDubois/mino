<li class="forums-forum">
    <h2 class="forum-name h4"><a href="#" title="FORUM"><?php echo $forum; ?></a></h2>
    <ol class="forum-list list-unstyled">
        <?php
            $title = '[3.x] Discussion';
            $status = ' <span class="label red">LOCKED</span>';
            $desc = 'General discussion of development ideas and the approaches taken in the 3.x branch of phpBB. The next feature release of phpBB 3 will be 3.1/Ascreaus followed by 3.2/Arsia.';
            $topics = '623';
            $posts = '6439';
            $usertype = 'adimn';
            $user = 'hanakin';
            $time = '22 mins ago';
        ?>
        <?php include("includes/forum-row.php"); ?>
        <?php
            $title = '[3.1/Ascraeus] Merged RFCs';
            $status = ' <span class="label green">NEW</span>';
            $desc = 'These requests for comments have lead to an implemented feature that has been successfully merged into the 3.1/Ascraeus branch. Everything listed in this forum will be available in phpBB 3.1.';
            $topics = '100';
            $posts = '3300';
            $usertype = 'mod';
            $user = 'JonnyB';
            $time = 'Sun Jan 12, 2014 8:27 pm';
        ?>
        <?php include("includes/forum-row.php"); ?>
        <?php
            $title = 'General Development Discussion';
            $status = '';
            $desc = 'Discuss general development subjects that are not specific to a particular version like the versioning control system we use or other infrastructure.';
            $topics = '200';
            $posts = '1398';
            $usertype = 'user';
            $user = 'bojangles';
            $time = 'Today, 3:23 PM';
        ?>
        <?php include("includes/forum-row.php"); ?>
    </ol>
</li>