<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<?php if ($is_admin == 'super') {  ?><!-- <div style='float:left; text-align:center;'>RUN TIME : <?php echo get_microtime()-$begin_time; ?><br></div> --><?php }  ?>

<?php run_event('tail_sub'); ?>




<!-- 스크립트 첨부 -->
    <script src="<?php echo G5_THEME_URL; ?>/js/slick.min.js"></script>
    <script src="<?php echo G5_THEME_URL; ?>/js/main.js?ver=1.2"></script>
<!-- 스크립트 첨부 -->





</body>
</html>
<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다.
