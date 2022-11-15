
<?php

error_reporting(E_ALL);
ini_set("display_errors",1);
include "../torta_da_te/inc/session.php";
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
    <link rel="stylesheet" href="../torta_da_te/css/1to1qna.css">
    <link rel="stylesheet" href="../torta_da_te/css/1to1ask.css">
    <link rel="shortcut icon" href="../torta_da_te/images/logo_favicon.ico" type="image/x-icon">
    <title>1:1 Q&A</title>

</head>
<body>
<!--팝업 메세지 오버레이-->
    <div class="popup_msg_confirm"  style="display: none">
        <div class="close_popup"><span class="hide">close</span></div>
        <div class="popup_msg_ttl_btn_confirm">
        <div class="popup_confirm_ico"></div>
        <span>Successfuly deleted!</span>
        </div>
    </div>


<div class="popup_msg_remove_pd" style="display: none">
    <div class="close_popup"><span class="hide">close</span></div>
    <div class="popup_msg_ttl_btn">
    <span>Are you sure to delete it?</span>
    <div class="popup_msg_btn_group">
        <span class="popup_btn_cancel">Cancel</span>
        <span class="popup_btn_confirm">Confirm</span>
    </div>
    </div>
</div>
<div class="overlay_popup" style="display:none"></div>
<!--팝업 메세지 오버레이 끝-->


<?php include "../torta_da_te/inc/header.php"?>
        

<main id="main">

    
    <section class="faq_sub_posts">
        <div class="one_to_one_question">
            <div class="sub_li">
                <ul>
                    <li class="sub_li_active"><a href="../torta_da_te/faq.html">FAQ</a></li>
                    <li><a href="../torta_da_te/1to1_qna.html">1:1 Q&A</a></li>
                </ul>
            </div>
    
            
        <div class="one_to_one">
            
        <div class="one_to_one_btn">
        <div class="one_ask_post">
            <table class="personal_ask_tble">
                <thead>
                    <tr class="one_ask_1st">
                        <th>Title</th>
                        <td>Nullam dictum felis eu pede mollis pretium.</td>
                    </tr>
                    <tr class="one_ask_1st">
                        <th>Writer</th>
                        <td class="one_ask_data1">Jane Kim</td>
                        <th>Date</th>
                        <td class="one_ask_data1">04.09.2022</td>
                    </tr>
                    <tr class="one_ask_1st">
                        <th>Question</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="one_ask_1st">
                        <td class="one_ask_data_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus??</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="one_ask_1st">
                        <th>Answer</th>
                    </tr>
                    <tr class="one_ask_1st">
                        <td class="one_ask_data_desc">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue :)</td>
                    </tr>
                </tfoot>
            </table>
            <div class="ask_q_btn">
                <div class="ask_q_edit"><span class="edit_ico"></span>Edit</div>
                <div class="ask_q_edit"><span class="delete_ico"></span>Delete</div>
            </div>
        </div>
        <div class="one_page">
            <span class="one_go_before"><span class="before_ico"></span>Before</span>
            <span class="one_go_next">Next<span class="next_ico"></span></span>
        </div>
        </div>
        </div>
        </div>
        
    </section>
   
</main>

<?php include "../torta_da_te/inc/footer.html"?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="../torta_da_te/js/navbar.js"></script>
    <script src="../torta_da_te/js/subscribe.js"></script>

    

</body>
</html>