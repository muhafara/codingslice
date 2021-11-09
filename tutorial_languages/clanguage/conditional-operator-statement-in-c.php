<div class="data_colour">
<h1 align="center">
<b>Conditional Operator Statement</b>
</h1></div>
<p>"Conditional Operator" statement is a part of decision making. It is similar to the "if statement".  The conditional operator statement takes two operands, for example, the ternary operator (?) and semicolon (:). The ternary operator allows the programmer to assign one value to the variable if the condition of the expression is true, and another value if the condition of the expression is false. 
The syntax of the conditional operator statement is
<img src="\images\imagenine.png" class="img-responsive" alt="Cinque Terre">
</p>
<h4><b><u>How to create simple program using conditional opreator statement</u><b></h4>

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
31
32
33</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : conditionaloperatorinc.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to create a program using conditional statement in c</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>

<span style="color: #888888">//This program checks whether a student is pass or fail by taking simple input from the user.</span>
<span style="color: #888888">/*If the number is less than 50,49</span>
<span style="color: #888888"> *it means the student has failed the test</span>
<span style="color: #888888"> *if the number is greater than 50,</span>
<span style="color: #888888"> *it means the student has passed the test.</span>
<span style="color: #888888"> *We will use conditional operator statement for this program</span>
<span style="color: #888888"> */</span>

<span style="color: #333399; font-weight: bold">int</span> Grade;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {

	printf(<span style="background-color: #fff0f0">&quot;Enter the number to check the results&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, <span style="color: #333333">&amp;</span>Grade);
	<span style="color: #888888">//Conditional operator statement</span>
	(Grade <span style="color: #333333">&gt;=</span> <span style="color: #0000DD; font-weight: bold">50</span>) <span style="color: #333333">?</span>
			(printf(<span style="background-color: #fff0f0">&quot;Congratulations, Your have passed the test&quot;</span>)) <span style="color: #333333">:</span>
			(printf(<span style="background-color: #fff0f0">&quot;Sorry, You have failed the test&quot;</span>));

}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
Enter the number to check the results68
Congratulations, Your have passed the test
</pre>