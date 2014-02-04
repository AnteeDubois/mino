<li class="forum">
    <h2 class="forum-name h4"><a href="#" title="FORUM"><?php echo $forum; ?></a></h2>
    <ol class="forum-list list-unstyled">
        <?php
            $status = '<span class="icon icon-circle peter-river"></span> ';
            $title = '[3.x] Discussion';
            $label = ' <span class="label concrete">INFO</span> <span class="label pomegranate">REPORTED</span> <span class="label belize-hole">STICKY</span>';
            $desc = 'General discussion of development ideas and the approaches taken in the 3.x branch of phpBB. The next feature release of phpBB 3 will be 3.1/Ascreaus followed by 3.2/Arsia.';
            $topics = '623';
            $posts = '6439';            
            $avatar = 'http://www.gravatar.com/avatar/' . md5(strtolower(trim("midaym@gmail.com")));
            $usertype = 'admin';
            $user = 'hanakin';
            $time = '22 mins ago';
        ?>
        <?php include("includes/forum-row.php"); ?>
        <?php
            $status = '';
            $title = '[3.1/Ascraeus] Merged RFCs';
            $label = ' <span class="label emerald">NEW</span> <span class="label silver">LOCKED</span>';
            $desc = 'These requests for comments have lead to an implemented feature that has been successfully merged into the 3.1/Ascraeus branch. Everything listed in this forum will be available in phpBB 3.1.';
            $topics = '100';
            $posts = '3300';
            $avatar = 'assets/img/user.png';
            $usertype = 'mod';
            $user = 'JonnyB';
            $time = 'Sun Jan 12, 2014 8:27 pm';
        ?>
        <?php include("includes/forum-row.php"); ?>
        <?php
            $status = '<span class="icon icon-circle turquuoise"></span> ';
            $title = 'General Development Discussion';
            $label = ' <span class="label orange">HOT</span>';
            $desc = 'Discuss general development subjects that are not specific to a particular version like the versioning control system we use or other infrastructure.';
            $topics = '200';
            $posts = '1398';
            $avatar = 'assets/img/user.png';
            $usertype = 'user';
            $user = 'bojangles';
            $time = 'Today, 3:23 PM';
        ?>
        <?php include("includes/forum-row.php"); ?>
    </ol>
</li>