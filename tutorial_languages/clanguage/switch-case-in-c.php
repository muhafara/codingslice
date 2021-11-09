<div class="data_colour">
<h1 align="center">
<b>Switch case in C</b>
</h1></div>
<p>
Switch case is a multiple-choice selection of statement. It is used when we have multiple options. In a switch case, every value is checked for equality against a list of value. Every value is called "case", and the variable value is tested for every case to perform a different task for every choice. The syntax of the switch case statement is as follow.
</p>
<img src="\images\imageeight.png" class="img-responsive" alt="Cinque Terre">


<p>In C language "switch" is a reserved keyword. Inside "switch" parenthesis there is only value allowed it can be either an integer, character or any depending upon the value of the expression. The body of "switch" start and end with curly brackets and inside the body of the "switch" there are multiple cases representing some value. Every case must contain a "break"  statement to terminate the flow of the program if any case tested for equality with a variable value. In every "switch" statement there is a default case which will be executed if none of the cases tested for equality with the value of the variable and this default case needs no break statement because "switch" case will be terminated after default anyway. 
</p>

<h4><b><u>How to create a simple program using switch case statement</h4></u></b>

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
31
32
33
34
35
36
37
38
39</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : switch-case-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to create a simple program using switch statement</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #888888">//Defining the variable</span>
<span style="color: #333399; font-weight: bold">int</span> numberCheck;
<span style="color: #888888">///////////////////////////////////////////////</span>
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #888888">//Printing and taking the input for switch case</span>
	printf(<span style="background-color: #fff0f0">&quot;Enter the number from 1 to 3 to for switch case&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, <span style="color: #333333">&amp;</span>numberCheck);
	<span style="color: #888888">/*</span>
<span style="color: #888888">	 * In this switch case our expression is a integer value</span>
<span style="color: #888888">	 * The name of variable is numberCheck</span>
<span style="color: #888888">	 * We will check each switch case for numberCheck</span>
<span style="color: #888888">	 * */</span>
	<span style="color: #008800; font-weight: bold">switch</span> (numberCheck) {
	<span style="color: #008800; font-weight: bold">case</span> <span style="color: #0000DD; font-weight: bold">1</span>:
		printf(<span style="background-color: #fff0f0">&quot;You have selected case 1&quot;</span>);
		<span style="color: #008800; font-weight: bold">break</span>;
	<span style="color: #008800; font-weight: bold">case</span> <span style="color: #0000DD; font-weight: bold">2</span>:
		printf(<span style="background-color: #fff0f0">&quot;You have selected case 2&quot;</span>);
		<span style="color: #008800; font-weight: bold">break</span>;
	<span style="color: #008800; font-weight: bold">case</span> <span style="color: #0000DD; font-weight: bold">3</span>:
		printf(<span style="background-color: #fff0f0">&quot;You have selected case 3&quot;</span>);
		<span style="color: #008800; font-weight: bold">break</span>;
	<span style="color: #997700; font-weight: bold">default:</span>
		printf(<span style="background-color: #fff0f0">&quot;You have selected Some thing else&quot;</span>);
	}
}
</pre></td></tr></table></div>
</div>
</pre>
</b>

<h1>Output</h1>
<pre class="prettyprint">
Enter the number from 1 to 3 to for switch case3

You have selected case 3
</pre>

<h4><b><u>How to create a simple calculator program using switch case statement</h4></u></b>

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
62
63
64</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : simple-calculator-program-using-switch-statament.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to create a simple calculator program using a switch statement</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #888888">//Defining the variable integer and char</span>
<span style="color: #333399; font-weight: bold">int</span> numberOne, numberTwo;
<span style="color: #333399; font-weight: bold">char</span> op;
<span style="color: #333399; font-weight: bold">int</span> result;
<span style="color: #888888">//////////////////////////////////</span>
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #888888">//Taking input for first number</span>
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Enter the first number&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, <span style="color: #333333">&amp;</span>numberOne);
	<span style="color: #888888">////////////////////////////////</span>

	<span style="color: #888888">//Taking input for second number</span>
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Enter the second number&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, <span style="color: #333333">&amp;</span>numberTwo);
	<span style="color: #888888">////////////////////////////////</span>

	<span style="color: #888888">//Taking input for Operator (+, -, *, /)</span>
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Enter the Operator&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %c&quot;</span>, <span style="color: #333333">&amp;</span>op);
	<span style="color: #888888">////////////////////////////////</span>
	
<span style="color: #888888">/*</span>
<span style="color: #888888"> * In this calculator program</span>
<span style="color: #888888"> * we are choosing case for addition, subtraction, multiplication and division</span>
<span style="color: #888888"> * Our variable op has the value (+,-,*,/) </span>
<span style="color: #888888"> * */</span>

	<span style="color: #008800; font-weight: bold">switch</span> (op) {
	<span style="color: #008800; font-weight: bold">case</span> <span style="color: #0044DD">&#39;+&#39;</span>:
		result <span style="color: #333333">=</span> numberOne <span style="color: #333333">+</span> numberTwo;
		printf(<span style="background-color: #fff0f0">&quot;The result after adding two numbers are %d&quot;</span>, result);
		<span style="color: #008800; font-weight: bold">break</span>;
	<span style="color: #008800; font-weight: bold">case</span> <span style="color: #0044DD">&#39;-&#39;</span>:
		result <span style="color: #333333">=</span> numberOne <span style="color: #333333">-</span> numberTwo;
		printf(<span style="background-color: #fff0f0">&quot;The result after subtracting two numbers are %d&quot;</span>, result);
		<span style="color: #008800; font-weight: bold">break</span>;
	<span style="color: #008800; font-weight: bold">case</span> <span style="color: #0044DD">&#39;*&#39;</span>:
		result <span style="color: #333333">=</span> numberOne <span style="color: #333333">*</span> numberTwo;
		printf(<span style="background-color: #fff0f0">&quot;The result after multiplication two numbers are %d&quot;</span>, result);
		<span style="color: #008800; font-weight: bold">break</span>;
	<span style="color: #008800; font-weight: bold">case</span> <span style="color: #0044DD">&#39;/&#39;</span>:
		result <span style="color: #333333">=</span> numberOne <span style="color: #333333">/</span> numberTwo;
		printf(<span style="background-color: #fff0f0">&quot;The result after dividing two numbers are %d&quot;</span>, result);
		<span style="color: #008800; font-weight: bold">break</span>;
	<span style="color: #997700; font-weight: bold">default:</span>
		printf(<span style="background-color: #fff0f0">&quot;Please, select valid operation&quot;</span>);
	}

}
</pre></td></tr></table></div>
</div>
</pre>
</b>
<h1>Output</h1>
<pre class="prettyprint">
Enter the first number8

Enter the second number2

Enter the Operator-
The result after subtracting two numbers are 6
</pre>