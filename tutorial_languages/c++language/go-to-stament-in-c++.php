
<div class="data_colour">
<h1 align="center">
<b>Goto statement in c++</b>
</h1></div>
<p>Goto statement or sometimes referred to as "Jump Statement" can be used to jump anywhere in a program or transferring control of a program from one part to another which is the predefined label or it is used to alter the control of a program. Goto statement Jump statement is also referred to as Unconditional Jump.</p>
<img src="\images\imagefour.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>Simple program using Goto statement in c++</u></b></h4>
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
22</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : simple-program-using-goto-stament-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : simple program using goto statament in c</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;iostream&gt;</span>
<span style="color: #008800; font-weight: bold">using</span> <span style="color: #008800; font-weight: bold">namespace</span> std;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold"></span>) {
	cout<<(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0"> one&quot;</span>);
	<span style="color: #008800; font-weight: bold">goto</span> skip;
	cout<<(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0"> two&quot;</span>);
	cout<<(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0"> three&quot;</span>);
	<span style="color: #997700; font-weight: bold">skip:</span>
	cout<<(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0"> four&quot;</span>);

}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
 one
 four
</pre>
<h4><b><u>Simple calculator program using Goto statement in c</u></b></h4>
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
64
65
66
67
68
69</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">//============================================================================</span>
<span style="color: #888888">// Name        : simple-calculator-program-using-goto-statament-in-c++.cpp</span>
<span style="color: #888888">// Author      : CodingSlice</span>
<span style="color: #888888">// Version     :</span>
<span style="color: #888888">// Copyright   : Your copyright notice</span>
<span style="color: #888888">// Description : How to create a simple calculator program using a goto statement in c++</span>
<span style="color: #888888">//============================================================================</span>

<span style="color: #557799">#include &lt;iostream&gt;</span>
<span style="color: #008800; font-weight: bold">using</span> <span style="color: #008800; font-weight: bold">namespace</span> std;
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
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>() {
	<span style="color: #888888">//Taking first number as an input</span>
	cout<span style="color: #333333">&lt;&lt;</span>(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Enter the first number&quot;</span>);
	cin<span style="color: #333333">&gt;&gt;</span>numberOne;

	<span style="color: #888888">//Taking second number as an input</span>
	cout<span style="color: #333333">&lt;&lt;</span>(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Enter the second number&quot;</span>);
	cin<span style="color: #333333">&gt;&gt;</span>numberTwo;

	<span style="color: #888888">//Operation (+,-,*,/)</span>
	cout<span style="color: #333333">&lt;&lt;</span>(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Enter the operation&quot;</span>);
	cin<span style="color: #333333">&gt;&gt;</span>op;

	<span style="color: #888888">//Using GoTo statement to add, subtract, multiply or divide the numbers</span>

		<span style="color: #888888">//Goto for adding two numbers</span>
		<span style="color: #008800; font-weight: bold">if</span> (op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;+&#39;</span>) {
			<span style="color: #008800; font-weight: bold">goto</span> add;
		}
		<span style="color: #888888">//Goto for subtracting two numbers</span>
		<span style="color: #008800; font-weight: bold">if</span> (op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;-&#39;</span>) {
			<span style="color: #008800; font-weight: bold">goto</span> substract;
		}
		<span style="color: #888888">//Goto for multiplication two numbers</span>
		<span style="color: #008800; font-weight: bold">if</span> (op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;*&#39;</span>) {
			<span style="color: #008800; font-weight: bold">goto</span> multiply;
		}
		<span style="color: #888888">//Goto for subtracting two numbers</span>
		<span style="color: #008800; font-weight: bold">if</span> (op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;/&#39;</span>) {
			<span style="color: #008800; font-weight: bold">goto</span> division;
		}
		<span style="color: #997700; font-weight: bold">add:</span> result <span style="color: #333333">=</span> numberOne <span style="color: #333333">+</span> numberTwo;
		cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">The result of two number after adding is &quot;</span><span style="color: #333333">&lt;&lt;</span>result;
		<span style="color: #008800; font-weight: bold">goto</span> exit;

		<span style="color: #997700; font-weight: bold">substract:</span> result <span style="color: #333333">=</span> numberOne <span style="color: #333333">-</span> numberTwo;
		cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">The result of two number after subtracting is &quot;</span><span style="color: #333333">&lt;&lt;</span>result;
		<span style="color: #008800; font-weight: bold">goto</span> exit;

		<span style="color: #997700; font-weight: bold">multiply:</span> result <span style="color: #333333">=</span> numberOne <span style="color: #333333">*</span> numberTwo;
		cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">The result of two number after multiplication is &quot;</span><span style="color: #333333">&lt;&lt;</span> result;
		<span style="color: #008800; font-weight: bold">goto</span> exit;

		<span style="color: #997700; font-weight: bold">division:</span> result <span style="color: #333333">=</span> numberOne <span style="color: #333333">/</span> numberTwo;
		cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">The result of two number after division is &quot;</span><span style="color: #333333">&lt;&lt;</span> result;
		cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;////////////////////////End of the program////////////////////////&quot;</span>;
		<span style="color: #997700; font-weight: bold">exit:</span>
		cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">//////////////////////////////////////////////////////////////////////&quot;</span>;
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">

Enter the first number4

Enter the second number2

Enter the operation-

The result of two number after subtracting is 2
////////////////////////////////////
</pre>