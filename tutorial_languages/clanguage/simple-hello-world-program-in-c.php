
<div class="data_colour">
<h1 align="center">
<b>Simple C Program</b>
</h1>
<p>
In every ''C'' program, DOT H(.h) is the general-purpose library's header. Dot H(.h) includes a general-purpose function that consists of memory allocation, process control, conversion, and many other functions.
</p>
<br>
<p>
In this simple ''C'' program at line 11 we have written #include <stdio.h>. The ''include'' conveys to the compiler it needs to locate the header files. The ''stdio'' is included in every C program to our source code, and then it is converted by the compiler to object code, and then this object code is saved into an object file. The object file and the program file has the same name as the source code but with extension .o. The ''stdio'' means ''standard input and output functions''. It has information regarding input and output function. 
</p>
<br>
<p>
In this simple C program we at line number 12 we write #include <stdlib.h>. The stdlib stands for the ''standard library,'' It defines standard general functions like string functions, memory-related function, searching and sorting, and arithmetic functions.
</p>
<br>
<p>
 These standard input and output functions are print f and scanf.  In this C program printing this ''!!!Hello World, This is my first C Program''; on screen, we need these header files, including puts() or printf() functions to print this information on the console.
</p>
</div>
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
17</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #888888"> Name        : SimpleHelloWorldProgram.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : Hello World in C, Ansi-style</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>

<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	puts(<span style="background-color: #fff0f0">&quot;!!!Hello World, This is my first C Program&quot;</span>); 
	<span style="color: #008800; font-weight: bold">return</span> 0;
}
</pre></td></tr></table></div>


</div>
</pre>
</b>
</p>