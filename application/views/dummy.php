<!-- <!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tree Table</title>
    <link rel="stylesheet" type="text/css" media="all" href="assets/css/scrollableCss.css">
    
</head>

<body>
    <div id="headline">
        <h2>Sortable and Scrollable TreeTable with fixed Header!</h2>
    </div>
    <div id="bar">Filter: <input id="searchField" type="text" value="" oninput="filterTable()"></div>
    <div id="wrapper"></div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script type="text/javascript" src="assets/js/scrollableTable.js"></script>

    <script type="text/javascript">
        var testData = [
            { "id": 0, "name": "name0", "value": Math.floor(100000 + Math.random() * 900000) },
            {
                "id": 1,
                "name": "name1",
                "value": Math.floor(100000 + Math.random() * 900000),
                "subtree": [
                    {
                        "id": 11,
                        "name": "name1.1",
                        "value": Math.floor(100000 + Math.random() * 900000),
                        "subtree": []
                    }, {
                        "id": 12,
                        "name": "name1.2",
                        "value": Math.floor(100000 + Math.random() * 900000),
                        "subtree": []
                    }, {
                        "id": 13,
                        "name": "name1.3",
                        "value": Math.floor(100000 + Math.random() * 900000),
                        "subtree": [
                            {
                                "id": 131,
                                "name": "name1.3.1",
                                "value": Math.floor(100000 + Math.random() * 900000),
                                "subtree": []
                            }
                        ]
                    }
                ]
            },
            {
                "id": 2,
                "name": "name2",
                "value": Math.floor(100000 + Math.random() * 900000),
                "subtree": []
            },
            {
                "id": 3,
                "name": "name3",
                "value": Math.floor(100000 + Math.random() * 900000)
            },
            {
                "id": 4,
                "name": "name4",
                "value": Math.floor(100000 + Math.random() * 900000),
                "subtree": [
                    {
                        "id": 41,
                        "name": "name4.1",
                        "value": Math.floor(100000 + Math.random() * 900000),
                        "subtree": []
                    }
                ]
            }
        ];

        // function scrollableTable(){
        //     return "hello";
        // }
        
        function treeTable1(testData) {
            console.log(scrollableTable());
            console.log(testData);
            for (let i = 6; i < 50; i++) {
                testData.push({ "id": i, "name": "name" + i, "value": Math.floor(100000 + Math.random() * 900000) })
            }
            
            var scrollableTable {} =new scrollableTable('scrollableTable', 'wrapper', true);
            scrollableTable.setTableHeader(["Name", "Id", "Value"])
            scrollableTable.setTableContent(testData, "testDataEventType", ["name", "id", "value"], /* optional parameter for TreeTable */ "subtree")
            scrollableTable.setTableHeight(() => { return $(window).height() - 166 })
            scrollableTable.expandTree()
            scrollableTable.setCompareFunctionForSorting(function (a, b) {
                return a.localeCompare(b, undefined, { usage: 'sort', numeric: true, sensitivity: 'base' })
            })
            scrollableTable.sortByColumnName("Name")
            function filterTable() {
                var filterString = $('#searchField').val()
                scrollableTable.filter(filterString)
            }

            $('#searchField').focus();
        }

        // $(document).ready(function () {
            treeTable1(testData);
        // });
    </script>

</body>

</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>jQuery TreeTable </title>
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
    body {
      background-color: #fafafa;
      font-family: 'Open Sans';
    }

    .container {
      margin: 150px auto;
    }

    .treegrid-indent {
      width: 0px;
      height: 16px;
      display: inline-block;
      position: relative;
    }

    .treegrid-expander {
      width: 0px;
      height: 16px;
      display: inline-block;
      position: relative;
      left: -17px;
      cursor: pointer;
    }
  </style>
</head>

<body>


  <div class="container">
    <h1 class="text-center">jQuery TreeTable Demo Page</h1>
    <table id="tree-table" class="table table-hover table-bordered">
      <tbody>
        <th>#</th>
        <th>Test</th>
      </tbody>
    </table>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- <script src="assets/js/js/javascript.js"></script> -->

  <script>
   
   $(document).ready(function () {
    treeTable1();
    });

    function treeTable1() {
    var dynamicData = [
      { id: 1, name: 'Node 1', additionalInfo: 'Additional info', parentId: 0, level: 1 },
      { id: 2, name: 'Node 2', additionalInfo: 'Additional info', parentId: 1, level: 2 },
      { id: 3, name: 'Node 3', additionalInfo: 'Additional info', parentId: 1, level: 2 },
      { id: 4, name: 'Node 4', additionalInfo: 'Additional info', parentId: 3, level: 3 },
      { id: 5, name: 'Node 5', additionalInfo: 'Additional info', parentId: 3, level: 3 },
      { id: 6, name: 'Node 00', additionalInfo: 'Additional info', parentId: 1, level: 2 },
      { id: 7, name: 'Node 5', additionalInfo: 'Additional info', parentId: 5, level: 4 },
    ];
      var table = document.getElementById("tree-table").getElementsByTagName('tbody')[0];

      dynamicData.forEach(function (item) {
        var row = table.insertRow(-1);
        row.setAttribute("data-id", item.id);
        row.setAttribute("data-parent", item.parentId);
        row.setAttribute("data-level", item.level);

        var cell1 = row.insertCell(0);
        cell1.setAttribute("data-column", "name");
        cell1.innerHTML = item.name;

        var cell2 = row.insertCell(1);
        cell2.innerHTML = item.additionalInfo;
      });
      // $('#tree-table').treegrid();
    }
 



    $(function () {
    var
        $table = $('#tree-table'),
        rows = $table.find('tr');

    rows.each(function (index, row) {
        var
            $row = $(row),
            level = $row.data('level'),
            id = $row.data('id'),
            $columnName = $row.find('td[data-column="name"]'),
            children = $table.find('tr[data-parent="' + id + '"]');

        if (children.length) {
            var expander = $columnName.prepend('' +
                '<span class="treegrid-expander glyphicon glyphicon-chevron-right"></span>' +
                '');

            children.hide();

            expander.on('click', function (e) {
                var $target = $(e.target);
                if ($target.hasClass('glyphicon-chevron-right')) {
                    $target
                        .removeClass('glyphicon-chevron-right')
                        .addClass('glyphicon-chevron-down');

                    children.show();
                } else {
                    $target
                        .removeClass('glyphicon-chevron-down')
                        .addClass('glyphicon-chevron-right');

                    reverseHide($table, $row);
                }
            });
        }

        $columnName.prepend('' +
            '<span class="treegrid-indent" style="width:' + 15 * level + 'px"></span>' +
            '');
    });

    // Reverse hide all elements
    reverseHide = function (table, element) {
        var
            $element = $(element),
            id = $element.data('id'),
            children = table.find('tr[data-parent="' + id + '"]');

        if (children.length) {
            children.each(function (i, e) {
                reverseHide(table, e);
            });

            $element
                .find('.glyphicon-chevron-down')
                .removeClass('glyphicon-chevron-down')
                .addClass('glyphicon-chevron-right');

            children.hide();
        }
    };
});

  </script>
</body>

</html>