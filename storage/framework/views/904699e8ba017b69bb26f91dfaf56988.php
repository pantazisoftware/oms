<script type="text/javascript"><!--
    var options = <?php echo $chart->getOptions(); ?>;

    var chart_<?php echo e($chart->getId()); ?> = new ApexCharts(document.querySelector("#<?php echo $chart->getId(); ?>"), options);

    chart_<?php echo e($chart->getId()); ?>.render();
//--></script>
<?php /**PATH /Users/eduard-air/2024/oms/resources/views/vendor/apexcharts/script.blade.php ENDPATH**/ ?>