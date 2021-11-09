<div class="data_colour">
<h1 align="center">
<b>boolean in Java</b>
</h1></div>
<p>
Boolean is also a reserved keyword in Java. This primitive data type aims to store only two possible values that are true or false. By default value of boolean is false. Boolean can use it with variables and methods.
</p>
<h4><b><u>Simple example using boolean</u></b></h4>
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
15</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">//java class</span>
<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #888888">//Java main method</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">){</span>
        <span style="color: #333399; font-weight: bold">int</span> numberOne <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">8</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> numberTwo <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">4</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">boolean</span> isNumberGreater <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">true</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">boolean</span> isNumberless <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">false</span><span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>numberOne <span style="color: #333333">&gt;=</span> numberTwo<span style="color: #333333">){</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span>isNumberGreater<span style="color: #333333">);</span>
        <span style="color: #333333">}</span> <span style="color: #008800; font-weight: bold">else</span><span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span>isNumberless<span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
true
</pre>

<h4><b><u>Method of a boolean type</u></b></h4>
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
16</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">//java class</span>
<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #888888">//Java main method</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">){</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span>checkNumber<span style="color: #333333">(</span><span style="color: #0000DD; font-weight: bold">10</span><span style="color: #333333">));</span>
    <span style="color: #333333">}</span>
    <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">boolean</span> <span style="color: #0066BB; font-weight: bold">checkNumber</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> num<span style="color: #333333">){</span>
        <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>num <span style="color: #333333">&gt;=</span> <span style="color: #0000DD; font-weight: bold">5</span><span style="color: #333333">){</span>
            <span style="color: #008800; font-weight: bold">return</span> <span style="color: #008800; font-weight: bold">true</span><span style="color: #333333">;</span>
        <span style="color: #333333">}</span>
        <span style="color: #008800; font-weight: bold">else</span>
        <span style="color: #333333">{</span>
            <span style="color: #008800; font-weight: bold">return</span> <span style="color: #008800; font-weight: bold">false</span><span style="color: #333333">;</span>
        <span style="color: #333333">}</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
true
</pre>