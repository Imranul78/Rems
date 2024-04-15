<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReMs-2.O</title>
    <link rel="icon" href="Images/icon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="Stylesheets/home.css">

    <style>
      .gantt_tree_content{
        /* background-color: blue; */
      }
      
      .gantt_grid_data{
        background-color: rgb(52, 58, 64);
      }
      .gantt_data_area{
        background-color: rgb(52, 58, 64);
      }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <?php include 'config-php/gantt-chart-config.php';?>

    <!-- Add a container for the Gantt chart -->
    <div id="chart_div" class="chart_div"style="width: 100vw; height: 60vh;"></div>

    <?php include 'footer.php'; ?>

    <script src="Scripts/dark-light-mode.js"></script>
    <script>
        // Call the function to load the Gantt chart when the page is loaded
        window.onload = function() {
            loadGanttChart();
        };
    </script>
    <link rel="stylesheet" type="text/css" href="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.js"></script>
    <script type="text/javascript">
        // Load the Gantt chart
        function loadGanttChart() {
            // Initialize DHTMLX Gantt
            gantt.config.xml_date = "%Y-%m-%d %H:%i";
            gantt.config.columns = [
                {name: "text", label: "Task Name", width: "*", tree: true },
                {name: "start_date", label: "Start Date", align: "center", width: 100 },
                {name: "end_date", label: "End Date", align: "center", width: 100 }
            ];
            gantt.config.scale_unit = "day";
            gantt.config.step = 10; // Set each column for every 10 days
            gantt.config.date_scale = "%Y-%m-%d"; // Date format for the scale

            gantt.init("chart_div");

            // Parse tasks data from JSON format
            var tasks = <?php echo $tasks_json; ?>;

            // Initialize the Gantt chart with tasks data
            gantt.parse({data: tasks});
        }
    </script>
</body>
</html>
