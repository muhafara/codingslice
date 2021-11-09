<div class="data_colour">
<h1 align="center">
<b>String in C</b>
</h1></div>
<p>The C language does not provide an predefined data type for the string, but we can use access specifier "%s" which can be used to print and read strings directly. The string is a sequence of characters in a linear sequence, and it is like a one-dimensional array by a null character. It is used to manipulate text, word or sentences. The declaration of a string can be done defining a char string_name and the length of a string. For example char name[10];</p>
<p>In C language, we can define a string in two ways.</p>
<br>Char array
<br>string literal
<h4><b><u>Char array</u></b></h4>
<p>Whenever we need to declare and initialize the string, we don't need to declare an array's size. Example of defining a string using a char array.
char greeting[]={'h','e','l','l',''o};</p>
<h4><b><u>String literal</u></b></h4>
<p>Whenever we need to declare and initialize the string, we don't need to declare an array's size. Example of defining a string using a char array.
char greeting[]="hello";</p>
<h4><b><u>Simple example using String in C++</u></b></h4>
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
<span style="color: #888888"> Name        : string-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : String in c</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #333399; font-weight: bold">char</span> greeting[]<span style="color: #333333">=</span>{<span style="color: #0044DD">&#39;h&#39;</span>,<span style="color: #0044DD">&#39;e&#39;</span>,<span style="color: #0044DD">&#39;l&#39;</span>,<span style="color: #0044DD">&#39;l&#39;</span>,<span style="color: #0044DD">&#39;o&#39;</span>,<span style="color: #0044DD">&#39;\0&#39;</span>};
<span style="color: #333399; font-weight: bold">char</span> greeting_again[]<span style="color: #333333">=</span>{<span style="background-color: #fff0f0">&quot;hey&quot;</span>};
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Greeting %s &quot;</span>,greeting);
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Greeting again %s &quot;</span>,greeting_again);
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
Greeting hello 
Greeting again hey 
</pre>