<li class="forum-row grid-row">
        <dt class="forum-header grid-m-7 grid-l-8">
    <dl class="forum-row-wrap">
            <h2 class="forum-title h5"><a href="#"><?php echo $title; ?></a><?php echo $status; ?></h2>
            <dfn class="forum-description"><?php echo $desc; ?></dfn>
        </dt>
        <dd class="forum-info grid-m-6 grid-l-5 grid-w-4">
            
            <div class="forum-stats label-group pull-left">
                <p class="forum-stats-topics"><dfn class="hidden-s">Topics: </dfn><b><?php echo $topics; ?></b></p>
                <p class="forum-stats-posts"><dfn class="hidden-s">Replies: </dfn><b><?php echo $posts; ?></b></p>
            </div>
            <div class="forum-recent pull-left hidden-s">
                <img class="forum-avatar pull-left" src="assets/img/user.jpg" alt="" />
                <dl class="forum-recent-info pull-left">
                    <dt class="forum-recent-user"><a class="<?php echo $usertype; ?>" href="#"><?php echo $user; ?></a></dt>
                    <dd class="forum-recent-time"><time><?php echo $time; ?></time></dd>
                </dl>
            </div>
        </dd>
    </dl>
</li>