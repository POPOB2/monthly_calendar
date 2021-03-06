<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>η·δΈζζ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin: 0;
        }
        body{
            /* background-image: url(./img/2.webp); */
            background-image: url(./img/Bar2.webp);
            background-size: 100%;
            background-repeat:no-repeat;
            background-position: center;
        }
        .wrapper{
            /* border: 1px solid blueviolet; */
            width: 2000px ;
            height: 1000px;
            margin: auto;
            justify-content: center;
            display: flex;
            
        }
        .outer_table{
            /* border: 1px solid lightgreen;      */
            /* border: 1px solid pink; */
            width: 90%;
            height: 100%;
            justify-content: start;
            display: flex;
        }
        .rightYear,.leftYear{
            /* border: 1px solid wheat; */
            height: 100%;
            backdrop-filter:blur(2px);
            display: flex;
            align-items: center;
            background-color: rgb(28,28,28,0.3);
        }
        .rightYear:hover,.leftYear:hover{
            background-color: rgb(28,28,28,0.5);
        }
        .rightMonth,.leftMonth{
            /* border: 1px solid wheat; */
            height: 100%;
            backdrop-filter:blur(3px);
            display: flex;
            align-items: center;
            background-color: rgb(28,28,28,0.5);
        }
        .rightMonth:hover,.leftMonth:hover{
            background-color: rgb(28,28,28,0.7); 
        }
        .rightMonth a,.leftMonth a,.rightYear a,.leftYear a{
            text-decoration: none;
            color: white;
            align-content: center;
            justify-content: center;
        }
        .rightMonth a:hover,.leftMonth a:hover,.rightYear a:hover,.leftYear a:hover{
            color: gray;

        }
        .starting_point{
            /* border: 1px solid orangered; */
            margin-top:10px ;
            width: 100%;
            line-height: 200%;
            color: white;
            text-decoration: none;
            font-size: 30px;
        }
        .starting_point:hover{
            color: gray;
        }
        .now_datee{
            /* border: 1px solid orangered; */
            width: 100%;
            line-height: 200%;
        }
        .new_datee{
            /* border: 1px solid orangered; */
            width: 100%;
            line-height: 200%;
        }
        .right_img{
            /* border: 1px solid orangered; */
            width: 35%;
            height: 100%;
        }
        .week_table{
            /* border:1px solid red; */
            backdrop-filter:blur(5px);

            margin: auto;
            align-content:center;
            justify-content: center;
            align-content: start;
            align-items: center;
            
            width:840px;
            height:1000px;
            display:flex;
            flex-wrap:wrap;

            color: white;
            font-size: 25px;
            line-height: 120px;
            text-align: center;
        }
        .today{
            background-color: rgb(242,132,61,0.3);
            
        }
        .week_table footer{
            width:120px;
            height:120px;
            border:1px solid #999;
            box-sizing: border-box;
            margin-left:-1px;
            margin-top:-1px;  
            text-shadow: 3px 3px black;
        }
        .week_table footer:hover,.week_table footer:focus{
            box-shadow: 0 0.5em 0.5em -0.4em rgb(143,217,199);
            transform: translateY(-15px);
            transition: 0.5s;
            border-color: rgb(143,217,199);
            /* color: red; */
        }
        .header{
            /* border:1px solid #999; */
            width:120px;
            height:120px;
            box-sizing: border-box;
            margin-left:-1px;
            margin-top:-1px;
        }
        .header_holiday{
            /* border:1px solid #999; */
            width: 120px;
            height: 45px;
            background-color: rgb(137,103,235,0.7);
            color: white;
            line-height: 45px;
        }
        .weekend{
        background-color: rgb(137,103,235,0.2);
        }
        .month_coffee{
            text-align: center;
        }
        .st{
            color: white;
            width: 300px;
            font-size: 20PX;
        }
        .st a{
            color: white;
        }
        .add_cut{
            text-decoration: none;
        }
        .add_cut:hover{
            color: #999;
        }
        .coffee{
            color: white;
            font-size: 17.5px;
            text-align: center;
            /* border: 1px solid orangered; */
            height: 85%;
            width: 100%;
            backdrop-filter:blur(7px);
        }
        
        
        
    </style>
</head>
<body>
    <!-- θ¨­ε?ζ΄εζ‘ζΆηε―¬εΊ¦ -->
    <div class="wrapper">

    
    <!-- <h1>δ½Ώη¨ι£εδΎεζζ</h1> -->

    <?php
    //isset=θ₯εΌε·²θ¨­η½? δΈιNULL
    //θ₯monthθ?ζΈε­ε¨(ζθ’«ε?£ε),ε·θ‘$monthηεΌζ=$_GETη['month']

    //ιθ£‘elseζ―ι θ¨­ , ifζ―ηΆζθΌΈε₯εΌζ ιεεΌζε‘«ε₯$month
    if(isset($_GET['month'])){
        $month=$_GET['month'];
        $year=$_GET['year'];
    }else{
        //ε¦εζζ―η³»η΅±ηηΆεζ
        $month=date('n');
        $year=date('Y');
    }

    //$_GET['month']ζΏε°εΌδΉεΎ,θ¦εδΈεε€ζ·,ζ ΉζιεεζΈζΏε°ηεΌζ±Ίε?δΈδΈεζθ·δΈδΈεζηεΉ΄δ»½ζδ»½
    //δ½ηΆζͺεΈΆεζΈζ switch($_GET['month']) ζδΈε°θ³ζ    
    //δΈι’ε·²ζelseε?£ε$monthηΊdate('n'), ζδ»₯ε―δ»₯ζ΄ζΉηΊswitch($month), ιθ£‘εͺιε€ζ·ηΆζδΈδ»½ηΊεͺδΈζ εε»ε·θ‘ε€ζ·
    switch($month){

        case 1:
        $prevMonth=12; //1ζδΈδΈεζζ―12ζ ε―δ»₯ε―«ζ­»
        $prevYear=$year-1; //ι²ε₯ε°12ζζ εΉ΄ε-1
        $nextMonth=$month+1; 
        $nexYear=$year; 
        break;

        case 12:
        $prevMonth=$month-1; //1ζδΈδΈεζζ―12ζ ε―δ»₯ε―«ζ­»
        $prevYear=$year; 
        $nextMonth=1; 
        $nexYear=$year+1; //ι²ε₯ε°12ζζ εΉ΄ε+1
        break;

        default;//defaultιθ£‘δ»£θ‘¨2~11ζ
        $prevMonth=$month-1; //ζζι-1
        $prevYear=$year; //ιθ£‘ζ―2~11ζζδ»₯εΉ΄δΈη¨ζΉ
        $nextMonth=$month+1; //ζζι+1
        $nexYear=$year; //ιθ£‘ζ―2~11ζζδ»₯εΉ΄δΈη¨ζΉ
    }
     ?>


<?php
//εΉ΄δ»½ε·²ζδΈι’ηyear=< ?=$year ? >θ?ζΈ δΎε?ζθ¨η?,ιθ£‘η$firstDayε―δ»₯η΄ζ₯ζ²Ώη¨$year
$firstDay=$year."-".$month."-1";//ζη₯ε°$year+$monthηΊ2022-5-1 = θ?ζΈfirstDay
/*εεΊ0~6ηζΈε­ε°ζεΊηΆζδΈθ=ζζεΉΎ*/ // w=week 0~6=ι£εεΌζ0~6=ζ₯ε°δΈ
$firstWeekday=date("w",strtotime($firstDay));//$firstDay(2022-5-1η¨strtotimeζη?ζη§ζΈ) η¨ζ­€η§ζΈεΎη₯θ©²η§ζΈηwηΊι£ε0δΉε°±ζ―ε¨ζ₯(w=0~6,ζ₯ε°ε­) = θ?ζΈfirstWeekday
/*t=ηΆζηηΈ½ε€©ζΈ   θ¨η?εδΈ*/ 
$monthDays=date("t",strtotime($firstDay));//$firstDay(2022-5-1η¨strtotimeζη?ζη§ζΈ) η¨ζ­€η§ζΈεΎη₯θ©²η§ζΈηtηΊ31δΉε°±ζ―31ε€© = $monthDays
/*ζεΎδΈε€© ηε½εΌ*/
$lastDay=$year."-".$month."-".$monthDays; //2022-5-31ζ―δΊζηζεΎδΈε€© = $lastDay
//ε€ζ·δ»ε€©ζ―ε¦ε­ε¨
$today=date("Y-m-d");//ζη₯η?εζ₯ζηΊ2022-5-21 = $today
//ζεΎδΈε€©ζ―ε¨ζζεΉΎ ζη?ζη§ζΈε€ζ·
//ιθ¦η₯ιWηεΌζ―ε€ε°  η¨STRTOTIMEε»εΎε°WηεΌ
$lastWeekday=date("w",strtotime($lastDay));//η¨$lastDayεΎη₯2022-5-31ζ―5ζζεΎδΈε€© ζη?ζη§ζΈ η¨ζ­€η§ζΈεΎη₯θ©²η§ζΈηwηΊι£ε2(ε¨δΊ) = $lastWeekday
// θ¨­η©Ίι£ε θ¨η?εΊηζζζΈε­ε­ε°ι£εθ£‘ι’
$dateHouse=[];//θ¨η?θ¦ε°ζΈε­ιη©Ίη½ η¨ζΌδ»₯δΈforθΏ΄ε



//ε°ζδ»½ηη©Ίη½θ //δΊζδΈθηΊε¨ζ₯(ι£ε0),ζδ»₯iδΈε°ζΌ0 ε°±δΈε·θ‘θ©²θΏ΄εηε°η©Ίη½
for($i=0;$i<$firstWeekday;$i++){
    $dateHouse[]="";//η©ΊεΌ=η¬¬0ειε§ηδ½η½?ι½ζ―η©Ίη½η
}

//0ε°ζΌ31 εε°5/1ε¨η¬¬δΈεδ½η½?(ι£ε0=ζ₯)
//ηΆζζ₯ζδΈε€©δΈε€©η¨η§ζΈεΎεΊη΅ζ  εζΎε₯ι£ε
for($i=0;$i<$monthDays;$i++){//δΈι’ε¬εΌ:date"Y-m-d"η’ΊθͺδΊη?εζ―2022-5-1,ε°εΆζη?ζη§ζΈ,($firstDayη2022-5-1η§ζΈ ε δΈ +0daysηη§ζΈ)εθ¨­ζ―1000η§//εΎι£ηΏ»θ­―....ιδΈη’Ίε?ζ―ε¦ζ­£η’Ί
    $date=date("Y-m-d",strtotime("+$i days",strtotime($firstDay)));//ε½ζΈη±ζθ£‘ι’εΎε€η?(ε³ε°ε·¦)
    $dateHouse[]=$date;
}
//  ζ₯ δΈ δΊ δΈ ε δΊ ε­
//  0  1  2  3  4  5  6
//ιθ£‘η6δ»£θ‘¨W  ζ­€ζ5ζηLASTWEEKDAYηΊ2(31θ)
//DATEε½η€ΊWε±¬ζ§ηεΌ($LASTWEEKDAY)
//ιθ£‘6ηΊδΈε¨ ζΈε» W(012)ηδΈε¨=4 ε°εΊ4εη©ΊεΌ
for($i=0;$i<(6-$lastWeekday);$i++){
    $dateHouse[]="";
}

?>
<!-- ηΆδΈζι θ θ³¦εΌη΅¦+-10εΉ΄ θ +-1εΉ΄ -->
<?php

$now_yearr=date('Y');
$now_monthh=date('n');
$now_dayy=date('d');

if(empty($_GET['year'])||($_GET['month'])){
    $_GET['year']=$year;
    $_GET['month']=$month;
}

?>

<!-- ζζδΈ»ι« outer_table -->
<div class="outer_table">
    <div class="leftYear">
        <a href="13_index.php?year=<?=($_GET['year']-1)?>&month=<?=$_GET['month'];?>"><i class="fa-solid fa-angles-left"></i>δΈδΈεΉ΄</a>
    </div>
    <div class="leftMonth">
        <a href="13_index.php?year=<?=$prevYear?>&month=<?=$prevMonth;?>">&nbsp;&nbsp;<i class="fa-solid fa-angle-left"></i> δΈδΈζ</a>
    </div>
    <!-- ζζ ε¨θζ₯ week_table -->
    <div class="week_table">
        <a class="starting_point" href="13_index.php"><i class="fa-solid fa-clock-rotate-left"></i> εε°ηΎε¨</a>
        <div class='now_datee'>ηΎε¨ηζιηΊ : <?=$now_yearr?> εΉ΄ <?=$now_monthh?> ζ <?=$now_dayy?>ζ₯</div>
        <div class='new_datee'>ζζθ¨­η½?ηζιηΊ : <?=$year?> εΉ΄ <?=$month?> ζ </div>
        <div class='header_holiday'> ζζζ₯</div>
        <div class='header'> ζζδΈ</div>
        <div class='header'> ζζδΊ</div>
        <div class='header'> ζζδΈ</div>
        <div class='header'> ζζε</div>
        <div class='header'> ζζδΊ</div>
        <div class='header_holiday'> ζζε­</div>

<?php
foreach($dateHouse as $k => $day){
    $hol=($k%7==0 || $k%7==6)?'weekend':"";
    if(!empty($day)){
        $dayFormat=date("j",strtotime($day));
        if($day == $today){
            echo "<footer class='today' '{$hol}'>{$dayFormat}</footer>";
        }else{
            echo "<footer class='{$hol}'>{$dayFormat}</footer>";
        }
    }else{
        echo "<footer class='{$hol}'></footer>";
    }
}
?>

</div><!-- ζζ ε¨θζ₯ week_table ηε₯ε°Ύ -->
<div class="rightMonth">
    <a href="13_index.php?year=<?=$nexYear?>&month=<?=$nextMonth;?>">δΈδΈζ <i class="fa-solid fa-angle-right"></i>&nbsp;&nbsp;</a>
</div>
<div class="rightYear">
    <a href="13_index.php?year=<?=($_GET['year']+1);?>&month=<?=$_GET['month'];?>">δΈδΈεΉ΄<i class="fa-solid fa-angles-right"></i></a>
</div>
<div class="right_img"></div>
</div><!-- ζζδΈ»ι« outer_table ηε₯ε°Ύ -->


<!-- --------------------------------------------------------------------month_coffee ε³ε΄θͺΏζ΄ζι-------------------------------------------------------------------- -->
<div class="month_coffee">

<div class="st">
<form action="13_index.php">
<br><br>
ζ΄ζΉζιθ³<br>
<!-- ζΈ10εΉ΄ -->
<a class="add_cut" href="13_index.php?year=<?=($_GET['year']-10);?>&month=<?=$_GET['month'];?>">- 10</a>

<!-- εΉ΄δ»½θ‘¨ε?εε -->
<select name="year">
    <option value="<?=$year?>"><?=$year?></option>
    <option value="<?=$year+1?>"><?=$year+1?></option>
    <option value="<?=$year+2?>"><?=$year+2?></option>
    <option value="<?=$year+3?>"><?=$year+3?></option>
    <option value="<?=$year+4?>"><?=$year+4?></option>
    <option value="<?=$year+5?>"><?=$year+5?></option>
    <option value="<?=$year+6?>"><?=$year+6?></option>
    <option value="<?=$year+7?>"><?=$year+7?></option>
    <option value="<?=$year+8?>"><?=$year+8?></option>
    <option value="<?=$year+9?>"><?=$year+9?></option>
    <option value="<?=$year+10?>"><?=$year+10?></option>
</select>

<!-- ε 10εΉ΄ -->
<a class="add_cut" href="13_index.php?year=<?=($_GET['year']+10);?>&month=<?=$_GET['month'];?>">+ 10</a>


<!-- ζδ»½θ‘¨ε?εε -->
<select name="month">
    <option value="1"> &nbsp; 1ζ</option>
    <option value="2"> &nbsp; 2ζ</option>
    <option value="3"> &nbsp; 3ζ</option>
    <option value="4"> &nbsp; 4ζ</option>
    <option value="5"> &nbsp; 5ζ</option>
    <option value="6"> &nbsp; 6ζ</option>
    <option value="7"> &nbsp; 7ζ</option>
    <option value="8"> &nbsp; 8ζ</option>
    <option value="9"> &nbsp; 9ζ</option>
    <option value="10"> 10ζ</option>
    <option value="11"> 11ζ</option>
    <option value="12"> 12ζ</option>
</select>
    <button type="hidden">ζ₯θ©’</button>
</form>
<br>
εε‘ηθ±η’εΊζ
</div>
<!-- -------------------------------------------------------------------------------εε‘θ±ζδ»½ε§ε?Ή------------------------------------------------------------------------------- -->

<div class="coffee">
<br>
<?php
$coffee_1=
"δΈ­ηΎζ΄²<br>
ε₯ζ―ε€§ι»ε  10~3ζζΆη©«, 5~6ζζ΅ι<br>
θ©ηΎη¦ε€ 10~3ζζΆη©«, 7ζζ΅ι<br>
ηε°ι¦¬ζ 11~4ζζΆη©«, 4ζζ΅ι<br>
ε?ι½ζζ― 11~4ζζΆη©«, 5ζζ΅ι<br>
ε°Όε ζη 12~3ζζΆη©«, 5ζζ΅ι<br>
ε·΄ζΏι¦¬ 12~3ζζΆη©«, 4ζζ΅ι<br>
<br>
εηΎ<br>
ε’¨θ₯Ώε₯ 11~3ζζΆη©«, 4ζζ΅ι<br>
<br>
δΊζ΄²<br>
ε°εΊ¦  11~3ζζΆη©«, 5ζζ΅ι<br>
θΆε 10~4ζζΆη©«, 4ζζ΅ι<br>
<br>
ιζ΄²<br>
εε‘δΏζ―δΊ 10~12ζζΆη©«, 2ζζ΅ι<br>
η§ζΊι 2~7ζζΆη©«, 1ζζ΅ι<br>
ηεΉ²ι 10~2ζζΆη©«,  3~4ζζ΅ι<br>
<br>";

$coffee_2=
"δΈ­ηΎζ΄²<br>
ε₯ζ―ε€§ι»ε  10~3ζζΆη©«, 5~6ζζ΅ι<br>
θ©ηΎη¦ε€ 10~3ζζΆη©«, 7ζζ΅ι<br>
ηε°ι¦¬ζ 11~4ζζΆη©«, 4ζζ΅ι<br>
ε?ι½ζζ― 11~4ζζΆη©«, 5ζζ΅ι<br>
ε°Όε ζη 12~3ζζΆη©«, 5ζζ΅ι<br>
ε·΄ζΏι¦¬ 12~3ζζΆη©«, 4ζζ΅ι<br>
<br>
εηΎ<br>
ε€η±³ε°Όε ε±εε 9~5ζζΆη©«, 12ζζ΅ι<br>
ε’¨θ₯Ώε₯ 11~3ζζΆη©«, 4ζζ΅ι<br>
<br>
δΊζ΄²<br>
ζ±εΈζ±Ά  5~10ζζΆη©«, 11ζζ΅ι<br>
ε°εΊ¦  11~3ζζΆη©«, 5ζζ΅ι<br>
ε°ε°Ό  ??ζζΆη©«, ζζ΅ι<br>
θιη­θ ??ζζΆη©«, ζζ΅ι<br>
θΆε 10~4ζζΆη©«, 4ζζ΅ι<br>
<br>
ιζ΄²<br>
εε‘δΏζ―δΊ 10~12ζζΆη©«, 2ζζ΅ι<br>
η§ζΊι 2~7ζζΆη©«, 1ζζ΅ι<br>
ε¦ζ‘ε°ΌδΊ 7~12ζζΆη©«, 2ζζ΅ι<br>
ηεΉ²ι 10~2ζζΆη©«,  3~4ζζ΅ι<br>
<br>";

$coffee_3=
"δΈ­ηΎζ΄²<br>
ε₯ζ―ε€§ι»ε  10~3ζζΆη©«, 5~6ζζ΅ι<br>
θ©ηΎη¦ε€ 10~3ζζΆη©«, 7ζζ΅ι<br>
ηε°ι¦¬ζ 11~4ζζΆη©«, 4ζζ΅ι<br>
ε?ι½ζζ― 11~4ζζΆη©«, 5ζζ΅ι<br>
ε°Όε ζη 12~3ζζΆη©«, 5ζζ΅ι<br>
ε·΄ζΏι¦¬ 12~3ζζΆη©«, 4ζζ΅ι<br>
<br>
εηΎ<br>
ε€η±³ε°Όε ε±εε 9~5ζζΆη©«, 12ζζ΅ι<br>
ε’¨θ₯Ώε₯ 11~3ζζΆη©«, 4ζζ΅ι<br>
<br>
δΊζ΄²<br>
ε°εΊ¦  11~3ζζΆη©«, 5ζζ΅ι<br>
θΆε 10~4ζζΆη©«, 4ζζ΅ι<br>
<br>
ιζ΄²<br>
θ―ε°ΌδΊ 3~7ζζΆη©«, 5ζζ΅ι<br>
η§ζΊι 2~7ζζΆη©«, 1ζζ΅ι<br>
ηεΉ²ι 10~2ζζΆη©«,  3~4ζζ΅ι<br>
<br>";
$coffee_4=
"δΈ­ηΎζ΄²<br>
ηε°ι¦¬ζ 11~4ζζΆη©«, 4ζζ΅ι<br>
ε?ι½ζζ― 11~4ζζΆη©«, 5ζζ΅ι<br>
ε·΄ζΏι¦¬ 12~3ζζΆη©«, 4ζζ΅ι<br>
<br>
εηΎ<br>
ε€η±³ε°Όε ε±εε 9~5ζζΆη©«, 12ζζ΅ι<br>
ε’¨θ₯Ώε₯ 11~3ζζΆη©«, 4ζζ΅ι<br>
<br>
δΊζ΄²<br>
θΆε 10~4ζζΆη©«, 4ζζ΅ι<br>
<br>
ε€§ζ΄ζ΄²<br>
ε·΄εΈδΊζ°εΉΎε§δΊ 4~9ζζΆη©«, 11ζζ΅ι<br>
<br>
ιζ΄²<br>
εζζ°δΈ»ε±εε 4~7ζζΆη©«, 7ζζ΅ι<br>
θ―ε°ΌδΊ 3~7ζζΆη©«, 5ζζ΅ι<br>
η§ζΊι 2~7ζζΆη©«, 1ζζ΅ι<br>
ηεΉ²ι 10~2ζζΆη©«,  3~4ζζ΅ι<br>
<br>";
$coffee_5=
"δΈ­ηΎζ΄²<br>
ε₯ζ―ε€§ι»ε  10~3ζζΆη©«, 5~6ζζ΅ι<br>
ε?ι½ζζ― 11~4ζζΆη©«, 5ζζ΅ι<br>
ε°Όε ζη 12~3ζζΆη©«, 5ζζ΅ι<br>
<br>
εηΎ<br>
ε€η±³ε°Όε ε±εε 9~5ζζΆη©«, 12ζζ΅ι<br>
<br>
δΊζ΄²<br>
ζ±εΈζ±Ά  5~10ζζΆη©«, 11ζζ΅ι<br>
ε°εΊ¦  11~3ζζΆη©«, 5ζζ΅ι<br>
<br>
ε€§ζ΄ζ΄²<br>
ε·΄εΈδΊζ°εΉΎε§δΊ 4~9ζζΆη©«, 11ζζ΅ι<br>
<br>
ιζ΄²<br>
εζζ°δΈ»ε±εε 4~7ζζΆη©«, 7ζζ΅ι<br>
θ―ε°ΌδΊ 3~7ζζΆη©«, 5ζζ΅ι<br>
η§ζΊι 2~7ζζΆη©«, 1ζζ΅ι<br>
<br>";
$coffee_6=
"δΈ­ηΎζ΄²<br>
ε₯ζ―ε€§ι»ε  10~3ζζΆη©«, 5~6ζζ΅ι<br>
<br>
δΊζ΄²<br>
ζ±εΈζ±Ά  5~10ζζΆη©«, 11ζζ΅ι<br>
<br>
ε€§ζ΄ζ΄²<br>
ε·΄εΈδΊζ°εΉΎε§δΊ 4~9ζζΆη©«, 11ζζ΅ι<br>
<br>
ιζ΄²<br>
εζζ°δΈ»ε±εε 4~7ζζΆη©«, 7ζζ΅ι<br>
θ―ε°ΌδΊ 3~7ζζΆη©«, 5ζζ΅ι<br>
η§ζΊι 2~7ζζΆη©«, 1ζζ΅ι<br>
<br>";
$coffee_7=
"δΈ­ηΎζ΄²<br>
θ©ηΎη¦ε€ 10~3ζζΆη©«, 7ζζ΅ι<br>
<br>
δΊζ΄²<br>
ζ±εΈζ±Ά  5~10ζζΆη©«, 11ζζ΅ι<br>
<br>
ε€§ζ΄ζ΄²<br>
ε·΄εΈδΊζ°εΉΎε§δΊ 4~9ζζΆη©«, 11ζζ΅ι<br>
<br>
ιζ΄²<br>
εζζ°δΈ»ε±εε 4~7ζζΆη©«, 7ζζ΅ι<br>
θ―ε°ΌδΊ 3~7ζζΆη©«, 5ζζ΅ι<br>
η§ζΊι 2~7ζζΆη©«, 1ζζ΅ι<br>
ε¦ζ‘ε°ΌδΊ 7~12ζζΆη©«, 2ζζ΅ι<br>
<br>";
$coffee_8=
"δΊζ΄²<br>
ζ±εΈζ±Ά  5~10ζζΆη©«, 11ζζ΅ι<br>
<br>
ε€§ζ΄ζ΄²<br>
ε·΄εΈδΊζ°εΉΎε§δΊ 4~9ζζΆη©«, 11ζζ΅ι<br>
<br>
ιζ΄²<br>
ε¦ζ‘ε°ΌδΊ 7~12ζζΆη©«, 2ζζ΅ι<br>
<br>";
$coffee_9=
"εηΎ<br>
ε€η±³ε°Όε ε±εε 9~5ζζΆη©«, 12ζζ΅ι<br>
<br>
δΊζ΄²<br>
ζ±εΈζ±Ά  5~10ζζΆη©«, 11ζζ΅ι<br>
<br>
ε€§ζ΄ζ΄²<br>
ε·΄εΈδΊζ°εΉΎε§δΊ 4~9ζζΆη©«, 11ζζ΅ι<br>
<br>
ιζ΄²<br>
εε‘δΏζ―δΊ 10~12ζζΆη©«, 2ζζ΅ι<br>
ε¦ζ‘ε°ΌδΊ 7~12ζζΆη©«, 2ζζ΅ι<br>
<br>";
$coffee_10=
"δΈ­ηΎζ΄²<br>
ε₯ζ―ε€§ι»ε  10~3ζζΆη©«, 5~6ζζ΅ι<br>
θ©ηΎη¦ε€ 10~3ζζΆη©«, 7ζζ΅ι<br>
<br>
εηΎ<br>
ε€η±³ε°Όε ε±εε 9~5ζζΆη©«, 12ζζ΅ι<br>
<br>
δΊζ΄²<br>
ζ±εΈζ±Ά  5~10ζζΆη©«, 11ζζ΅ι<br>
θΆε 10~4ζζΆη©«, 4ζζ΅ι<br>
<br>
ιζ΄²<br>
εε‘δΏζ―δΊ 10~12ζζΆη©«, 2ζζ΅ι<br>
ε¦ζ‘ε°ΌδΊ 7~12ζζΆη©«, 2ζζ΅ι<br>
ηεΉ²ι 10~2ζζΆη©«,  3~4ζζ΅ι<br>
<br>";
$coffee_11=
"δΈ­ηΎζ΄²<br>
ε₯ζ―ε€§ι»ε  10~3ζζΆη©«, 5~6ζζ΅ι<br>
θ©ηΎη¦ε€ 10~3ζζΆη©«, 7ζζ΅ι<br>
ηε°ι¦¬ζ 11~4ζζΆη©«, 4ζζ΅ι<br>
ε?ι½ζζ― 11~4ζζΆη©«, 5ζζ΅ι<br>
<br>
εηΎ<br>
ε’¨θ₯Ώε₯ 11~3ζζΆη©«, 4ζζ΅ι<br>
<br>
δΊζ΄²<br>
ζ±εΈζ±Ά  5~10ζζΆη©«, 11ζζ΅ι<br>
ε°εΊ¦  11~3ζζΆη©«, 5ζζ΅ι<br>
<br>
ε€§ζ΄ζ΄²<br>
ε·΄εΈδΊζ°εΉΎε§δΊ 4~9ζζΆη©«, 11ζζ΅ι<br>
<br>
ιζ΄²<br>
εε‘δΏζ―δΊ 10~12ζζΆη©«, 2ζζ΅ι<br>
ε¦ζ‘ε°ΌδΊ 7~12ζζΆη©«, 2ζζ΅ι<br>
ηεΉ²ι 10~2ζζΆη©«,  3~4ζζ΅ι<br>
<br>";
$coffee_12=
"δΈ­ηΎζ΄²<br>
ε₯ζ―ε€§ι»ε  10~3ζζΆη©«, 5~6ζζ΅ι<br>
θ©ηΎη¦ε€ 10~3ζζΆη©«, 7ζζ΅ι<br>
ηε°ι¦¬ζ 11~4ζζΆη©«, 4ζζ΅ι<br>
ε?ι½ζζ― 11~4ζζΆη©«, 5ζζ΅ι<br>
ε°Όε ζη 12~3ζζΆη©«, 5ζζ΅ι<br>
ε·΄ζΏι¦¬ 12~3ζζΆη©«, 4ζζ΅ι<br>
<br>
εηΎ<br>
ε€η±³ε°Όε ε±εε 9~5ζζΆη©«, 12ζζ΅ι<br>
ε’¨θ₯Ώε₯ 11~3ζζΆη©«, 4ζζ΅ι<br>
<br>
δΊζ΄²<br>
ε°εΊ¦  11~3ζζΆη©«, 5ζζ΅ι<br>
θΆε 10~4ζζΆη©«, 4ζζ΅ι<br>
<br>
ιζ΄²<br>
εε‘δΏζ―δΊ 10~12ζζΆη©«, 2ζζ΅ι<br>
ε¦ζ‘ε°ΌδΊ 7~12ζζΆη©«, 2ζζ΅ι<br>
ηεΉ²ι 10~2ζζΆη©«,  3~4ζζ΅ι<br>
<br>";
switch($month){
    case 1:
        echo $coffee_1;
    break;

    case 2:
        echo $coffee_2;
    break;

    case 3:
        echo $coffee_3;
    break;

    case 4:
        echo $coffee_4;
    break;

    case 5:
        echo $coffee_5;
    break;

    case 6:
        echo $coffee_6;
    break;

    case 7:
        echo $coffee_7;
    break;

    case 8:
        echo $coffee_8;
    break;

    case 9:
        echo $coffee_9;
    break;

    case 10:
        echo $coffee_10;
    break;

    case 11:
        echo $coffee_11;
    break;

    case 12:
        echo $coffee_12;
    break;
}
?>

</div>
</div><!--  wrapper ηε₯ε°Ύ  -->




</body>
</html>