<?php

/*
Template Name: IG Page

*/

get_header();

?>

<style>
.btn-link {
    display: inline-block;
    border-color: #fa560d;
    background-color: #fb793f;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
    padding: 10px 20px;
    min-width: 350px;
}

.btn-link:hover {
    border-color: #fa560d;
    background-color: #fb793f;
    text-decoration: none;
}

.btn-link-title {
    color: #ffffff;
    font-size: 15px;
    margin-bottom: 5px;
}

.btn-link-sub-title {
    color: #ffffff;
    font-size: 10px;
}

.btn-links-content {
    background: url("<?php echo get_stylesheet_directory_uri()?>/img/ig-bk.jpg");
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 60px;
}

.btn-link-wrap {
    margin-bottom: 20px;
}

.btn-link-wrap:last-of-type {
    margin-bottom: 0px;
}

.social-links {
    margin-top: 30px;
    text-align: center;
}

.social-link {
    display: inline-block;
    margin: 0px 10px;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: white;
    text-align: center;
    line-height: 40px;
}

</style>
<div class="page-ig-content">
    <div class="btn-links-content">
        <div class="btn-links">
            <div class="btn-link-wrap">
                <a href="#" class="btn-link">
                    <div class="btn-link-title">FREE CONSULTATION</div>
                    <div class="btn-link-sub-title">Speak with an experienced loan officer about your financing options.</div>
                </a>
            </div>
            <div class="btn-link-wrap">
                <a href="#" class="btn-link">
                    <div class="btn-link-title">LET’S WORK TOGETHER </div>
                    <div class="btn-link-sub-title">For Realtors, CPA’s, Financial Planners and Attorney’s</div>
                </a>
            </div>
            <div class="btn-link-wrap">
                <a href="#" class="btn-link">
                    <div class="btn-link-title">GET PREAPPROVED</div>
                    <div class="btn-link-sub-title">Learning how much of a home you can afford. </div>
                </a>
            </div>
            <div class="btn-link-wrap">
                <a href="#" class="btn-link">
                    <div class="btn-link-title">JOIN OUR VIP LIST</div>
                    <div class="btn-link-sub-title">Weekly video tips emailed once a week</div>
                </a>
            </div>
            <div class="social-links">
            
                <a href="" class="social-link">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="social-link">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="social-link">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
