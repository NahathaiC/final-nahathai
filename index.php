<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/item-series.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <style>
        .highcharts-figure, .highcharts-data-table table {
            min-width: 320px; 
            max-width: 800px;
            margin: 1em auto;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #EBEBEB;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }
        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }
        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }
        .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
            padding: 0.5em;
        }
        .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }
        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }

        input[type="number"] {
            min-width: 50px;
        }
    </style>
    
    <title>BUU Final Test 2/63</title>
</head>

<body>
    <figure class="highcharts-figure">
        <div id="container"></div>
        <p class="highcharts-description">
            ชาร์ตนี้จะเป็นการรีวิวการเรียนวิชาแพลตฟอร์มเทคโนโลยีตลอด 1 เทอมค่ะ
            หนูชอบความตั้งใจในการสอนของอาจารย์มาก ๆเลยค่ะ ถึงแม้บางทีที่อาจารย์ถามแล้วเพื่อน ๆหรือตัวหนูเอง
            ไม่ยอมตอบ อาจารย์ก็จะตอบให้ หรือบางทีก็เรียกรายคน ถ้าเป็นหนูเองคงมีแอบน้อยใจบ้างแล้วค่ะ นิสิตไม่เล่นด้วย แง
            ขอบคุณอาจารย์ที่ตั้งใจสอนพวกเรานะคะ แต่ว่าอาจารย์คะ หนูไม่มีพื้นฐานเลยค่ะ 55555 หนูมาเริ่มเรียนไอทีก็ที่มหาวิทยาลัยเลย
            เพราะฉะนั้นอาจารย์อย่าคาดหวังกับตัวหนูเลยนะคะ แต่หนูจะพยายามเต็มที่ค่ะ <br>
            <br>ป.ล. อาจารย์คะ หนูใส่ฟอนต์ไม่เป็น แง กลัวใส่แล้ว code เสีย ;___;
        </p>
    </figure>

    <script>
        Highcharts.chart('container', {

        chart: {
            type: 'item'
        },

        title: {
            text: 'ระดับความพึงพอใจในการเรียน'
        },

        subtitle: {
            text: 'จาก นางสาว ณหทัย เชิญรุ่งโรจน์'
        },

        legend: {
            labelFormat: '{name} <span style="opacity: 0.4">{y}</span>'
        },

        series: [{
            name: 'Representatives',
            keys: ['name', 'y', 'color', 'label'],
            data: [
                ['ยังไงนะคะ อีกรอบได้มั้ยคะ', 69, '#BE3075', 'ความมึน'],
                ['หนูขอโทษค่ะ กินข้าวมาอิ่ม ๆ แล้วง่วงมาก', 153, '#EB001F', 'ความง่วง'],
                ['ถึงจะกินข้าวมาแล้วก็ยังหิวได้อีกค่ะ ><', 67, '#64A12D', 'หิวจุบจิบ'],
                ['อาจารย์คะ อยู่บ้านแม่ทอดไก่ค่ะ สมาธิหนูกระเจิง', 80, '#FFED00', 'สมาธิ'],
                ['รู้สึกผิดจังเลยค่ะ ตั้งใจเรียนแล้วค่ะ', 200, '#000000', 'ตั้งใจ'],
                ['ไม่ค่อยเท่าไหร่ค่ะ แต่ก็มีบ้าง', 46, '#008AC5', 'ความเบื่อ'],
                ['ทำตามอาจารย์ + ย้อนคลิปดูก็พอช่วยได้ค่ะ', 94, '#009EE0', 'ความเข้าใจ']
            ],
            dataLabels: {
                enabled: true,
                format: '{point.label}'
            },

            // Circular options
            center: ['50%', '88%'],
            size: '170%',
            startAngle: -100,
            endAngle: 100
        }]
        });

    </script>
</body>
</html>