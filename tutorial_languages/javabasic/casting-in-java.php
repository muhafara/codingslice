<div class="data_colour">
<h1 align="center">
<b>Casting in Java</b>
</h1></div>
<p>
Casting in Java means treating or converting a value of one variable (int, float, double etc) from one data type to another. Like other languages, Java supports casting as well. Java supports two kinds of casting widening casting and narrow casting. 
</p>
<h4><b><u>Widening Casting</u></b></h4>
<p>
 This type of casting compiler automatically converts smaller types to larger ones. For example, byte to short, int to long, float to double, int to double etc.
</p>
<h4><b><u>Simple program using widening casting in Java</u></b></h4>
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
10</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #888888">//Java main method</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
    <span style="color: #333399; font-weight: bold">int</span> smallValue <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">9</span><span style="color: #333333">;</span>
    <span style="color: #333399; font-weight: bold">double</span> largeValue <span style="color: #333333">=</span> smallValue<span style="color: #333333">;</span>
    <span style="color: #888888">//Automatically Casting</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The value of integer containing small value &quot;</span><span style="color: #333333">+</span>smallValue<span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Automatically casting / Widening casting of small value &quot;</span><span style="color: #333333">+</span>largeValue<span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
The value of integer containing small value 9
Automatically casting / Widening casting of small value 9.0
</pre>

<h4><b><u>Narrow Casting</u></b></h4>
<p>
It in this types of casting, programmers need to be done manually by the programmer while converting larger types to smaller ones, double to float long to int char to short and byte.
</p>
<h4><b><u>Simple program using narrow casting in Java</u></b></h4>
<p>
<b>
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
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #333399; font-weight: bold">double</span> doubleValue <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">9</span><span style="color: #333333">;</span>
        <span style="color: #888888">// We need to tell compiler specifically about the type we are converting too</span>
        <span style="color: #888888">//in this case we are converting double to int so using parenthesis and data type inside like (int)</span>
        <span style="color: #333399; font-weight: bold">int</span> smallValue <span style="color: #333333">=</span> <span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span><span style="color: #333333">)</span> doubleValue<span style="color: #333333">;</span>
        <span style="color: #888888">//Manually Casting</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The value of double containing value &quot;</span> <span style="color: #333333">+</span> smallValue<span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Narrow casting / manually casting of double value to integer value &quot;</span> <span style="color: #333333">+</span> doubleValue<span style="color: #333333">);</span>


    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
The value of double containing value 9
Narrow casting / manually casting of double value to integer value 9.0
</pre>
