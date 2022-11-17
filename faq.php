<?php

error_reporting(E_ALL);
ini_set("display_errors",1);
include "../torta_da_te/inc/session.php";

include "../torta_da_te/inc/dbcon.php";

$sql = "select * from notice";

$result = mysqli_query($dbcon, $sql);
$total = mysqli_num_rows($result);

$list_num = 6;
$page_num = 1;

$page = isset($_GET["page"])? $_GET["page"]:1;

$total_page = ceil($total / $list_num);
$total_blick = ceil($page / $page_num);

$current_block = ceil($page / $page_num);

$s_pageNum = ($current_block -1) * $page_num +1;

if ($s_pageNum <=0){
    $s_pageNum = 1;
};

$e_pageNum = $current_block * $page_num;

if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../torta_da_te/css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../torta_da_te/css/style_menu_footer.css">
    <link rel="stylesheet" href="../torta_da_te/css/faq.css">
    <link rel="shortcut icon" href="../torta_da_te/images/logo_favicon.ico" type="image/x-icon">
    <title>FaQ</title>

</head>
<body>
<?php include "../torta_da_te/inc/header.php"?>
        

<main id="main">
    
    <div class="faq_main">
    <div class="faq_main_img">
        <h2>Frequently Asked Questions</h2>
    </div>
    

    <section class="faq_sub_posts2">
        <div class="sub_li">
            <ul>
                <li class="sub_li_active"><a href="../faq.html">FAQ</a></li>
                <li class="sub_li_inactive"><a href="../1to1_qna.html">1:1 Q&A</a></li>
            </ul>
        </div>

<?php

$start = ($page - 1) * $list_num;

$sql = "select * from notice order by idx desc limit $start, $list_num;";


$result = mysqli_query($dbcon, $sql);

$i = $total - (($page - 1) * $list_num);
while($array = mysqli_fetch_array($result)){
?>
        <div class="faq_posts">
            <div class="faq_posts_ttl_desc">
            <span class="faq_posts_ttl">
                <?php echo $array["n_title"];?>
                <div class="arrow_more"></div>
            </span>
            <span class="faq_posts_desc">
               <?php 
               $n_content = str_replace("\n", "<br>", $array["n_content"]);
               $n_content = str_replace(" ", "&nbsp;", $n_content);
               echo $n_content;
               ?>
            </span>
            </div>
<?php
    $i--;
};
?>
            </div>
        </div>
    </section>
    <section class="still_q">

        <div class="still_q_ttl">
        <h2>Do you have a still question?</h2>
        <p>Feel free to contact to us!</p>
        </div>
        <div class="still_q_contact">

            <div class="q_contact">
            <div class="q_contact_details">
                <span class="q_contact_ttl">CS Center</span>
                <div class="q_cs_number">
                    <a href="tel:11398719981">113-9871-9981</a>
                    <span class="q_cs_date">
                        (Tue - Sun 09:00 ~ 22:00)
                    </span>
                </div>
            </div>
            <div class="q_cs_email">
                <span class="q_contact_ttl">Email</span>
                <a href="mailto:customerservice@buonatortadate.com">customerservice@buonatortadate.com</a>

            </div>
            <div class="q_qna_page">
                <span class="q_contact_ttl">or</span>
                <span>Ask us in <a  href="#" class="one_to_qna">1:1 QnA page!</a></span>
            </div>
            </div>
        </div>
    </section>
</div>
</main>

<?php include "../torta_da_te/inc/footer.html"?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../torta_da_te/js/faq.js"></script>
<script src="../torta_da_te/js/navbar.js"></script>
</body>
</html>