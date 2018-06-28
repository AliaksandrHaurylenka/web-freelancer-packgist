<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table {
            width: 70%;
            margin-bottom: 1rem;
            border-collapse: collapse;
        }
        .color {
            background: #f0f0f0;
        }
        .name {
            font-size: 1.3rem;
            text-align: center;
        }
        td {
            padding-left: .5rem;
            border: #e9e9e9 1px solid;
        }

    </style>
</head>
<body>
<h2>%email.title%</h2>
<table>
    <tbody>
    <tr class="name">
        <td  colspan="4"><b>%email.nameuser%</b></td>
    </tr>

    <tr>
        <td class="color"><h3>Марка машины:</h3></td>
        <td><b>%email.auto%</b></td>
        <td class="color"><h3>Год выпуска:</h3></td>
        <td><b>%email.year%</b></td>
    </tr>

    <tr>
        <td class="color"><h3>Возраст водителя:</h3></td>
        <td><b>%email.age%</b></td>
        <td class="color"><h3>Стаж вождения:</h3></td>
        <td><b>%email.driving_experience%</b></td>
    </tr>

    <tr>
        <td colspan="1" class="color"><h3>С выездом за границу:</h3></td>
        <td colspan="3">%email.abroad%</td>
    </tr>

    <tr>
        <td class="color"><h3>Вид страховки:</h3></td>
        <td><b>%email.type%</b></td>
        <td class="color"><h3>Сумма страхования:</h3></td>
        <td><b>%email.sum%</b></td>
    </tr>


    <tr>
        <td class="color"><h3>Моб. телефон:</h3></td>
        <td><b>%email.phone%</b></td>
        <td class="color"><h3>Email:</h3></td>
        <td><b>%email.emailuser%</b></td>
    </tr>

    <tr>
        <td colspan="1" class="color"><h3>Сообщение:</h3></td>
        <td colspan="3">%email.message%</td>
    </tr>

    <tr>
        <td colspan="4" class="name"><h3>Дата отправки: </h3><p>%email.date%<p></td>
    </tr>
    </tbody>
</table>
</body>
</html>