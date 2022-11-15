
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
    
    <link rel="stylesheet" href="../torta_da_te/css/product.css">
    <link rel="stylesheet" href="../torta_da_te/css/faq.css">
    <link rel="stylesheet" href="../torta_da_te/css/1to1qna.css">
    <link rel="shortcut icon" href="../torta_da_te/images/logo_favicon.ico" type="image/x-icon">
    <title>1:1 Q&A</title>

</head>
<body>

    <!--팝업 메세지 오버레이-->
    <div class="popup_msg_remove_pd" style="display: none">
        <div class="close_popup"><span class="hide">close</span></div>
        <div class="popup_msg_ttl_btn">
        <span style="text-align: center; margin-top: 16px;">You should be logged in<br>to read this post.</span>
        <div class="popup_msg_btn_group">
            <span class="popup_btn_cancel">Login</span>
            <span class="popup_btn_confirm">Cancel</span>
        </div>
        </div>
    </div>
    <div class="overlay_popup" style="display: none"></div>
    <!--팝업 메세지 오버레이 끝-->

    
    <?php include "../torta_da_te/inc/header.php"?>
           
        

<main id="main">
   
    <div class="one_to_one_main_img">
        <h2>1:1 Question and Answer</h2>
    </div>
    <section class="faq_sub_posts">
        
        
            <div class="one_to_one_question">
        <div class="sub_li">
            <ul>
                <li class="sub_li_inactive"><a href="../torta_da_te/faq.html">FAQ</a></li>
                <li class="sub_li_active"><a href="../torta_da_te/1to1_qna.html">1:1 Q&A</a></li>
            </ul>
        </div>

        <div class="one_to_one_pagination">
        <div class="one_to_one">
            <table class="one_to_one_qna">
                <thead>
                <tr class="one_to_one_ttl">
                        <th class="t_data1">No.</th>
                        <th class="t_data2">Title</th>
                        <th class="t_data3">Writer</th>
                        <th class="t_data4">Date</th>
                        <th class="t_data5">View</th>
                </tr>
            </thead>
            <tbody>
                <tr class="one_to_one_details">
                    <td class="t_data1_1">1</td>
                    <td class="t_data2_1"><a href="../torta_da_te/1to1_ask.html">
                    <span class="t_data2_ttl">Hello, This is James Doe. I have a question!</span></a></td>
                    <td class="t_data3_1">James Doe</td>
                    <td class="t_data4_1">23. 11. 22</td>
                    <td class="t_data5_1">12</td>
                </tr>
                <tr class="one_to_one_details">
                    <td class="t_data1_1">1</td>
                    <td class="t_data2_1"><span class="t_data2_ttl">Hello, This is James Doe. I have a question!</span></td>
                    <td class="t_data3_1">James Doe</td>
                    <td class="t_data4_1">23. 11. 22</td>
                    <td class="t_data5_1">12</td>
                </tr>
                <tr class="one_to_one_details">
                    <td class="t_data1_1">1</td>
                    <td class="t_data2_1"><span class="t_data2_ttl">Hello, This is James Doe. I have a question!</span></td>
                    <td class="t_data3_1">James Doe</td>
                    <td class="t_data4_1">23. 11. 22</td>
                    <td class="t_data5_1">12</td>
                </tr>
                <tr class="one_to_one_details">
                    <td class="t_data1_1">1</td>
                    <td class="t_data2_1"><span class="t_data2_ttl">Hello, This is James Doe. I have a question!</span></td>
                    <td class="t_data3_1">James Doe</td>
                    <td class="t_data4_1">23. 11. 22</td>
                    <td class="t_data5_1">12</td>
                </tr>
                <tr class="one_to_one_details">
                    <td class="t_data1_1">1</td>
                    <td class="t_data2_1"><span class="t_data2_ttl">Hello, This is James Doe. I have a question!</span></td>
                    <td class="t_data3_1">James Doe</td>
                    <td class="t_data4_1">23. 11. 22</td>
                    <td class="t_data5_1">12</td>
                </tr>
                <tr class="one_to_one_details">
                    <td class="t_data1_1">1</td>
                    <td class="t_data2_1"><span class="t_data2_ttl">Hello, This is James Doe. I have a question!</span></td>
                    <td class="t_data3_1">James Doe</td>
                    <td class="t_data4_1">23. 11. 22</td>
                    <td class="t_data5_1">12</td>
                </tr>
                <tr class="one_to_one_details">
                    <td class="t_data1_1">1</td>
                    <td class="t_data2_1"><span class="t_data2_ttl">Hello, This is James Doe. I have a question!</span></td>
                    <td class="t_data3_1">James Doe</td>
                    <td class="t_data4_1">23. 11. 22</td>
                    <td class="t_data5_1">12</td>
                </tr>
                <tr class="one_to_one_details">
                    <td class="t_data1_1">1</td>
                    <td class="t_data2_1"><span class="t_data2_ttl">Hello, This is James Doe. I have a question!</span></td>
                    <td class="t_data3_1">James Doe</td>
                    <td class="t_data4_1">23. 11. 22</td>
                    <td class="t_data5_1">12</td>
                </tr>
                <tr class="one_to_one_details">
                    <td class="t_data1_1">1</td>
                    <td class="t_data2_1"><span class="t_data2_ttl">Hello, This is James Doe. I have a question!</span></td>
                    <td class="t_data3_1">James Doe</td>
                    <td class="t_data4_1">23. 11. 22</td>
                    <td class="t_data5_1">12</td>
                </tr>
            </tbody>
            </table>
        
            <div class="ask_q_btn">
                <a href="../torta_da_te/1to1_ask.html" class="ask_q">Ask Question</a>
            </div>
        </div>
        <div class="pagination_arrow" style="margin: 0;">
            <a href="#"><img src="../torta_da_te/images/arrow_xs_left.png" alt="go to previous page"></a>
            <div class="pagination">
            <a href="#_none" class="pagination_active">1</a>
            <a href="#_none">2</a>
            <a href="#_none">3</a>
            <a href="#_none">4</a>
            <a href="#_none">...</a>
            <a href="#_none">10</a>
            </div>
            <a href="#"><img src="../torta_da_te/images/arrow_xs_right.png" alt="go to next page"></a>
        </div>
        </div>
        </div>
    </section>
   
</main>

<?php include "../torta_da_te/inc/footer.html"?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script src="../torta_da_te/js/product_celebration.js"></script>
    <script src="../torta_da_te/js/navbar.js"></script>

 
    

</body>
</html>