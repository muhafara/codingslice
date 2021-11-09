<div class="data_colour">
<h1 align="center">
<b>Bitwise operator</b>
</h1></div>
<p>Bitwise operators are used to works on bits. The binary number is a combination of 0 & 1. Bitwise '&' operator check both conditions even if the first one true. This bitwise is | similar to the || logical operator, which used with booleans. When two booleans are compared, the result either true or false. If either of them is true, the output is 1 when either of them is true.
The java ^ operator compares the binary of two operands. If bits of both operands are the same, it will return one, and if the bits of both operands are not equal, it will return 0.
</p>
<p>The table below shows the binary operator with the description.<p>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Operator</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">&</th>
      <td>Bitwise mask bits</td>
    </tr>
    <tr>
      <th scope="row">|</th>
      <td>Bitwise set bits</td>
    </tr>
    <tr>
      <th scope="row">^</th>
      <td>Bitwise exclusive OR (XOR)</td>
    </tr>
  </tbody>
</table>
<h4><b><u>Simple example using the bitwise operators in Java</u></b></h4>
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
28</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> bitwise<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">//simple example using bitwise operator in java</span>
        <span style="color: #888888">//declaring and initializing variables///////////////</span>
        <span style="color: #333399; font-weight: bold">int</span> num_One <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">6</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> num_Two <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">5</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> results<span style="color: #333333">;</span>
        <span style="color: #888888">////////////////Bitwise Operator | ///////////////////////</span>
        <span style="color: #888888">/*</span>
<span style="color: #888888">        * In this case binary code of two numbers will be calculated</span>
<span style="color: #888888">        * 0110</span>
<span style="color: #888888">        * 0101</span>
<span style="color: #888888">        * ****</span>
<span style="color: #888888">        * 0111 -&gt; which is seven</span>
<span style="color: #888888">        *</span>
<span style="color: #888888">        * */</span>
        results <span style="color: #333333">=</span> num_One <span style="color: #333333">|</span> num_Two<span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Using Bitwise | results &quot;</span> <span style="color: #333333">+</span>results<span style="color: #333333">);</span>

        <span style="color: #888888">////////////////Bitwise Operator &amp; ///////////////////////</span>
        results <span style="color: #333333">=</span> num_One <span style="color: #333333">&amp;</span> num_Two<span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Using Bitwise &amp; results &quot;</span> <span style="color: #333333">+</span>results<span style="color: #333333">);</span>
        <span style="color: #333333">}</span>

    <span style="color: #333333">}</span>
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Using Bitwise | results 7
Using Bitwise & results 4
</pre>