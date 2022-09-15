<?php
/*
Template Name: page-contact
*/
?>

<!-- Header -->
<?php get_header(); ?>

<!----------------------------
         Contact
        -------------------------------->
<main>
    <!-- トップ（メイン） -->
    <div class="top-view">
        <div class="top-view-wrapper">
            <h1 class="top-view-title-box">
                <p class="h2-title top-view-title">CONTACT</p>
                <p class="h2-subtitle top-view-subtitle ">お問い合わせ</p>
            </h1>
            <picture class="top-view-img">
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() ?>/img/Contact/img_firstview_contact_sp.png">
                <img src="<?php echo get_template_directory_uri() ?>/img/Contact/img_firstview_contact.png" alt="スライダー画像2">
            </picture>
        </div>
    </div>

    <!-- パンクズリスト -->
<div class="l-breadcrumbs">
    <div clxass="p-breadcrumbs">
        <div class="p-breadcrumbs-container">
            <?php if (function_exists('bcn_display')) : ?>
                <!-- breadcrumb -->
                <div class="breadcrumb">
                    <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述
                    ?>
                </div><!-- /breadcrumb -->
            <?php endif; ?>
        </div>
    </div>
</div>


    <!----------------
            Menu Tab
            ------------------->
    <div class="l-contact-wrapper">
        <div class="l-contact-box">
            <h2 class="top-contact-title">お問い合わせフォーム</h2>
            <p class="top-contact-text">お問い合わせ内容に応じて、項目をご選択のうえ、お気軽にお問い合わせください。</p>
        </div>
        <div class="box_con">
            <form method="post" action="mail.php">
                <table class="formTable">
                    <tr>
                        <th>お問い合わせ項目<span>必須</span></th>
                        <td>
                            <div class="box_br">
                                <label>
                                    <input name="contact_type" type="radio" value="1" class="radio02-input in_top" id="radio02-01">
                                    <label for="radio02-01">お店のご利用・ご予約について</label>
                                </label>
                            </div>
                            <div class="box_br">
                                <label>
                                    <input name="contact_type" type="radio" value="1" class="radio02-input in_top" id="radio02-02">
                                    <label for="radio02-02">ギフト(贈り物)について</label>
                                </label>
                            </div>
                            <div class="box_br">
                                <label>
                                    <input name="contact_type" type="radio" value="1" class="radio02-input in_top" id="radio02-03">
                                    <label for="radio02-03">アルバイト応募について</label>
                                </label>
                            </div>
                            <div class="box_br">
                                <label>
                                    <input name="contact_type" type="radio" value="1" class="radio02-input in_top" id="radio02-04">
                                    <label for="radio02-04">その他</label>
                                </label>
                                <span class="contact-not-valid-tip" aria-hidden="true" style="">必須項目にしてください。</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>お名前<span>必須</span></th>
                        <td><input size="20" type="text" name="お名前" placeholder="お名前を入力してください" />
                            <span class="contact-not-valid-tip" aria-hidden="true" style="">必須項目にしてください。</span>
                        </td>
                    </tr>
                    <tr>
                        <th>メールアドレス<span>必須</span></th>
                        <td><input size="30" type="text" name="Email" placeholder="example@mail.com" />
                            <span class="contact-not-valid-tip" aria-hidden="true" style="">必須項目にしてください。</span>
                        </td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td><input size="30" type="text" name="電話番号" placeholder="09012345678" /></td>
                    </tr>
                    <tr>
                        <th>お問い合わせ内容<span>必須</span></th>
                        <td><textarea name="お問い合わせ内容" cols="50" rows="5" placeholder="お問い合わせ内容を入力してください"></textarea>
                            <span class="contact-not-valid-tip" aria-hidden="true" style="">必須項目にしてください。</span>
                        </td>
                    </tr>
                </table>
                <div class="table-text-box">
                    <p class="table-text">
                        当社は、お客様の個人情報の流出・漏洩の防止、その他個人情報の安全管理のために必要かつ適切な措置を講じるものとし、法令などに正当な理由がある場合を除き、お客様の同意なく目的外での利用および第三者への提供は行いません。
                    </p>
                </div>
                <!-- <div class="con_pri">
                            <div class="box_pri">
                                <div class="box_tori">
                                    <h4>プライバシー</h4>
                                    <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
                                </div>
                                <div class="box_num">
                                    <h4>プライバシー</h4>
                                    <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
                                </div>
                                <div class="box_num">
                                    <h4>プライバシー</h4>
                                    <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
                                </div>
                                <div class="box_num">
                                    <h4>プライバシー</h4>
                                    <p class="txt">プライバシープライバシープライバシープライバシープライバシープライバシープライバシープライバシー</p>
                                </div>
                            </div>
                        </div> -->
                <div class="btn-common-box btn-contact">
                    <span><input type="submit" value="送　信"></span>
                </div>
                <!-- <p class="btn">
                            <span><input type="submit" value="　 送信 　" /></span>
                        </p> -->
            </form>
        </div>
    </div>
    <!-- アクセス -->
    <div class="access-lg-wrapper">
        <section class="access">
            <div class="access-wrapper">
                <h2 class="h2-title access-title">ACCESS</h2>
                <p class="h2-subtitle">アクセス</p>
                <div class="access-bg-box">
                    <div class="access-sub-wrapper">
                        <div class="access-map">
                            <div class="access-map-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.037028863611!2d139.578023915201!3d35.70070638651103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ee39b555205f%3A0xabb26a0a2fbda595!2z44CSMTgwLTAwMDMg5p2x5Lqs6YO95q2m6JS16YeO5biC5ZCJ56Wl5a-65Y2X55S677yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1659531177336!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="access-tables">
                            <dl class="access-table-box">
                                <div class="access-table-item">
                                    <dt class="access-table-content">住所</dt>
                                    <dd class="access-table-description">〒000-0000 <br>
                                        東京都武蔵野市吉祥寺南町一丁目</dd>
                                </div>
                                <div class="access-table-item">
                                    <dt class="access-table-content">TEL</dt>
                                    <dd class="access-table-description">0123-456-789</dd>
                                </div>
                                <div class="access-table-item">
                                    <dt class="access-table-content">Mail</dt>
                                    <dd class="access-table-description">example@mail.com</dd>
                                </div>
                            </dl>
                            <dl class="access-table-box">
                                <div class="access-table-item">
                                    <dt class="access-table-content">営業時間</dt>
                                    <dd class="access-table-description">7:00〜21:00 <br>
                                        ※ラストオーダー 20:30</dd>
                                </div>
                                <div class="access-table-item">
                                    <dt class="access-table-content">定休日</dt>
                                    <dd class="access-table-description">水曜日</dd>
                                </div>
                                <div class="access-table-item">
                                    <dt class="access-table-content">座席</dt>
                                    <dd class="access-table-description">テーブル20席 ／ カウンター席6席</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<!-- Footer -->
<?php get_footer(); ?>