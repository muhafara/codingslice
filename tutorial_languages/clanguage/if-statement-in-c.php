<div class="data_colour">
<h1 align="center">
<b>If statement in C</b>
</h1></div>
<p>The "if statement" is a major part of programming languages allows a program to enter or select an action based upon condition. "if" is a reserved keyword in c and it is used to make decisions in a program using simple comparison. Simply, the syntax of "if statement" is as follow.</p>
<img src="\images\imagesix.png" class="img-responsive" alt="Cinque Terre">
<p>
Inside if parenthesis there is a sort of condition. It could be an arithmetic operation for example addition, subtraction, multiplication or division of a number; it could be a simple comparison of a number, for example, a number 1 is greater than number 2. 
The body of "if statement" start and end with curly brackets "{ }" and it will be executed if a condition will satisfy the specific criteria.
</p>
<h4><b><u>How to create a simple program using if statement</h4></u></b>
<p>
<b>
<pre class="prettyprint">
<div align="center">
<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%"> 1
 2
 3
 4
 5
 6
 7
 8
 9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : ifstatement.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to create a simple program using if statement</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>

<span style="color: #888888">//This program checks whether a student is pass or fail by taking simple input from the user.</span>
<span style="color: #888888">/*If the number is less than 50,</span>
<span style="color: #888888">*it means the student has failed the test</span>
<span style="color: #888888">*if the number is greater than 50,</span>
<span style="color: #888888">*it means the student has passed the test.</span>
<span style="color: #888888">*/</span>
<span style="color: #333399; font-weight: bold">int</span> result;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	printf(<span style="background-color: #fff0f0">&quot;Enter the number&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, <span style="color: #333333">&amp;</span>result);
	<span style="color: #008800; font-weight: bold">if</span>(result<span style="color: #333333">&gt;=</span><span style="color: #0000DD; font-weight: bold">50</span>){
		printf(<span style="background-color: #fff0f0">&quot;Congratulation, You have pass the test&quot;</span>);
	}
	<span style="color: #008800; font-weight: bold">if</span>(result<span style="color: #333333">&lt;</span><span style="color: #0000DD; font-weight: bold">50</span>){
		printf(<span style="background-color: #fff0f0">&quot;Sorry, You have failed the test&quot;</span>);
	}
}
</pre></td></tr></table></div>

</div>
</pre>


<h1>Output</h1>
<pre class="prettyprint">
Enter the number41
Sorry, You have failed the test
</pre>
</b>
</p>

<div class="data_colour">
<h1 align="center">
<b>if else statement in C</b>
</h1></div>
<p>In programming languages, exceptions happen, C provides many ways to deals with these exception based on multiple possibilities. One of the various exceptions is handle in C by the if-else statement. The syntax of the if-else statement is as follows.</p>
<img src="\images\imageseven.png" class="img-responsive" alt="Cinque Terre">
<p>Inside "if parenthesis ()" there is some condition, for example, arithmetic operation or simple comparison of number. If the condition inside "if parenthesis ()" is evaluated, then the statement inside the body of if is executed. If condition inside if parenthesis () doesn't satisfy the requirement, then the statement inside else body has to be executed.</p>
<h4><b><u>How to create a simple program using if-else statement</h4></u></b>
<pre class="prettyprint">
<div align="center">
<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%"> 1
 2
 3
 4
 5
 6
 7
 8
 9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : ifelsestatement.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to create a simple program using if-else statement</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>

<span style="color: #888888">//This program checks whether a student is pass or fail by taking simple input from the user.</span>
<span style="color: #888888">/*If the number is less than 50,</span>
<span style="color: #888888">*it means the student has failed the test</span>
<span style="color: #888888">*if the number is greater than 50,</span>
<span style="color: #888888">*it means the student has passed the test.</span>
<span style="color: #888888">*this program use if-else statement</span>
<span style="color: #888888">*/</span>
<span style="color: #333399; font-weight: bold">int</span> number;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	printf(<span style="background-color: #fff0f0">&quot;Enter the number&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, <span style="color: #333333">&amp;</span>number);
	<span style="color: #008800; font-weight: bold">if</span>(number<span style="color: #333333">&gt;=</span><span style="color: #0000DD; font-weight: bold">50</span>){
		printf(<span style="background-color: #fff0f0">&quot;Congratulation, You have passed the test&quot;</span>);
	}
	<span style="color: #008800; font-weight: bold">else</span>{
		printf(<span style="background-color: #fff0f0">&quot;Sorry, You have failed the test&quot;</span>);
	}
}
</pre></td></tr></table></div>
</div>
</pre>
<h1>Output</h1>
<pre class="prettyprint">
Enter the number51
Congratulation, You have passed the test
</pre>
<br>
<h4><b><u>How to create a simple calculator program using if-else statement</h4></u></b>

<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%"> 1
 2
 3
 4
 5
 6
 7
 8
 9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : simplecalculatorappusingifstatement.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to create a simple calculator program using if or if-else statement</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #888888">/*This program with add, subtract, multiply or division</span>
<span style="color: #888888"> * --&gt; First we will take two number as an input#</span>
<span style="color: #888888"> * --&gt; We will add, subtract, multiply or divide the based on user operation</span>
<span style="color: #888888"> */</span>
<span style="color: #888888">//Declaration of two integer type of variable</span>
<span style="color: #333399; font-weight: bold">int</span> numberOne, numberTwo;
<span style="color: #888888">//Defining the character</span>
<span style="color: #333399; font-weight: bold">char</span> op;
<span style="color: #888888">//Defining the integer to display the result</span>
<span style="color: #333399; font-weight: bold">int</span> result;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #888888">//Taking first number as an input</span>
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Enter the first number&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, <span style="color: #333333">&amp;</span>numberOne);

	<span style="color: #888888">//Taking second number as an input</span>
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Enter the second number&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, <span style="color: #333333">&amp;</span>numberTwo);

	<span style="color: #888888">//Operation (+,-,*,/)</span>
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Enter the operation&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %c&quot;</span>, <span style="color: #333333">&amp;</span>op);

	<span style="color: #888888">//Using if or if-else statement to add, subtract, multiply or divide the numbers</span>
	<span style="color: #888888">//If statement for adding two numbers</span>
	<span style="color: #008800; font-weight: bold">if</span> (op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;+&#39;</span>) {
		result <span style="color: #333333">=</span> numberOne <span style="color: #333333">+</span> numberTwo;
		printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">The result of two number after adding is %d&quot;</span>, result);
	}
	<span style="color: #888888">//If statement for subtracting two numbers</span>
	<span style="color: #008800; font-weight: bold">if</span> (op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;-&#39;</span>) {
		result <span style="color: #333333">=</span> numberOne <span style="color: #333333">-</span> numberTwo;
		printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">The result of two number after subtracting is %d&quot;</span>, result);
	}
	<span style="color: #888888">//If statement for multiplication two numbers</span>
	<span style="color: #008800; font-weight: bold">if</span> (op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;*&#39;</span>) {
		result <span style="color: #333333">=</span> numberOne <span style="color: #333333">*</span> numberTwo;
		printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">The result of two number after multiplication is %d&quot;</span>,
				result);
	}
	<span style="color: #888888">//If statement for subtracting two numbers</span>
	<span style="color: #008800; font-weight: bold">if</span> (op <span style="color: #333333">==</span><span style="color: #0044DD">&#39;/&#39;</span>) {
		result <span style="color: #333333">=</span> numberOne <span style="color: #333333">/</span> numberTwo;
		printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">The result of two number after division is %d&quot;</span>, result);
	}

}
</pre></td></tr></table></div>

<h1>Output</h1>
<pre class="prettyprint">

Enter the first number4

Enter the second number2

Enter the operation*

The result of two number after multiplication is 8
</pre>
<br>
<h4><b><u>Comparision of two number using if statment </h4></u></b>
<p>In this program, we will see how we can compare two number inside "if parenthesis" using if statement.</p>
<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%"> 1
 2
 3
 4
 5
 6
 7
 8
 9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : comparisionoftwonumberusingif.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to compare two number using if statement</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #888888">//In this program we will compare two number inside if parenthesis</span>

<span style="color: #333399; font-weight: bold">int</span> num1 <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">2</span>;
<span style="color: #333399; font-weight: bold">int</span> num2 <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">3</span>;

<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #008800; font-weight: bold">if</span> (num1 <span style="color: #333333">&gt;</span> num2) {
		printf(<span style="background-color: #fff0f0">&quot;num1 is greater than number two&quot;</span>);
	} <span style="color: #008800; font-weight: bold">else</span> {
		printf(<span style="background-color: #fff0f0">&quot;num2 is greater than number1&quot;</span>);
	}
}
</pre></td></tr></table></div>

<h1>Output</h1>
<pre class="prettyprint">
num2 is greater than number1
</pre>
<br>
<h4><b><u>How to create a program to check whether number is even or odd</u></b></h4>
<pre class="prettyprint">
<div align="center">
<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%"> 1
 2
 3
 4
 5
 6
 7
 8
 9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : how-to-check-if-number-is-even-or-odd-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to check if number is even or odd</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #333399; font-weight: bold">int</span> check;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	printf(<span style="background-color: #fff0f0">&quot;Enter a number to check, if its even or odd&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, <span style="color: #333333">&amp;</span>check);
	<span style="color: #008800; font-weight: bold">if</span>(check<span style="color: #333333">%</span><span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">==</span><span style="color: #0000DD; font-weight: bold">0</span>){
		printf(<span style="background-color: #fff0f0">&quot;The number you entered is even&quot;</span>);
	}
	<span style="color: #008800; font-weight: bold">if</span>(check<span style="color: #333333">%</span><span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">!=</span><span style="color: #0000DD; font-weight: bold">0</span>){
		printf(<span style="background-color: #fff0f0">&quot;The number you entered is odd&quot;</span>);
	}
}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Enter a number to check, if its even or odd18
The number you entered is even
</pre>
<h4><b><u>How to create a program to check whether number is prime or not</u></b></h4>
<pre class="prettyprint">
<div align="center">
<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%"> 1
 2
 3
 4
 5
 6
 7
 8
 9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : how-to-create-a-program-to-check-whether-number-is-prime-or-not.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to create a program to check whether number is prime or not</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #333399; font-weight: bold">int</span> i,num_Check,count<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">0</span>;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	printf(<span style="background-color: #fff0f0">&quot;Enter the number to check whether number is prime or not&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, <span style="color: #333333">&amp;</span>num_Check);
	<span style="color: #008800; font-weight: bold">for</span>(i<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>; i<span style="color: #333333">&lt;=</span>num_Check; i<span style="color: #333333">++</span>){
		<span style="color: #008800; font-weight: bold">if</span>(num_Check<span style="color: #333333">%</span>i<span style="color: #333333">==</span><span style="color: #0000DD; font-weight: bold">0</span>){
		count<span style="color: #333333">++</span>;
		}
	}
	<span style="color: #008800; font-weight: bold">if</span>(count<span style="color: #333333">==</span><span style="color: #0000DD; font-weight: bold">2</span>){
		printf(<span style="background-color: #fff0f0">&quot; %d number is Prime Number &quot;</span>, num_Check);
	}
	<span style="color: #008800; font-weight: bold">else</span>
		printf(<span style="background-color: #fff0f0">&quot; %d number is not a Prime Number &quot;</span>, num_Check);
}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Enter the number to check whether number is prime or not59
 59 number is Prime Number 
</pre>