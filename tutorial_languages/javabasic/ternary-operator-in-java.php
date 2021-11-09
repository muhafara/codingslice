<div class="data_colour">
<h1 align="center">
<b>Ternary operator in Java</b>
</h1></div>
<p>"Ternary Operator" is a part of decision making. It is similar to the "if statement".  The ternary operator takes two operands, for example, the ternary operator (?) and semicolon (:). The ternary operator allows the programmer to assign one value to the variable if the condition of the expression is true, and another value if the condition of the expression is false. 
The syntax of the conditional operator statement is
<img src="\images\imagenine.png" class="img-responsive" alt="Cinque Terre">
</p>
<h4><b><u>How to create simple program using the ternary opreator in Java</u><b></h4>
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
12</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> ternary<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
    <span style="color: #888888">//simple example using ternary operator in java</span>
    <span style="color: #888888">//declaring and initializing variables///////////////</span>
    <span style="color: #333399; font-weight: bold">int</span> myGrade <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">72</span><span style="color: #333333">;</span>
    String result<span style="color: #333333">=</span> <span style="color: #333333">(</span>myGrade <span style="color: #333333">&gt;=</span><span style="color: #0000DD; font-weight: bold">40</span><span style="color: #333333">)</span> <span style="color: #333333">?</span> <span style="background-color: #fff0f0">&quot;Congratulations! you have passed the test&quot;</span> <span style="color: #333333">:</span> <span style="background-color: #fff0f0">&quot;Sorry! Try again&quot;</span><span style="color: #333333">;</span>
    System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span>result<span style="color: #333333">);</span>
<span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Congratulations! you have passed the test
</pre>