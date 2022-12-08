<script src="backend/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="backend/js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="backend/js/utils.js"></script>
    <script src="backend/js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="backend/js/fullcalendar.min.js"></script>
    <!-- https://fullcalendar.io/ -->
    <script src="backend/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="backend/js/tooplate-scripts.js"></script>
    <script>
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            updateChartOptions();
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart
            drawCalendar(); // Calendar

            $(window).resize(function () {
                updateChartOptions();
                updateLineChart();
                updateBarChart();
                reloadPage();
            });
        })
    </script>