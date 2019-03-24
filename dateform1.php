<html lang="en">
<head>
    <title>BT2201 Task Week 13 PHP Forms</title>
</head>
<body>

</body>
<form method="get" action="displaydate.php">
    <p>Year :
        <select name="year" onchange="change()" id="s1">
            <option value="2019">2019</option>
        </select></p>
    <p>Month :
        <select name="month" onchange="change()" id="s2">
            <option value="1">1</option>
        </select></p>
    <p>Day :
        <select name="day" id="s3">
            <option>Please select month and year</option>
        </select></p>
    <input type="hidden" name="type" value="form1" />
    <input type="submit" value="submit" />
</form>
<script>
    init();

    function init() {
        let s1 = document.getElementById('s1');
        s1.options.length = 0;
        let s2 = document.getElementById('s2');
        s2.options.length = 0;
        let s3 = document.getElementById('s3');
        s3.options.length = 0;
        for (let i1 = 2000; i1 <= 2019; i1++) {
            s1.options.add(new Option(i1, i1));
        }
        for (let i2 = 1; i2 <= 12; i2++) {
            s2.options.add(new Option(i2, i2));
        }
        for (let i3 = 1; i3 <= 30; i3++) {
            s3.options.add(new Option(i3, i3));
        }
    }

    function change() {
        let s1 = document.getElementById('s1');
        let index1 = s1.selectedIndex;
        let value = s1.options[index1].value;
        let s2 = document.getElementById('s2');
        let index2 = s2.selectedIndex;
        let s3 = document.getElementById('s3');
        s3.options.length = 0;
        let leap_year = false;
        if (value % 4 == 0) {
            leap_year = true;
        }
        switch (index2) {
            //Jan
            case 0:
                for (let i = 1; i <= 31; i++) {
                    s3.options.add(new Option(i, i));
                }
                break;
            //Feb
            case 1:
                if (leap_year) {
                    for (let i = 1; i <= 29; i++) {
                        s3.options.add(new Option(i, i));
                    }
                } else {
                    for (let i = 1; i <= 28; i++) {
                        s3.options.add(new Option(i, i));
                    }
                }
                break;
            //Mar
            case 2:
                for (let i = 1; i <= 31; i++) {
                    s3.options.add(new Option(i, i));
                }
                break;
            //April
            case 3:
                for (let i = 1; i <= 30; i++) {
                    s3.options.add(new Option(i, i));
                }
                break;
            //May
            case 4:
                for (let i = 1; i <= 31; i++) {
                    s3.options.add(new Option(i, i));
                }
                break;
            //June
            case 5:
                for (let i = 1; i <= 30; i++) {
                    s3.options.add(new Option(i, i));
                }
                break;
            //July
            case 6:
                for (let i = 1; i <= 31; i++) {
                    s3.options.add(new Option(i, i));
                }
                break;
            //Aug
            case 7:
                for (let i = 1; i <= 31; i++) {
                    s3.options.add(new Option(i, i));
                }
                break;
            //Sept
            case 8:
                for (let i = 1; i <= 30; i++) {
                    s3.options.add(new Option(i, i));
                }
                break;
            //Oct
            case 9:
                for (let i = 1; i <= 31; i++) {
                    s3.options.add(new Option(i, i));
                }
                break;
            //Nov
            case 10:
                for (let i = 1; i <= 30; i++) {
                    s3.options.add(new Option(i, i));
                }
                break;
            //Dec
            case 11:
                for (let i = 1; i <= 31; i++) {
                    s3.options.add(new Option(i, i));
                }
                break;
        }
    }


</script>
</html>
