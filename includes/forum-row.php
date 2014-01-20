<li class="forum-row grid-row">
    <dl>
        <dt class="forum-header grid-m-7 grid-l-8">
            <h2 class="forum-title h5"><a href="#"><?php echo $title; ?></a><?php echo $status; ?></h2>
            <dfn class="forum-description"><?php echo $desc; ?></dfn>
        </dt>
        <dd class="forum-stats label-group grid-m-2">
        </dd>
        <dd class="forum-recent hidden-s grid-m-3 grid-l-2">
            <img class="forum-avatar pull-left" src="assets/img/user.jpg" alt="" />
            <dl class="forum-recent-info pull-left">
            </dl>
                <p class="forum-stats-topics"><dfn class="hidden-s">Topics: </dfn><b><?php echo $topics; ?></b></p>
                <p class="forum-stats-posts"><dfn class="hidden-s">Replies: </dfn><b><?php echo $posts; ?></b></p>
                    <dt class="forum-recent-user"><a class="<?php echo $usertype; ?>" href="#"><?php echo $user; ?></a></dt>
                    <dd class="forum-recent-time"><time><?php echo $time; ?></time></dd>
        </dd>
    </dl>
</li>