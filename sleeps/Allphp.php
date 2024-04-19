

Faiz Shaikh
Advance Php. Slips - BCA Practical Slip Solution
- August 12, 2022
 

SLIP 1

Q.2.a. Write a PHP program to create a simple calculator that can accept two numbers and

perform operations like add, subtract, multiplication and divide (using class concept)

// solution 1

&lt;?php

class calculate

{

public $a,$b;

function __construct($a,$b)

{

$this-&gt;a=$a;

$this-&gt;b=$b;

}

public function add()

{

$c=$this-&gt;a+$this-&gt;b;

echo&quot;Addition is:$c &lt;br&gt;&quot;;

}

public function sub()

{

$c=$this-&gt;a-$this-&gt;b;

echo&quot;substraction is:$c &lt;br&gt;&quot;;

}

public function mul()

{

$c=$this-&gt;a*$this-&gt;b;

echo&quot;multiplication is:$c &lt;br&gt;&quot;;

}

public function div()

{

$c=$this-&gt;a/$this-&gt;b;

echo&quot;division is:$c &lt;br&gt;&quot;;

}

}

$obj=new calculate(3,4);

$obj-&gt;add();

$obj-&gt;sub();

$obj-&gt;mul();

$obj-&gt;div();

?&gt;

// solution 2

&lt;?php

class Calculator

{

private $num1;

private $num2;

public function __construct($no1,$no2)

{



$this-&gt;num1 = $no1;

$this-&gt;num2 = $no2;

}

public function add()

{

echo &quot;&lt;BR&gt;&lt;B&gt;Addition of two number is :&quot;.($this-&gt;num1+$this-&gt;num2);

}

public function subtract()

{

echo &quot;&lt;BR&gt;&lt;B&gt;Subtraction of two number is :&quot;.($this-&gt;num1-$this-&gt;num2);

}

public function multiply()

{

echo &quot;&lt;BR&gt;&lt;B&gt;Multiplication of two number is :&quot;.($this-&gt;num1*$this-&gt;num2);

}

public function divide()

{

echo &quot;&lt;BR&gt;&lt;B&gt;Divison of two number is :&quot;.($this-&gt;num1/$this-&gt;num2);

}

}

$calc = new Calculator(4,2);

$calc-&gt;add();

$calc-&gt;subtract();

$calc-&gt;multiply();

$calc-&gt;divide();

?&gt;

---------------------------------------------------------------------------------------------------------------------------

Slip 2

Write a PHP script to demonstrate the introspection for examining class

(use function get_declared_classes() ,get_class_methods() and get_class_vars()).

Solution :

&lt;?php

class abc

{

}

class pqr

{

}s

class sqr

{

public $s;

public $p;



function __construct()

{

}

function alpa()

{

}

function beta()

{

}

}

$s1= get_declared_classes();

echo $s1;

foreach ($s1 as $x)

{

echo &quot; &lt;BR/&gt;D : &quot;.$x;

$s2 = get_class_methods($x);

foreach ($s2 as $x1)

{

echo &quot;&lt;BR/&gt;M : &quot;.$x1;

}

$s3 = array_keys(get_class_vars($x));

foreach ($s3 as $x3)

{

echo &quot;&lt;BR/&gt;Var : &quot;.$x3;

}

}

?&gt;

---------------------------------------------------------------------------------------------------------------------------

Slip 3

&lt;?php

class calculate

{

public $a,$b;

function __construct($a,$b)

{

$this-&gt;a=$a;

$this-&gt;b=$b;

}

public function add()

{

$c=$this-&gt;a+$this-&gt;b;

echo&quot;Addition is:$c &lt;br&gt;&quot;;

}

public function sub()

{

$c=$this-&gt;a-$this-&gt;b;



echo&quot;substraction is:$c &lt;br&gt;&quot;;

}

public function mul()

{

$c=$this-&gt;a*$this-&gt;b;

echo&quot;multiplication is:$c &lt;br&gt;&quot;;

}

public function div()

{

$c=$this-&gt;a/$this-&gt;b;

echo&quot;division is:$c &lt;br&gt;&quot;;

}

}

$obj=new calculate(3,4);

$obj-&gt;add();

$obj-&gt;sub();

$obj-&gt;mul();

$obj-&gt;div();

?&gt;

---------------------------------------------------------------------------------------------------------------------------

Slip 4

&lt;html&gt;

&lt;body&gt;

&lt;script type=&quot;text/javascript&quot;&gt;

function show_confirm()

{

var r=confirm(&quot;Press a button !&quot;);

if(r==true)

{

ver i;

var game = new Array();

game[0]=&quot;Car &quot;;

game[1]=&quot;GTA&quot;;

game[2]=&quot;cricket&quot;;

for(i=0;i&lt;game.length;i++)

{

document.write(game[i]+&quot;&lt;br/&gt;&quot;);

}

}

else

{

alert(&quot;Cancel game cannot be displayed !&quot;);

}

}

&lt;/script&gt;

&lt;/head&gt;S

&lt;boody&gt;

&lt;input type=&quot;button&quot; onclick=&quot;show_confirm()&quot; value=&quot;List of game&quot;/&gt;

&lt;/body&gt;

&lt;/html&gt;

---------------------------------------------------------------------------------------------------------------------------

Slip 4

Define a class Employee having private members — id, name, department, salary. Define

parameterized constructors. Create a subclass called &quot;Manager&quot; with private member bonus. Create 3

objects of the Manager class and display the details of the manager having the maximum total salary

(salary + bonus).

&lt;?php

class employee

{

protected $id;

protected $name;

protected $department;

protected $salary;

public function __construct($id,$name,$dept,$sal)

{

$this-&gt;id = $code;

$this-&gt;name = $name;

$this-&gt;department = $dept;

$this-&gt;salary = $sal;

}

}

class Manager extends employee

{

protected $bonus;

function __construct($id,$name,$dept,$sal,$bonus)

{

parent::__construct($id,$name,$dept,$sal);

$this-&gt;bonus = $bonus;

}

}

class emp_sal extends emp_account

{

protected $basic_pay;

protected $earnings;

protected $deduction;

function

__construct($code,$name,$designation,$account_no,$joining_date,$basic_pay,$earnings,$deduction)

{

parent::__construct($code,$name,$designation,$account_no,$joining_date);

$this-&gt;basic_pay = $basic_pay;

$this-&gt;earnings = $earnings;

$this-&gt;deduction = $deduction;

}

public function agreegate_sal()



{

return (($this-&gt;basic_pay+$this-&gt;earnings )-$this-&gt;deduction);

}

public function display()

{

echo &quot;&lt;BR/&gt;Employee Code :&quot;.$this-&gt;code;

echo &quot;&lt;BR/&gt;Employee Name :&quot;.$this-&gt;name;

echo &quot;&lt;BR/&gt;Employee Designation :&quot;.$this-&gt;designation;

echo &quot;&lt;BR/&gt;Employee account no :&quot;.$this-&gt;account_no;

echo &quot;&lt;BR/&gt;Employee joining date :&quot;.$this-&gt;joining_date;

echo &quot;&lt;BR/&gt;Employee basic pay :&quot;.$this-&gt;basic_pay;

echo &quot;&lt;BR/&gt;Employee earning :&quot;.$this-&gt;earnings;

echo &quot;&lt;BR/&gt;Employee deductions :&quot;.$this-&gt;deduction;

echo &quot;&lt;BR/&gt;Employee Total Salary :&quot;.$this-&gt;agreegate_sal();

}

}

$e1 = new emp_sal(1,&quot;Kuldeep&quot;,&quot;Manager&quot;,101,&quot;31/5/1994&quot;,50000,20000,2000);

$e2 = new emp_sal(2,&quot;KuldeepI&quot;,&quot;Manager&quot;,102,&quot;31/5/1994&quot;,58000,28000,2000);

$e3 = new emp_sal(3,&quot;KuldeepII&quot;,&quot;Manager&quot;,103,&quot;31/5/1994&quot;,52000,20000,2000);

$e4 = new emp_sal(4,&quot;KuldeepIII&quot;,&quot;Manager&quot;,104,&quot;31/5/1994&quot;,52000,20000,2000);

$e5 = new emp_sal(5,&quot;KuldeepIV&quot;,&quot;Manager&quot;,105,&quot;31/5/1994&quot;,52000,20000,2000);

$sals = array($e1-&gt;agreegate_sal(),$e2-&gt;agreegate_sal(),$e3-&gt;agreegate_sal(),$e4-

&gt;agreegate_sal(),$e5-&gt;agreegate_sal());

$e1-&gt;display();

$e2-&gt;display();

$e3-&gt;display();

$e4-&gt;display();

$e5-&gt;display();

$max = 0;

for($i = 0;$i &lt; count($sals);$i++)

{

if($max &lt; $sals[$i])

{

$max = $sals[$i];

}

}



echo &quot;&lt;BR/&gt;Maximum Salary is &quot;.$max;

?&gt;



&lt;?php

$xml=simplexml_load_file(“cricket.xml”)or die(“cannotnload”);

$xmlstring=$xml-&gt;asXML();

Echo $xmlstring;



?&gt;

---------------------------------------------------------------------------------------------------------------------------

Slip 8



&lt;!-- Write a PHP script to create a Class Shape and its subclass Triangle , Square and Circle and

display area of the selected shape . (Use the concept of inheritance )

Display menu (use radio button )

a) Triangle

b) Square

c) Circle--&gt;



&lt;html&gt;

&lt;form name=inheritance method=GET action=slip10prog2.php&gt;

&lt;input type=radio name=r value=&#39;tri&#39;&gt; Triangle&lt;br&gt;

&lt;input type=radio name=r value=&#39;sq&#39; &gt; Square&lt;br&gt;

&lt;input type=radio name=r value=&#39;cir&#39;&gt; Circle&lt;br&gt;&lt;br&gt;

&lt;input type=submit value=Calculate&gt;

&lt;/form&gt;

&lt;/html&gt;



&lt;?php

$optn = $_GET[&#39;r&#39;];

abstract class Shape

{

abstract function area();

}

class Triangle extends Shape

{

var $base;

var $height;

function __construct($base,$height)

{

$this-&gt;base = $base;

$this-&gt;height = $height;



}

function area()

{

$area_tri = (1/2)*($this-&gt;base)*($this-&gt;height);

echo &quot;&lt;h1&gt;Area of Triangle is : &quot;.$area_tri;

}

}

class Square extends Shape

{

var $side;

function __construct($side)

{

$this-&gt;side = $side;

}

function area()

{

$area_sq = $this-&gt;side * $this-&gt;side;

echo &quot;&lt;h1&gt;Area of Square is : &quot;.$area_sq;

}

}

class Circle extends Shape

{

var $radius;

function __construct($radius)

{

$this-&gt;radius = $radius;

}

function area()

{

$area_cir = 2 * 3.14 * $this-&gt;radius * $this-&gt;radius;

echo &quot;&lt;h1&gt;Area of circle is : &quot;.$area_cir;

}



}

if($optn == &#39;tri&#39;)

{

$obj = new Triangle(4,6);

$obj-&gt; area();

exit;

}

if($optn == &#39;sq&#39;)

{

$obj = new Square(6);

$obj-&gt; area();

exit;

}

if($optn == &#39;cir&#39;)

{

$obj = new Circle(3);

$obj-&gt; area();

exit;

}

?&gt;

---------------------------------------------------------------------------------------------------------------------------

Slip 9

Q.2. A

&lt;!--Write a PHP program to create a Class Claculator which will accept two values from user and

pass as an argument through parameterized constructor and do the following task.

1) Add them

2) Subtract them

3) Multiply them together or divide them on request.--&gt;

&lt;html&gt;

&lt;form method=&quot;GET&quot; action=&quot;slip4prog2.php&quot;&gt;

Value 1 : &lt;input type=&quot;number&quot; name=&quot;v1&quot;&gt;

Value 2 : &lt;input type=&quot;number&quot; name=&quot;v2&quot;&gt;&lt;br&gt;&lt;br&gt;

&lt;input type=&quot;radio&quot; name=&quot;optn&quot; value=&quot;add&quot;/&gt;Add&lt;br&gt;

&lt;input type=&quot;radio&quot; name=&quot;optn&quot; value=&quot;sub&quot;/&gt;Subtraction&lt;br&gt;

&lt;input type=&quot;radio&quot; name=&quot;optn&quot; value=&quot;mult&quot;/&gt;Multiplication&lt;br&gt;

&lt;input type=&quot;radio&quot; name=&quot;optn&quot; value=&quot;div&quot;/&gt;Division&lt;br&gt;

&lt;input type=&quot;submit&quot; value=&quot;Calculate&quot;&gt;



&lt;/form&gt;

&lt;/html&gt;

&lt;?php

class Calculator

{

var $value_1;

var $value_2;

function __construct($value_1,$value_2)

{

$this-&gt;value_1 = $value_1;

$this-&gt;value_2 = $value_2;

}

function performCalc()

{

global $optn;

if($optn == &#39;add&#39;)

echo &quot;&lt;h2&gt;Addition : &lt;h2&gt; &quot;.($this-&gt;value_1 + $this-&gt;value_2);

else

if($optn == &#39;sub&#39;)

{

echo &quot;&lt;h2&gt;Substraction(&quot;.$this-&gt;value_1.&quot;-&quot;.$this-&gt;value_2.&quot;) : &lt;h2&gt; &quot;.($this-&gt;value_1 - $this-

&gt;value_2);

echo &quot;&lt;h2&gt;Substraction(&quot;.$this-&gt;value_2.&quot;-&quot;.$this-&gt;value_1.&quot;) : &lt;h2&gt; &quot;.($this-&gt;value_2 - $this-

&gt;value_1);

}

else

if($optn == &#39;mult&#39;)

echo &quot;&lt;h2&gt;Multiplication : &lt;h2&gt; &quot;.($this-&gt;value_1 * $this-&gt;value_2);

else

if($optn == &#39;div&#39;)

{

echo &quot;&lt;h2&gt;Division(&quot;.$this-&gt;value_1.&quot;/&quot;.$this-&gt;value_2.&quot;) : &lt;h2&gt; &quot;.($this-&gt;value_1 / $this-&gt;value_2);

echo &quot;&lt;h2&gt;Division(&quot;.$this-&gt;value_2.&quot;/&quot;.$this-&gt;value_1.&quot;) : &lt;h2&gt; &quot;.($this-&gt;value_2 / $this-&gt;value_1);

}

echo &quot;&lt;br&gt;&lt;br&gt;&lt;a href=slip4prog2.html&gt;Back&lt;/a&gt;&quot;;

}

}

$optn = $_GET[&#39;optn&#39;];

$value_1 = $_GET[&#39;v1&#39;];

$value_2 = $_GET[&#39;v2&#39;];

$obj = new Calculator($value_1,$value_2);

$obj -&gt; performCalc();

?&gt;

---------------------------------------------------------------------------------------------------------------------------

SLIP 17

Q.2.A

&lt;!--

Write a script to create XML file &#39;University.xml&#39;. The element details of &#39;University.xml&#39; are as

follows :

&lt;Univ&gt;

&lt;Uname&gt;....&lt;/Uname&gt;

&lt;City&gt;.....&lt;/City&gt;

&lt;Rank&gt;.....&lt;/Rank&gt;

&lt;/Univ&gt;

a) Store the details of atleast 3 Universities

b) Link the &#39;University.xml&#39; file to css and get well formatted output as given below :

1) Uname :

color : Black;

font-family:copperplate Gothic Light;

font-size:16;

2) City and Rank :

color:yellow;

font-family:arial;

font-size:12pt;

Font: Bold;

--&gt;

Solution :

&lt;?xml version=&quot;1.0&quot; ?&gt;

&lt;?xml-stylesheet type=&quot;text/css&quot; href=&quot;style.css&quot; ?&gt;

&lt;universities&gt;

&lt;univ&gt;

&lt;uname&gt;Pune University&lt;/uname&gt;

&lt;city&gt;Pune&lt;/city&gt;

&lt;rank&gt;1st&lt;/rank&gt;

&lt;/univ&gt;

&lt;univ&gt;

&lt;uname&gt;Mumbai University&lt;/uname&gt;

&lt;city&gt;Mumbai&lt;/city&gt;

&lt;rank&gt;2nd&lt;/rank&gt;

&lt;/univ&gt;

&lt;univ&gt;

&lt;uname&gt;Kolhapur University&lt;/uname&gt;

&lt;city&gt;Kolhapur&lt;/city&gt;

&lt;rank&gt;3rd&lt;/rank&gt;

&lt;/univ&gt;

&lt;univ&gt;

&lt;uname&gt;Nagpur University&lt;/uname&gt;

&lt;city&gt;Nagpur&lt;/city&gt;

&lt;rank&gt;4th&lt;/rank&gt;



&lt;/univ&gt;

&lt;univ&gt;

&lt;uname&gt;Hyderabad University&lt;/uname&gt;

&lt;city&gt;Hyderabad&lt;/city&gt;

&lt;rank&gt;5th&lt;/rank&gt;

&lt;/univ&gt;

&lt;/universities&gt;

---------------------------------------------------------------------------------------------------------------------------

Slip 21

Write a script to create XML file named “Course.xml” &lt;Course&gt;

&lt;Computer Science&gt;

&lt;Student name&gt;.......&lt;/Student name&gt;

&lt;Class name&gt;......&lt;/Class name&gt;

&lt;percentage&gt;.....&lt;/percentage&gt;

&lt;/Computer Science&gt;

&lt;/Course&gt;

Store the details of 5 students who are in SY BCA.

&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;

&lt;course&gt;

&lt;computerscience&gt;

&lt;studentname&gt;samir Thorat &lt;/studentname&gt;

&lt;classname&gt;TYBCA. &lt;/classname&gt;

&lt;percentage&gt;60 &lt;/percennatage&gt;

&lt;/computerscience&gt;

&lt;computerscience&gt;

&lt;studentname&gt;sunil kamble &lt;/studentname&gt;

&lt;classname&gt;TYBCA. &lt;/classname&gt;

&lt;percentage&gt;55 &lt;/percennatage&gt;

&lt;/computerscience&gt;

&lt;computerscience&gt;

&lt;studentname&gt;anil kamble &lt;/studentname&gt;

&lt;classname&gt;TYBCA. &lt;/classname&gt;

&lt;percentage&gt;60 &lt;/percennatage&gt;

&lt;/computerscience&gt;

&lt;computerscience&gt;

&lt;studentname&gt;asha kamble &lt;/studentname&gt;

&lt;classname&gt;TYBCA. &lt;/classname&gt;

&lt;percentage&gt;65 &lt;/percennatage&gt;

&lt;/computerscience&gt;



&lt;computerscience&gt;

&lt;studentname&gt;madhuri &lt;/studentname&gt;

&lt;classname&gt;TYBCA. &lt;/classname&gt;

&lt;percentage&gt;70 &lt;/percennatage&gt;

&lt;/computerscience&gt;

&lt;/course&gt;

---------------------------------------------------------------------------------------------------------------------------

Slip 22

&lt;?php

class Myclass

{

public $a;

public $b=10;

public $c=&#39;ABC&#39;;

function Myclass()

{

//Myclass function

}

function myfun1()

{

//functin

}

function myfun2()

{

//functin

}

}

$class=get_declared_classes();

foreach($class as $cname)

{

echo&quot;$cname &lt;br&gt;&quot;;

}

echo&quot;&lt;br&gt;Class Methods are : &lt;br&gt;&quot;;

$m=get_class_methods(&#39;Myclass&#39;);

foreach($m as $mname)

{

echo&quot;$mname &lt;br&gt;&quot;;

}

$cp=get_class_vars(&#39;Myclass&#39;);

echo&quot;class variables are :&lt;br&gt;&quot;;

foreach($cp as $cpname =&gt; $v)

{

echo&quot;$cpname : $v &lt;br&gt;&quot;;

}

?&gt;



&lt;?php

$xml=simplexml_load_file(&quot;Book.xml&quot;) or die(&quot;cannnot load&quot;);

$xmlstring=$xml-&gt;asXML();

echo $xmlstring;

?&gt;

---------------------------------------------------------------------------------------------------------------------------

Slip 23

Q.2. B

&lt;!-- Write AJAX program to print movie details by slecting an Actor’s name. Create

Tables Movie and Actor with 1:M cardinality as follows:

Movie (mno,mname,release_year)

Actor (ano,aname)

( use PostgreSQL)--&gt;

&lt;html&gt;

&lt;head&gt;

&lt;script type=&quot;text/javascript&quot;&gt;

function display()

{

var x= new XMLHttpRequest();

var n= document.getElementById(&#39;n&#39;).value;

x.open(&quot;GET&quot;, &quot;slip25prog2.php?n=&quot;+n, true);

x.send( );

x.onreadystatechange = function()

{

if(x.readyState == 4 &amp;&amp; x.status==200)

{

document.getElementById(&quot;show&quot;).innerHTML = x.responseText;

}

}

}

&lt;/script&gt;

&lt;/head&gt;

&lt;body&gt;

Actor Name: &lt;input type=&quot;text&quot; name=&#39;n&#39; id=&#39;n&#39;&gt; &lt;br&gt;



&lt;button onclick=&quot;display()&quot; &gt; Print&lt;/button&gt;

&lt;h1 id=&quot;show&quot;&gt; &lt;/h1&gt;

&lt;/body&gt;

&lt;/html&gt;



&lt;?php

$aname=$_POST[&#39;aname&#39;];

$con=pg_connect(&quot;host=localhost dbname=root user=root&quot;) or die(&quot;Could not connect&quot;);

$qry=&quot;select mname,release_year from movie,actor where movie.mno=actor.mno and

aname=$aname&quot;;

$rs=pg_query($con,$qry) or die(&quot;Unable to execute query&quot;);

if($rs!=null)

{

echo&quot;&lt;table border=0&gt;&quot;;

echo&quot;&lt;tr&gt;&lt;td&gt;Movie Name&lt;/td&gt;&lt;td&gt;Release Year&lt;/td&gt;&lt;/tr&gt;&quot;;

while($row=pg_fetch_row($rs))

{

echo&quot;&lt;tr&gt;&quot;;

echo&quot;&lt;td&gt;&quot;.$row[0].&quot;&lt;/td&gt;&quot;;

echo&quot;&lt;td&gt;&quot;.$row[1].&quot;&lt;/td&gt;&quot;;

echo&quot;&lt;/tr&gt;&quot;;

}

echo&quot;&lt;/table&gt;&quot;;

}

else

echo&quot;NO records found&quot;;

pg_close($con);

?&gt;

---------------------------------------------------------------------------------------------------------------------------


Slip 12

A)



&lt;!doctype html&gt;

&lt;html&gt;

&lt;head&gt;

&lt;meta charset=&quot;utf-8&quot;&gt;

&lt;title&gt;Untitled Document&lt;/title&gt;

&lt;/head&gt;

&lt;body&gt;

&lt;?php  

$far = 89;  

  $cel=($far - 32) * (5/9);

echo &quot;Temprature in Fahrenheit is : $far&quot;. &quot;&lt;br /&gt;&quot;;

echo &quot;Temprature in Celcius is : $cel&quot; ;

  ?&gt;

&lt;/body&gt;

&lt;/html&gt;

B)

HTML file :

&lt;html&gt;

&lt;head&gt;

&lt;style&gt;

span

{

                font-size: 25px;

}

table

{

                color: blueviolet; ;

}

&lt;/style&gt;

&lt;script type=&quot;text/javascript&quot; &gt;

                function print()

                {

                                var ob=false;

                                ob=new XMLHttpRequest();

             

                                ob.open(&quot;GET&quot;,&quot;slip14_Q2.php?&quot;);//emailid=&quot;+eid);

                                ob.send();         

             

                                ob.onreadystatechange=function()

                                {

                                                if(ob.readyState==4 &amp;&amp; ob.status==200)

                                                {

                                                               

document.getElementById(&quot;i&quot;).innerHTML=ob.responseText;

                                                }

                                }

                }           

&lt;/script&gt;



&lt;/head&gt;

&lt;body&gt;

&lt;center&gt;

&lt;h3&gt;Display the contents of a contact.dat file &lt;/h3&gt;

&lt;br&gt;&lt;input  type=&quot;button&quot;  value=Print onclick=&quot;print()&quot; &gt;

&lt;span id=&quot;i&quot;&gt;&lt;/span&gt;

&lt;/center&gt;

&lt;/body&gt;

&lt;/html&gt;

Dat file : contact.dat

1  Isha  65768798  98765432  Daughter

2  Megha  65235689  87654329  Mother

PHP file :

&lt;?php

                $fp = fopen(&#39;contact.dat&#39;,&#39;r&#39;);

                echo &quot;&lt;table border=1&gt;&quot;;

                echo &quot;&lt;tr&gt;&lt;th&gt;Sr. No.&lt;/th&gt;&lt;th&gt;Name&lt;/th&gt;&lt;th&gt;Residence No.&lt;/th&gt;&lt;th&gt;Mob.

no.&lt;/th&gt;&lt;th&gt;Relation&lt;/th&gt;&lt;/tr&gt;&quot;;

             

while($row =  fscanf($fp,&quot;%s %s %s %s %s&quot;))

                {

                                echo &quot;&lt;tr&gt;&quot;;

                                foreach($row as $r)

                                {

                                                echo &quot;&lt;td&gt;$r&lt;/td&gt;&quot;;                           

                                }                           

                                echo &quot;&lt;/tr&gt;&quot;;

                }

                                echo &quot;&lt;/table&gt;&quot;;

                fclose($fp);

?

---------------------------------------------------------------------------------------------------------------------------


Slip 13

A)



&lt;html&gt;

&lt;body&gt;

&lt;table border=1&gt;

&lt;tr&gt;&lt;th colspan=2&gt;

&lt;form action=&quot;&lt;?php echo $_SERVER[&#39;PHP_SELF&#39;]?&gt;&quot; method=post&gt;

&lt;tr&gt;&lt;td&gt;Enter Name&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;nm&quot; value=&quot;&lt;?php

if(isset($_POST[&#39;nm&#39;]))echo $_POST[&#39;nm&#39;]?&gt;&quot;&lt;td&gt;&lt;/tr&gt;

&lt;tr&gt;&lt;td&gt;Enter Roll No&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;rno&quot; value=&quot;&lt;?php

if(isset($_POST[&#39;rno&#39;]))echo $_POST[&#39;rno&#39;]?&gt;&quot;&lt;/td&gt;&lt;/tr&gt;

&lt;tr&gt;&lt;td&gt;Enter State&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;st&quot; value=&quot;&lt;?php if(isset($_POST[&#39;st&#39;]))echo

$_POST[&#39;st&#39;]?&gt;&quot; &lt;/td&gt;&lt;/tr&gt;

&lt;tr&gt;&lt;td&gt;Enter City&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;ct&quot; value=&quot;&lt;?php if(isset($_POST[&#39;ct&#39;]))echo

$_POST[&#39;ct&#39;]?&gt;&quot;&lt;/td&gt;&lt;/tr&gt;

&lt;tr&gt;&lt;td&gt;Enter Percentage&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;per&quot; value=&quot;&lt;?php

if(isset($_POST[&#39;per&#39;]))echo $_POST[&#39;per&#39;]?&gt;&quot;&lt;/td&gt;&lt;/tr&gt;

&lt;tr&gt;&lt;td&gt;&lt;input type=&quot;submit&quot; value=&quot;Submit&quot; name=&quot;submit&quot;&gt;&lt;/td&gt;

&lt;td&gt;&lt;nput type=&quot;reset&quot; value=&quot;Reset&quot;&gt;&lt;/td&gt;&lt;/tr&gt;

&lt;/form&gt;

&lt;/table&gt;

&lt;?php

if(isset($_POST[&#39;submit&#39;]))

{

$nm=$_POST[&#39;nm&#39;];

$rno=$_POST[&#39;rno&#39;];

$st=$_POST[&#39;st&#39;];

$ct=$_POST[&#39;ct&#39;];

$perc=$_POST[&#39;per&#39;];

}

if((!empty($nm)) &amp;&amp; (!empty($rno)) &amp;&amp; (!empty($st)) &amp;&amp; (!empty($ct)) &amp;&amp; (!empty($perc)))

{

setcookie(&#39;nm&#39;,$nm);

setcookie(&#39;rno&#39;,$rno);

setcookie(&#39;st&#39;,$st);

setcookie(&#39;ct&#39;,$ct);

setcookie(&#39;perc&#39;,$perc);

echo &quot;U r Value is set&quot;;

}

?&gt;

&lt;a href=&quot;slip14_1.php&quot;&gt;show

&lt;/body&gt;

&lt;/html&gt;

slip14_1.php-

&lt;?php

echo &quot;Your name is $_COOKIE[nm] &lt;/br&gt;&quot;;

echo &quot;Your Roll No Is : $_COOKIE[rno]&lt;/br&gt;&quot;;

echo &quot;Your State Is : $_COOKIE[st]&lt;/br&gt;&quot;;

echo &quot;Your City Is : $_COOKIE[ct]&lt;/br&gt;&quot;;

echo &quot;Your Percentage Is : $_COOKIE[perc]&lt;/br&gt;&quot;;

?&gt;

---------------------------------------------------------------------------------------------------------------------------


B)



Slip 14

A)

&lt;html&gt;

&lt;body&gt;

&lt;form method=post action=&quot;&lt;?php echo $_SERVER[&#39;PHP_SELF&#39;] ?&gt;&quot;&gt;

Enter String : &lt;input type=text name=str1&gt;&lt;br&gt;

&lt;input type=submit name=submit value =Reverse&gt;

&lt;/form&gt;

&lt;?php

            if(isset($_POST[&#39;submit&#39;]))

    {

                        $str=$_POST[&#39;str1&#39;];

                        $nstr=strrev($str);

                        echo&quot;&lt;br&gt;&quot;.$nstr;

    }

?&gt;

&lt;/body&gt;

&lt;/html&gt;

B)

Html file -

&lt;html&gt;

&lt;head&gt;

&lt;script type=&quot;text/javascript&quot;&gt;

function Addition()

{

var ob=false;

ob=new XMLHttpRequest();

var no1=document.getElementById(&quot;no1&quot;).value;

var no2=document.getElementById(&quot;no2&quot;).value;

ob.open(&quot;GET&quot;,&quot;Que25.php?num1=&quot;+no1+&quot;&amp;num2=&quot;+no2);

ob.send();

ob.onreadystatechange=function()

{

if(ob.readyState==4 &amp;&amp; ob.status==200)

document.getElementById(&quot;add&quot;).innerHTML=ob.responseText;

}

}

&lt;/script&gt;

&lt;/head&gt;

&lt;body&gt;

Enter User Name :&lt;input type=text id=&quot;no1&quot;&gt;

Enter Password :&lt;input type=text id=&quot;no2&quot;&gt;

&lt;input type=button name=submit value=add onClick=&quot;Addition()&quot;&gt;



&lt;span id=&quot;add&quot;&gt;&lt;/span&gt;

&lt;body&gt;

&lt;/html&gt;

q25.php-

&lt;?php

$una=$_GET[&#39;num1&#39;];

$ps=$_GET[&#39;num2&#39;];

$sn=&quot;localhost&quot;;

$un=&quot;root&quot;;

$pas=&quot;&quot;;

$dbn=&quot;s17&quot;;

if((!empty($una)) &amp;&amp; (!empty($ps)))

{

$con=mysqli_connect($sn,$un,$pas,$dbn);

$sql=&quot;select * from login where un=&#39;$una&#39; and pass=&#39;$ps&#39;&quot;;

$r=mysqli_query($con,$sql);

if (mysqli_num_rows($r) &gt; 0)

{

echo &quot;Login&quot;;

}

else

{

echo &quot;Not&quot;;

}

}

else

{

echo &quot;enter both Username&amp; pass&quot;;

}

?&gt;

---------------------------------------------------------------------------------------------------------------------------


Slip 15

A)

HTML File-

&lt;html&gt;

&lt;head&gt;&lt;title&gt;Slip20 &lt;/title&gt;

&lt;/head&gt;

&lt;form action=slip20.php method=get&gt;

Select List of subjects

&lt;select multiple name=&quot;subjects[]&quot;&gt;

&lt;option value=&quot;VB.NET&quot;&gt;Vb.NET&lt;/option&gt;

&lt;option value=&quot;PHP&quot;&gt;PHP&lt;/option&gt;

&lt;option value=&quot;JAVA&quot;&gt;JAVA&lt;/option&gt;

&lt;/select&gt;

&lt;input type=submit value=&quot;submit&quot;&gt;

&lt;/form&gt;

&lt;/html&gt;



PHP File-

&lt;?php

echo &quot;You selected subjects are&quot;;

echo &quot;

&quot;;

foreach($_GET[&#39;subjects&#39;] as $s)

{

echo &quot;$s

&quot;;

}

?&gt;

B)

---------------------------------------------------------------------------------------------------------------------------


Slip 16

A) &lt;html&gt;

&lt;body&gt;

&lt;form method=post action=&quot;Sticky.php&quot;&gt;

&lt;fieldset&gt;

&lt;legend&gt;Enter Strings in the text Boxes !&lt;/legend&gt;

&lt;p&gt;&lt;b&gt;First String :&lt;/b&gt;&lt;input type=text name=s1 value=&quot;&lt;?php if(isset($_POST[&#39;s1&#39;])) echo

$_POST[&#39;s1&#39;];?&gt;&quot;&gt;&lt;/p&gt;

&lt;p&gt;&lt;b&gt;Second String :&lt;/b&gt;&lt;input type=text name=s2 value=&quot;&lt;?php if(isset($_POST[&#39;s2&#39;])) echo

$_POST[&#39;s2&#39;];?&gt;&quot;&gt;&lt;/p&gt;

&lt;/fieldset&gt;

&lt;div align=center&gt;

&lt;input type=submit name=submit value=&quot;Match String&quot;&gt;

&lt;/div&gt;

&lt;input type=&quot;hidden&quot; name=&quot;submit&quot; value=true&gt;

&lt;/form&gt;

&lt;?php

if(isset($_POST[&#39;submit&#39;]))

{

            $s1=$_POST[&#39;s1&#39;];

            $s2=$_POST[&#39;s2&#39;];

            if(strcmp($s1,$s2)==0)

            {

                        echo&quot;&lt;br&gt;&lt;b&gt;Matching&lt;/b&gt;&quot;;

            }

            else

            {

                        echo&quot;&lt;br&gt;&lt;b&gt;Not Matching&lt;/b&gt;&quot;;

            }

}

?&gt;

&lt;/body&gt;



&lt;/html&gt;

B)

Html file :

&lt;html&gt;

&lt;head&gt;

&lt;script type=&quot;text/javascript&quot;&gt;

           

            function val_user(str)

            {

                        var ob=false;

                        ob=new XMLHttpRequest();

                                   

                        if(str==&quot;&quot;)

                        document.getElementById(&quot;a&quot;).innerHTML=&quot;Username Should not be

Empty&quot;;                                         else if(str.length&lt;=3)

                                           document.getElementById(&#39;a&#39;).innerHTML=&quot;lenght is too short&quot;;       

                                                else document.getElementById(&#39;a&#39;).innerHTML=&quot;valid username&quot;;

            }

&lt;/script&gt;

&lt;/head&gt;

&lt;body&gt;

&lt;form&gt;

&lt;table align=&quot;center&quot;&gt;

&lt;tr&gt;&lt;td&gt;&lt;b&gt;Enter Username : &lt;/b&gt;&lt;/td&gt;&lt;td&gt;&lt;input type=text name=u_name id=u_name&gt;&lt;/td&gt;&lt;/tr&gt;

&lt;tr&gt;&lt;td&gt;&lt;/td&gt;&lt;td&gt;&lt;font color=&quot;red&quot; size=3&gt;&lt;span id=a&gt;&lt;/span&gt;&lt;/font&gt;&lt;/td&gt;&lt;/tr&gt;

&lt;tr&gt;&lt;th colspan=&quot;2&quot;&gt;&lt;input type=button value=submit

onclick=&quot;val_user(form.u_name.value)&quot;&gt;&lt;/th&gt;&lt;/tr&gt;

&lt;/table&gt;

&lt;/form&gt;

&lt;/body&gt;

&lt;/html&gt;

---------------------------------------------------------------------------------------------------------------------------


Slip 17

A)

&lt;html&gt;

&lt;body&gt;

&lt;table border=&quot;1&quot;&gt;

&lt;tr&gt;

&lt;th&gt;PHP_SELF&lt;/th&gt;

&lt;th&gt;SERVER_NAME&lt;/th&gt;

&lt;th&gt;HTTP_HOST&lt;/th&gt;

&lt;th&gt;SCRIPT_NAME&lt;/th&gt;

&lt;/tr&gt;

&lt;tr&gt;

&lt;?php

echo &quot;&lt;td&gt;&quot; .$_SERVER[&#39;PHP_SELF&#39;] .&quot;&lt;/td&gt;&quot;;



echo &quot;&lt;td&gt;&quot; .$_SERVER[&#39;SERVER_NAME&#39;] .&quot;&lt;/td&gt;&quot;;

echo &quot;&lt;td&gt;&quot; .$_SERVER[&#39;HTTP_HOST&#39;] .&quot;&lt;/td&gt;&quot;;

echo &quot;&lt;td&gt;&quot;.$_SERVER[&#39;SCRIPT_NAME&#39;].&quot;&lt;/td&gt;&quot;;

echo $_SERVER[&#39;HTTP_REFERER&#39;];

echo &quot;&lt;br&gt;&quot;;

echo $_SERVER[&#39;HTTP_USER_AGENT&#39;];

echo &quot;&lt;br&gt;&quot;;

?&gt;

&lt;/tr&gt;

&lt;/table&gt;

&lt;/body&gt;

&lt;/html&gt;



B)

XML file : university.xml

&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;

&lt;?xml-stylesheet type=&quot;text/css&quot; href=&quot;university.css&quot;?&gt;

&lt;Uni&gt;

                &lt;U_info&gt;

                                &lt;Uname&gt;Pune University&lt;/Uname&gt;

                                &lt;City&gt;Pune&lt;/City&gt;

                                &lt;Rank&gt;First&lt;/Rank&gt;

                &lt;/U_info&gt;

                &lt;U_info&gt;

                                &lt;Uname&gt;Mumbai University&lt;/Uname&gt;

                                &lt;City&gt;Mumbai&lt;/City&gt;

                                &lt;Rank&gt;Third&lt;/Rank&gt;

                &lt;/U_info&gt;

                &lt;U_info&gt;

                                &lt;Uname&gt;Latur University&lt;/Uname&gt;

                                &lt;City&gt;Latur&lt;/City&gt;

                                &lt;Rank&gt;Fifth&lt;/Rank&gt;

                &lt;/U_info&gt;

&lt;/Uni&gt;



CSS file : university.css

Uname

{

                color:black;

                font-family: copperplate Gothic Light;

                font-size: 16pt;

                font: bold;

}

City,Rank

{

                color:yellow;



                font-family:arial;

                font-size: 12pt;

                font: bold;

}

PHP file :

&lt;?php

                $xml=simplexml_load_file(&quot;university.xml&quot;) or die(&quot;eror:cannot create object&quot;);

                echo &quot;&lt;table border=1 align=center&gt;&quot;;

                echo &quot;&lt;tr&gt;&lt;td&gt;Univercity Name&lt;/td&gt;&lt;td&gt;City&lt;/td&gt;&lt;td&gt;Rank&lt;/td&gt;&lt;/tr&gt;&quot;;

                foreach($xml-&gt;children() as $uni)

                {

                                echo &quot;&lt;tr&gt;&lt;td&gt;&quot;.$uni-&gt;Uname.&quot;&lt;/td&gt;&quot;;

                                echo &quot;&lt;td&gt;&quot;.$uni-&gt;City.&quot;&lt;/td&gt;&quot;;

                                echo &quot;&lt;td&gt;&quot;.$uni-&gt;Rank.&quot;&lt;/td&gt;&lt;/tr&gt;&quot;;

                }

                echo &quot;&lt;table&gt;&quot;;

?&gt;

---------------------------------------------------------------------------------------------------------------------------


Slip 18

A)

&lt;html&gt;

&lt;head&gt;

&lt;title&gt;Distance Conversion&lt;/title&gt;

&lt;body&gt;

&lt;?php

if($_SERVER[&#39;REQUEST_METHOD&#39;]==&#39;GET&#39;)

{

?&gt;

&lt;form action=&quot;&lt;?php echo$_SERVER[&#39;PHP_SELF&#39;]?&gt;&quot; method=&quot;POST&quot;&gt;

Enter Distance in meter :&lt;input type=text name=t1&gt;&lt;br&gt;

&lt;input type=radio name=r1 value=1&gt;Convert into Centimeter&lt;br&gt;

&lt;input type=radio name=r1 value=2&gt;Convert into Kilometer&lt;br&gt;

&lt;input type=submit value=Convert&gt;&lt;br&gt;

&lt;/form&gt;



&lt;?php

}

else if($_SERVER[&#39;REQUEST_METHOD&#39;]==&#39;POST&#39;)

{

$dist=$_POST[&#39;t1&#39;];

$op=$_POST[&#39;r1&#39;];

switch($op)

{

case 1:

echo &quot;Conversion from meter to centimeter is :&quot;;

$cm=$dist*100;

echo &quot;$cm cm&quot;;

break;

case 2:

echo &quot;Conversion from meter to Kilometer is :&quot;;

$km=$dist/1000;

echo &quot;$km km&quot;;

break;



}

}

?&gt;

&lt;/body&gt;

&lt;/html&gt;

B)

XML file :

&lt;? Xml version=’1.0’encoding=’’ISO-8859-1’?&gt;

&lt;Book Store&gt;

&lt;Books&gt;



&lt;PHP&gt;

&lt;Title&gt; Programming in PHP &lt;/ Title&gt;

&lt;Publication&gt;O’RELLY&lt;Publication&gt;

&lt;/PHP&gt;

&lt;PHP&gt;

&lt;Title&gt; Beginners PHP&lt;/ Title&gt;

&lt;Publication&gt; WORX&lt;/Publication&gt;

&lt;/PHP&gt;&lt;/Books&gt;

&lt;/Book Store&gt;

HTML file :

&lt;!DOCTYPE html&gt;

&lt;html&gt;

&lt;head&gt;

&lt;title&gt;Book Store&lt;/title&gt;

&lt;/head&gt;

&lt;body&gt;

&lt;form action=&quot;slip7_Q2.php&quot; method=&quot;get&quot;&gt;

&lt;table&gt;

&lt;tr&gt;&lt;td&gt;&lt;label&gt; Enter 1st Book title Name : &lt;/label&gt;&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;title_1&quot;

id=&quot;title_1&quot;&gt;&lt;/td&gt;&lt;/tr&gt;

&lt;tr&gt;&lt;td&gt;&lt;label&gt; Enter 1st Book Publication Name : &lt;/label&gt;&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;text&quot;

name=&quot;pub_1&quot; id=&quot;pub_1&quot;&gt;&lt;/td&gt;&lt;/tr&gt;

&lt;tr&gt;&lt;td&gt;&lt;label&gt; Enter 2st Book title Name : &lt;/label&gt;&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;title_2&quot;

id=&quot;title_2&quot;&gt;&lt;/td&gt;&lt;/tr&gt;

&lt;tr&gt;&lt;td&gt;&lt;label&gt; Enter 1st Book Publication Name : &lt;/label&gt;&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;text&quot;

name=&quot;pub_2&quot; id=&quot;pub_2&quot;&gt;&lt;/td&gt;&lt;/tr&gt;

&lt;tr&gt;&lt;th colspan=&quot;2&quot;&gt;&lt;input id=&quot;ok&quot; type=&quot;submit&quot; value=&quot;OK&quot; name=&quot;ok&quot;&gt;&lt;/th&gt;&lt;/tr&gt;

&lt;/table&gt;

&lt;/form&gt;

&lt;/body&gt;

&lt;/html&gt;

PHP file :

&lt;?php

                $title_1 = $_GET[&#39;title_1&#39;];

                $pub_1 = $_GET[&#39;pub_1&#39;];

                $title_2 = $_GET[&#39;title_2&#39;];

                $pub_2 = $_GET[&#39;pub_2&#39;];

             

                $xml = &quot;&lt;?xml version=&#39;1.0&#39; encoding =&#39;ISO-8859-1&#39; ?&gt;&quot;;

                $xml = $xml.&quot;&lt;BookStore&gt;&quot;;

                $xml = $xml.&quot;&lt;Books&gt;&quot;;

                                $xml = $xml.&quot;&lt;PHP&gt;&quot;;

                                $xml = $xml.&quot;&lt;Title&gt;&quot;;

                                $xml = $xml.&quot;$title_1&quot;;

                                $xml = $xml.&quot;&lt;/Title&gt;&quot;;

                                $xml = $xml.&quot;&lt;Publication&gt;&quot;;

                                $xml = $xml.&quot;$pub_1&quot;;

                                $xml = $xml.&quot;&lt;/Publication&gt;&quot;;



                $xml = $xml.&quot;&lt;/PHP&gt;&quot;;

                $xml = $xml.&quot;&lt;PHP&gt;&quot;;

                                $xml = $xml.&quot;&lt;Title&gt;&quot;;

                                $xml = $xml.&quot;$title_2&quot;;

                                $xml = $xml.&quot;&lt;/Title&gt;&quot;;

                                $xml = $xml.&quot;&lt;Publication&gt;&quot;;

                                $xml = $xml.&quot;$pub_2&quot;;

                                $xml = $xml.&quot;&lt;/Publication&gt;&quot;;

                $xml = $xml.&quot;&lt;/PHP&gt;&quot;;

                $xml = $xml.&quot;&lt;/Books&gt;&quot;;

                $xml = $xml.&quot;&lt;/BookStore&gt;&quot;;

             

                if($fp = fopen(&quot;bookstore.xml&quot;,&quot;a+&quot;))

                {

                                if($wt = fwrite($fp,$xml))

                                {

                                                header(&quot;location:bookstore.xml&quot;);

                                }

                                else &quot;file not created...&quot;;

                }

                else echo &quot;file not open....&quot;;

             

?&gt;

---------------------------------------------------------------------------------------------------------------------------


Slip 20

A)

?php

$doc=new DOMDocument(&quot;1.0&quot;,&quot;UTF-8&quot;);



$xmlfile=&quot;movie.xml&quot;;

$root=$doc-&gt;createElement(&quot;Mayanagari_CD_Store&quot;);



$classical=$doc-&gt;createElement(&quot;Classical&quot;);

$mn=$doc-&gt;createElement(&quot;Movie_Name&quot;,&quot;North_by_Northwest&quot;);

$classical-&gt;appendChild($mn);



$re=$doc-&gt;createElement(&quot;Release_Year&quot;,1959);



$classical-&gt;appendChild($re);



$action=$doc-&gt;createElement(&quot;Action&quot;);

$mn=$doc-&gt;createElement(&quot;Movie_Name&quot;,&quot;Miss_Bala&quot;);

$action-&gt;appendChild($mn);



$re=$doc-&gt;createElement(&quot;Release_Year&quot;,2019);

$action-&gt;appendChild($re);



$horror=$doc-&gt;createElement(&quot;Horror&quot;);

$mn=$doc-&gt;createElement(&quot;Movie_Name&quot;,&quot;Thriller&quot;);

$horror-&gt;appendChild($mn);



$re=$doc-&gt;createElement(&quot;Release_Year&quot;,2019);

$horror-&gt;appendChild($re);



$root-&gt;appendChild($classical);

$root-&gt;appendChild($action);

$root-&gt;appendChild($horror);

$doc-&gt;appendChild($root);

$doc-&gt;save(&quot;movie.xml&quot;);

echo &#39;&lt;a href=&quot;movie.xml&quot;&gt;Click Here &lt;/a&gt;&#39;;

?&gt;



B)

Fac12.html

&lt;html&gt;



&lt;body&gt;

&lt;form action=”fac12.php” method=”GET”&gt;

&lt;center&gt; &lt;br&gt;&lt;h1&gt;please enter number and select option&lt;/h1&gt;

&lt;br&gt;enter number:&lt;input type=”number” name=”num”&lt;br&gt;&lt;br&gt;

&lt;table&gt;

&lt;tr&gt;&lt;td&gt;&lt;input type=”radio” name=”op” value=”1”&gt;1.Find factorial&lt;/td&gt;&lt;/tr&gt;

&lt;tr&gt;&lt;td&gt;&lt;input type=”radio” name=”op” value=”2”&gt;2.sum of digits&lt;/td&gt;&lt;/tr&gt;

&lt;/tr&gt;

&lt;/table&gt;

&lt;br&gt;&lt;input type=”submit” name=”submit” value=”submit”&gt;&lt;input type=”reset” name=”reset”

value=”reset”&gt;

&lt;/center&gt;&lt;/form&gt;&lt;/body&gt;&lt;/html&gt;



Facc12.php

&lt;?php

Echo “&lt;center&gt;&lt;h3&gt;&lt;br&gt;&lt;br&gt;”;

Function Factorial($num)

{

If($num==0 ||$num==1)

Return 1;

Return $num*Factorial($num-1);

}

Function sumofdigits($num)

{

$sum=0;

While($num&gt;0)

{

While($num!=0)

{

$sum+=$num%10;

$num=$num/10;

}

If($sum&gt;9)



{

$num=$sum;

$sum=0;

}

}

Return $sum;

}

For($i=2;$i&lt;$num;$i++)

{

If($i%2==0)

Echo “$i&lt;br&gt;”;

}

}

If(isseet($_GET[‘op’]))

{

$op=$_GET[‘op’];

If(isset($_GET[‘num’]))

{

$num=$_GET[‘num’];

Switch($op)

{

Case 1:

$res=Factorial($num);

Echo”Factorial of $num is $res”;

Break;



Case 2:

$res=sumofdigits($num);

Echo”sum of digits of $num is $res”;

Break;

}

}



Else echo”&lt;h1&gt;please enter number&lt;/h1&gt;”;

}

Else

Echo”please select choice”;

Echo”&lt;/h3&gt;&lt;/center&gt;”;

?&gt;

---------------------------------------------------------------------------------------------------------------------------


Slip 21

A)

&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;

&lt;course&gt;

&lt;computerscience&gt;

&lt;studentname&gt;samir Thorat &lt;/studentname&gt;

&lt;classname&gt;TYBCA. &lt;/classname&gt;

&lt;percentage&gt;60 &lt;/percennatage&gt;

&lt;/computerscience&gt;

&lt;computerscience&gt;

&lt;studentname&gt;sunil kamble &lt;/studentname&gt;

&lt;classname&gt;TYBCA. &lt;/classname&gt;

&lt;percentage&gt;55 &lt;/percennatage&gt;

&lt;/computerscience&gt;

&lt;computerscience&gt;

&lt;studentname&gt;anil kamble &lt;/studentname&gt;

&lt;classname&gt;TYBCA. &lt;/classname&gt;

&lt;percentage&gt;60 &lt;/percennatage&gt;

&lt;/computerscience&gt;

&lt;computerscience&gt;

&lt;studentname&gt;asha kamble &lt;/studentname&gt;

&lt;classname&gt;TYBCA. &lt;/classname&gt;

&lt;percentage&gt;65 &lt;/percennatage&gt;

&lt;/computerscience&gt;

&lt;computerscience&gt;

&lt;studentname&gt;madhuri &lt;/studentname&gt;

&lt;classname&gt;TYBCA. &lt;/classname&gt;

&lt;percentage&gt;70 &lt;/percennatage&gt;

&lt;/computerscience&gt;

&lt;/course&gt;



B)

---------------------------------------------------------------------------------------------------------------------------


Slip 23

A)

XML file -

&lt;?xml version=&#39;1.0&#39; encoding =&#39;UTF-8&#39; ?&gt;

&lt;bookstore&gt;

&lt;books category=&quot;technical&quot;&gt;

&lt;book_no&gt;1&lt;/book_no&gt;

&lt;book_name&gt;def&lt;/book_name&gt;

&lt;author_name&gt;xxx&lt;/author_name&gt;

&lt;price&gt;100&lt;/price&gt;

&lt;year&gt;1990&lt;/year&gt;

&lt;/books&gt;

&lt;books category=&quot;Cooking&quot;&gt;

&lt;book_no&gt;2&lt;/book_no&gt;

&lt;book_name&gt;ccc&lt;/book_name&gt;

&lt;author_name&gt;aaa&lt;/author_name&gt;

&lt;price&gt;200&lt;/price&gt;

&lt;year&gt;1950&lt;/year&gt;

&lt;/books&gt;

&lt;books category=&quot;YOGA&quot;&gt;

&lt;book_no&gt;3

&lt;book_name&gt;ddd&lt;/book_name&gt;

&lt;author_name&gt;zzz&lt;/author_name&gt;

&lt;price&gt;150&lt;/price&gt;

&lt;year&gt;2016&lt;year&gt;

&lt;/books&gt;

&lt;/bookstore&gt;



Php file -

&lt;?php

$xml=simplexml_load_file(&quot;slip_24.xml&quot;) or die(&quot;eror:cannot create object&quot;);

var_dump($xml);

?&gt;

B)

&lt;html&gt;

&lt;script type=&quot;text/javascript&quot;&gt;

function display()

{

                     

            ob = new XMLHttpRequest();

           

            var a = document.getElementById(&quot;a&quot;).value;

            ob.open(&quot;GET&quot;,&quot;slip25_2.php?a=&quot;+a);

            ob.send();



            ob.onreadystatechange = function()

            {         

if(ob.readyState == 4 &amp;&amp; ob.status == 200)

                        document.getElementById(&quot;i&quot;).innerHTML = ob.responseText;

            }

}

&lt;/script&gt;



&lt;body&gt;

Enter Actor Name :&lt;input type=text name=a id=a&gt;&lt;br&gt;

&lt;input type=submit value=&quot;DISPLAY MOVIE NAME&quot; onclick=display()&gt;&lt;br&gt;

&lt;span id=i&gt;&lt;/span&gt;

&lt;/body&gt;

&lt;/html&gt;

PHP file :

&lt;?php

$con_string = &quot;host=localhost dbname=bcs_slips port=5432  user=postgres password=nrc&quot;;

$con = pg_connect($con_string);

$a = $_GET[&#39;a&#39;];

echo $a;

echo &quot;&lt;/br&gt;&quot;;

$q = &quot;select movie.mno,mname,r_yr from movie,actor where aname=&#39;$a&#39; and movie.mno =

actor.mno;&quot;;

$rs = pg_query($con,$q) or die(&quot;Cannot Execute query&quot;);

while($row = pg_fetch_row($rs))

echo &quot;$row[0] $row[1] $row[2]\n&lt;/br&gt;&quot;;

pg_close();

?&gt;

---------------------------------------------------------------------------------------------------------------------------


Slip 25

A)

&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;

&lt;Vehicle&gt;

&lt;Type = Two Wheeler&gt;

&lt;Vehicler Name &gt;honda &lt;/Vehicle Name &gt;

&lt;Company&gt;hero &lt;/Company&gt;

&lt;Color&gt;black &lt;/Color&gt;

&lt;Average&gt;60 Kmpl &lt;/Average&gt;

&lt;/Type&gt;



&lt;Type = Three Wheeler&gt;

&lt;Vehicler Name &gt;Auto rickshaws &lt;/Vehicle Name &gt;

&lt;Company&gt;Bajaj Autorickshaw &lt;/Company&gt;

&lt;Color&gt;yellow &lt;/Color&gt;

&lt;Average&gt;50kmpl &lt;/Average&gt;

&lt;/Type&gt;

&lt;Type = four Wheeler&gt;

&lt;Vehicler Name &gt;maruti &lt;/Vehicle Name &gt;

&lt;Company&gt;tata &lt;/Company&gt;

&lt;Color&gt;white &lt;/Color&gt;

&lt;Average&gt;60kmpl&lt;/Average&gt;

&lt;/Type&gt;

&lt;/Vehicle&gt;



B)

Html file :-

slip_18.html-

&lt;html&gt;

&lt;body&gt;

&lt;form action=&quot;slip_18.php&quot; method=&quot;get&quot;&gt;

&lt;center&gt; &lt;h2&gt; Enployee Details :&lt;/h2&gt;

&lt;table&gt;

&lt;tr&gt; &lt;td&gt;&lt;input type=radio name=r value=&quot;1&quot;&gt;&lt;/td&gt; &lt;td&gt;&lt;b&gt;Create Employee Table:&lt;/b&gt;&lt;/td&gt;

&lt;/tr&gt;

&lt;tr&gt; &lt;td&gt;&lt;input type=radio name=r value=&quot;2&quot;&gt;&lt;/td&gt; &lt;td&gt;&lt;b&gt; Read/Insert Values :&lt;/b&gt;&lt;/td&gt; &lt;/tr&gt;

&lt;tr&gt; &lt;td&gt;&lt;input type=radio name=r value=&quot;3&quot;&gt;&lt;/td&gt; &lt;td&gt;&lt;b&gt;Update Values :&lt;/b&gt;&lt;/td&gt; &lt;/tr&gt;

&lt;tr&gt; &lt;td&gt;&lt;input type=radio name=r value=&quot;4&quot;&gt;&lt;/td&gt; &lt;td&gt;&lt;b&gt;Display :&lt;/b&gt;&lt;/td&gt; &lt;/tr&gt;

&lt;/table&gt;

&lt;br&gt; &lt;input type=submit value=Submit name=submit&gt;

&lt;/center&gt;

&lt;/form&gt;

&lt;/body&gt;

&lt;/html&gt;

Php file :

slip_18.php-

&lt;?php

$r=$_GET[&#39;r&#39;];

$con = mysql_connect(&quot;localhost&quot;,&quot;root&quot;,&quot;&quot;);

$d = mysql_select_db(&quot;bca_programs&quot;,$con);

if($r==1)

{

$q=mysql_query(&quot;create table emp_slip_18(empno int,ename varchar(10),date_of_join date,salary

int,address varchar(20))&quot;);

echo &quot;&lt;center&gt;&lt;b&gt;&lt;h2&gt; Table Created Successfully.....!!!&lt;/h2&gt;&lt;b&gt;&lt;/center&gt;&quot;;

}

else if($r==2)



{

header(&quot;location:slip_18_insert.html&quot;);

} /*$q2=mysql_query(&quot;insert into emp_slip_18 values($a_no,&#39;$a_name&#39;,&#39;$d_join&#39;,$a_sal,&#39;$a_add&#39;)&quot;);

echo &quot;&lt;center&gt;&lt;b&gt;&lt;h2&gt; Values Inserted Successfully.....!!!&lt;/h2&gt;&lt;b&gt;&lt;/center&gt;&quot;;

*/

else if($r==3)

{

header(&quot;location:slip_18update.html&quot;);

}

else if($r==4)

{ $q4=mysql_query(&quot;select *from emp_slip_18&quot;);

echo &quot;&lt;center&gt;&quot;;

echo &quot;&lt;table border=1 width=30% height=20%&gt;&quot;;

echo &quot;&lt;h2&gt;&lt;tr&gt;&lt;td&gt;&lt;b&gt; Emp No &lt;/b&gt;&lt;/td&gt;&lt;td&gt; &lt;b&gt;Employee Name&lt;b&gt; &lt;/td&gt;&lt;td&gt; &lt;b&gt;Date Of

Joining &lt;b&gt;&lt;/td&gt;&lt;td&gt; &lt;b&gt;Salary &lt;b&gt;&lt;/td&gt;&lt;td&gt; &lt;b&gt;Address&lt;b&gt; &lt;/td&gt;&lt;/tr&gt;&lt;/h2&gt;&quot;;

while($row=mysql_fetch_array($q4))

{

echo

&quot;&lt;tr&gt;&lt;td&gt;&quot;.$row[0].&quot;&lt;/td&gt;&lt;td&gt;&quot;.$row[1].&quot;&lt;/td&gt;&lt;td&gt;&quot;.$row[2].&quot;&lt;/td&gt;&lt;td&gt;&quot;.$row[3].&quot;&lt;/td&gt;&lt;td&gt;&quot;.$ro

w[4].&quot;&lt;/td&gt;&lt;/tr&gt;&quot;;

}

echo &quot;&lt;/table&gt;&quot;;

echo &quot;&lt;/center&gt;&quot;;

}

?&gt;

slip_18_insert.html-

&lt;html&gt;

&lt;body&gt;

&lt;form action=&quot;slip_18_insert.php&quot; method=&quot;get&quot;&gt;

&lt;center&gt; &lt;h2&gt;Enter Enployee Details :&lt;/h2&gt;

&lt;table&gt;

&lt;tr&gt; &lt;td&gt;Enter Employee no :&lt;/td&gt;&lt;td&gt;&lt;input type=text name=a_no&gt; &lt;/td&gt; &lt;/tr&gt;

&lt;tr&gt; &lt;td&gt;Enter Employee name :&lt;/td&gt;&lt;td&gt;&lt;input type=text name=a_name&gt;&lt;/td&gt; &lt;/tr&gt;

&lt;tr&gt; &lt;td&gt;Enter Date Of Join :&lt;/td&gt;&lt;td&gt;&lt;input type=text name=d_join&gt;&lt;/td&gt; &lt;/tr&gt;

&lt;tr&gt;&lt;td&gt;Enter Salary :&lt;/td&gt;&lt;td&gt;&lt;input type=text name=a_sal&gt;&lt;/td&gt; &lt;/tr&gt;

&lt;tr&gt; &lt;td&gt;Enter Address :&lt;/td&gt;&lt;td&gt;&lt;input type=text name=a_add&gt;&lt;/td&gt; &lt;/tr&gt;

&lt;tr&gt;&lt;td&gt;&lt;input type=submit value=Show name=submit&gt;&lt;/td&gt; &lt;/tr&gt;

&lt;/table&gt;

&lt;/center&gt;

&lt;/form&gt;

&lt;/body&gt;

&lt;/html&gt;

slip_18_insert.php-

&lt;?php

$a_no=$_GET[&#39;a_no&#39;];

$a_name=$_GET[&#39;a_name&#39;];

$d_join=$_GET[&#39;d_join&#39;];

$a_sal=$_GET[&#39;a_sal&#39;];

$a_add=$_GET[&#39;a_add&#39;];



$con = mysql_connect(&quot;localhost&quot;,&quot;root&quot;,&quot;&quot;);

$d = mysql_select_db(&quot;bca_programs&quot;,$con);

$q2=mysql_query(&quot;insert into emp_slip_18 values($a_no,&#39;$a_name&#39;,&#39;$d_join&#39;,$a_sal,&#39;$a_add&#39;)&quot;);

echo &quot;&lt;center&gt;&lt;b&gt;&lt;h2&gt; Values Inserted Successfully.....!!!&lt;/h2&gt;&lt;b&gt;&lt;/center&gt;&quot;;

?&gt;

slip_18_update.html-

&lt;?php

$edit=$_GET[&#39;edit&#39;];

$c=mysql_connect(&quot;localhost&quot;,&quot;root&quot;,&quot;&quot;);

$d=mysql_select_db(&quot;bca_programs&quot;,$c);

$q=mysql_query(&quot;select * from emp_slip_18&quot;);

$row=mysql_fetch_array($q);

?&gt;

&lt;html&gt;

&lt;body&gt;

&lt;form action=&quot;slip_18_update.php&quot; method=&quot;get&quot;&gt;

&lt;center&gt; &lt;h2&gt;Update Enployee Details :&lt;/h2&gt;

&lt;table&gt;

&lt;tr&gt; &lt;td&gt; Employee no :&lt;/td&gt;&lt;td&gt;&lt;input type=text name=a_no value=&quot;&lt;?php echo $row[0];?&gt;&quot;&gt;

&lt;/td&gt; &lt;/tr&gt;

&lt;tr&gt; &lt;td&gt; Employee name :&lt;/td&gt;&lt;td&gt;&lt;input type=text name=a_name value=&quot;&lt;?php echo

$row[1];?&gt;&quot;&gt;&lt;/td&gt; &lt;/tr&gt;

&lt;tr&gt; &lt;td&gt; Date Of Join :&lt;/td&gt;&lt;td&gt;&lt;input type=text name=d_join value=&quot;&lt;?php echo

$row[2];?&gt;&quot;&gt;&lt;/td&gt; &lt;/tr&gt;

&lt;tr&gt; &lt;td&gt; Salary :&lt;/td&gt;&lt;td&gt;&lt;input type=text name=a_sal value=&quot;&lt;?php echo $row[3];?&gt;&quot;&gt;&lt;/td&gt;

&lt;/tr&gt;

&lt;tr&gt;&lt;td&gt; Address :&lt;/td&gt;&lt;td&gt;&lt;input type=text name=a_add value=&quot;&lt;?php echo $row[4];?&gt;&quot;&gt;&lt;/td&gt;

&lt;/tr&gt;

&lt;tr&gt;&lt;td&gt;&lt;input type=submit value=Show name=submit&gt;&lt;/td&gt; &lt;/tr&gt;

&lt;/table&gt;

&lt;/center&gt;

&lt;/form&gt;

&lt;/body&gt;

&lt;/html&gt;

slip_18_update1.php-

&lt;?php

$a_no=$_GET[&#39;a_no&#39;];

$a_name=$_GET[&#39;a_name&#39;];

$d_join=$_GET[&#39;d_join&#39;];

$a_sal=$_GET[&#39;a_sal&#39;];

$a_add=$_GET[&#39;a_add&#39;];

$con = mysql_connect(&quot;localhost&quot;,&quot;root&quot;,&quot;&quot;);

$d = mysql_select_db(&quot;bca_programs&quot;,$con);

$r=mysql_query(&quot;update emp_slip_18 set

empno=$a_no,ename=&#39;$a_name&#39;,date_of_join=&#39;$d_join&#39;,salary=&#39;$a_sal&#39;,address=&#39;$a_add&#39; where

empno=$a_no&quot;);

?&gt;

---------------------------------------------------------------------------------------------------------------------------


Slip 27

A)

&lt;html&gt;

&lt;head&gt;

   &lt;script language=&quot;javascript&quot; src=&quot;ajax.js&quot;&gt;

   &lt;/script&gt;

&lt;/head&gt;

&lt;body&gt;

&lt;div id=&quot;txt&quot; name=&quot;txt&quot;&gt;&lt;/div&gt;

   &lt;form action=&quot;javascript:add(document.getElementById(&#39;frm&#39;));&quot; name=&quot;frm&quot; id=&quot;frm&quot;&gt;

  &lt;table&gt;

   &lt;tr&gt;

     &lt;td&gt;Enter first number : &lt;/td&gt;

     &lt;td&gt;&lt;input type=&quot;text&quot; id=&quot;num1&quot;&gt;&lt;/td&gt;

     &lt;/tr&gt;

         &lt;tr&gt;

       &lt;td colspan=&quot;2&quot;&gt;&lt;input type=&quot;submit&quot; name=&quot;button&quot; value=&quot;show&quot;&gt;&lt;/td&gt;

     &lt;/tr&gt;

&lt;/table&gt;

&lt;/form&gt;

&lt;/body&gt;

&lt;/html&gt;

ajax.js

function add(obj)

{

   var XMLHttpRequestObject=false;

   if(window.XMLHttpRequest)

   {

     XMLHttpRequestObject=new XMLHttpRequest();

    }

   else if(window.ActiveXObject)

    {

      XMLHttpRequestObject=new ActiveXObject(&quot;Microsoft.XMLHTTP&quot;);

    }

   var str1=&quot;num1=&quot;+document.getElementById(&quot;num1&quot;).value;

   var str2=&quot;&amp;num2=&quot;+document.getElementById(&quot;num2&quot;).value;

   XMLHttpRequestObject.onreadystatechange=show;

  XMLHttpRequestObject.open(&#39;POST&#39;,&#39;value.php&#39;,true);

  XMLHttpRequestObject.setRequestHeader(&quot;Content-type&quot;,&quot;application/x-www-form-urlencoded&quot;);

  XMLHttpRequestObject.send(str1+str2);

  function show()

  {

    if(XMLHttpRequestObject.readyState==4)

    {

     if(XMLHttpRequestObject.status==200)

     {

       result=XMLHttpRequestObject.responseText;

       document.getElementById(&#39;txt&#39;).innerHTML=result;

     }

   }

  }



}

&lt;?php

$num = 7;

$factorial = 1;

for ($x=$num; $x&gt;=1; $x--)

{

$factorial = $factorial * $x;

}

echo &quot;Factorial of $num is $factorial&quot;;

?&gt;



B)

&lt;?xml version=&#39;1.0&#39; encoding =&#39;UTF-8&#39; ?&gt;

&lt;?xml-stylesheet type=&quot;text/css&quot;?&gt;

&lt;bookstore&gt;

                &lt;books category=&quot;technical&quot;&gt;

                                &lt;book_no&gt;1&lt;/book_no&gt;

                                &lt;book_name&gt;def&lt;/book_name&gt;

                                &lt;author_name&gt;xxx&lt;/author_name&gt;

                                &lt;price&gt;100&lt;/price&gt;

                                &lt;year&gt;1990&lt;/year&gt;

                &lt;/books&gt;

                &lt;books category=&quot;Cooking&quot;&gt;

                                &lt;book_no&gt;2&lt;/book_no&gt;

                                &lt;book_name&gt;ccc&lt;/book_name&gt;

                                &lt;author_name&gt;aaa&lt;/author_name&gt;

                                &lt;price&gt;200&lt;/price&gt;

                                &lt;year&gt;1950&lt;/year&gt;

                &lt;/books&gt;

                &lt;books category=&quot;YOGA&quot;&gt;

                                &lt;book_no&gt;3&lt;/book_no&gt;

                                &lt;book_name&gt;ddd&lt;/book_name&gt;

                                &lt;author_name&gt;zzz&lt;/author_name&gt;

                                &lt;price&gt;150&lt;/price&gt;

                                &lt;year&gt;2016&lt;/year&gt;

                &lt;/books&gt;

                &lt;books category=&quot;technical&quot;&gt;

                                &lt;book_no&gt;1&lt;/book_no&gt;

                                &lt;book_name&gt;def&lt;/book_name&gt;

                                &lt;author_name&gt;xxx&lt;/author_name&gt;

                                &lt;price&gt;100&lt;/price&gt;

                                &lt;year&gt;1990&lt;/year&gt;

                &lt;/books&gt;

                &lt;books category=&quot;technical&quot;&gt;

                                &lt;book_no&gt;1&lt;/book_no&gt;

                                &lt;book_name&gt;def&lt;/book_name&gt;

                                &lt;author_name&gt;xxx&lt;/author_name&gt;



                                &lt;price&gt;100&lt;/price&gt;

                                &lt;year&gt;1990&lt;/year&gt;

                &lt;/books&gt;

&lt;/bookstore&gt;

PHP file :

&lt;?php

                $doc=new DOMDocument();

                $doc-&gt;load(&quot;book.xml&quot;);

                $name=$doc-&gt;getElementsByTagName(&quot;book_name&quot;);

                $year=$doc-&gt;getElementsByTagName(&quot;year&quot;);

                echo &quot;Books Names&quot;;

                foreach($name as $val)

                {

                                echo &quot;&lt;br&gt;&quot;.$val-&gt;textContent;

                }

                echo &quot;&lt;br&gt;&lt;br&gt; Year&quot;;

                foreach($year as $value)

                {

                                echo &quot;&lt;br&gt;&quot;.$value-&gt;textContent;

                }

?&gt;

---------------------------------------------------------------------------------------------------------------------------


Slip 29

Q2 A)

html-

&lt;html&gt;

&lt;head&gt;

&lt;title&gt;Slip13.html&lt;/title&gt;

&lt;script&gt;

function search()

{

srch=document.getElementById(&#39;txtsrch&#39;).value;

ob=new XMLHttpRequest();

ob.onreadystatechange=function()

{

if(ob.readyState==4 &amp;&amp; ob.status==200)

{

document.getElementById(&#39;o&#39;).innerHTML=ob.responseText;

}

}

ob.open(&quot;GET&quot;,&quot;slip13.php?s=&quot;+srch);

ob.send();

}

&lt;/script&gt;

&lt;/head&gt;

&lt;body&gt;



&lt;table align=center border=0 style=&quot;margin-top:20%&quot;&gt;

&lt;tr&gt;&lt;td width=&quot;90px;&quot;&gt;&lt;input type=text id=txtsrch placeholder=&quot;enter search string&quot;

onkeyup=&quot;search()&quot;&gt; &lt;/td&gt;

&lt;tr&gt;&lt;td&gt;&lt;span id=o&gt;&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;

&lt;/table&gt;

&lt;/body&gt;

&lt;/html&gt;

slip13.php-

&lt;?php

$search=$_GET[&#39;s&#39;];

$con=mysql_connect(&quot;localhost&quot;,&quot;root&quot;,&quot;&quot;);

$d=mysql_select_db(&quot;bca_programs&quot;,$con);

$r=mysql_query(&quot;select * from hin where wo LIKE &#39;$search%&#39;&quot;);

while($row=mysql_fetch_array($r))

{

echo &quot;&lt;h1&gt;&quot;.$row[0].&quot;&lt;/h1&gt;&quot; ;

}

?&gt;



B)

&lt;?php

class vehicle

{

public $company,$price;

public function __construct($a,$b)

{

$this-&gt;company=$a;

$this-&gt;price=$b;

}

}

class Lightmotorvehicle extends vehicle

{

public $milege;

public function __construct($a,$b,$c)

{

$this-&gt;company=$a;

$this-&gt;price=$b;

$this-&gt;milege=$c;

}

public function display()

{

echo &quot;&lt;table border=1 width=300&gt;&lt;tr&gt;&lt;td&gt;&quot;.$this-&gt;company.&quot;&lt;/td&gt;&lt;td&gt;&quot;.$this-

&gt;price.&quot;&lt;/td&gt;&lt;td&gt;&quot;.$this-&gt;milege.&quot;&lt;/td&gt;&lt;/tr&gt;&quot;;

}

}

class Heavymotorvehicle extends vehicle

{

public $capacity;

public function __construct($a,$b,$c)

{



$this-&gt;company=$a;

$this-&gt;price=$b;

$this-&gt;capacity=$c;

}

public function display()

{

echo &quot;&lt;table border=1 width=300&gt;&quot;;

echo &quot;&lt;tr&gt;&lt;td&gt;&quot;.$this-&gt;company.&quot;&lt;/td&gt;&lt;td&gt;&quot;.$this-&gt;price.&quot;&lt;/td&gt;&lt;td&gt;&quot;.$this-&gt;capacity;

echo &quot;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&quot;;

}

}

$ob1=new Lightmotorvehicle(&quot;Maruti&quot;,200000,25);

$ob1-&gt;display();

$ob2=new Lightmotorvehicle(&quot;Toyota&quot;,500000,20);

$ob2-&gt;display();

$ob3=new Lightmotorvehicle(&quot;skoda&quot;,400000,15);

$ob3-&gt;display();

$ob4=new Heavymotorvehicle(&quot;Tata Truck&quot;,1220000,25);

$ob4-&gt;display();

$ob5=new Heavymotorvehicle(&quot;Bajaj&quot;,200000,25);

$ob5-&gt;display();

$ob6=new Heavymotorvehicle(&quot;mahindra&quot;,900000,25);

$ob6-&gt;display();

?&gt;

---------------------------------------------------------------------------------------------------------------------------



Comments

Popular posts from this blog
Python Java Slips- BCA Practical Slip Solution (3rd year)
- February 22, 2023
Here are the solved slips of Java and Python you will get all of the solutions in below link  All are put their and you can easily download the rest for your studies purpose Solution for mention above
READ MORE
Dotnet and Advance Java Slip Solution
- April 30, 2023
 https://team-analytics.blogspot.com/p/advance-java.html?m=1
READ MORE
 Powered by Blogger
My photo
FAIZ SHAIKH
VISIT PROFILE
Archive
Report Abuse