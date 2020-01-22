<div class="sidebar-menu">
    <header class="logo-env" >
        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo site_url('login'); ?>">
                <img src="<?php echo base_url('uploads/logo.png');?>"  style="max-height:60px;"/>
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">

                <i class="entypo-menu"></i>
            </a>
        </div>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <div style=""></div>
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
        <li id="search">
  				<form class="" action="<?php echo site_url($account_type . '/student_details'); ?>" method="post">
  					<input type="text" class="search-input" name="student_identifier" placeholder="<?php echo get_phrase('student_name').' / '.get_phrase('code').'...'; ?>" value="" required style="font-family: 'Poppins', sans-serif !important; background-color: #2C2E3E !important; color: #868AA8; border-bottom: 1px solid #3F3E5F;">
  					<button type="submit">
  						<i class="entypo-search"></i>
  					</button>
  				</form>
			  </li>

        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo site_url('admin/dashboard'); ?>">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>

        <!-- STUDENT -->
        <li class="<?php if ($page_name == 'student_add' ||
                                $page_name == 'student_bulk_add' ||
                                    $page_name == 'student_information' ||
                                        $page_name == 'student_marksheet' ||
                                            $page_name == 'student_promotion' ||
                                              $page_name == 'student_profile')
                                                echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="fa fa-group"></i>
                <span><?php echo get_phrase('student'); ?></span>
            </a>
            <ul>
                <!-- STUDENT ADMISSION -->
                <li class="<?php if ($page_name == 'student_add') echo 'active'; ?> ">
                    <a href="<?php echo site_url('admin/student_add'); ?>">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('admit_student'); ?></span>
                    </a>
                </li>

                <!-- STUDENT INFORMATION -->
                <li class="<?php if ($page_name == 'student_information' || $page_name == 'student_marksheet') echo 'opened active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('student_information'); ?></span>
                    </a>
                    <ul>
                        <?php
                        $classes = $this->db->get('class')->result_array();
                        foreach ($classes as $row):
                            ?>
                            <li class="<?php if ($page_name == 'student_information' && $class_id == $row['class_id'] || $page_name == 'student_marksheet' && $class_id == $row['class_id']) echo 'active'; ?>">
                            <!--<li class="<?php if ($page_name == 'student_information' && $page_name == 'student_marksheet' && $class_id == $row['class_id']) echo 'active'; ?>">-->
                                <a href="<?php echo site_url('admin/student_information/' . $row['class_id']); ?>">
                                    <span><?php echo get_phrase('class'); ?> <?php echo $row['name']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

            </ul>
        </li>

        <!-- LECTURER -->
        <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
            <a href="<?php echo site_url('admin/teacher'); ?>">
                <i class="entypo-users"></i>
                <span><?php echo get_phrase('lecturer'); ?></span>
            </a>
        </li>

        <!-- EVENTS -->
        <li class="<?php if ($page_name == 'events') echo 'active'; ?> ">
            <a href="<?php echo site_url('admin/frontend_pages/events'); ?>">
                <i class="entypo-book-open"></i>
                <span><?php echo get_phrase('events'); ?></span>
            </a>
        </li>

        <!-- GALLERY -->
        <li class="<?php if ($page_name == 'gallery') echo 'active'; ?> ">
            <a href="<?php echo site_url('admin/frontend_pages/gallery'); ?>">
                <i class="entypo-leaf"></i>
                <span><?php echo get_phrase('gallery'); ?></span>
            </a>
        </li>

        <!-- CLASS -->
        <li class="<?php
        if ($page_name == 'class' ||
                $page_name == 'section' ||
                    $page_name == 'academic_syllabus')
            echo 'opened active';
        ?> ">
            <a href="<?php echo site_url('admin/classes'); ?>">
                <i class="entypo-flow-tree"></i>
                <span><?php echo get_phrase('class'); ?></span>
            </a>
        </li>

        <!-- SUBJECT -->
        <li class="<?php if ($page_name == 'subject') echo 'opened active'; ?> ">
            <a href="#">
                <i class="entypo-docs"></i>
                <span><?php echo get_phrase('subject'); ?></span>
            </a>
            <ul>
                <?php
                $classes = $this->db->get('class')->result_array();
                foreach ($classes as $row):
                    ?>
                    <li class="<?php if ($page_name == 'subject' && $class_id == $row['class_id']) echo 'active'; ?>">
                        <a href="<?php echo site_url('admin/subject/' . $row['class_id']); ?>">
                            <span><?php echo get_phrase('class'); ?> <?php echo $row['name']; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>

        <!-- STUDY MATERIAL -->
            <li class="<?php if ($page_name == 'study_material') echo 'active'; ?> ">
                <a href="<?php echo site_url('admin/study_material'); ?>">
                    <i class="entypo-book-open"></i>
                    <span><?php echo get_phrase('study_material'); ?></span>
                </a>
            </li>

        <!-- NOTICEBOARD -->
        <li class="<?php if ($page_name == 'noticeboard' || $page_name == 'noticeboard_edit') echo 'active'; ?> ">
            <a href="<?php echo site_url('admin/noticeboard'); ?>">
                <i class="entypo-doc-text-inv"></i>
                <span><?php echo get_phrase('noticeboard'); ?></span>
            </a>
        </li>

    </ul>

</div>
