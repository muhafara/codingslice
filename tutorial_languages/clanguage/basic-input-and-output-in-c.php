<div class="data_colour">
<h1 align="center">
<b>Basic input and output using printf() and scanf()</b>
</h1></div>
<p>Print () function belong to "ANSI C" standard library which includes in stdio.h(Standard Input-output) libraries. In every c program, we need to include these libraries if we want to use printf() function otherwise we will get an error. </p>
<p>printf() is one of the primary function in a c programming language which prints data on console screen after compilation of a program. It can print integer values, float values, char, string, octal and hexadecimal values. We use "format specifiers" with printf() function to print the values. For example, to print the value of integer we use "%d", to print the value of float we use "%f" and to print a char we use "%c". We can also use escape sequences with printf() function, for example printf("\nHi....")</p>
<a href="http//:tutorial_languages/clanguage/format-specifier-in-c.php" target="_blank">See more about format specifiers...</a>
<h4><b><u>Printing simple hello world using printf()</u></b></h4>
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
18</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : Printing hello world using print()</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : Hello World in C, using printf()</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>

<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	printf(<span style="background-color: #fff0f0">&quot;Hello world&quot;</span>);
	}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
Hello world
</pre>
<h4><b><u>How to print data types using printf() in c</u></b></h4>
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
20</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : Printing data types using print()</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : data types, using print()</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #333399; font-weight: bold">int</span> number<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">12</span>;
<span style="color: #333399; font-weight: bold">float</span> decimal<span style="color: #333333">=</span><span style="color: #6600EE; font-weight: bold">2.0</span>;
<span style="color: #333399; font-weight: bold">char</span> alphabet<span style="color: #333333">=</span><span style="color: #0044DD">&#39;C&#39;</span>;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	printf(<span style="background-color: #fff0f0">&quot;Using format specifiers %d &quot;</span> ,number);
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Using format specifiers %f &quot;</span> ,decimal);
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Using format specifiers %c &quot;</span> ,alphabet);
	}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Using format specifiers 12 
Using format specifiers 2.000000 
Using format specifiers C 
</pre>
<h4><b><u>scanf()</u></b></h4>
<p>canf() function belong to "ANSI C" standard library which includes in stdio.h(Standard Input-output) libraries. In every c program, we need to include these libraries if we want to use scanf() function otherwise we will get an error.<br>
scanf() function is also one of the primary function in a c programming language that scan data or takes input. It can take data types like integer, float char and many more. For example, to scan an integer, we use format specifier with a variable name to assign the scan value. </p>
<a href="https://localhost\clanguage\format-specifier-in-c.php/" target="_blank">See more about format specifiers...</a>
<h4><b><u>How to scan an data types using scanf() in c</u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">
<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%">1
2
3
4
5
6</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #333399; font-weight: bold">int</span> number;
	scanf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, <span style="color: #333333">&amp;</span>number);
	<span style="color: #333399; font-weight: bold">float</span> decimal;
	scanf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, <span style="color: #333333">&amp;</span>decimal);
	<span style="color: #333399; font-weight: bold">char</span> alpa;
	scanf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, <span style="color: #333333">&amp;</span>alpa);
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h4><b><u>Why we use & with scanf()</u></b></h4>
<p>
The "&" allows us to pass the variable's address, which is a place in memory. scanf() need to read the variable in the memory from the location.
</p>
