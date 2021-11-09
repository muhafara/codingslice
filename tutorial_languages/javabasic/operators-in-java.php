<div class="data_colour">
<h1 align="center">
<b>Operators in Java</b>
</h1></div>
<p>
Operators are special characters in Java that perform a specific operation on one, two or three operands. This specific operation can be a mathematical operation or logical operation between two or more operands.
</p>
<h4><b><u>Expression and operend</u></b></h4>
<p>
Expression is formed by the combination of operators, operands, literals, variable and method return values. Operands are any object that the operator manipulates. 
</p>
<img src="\images\expsteopeimage.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>The are different types of operator in Java which are:</u></b></h4>
<p>
Unary operator:<br>
Arithmetic operator:<br>
Shift operator:<br>
Relational operator:<br>
Bitwise operator:<br>
Logical operator:<br>
Ternary operator:<br>
Assignment operator:<br>
</p>
<img src="\images\operators-in-java.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>Operator precedence in Java</u></b></h4>
<p>
In Java, the operator is evaluated based on their precedence. An operator having high priority will be first assessed.
Consider a simple example in which numOne and numTwo will add and then multiply by 100.  Assume two number are 20 and 40. After adding these two number, we should get 60, and if we multiply by 100, we should get 6000. But in Java, multiplication has high precedence. Then, it would multiply numTwo, which is 40 by 100 and after that, it will add 20.  we will get 4020.
</p>
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
11</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> opprecedence<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #333399; font-weight: bold">int</span> numOne <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">20</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> numTwo <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">40</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> Results <span style="color: #333333">=</span> numOne <span style="color: #333333">+</span> numTwo <span style="color: #333333">*</span> <span style="color: #0000DD; font-weight: bold">100</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span>Results<span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
4020
</pre>
<p>
By adding parenthesis can help resolve the issue because it has high precedence than multiplication.
<p/>
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
11</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> opprecedence<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #333399; font-weight: bold">int</span> numOne <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">20</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> numTwo <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">40</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> Results <span style="color: #333333">=</span> <span style="color: #333333">(</span>numOne <span style="color: #333333">+</span> numTwo<span style="color: #333333">)</span> <span style="color: #333333">*</span> <span style="color: #0000DD; font-weight: bold">100</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span>Results<span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
6000
</pre>
<p>Here is the link to the table, which shows operator precedence in Java.</p>
<a href="http://www.cs.bilkent.edu.tr/~guvenir/courses/CS101/op_precedence.html" target="_blank">Operator precedence in Java</a> 

