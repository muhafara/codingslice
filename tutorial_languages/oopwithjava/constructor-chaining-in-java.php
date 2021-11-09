<div class="data_colour">
<h1 align="center">
<b>Constructor chaining in Java</b>
</h1></div>
<p>
Constructor chaining in Java is a process of calling one constructor to another inside the same class. It can be acheived by using this keyword. The main benefit of constructor chaining is reducing double code, which is also a good practice. Also, we can pass parameters through a collection of different constructors but initializing can be done in a single place. It allows initializing of multiple constructors from one place. Constructor chaining occurs through inheritance. While working with a constructor chaining, this () should be the first line of the constructor body, which can achieve it in order.
</p>
<h4><b><u>Simple example using constructor chaining in Java</u></b></h4>
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
29</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> superexample<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Rectangle</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">private</span> <span style="color: #333399; font-weight: bold">int</span> x<span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">private</span> <span style="color: #333399; font-weight: bold">int</span> y<span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">private</span> <span style="color: #333399; font-weight: bold">int</span> width<span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">private</span> <span style="color: #333399; font-weight: bold">int</span> height<span style="color: #333333">;</span>

    <span style="color: #888888">//Ist constructor</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #0066BB; font-weight: bold">Rectangle</span><span style="color: #333333">()</span> <span style="color: #333333">{</span>
        <span style="color: #888888">//this will second constructor</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">(</span><span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">);</span>
    <span style="color: #333333">}</span>

    <span style="color: #888888">//Second constructor</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #0066BB; font-weight: bold">Rectangle</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> width<span style="color: #333333">,</span> <span style="color: #333399; font-weight: bold">int</span> height<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">//this will 3 constructor</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">(</span><span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">,</span> width<span style="color: #333333">,</span> height<span style="color: #333333">);</span>
    <span style="color: #333333">}</span>

    <span style="color: #888888">//third constructor</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #0066BB; font-weight: bold">Rectangle</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> x<span style="color: #333333">,</span> <span style="color: #333399; font-weight: bold">int</span> y<span style="color: #333333">,</span> <span style="color: #333399; font-weight: bold">int</span> width<span style="color: #333333">,</span> <span style="color: #333399; font-weight: bold">int</span> height<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">//initialize all the variables</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">x</span> <span style="color: #333333">=</span> x<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">y</span> <span style="color: #333333">=</span> y<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">width</span> <span style="color: #333333">=</span> width<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">height</span> <span style="color: #333333">=</span> height<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>