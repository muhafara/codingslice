<div class="data_colour">
<h1 align="center">
<b>Simple calculor app</b>
</h1></div>
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
65</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> calculator<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">int</span> Results<span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">////Character /////////////////</span>
        <span style="color: #333399; font-weight: bold">char</span> op <span style="color: #333333">=</span> <span style="color: #0044DD">&#39;-&#39;</span><span style="color: #333333">;</span>
        <span style="color: #888888">////////////END////////////////////////////</span>
        
        <span style="color: #888888">//////////////For addition///////////////////////////////////////</span>
        <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;+&#39;</span><span style="color: #333333">){</span>
            add_Number<span style="color: #333333">(</span><span style="color: #0000DD; font-weight: bold">12</span><span style="color: #333333">,</span><span style="color: #0000DD; font-weight: bold">6</span><span style="color: #333333">);</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Results after calculation is :&quot;</span> <span style="color: #333333">+</span>Results<span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #888888">//////////////////////END////////////////////////////////////</span>
        
        <span style="color: #888888">//////////////////////For subtraction///////////////////////////</span>

        <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;-&#39;</span><span style="color: #333333">){</span>
            subs_Number<span style="color: #333333">(</span><span style="color: #0000DD; font-weight: bold">12</span><span style="color: #333333">,</span><span style="color: #0000DD; font-weight: bold">6</span><span style="color: #333333">);</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Results after calculation is :&quot;</span> <span style="color: #333333">+</span>Results<span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #888888">///////////////////////////END/////////////////////////////////////////</span>
        
        <span style="color: #888888">///////////////////////////For Multiplication//////////////////////////</span>

        <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;*&#39;</span><span style="color: #333333">){</span>
            mul_Number<span style="color: #333333">(</span><span style="color: #0000DD; font-weight: bold">12</span><span style="color: #333333">,</span><span style="color: #0000DD; font-weight: bold">6</span><span style="color: #333333">);</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Results after calculation is :&quot;</span> <span style="color: #333333">+</span>Results<span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        
        <span style="color: #888888">///////////////////////////////////END//////////////////////////////////</span>
        
        <span style="color: #888888">/////////////////////////////For division///////////////////////////////</span>

        <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;/&#39;</span><span style="color: #333333">){</span>
            divide_Number<span style="color: #333333">(</span><span style="color: #0000DD; font-weight: bold">12</span><span style="color: #333333">,</span><span style="color: #0000DD; font-weight: bold">6</span><span style="color: #333333">);</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Results after calculation is :&quot;</span> <span style="color: #333333">+</span>Results<span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        
        <span style="color: #888888">///////////////////////////END//////////////////////////////////////////////</span>

    <span style="color: #333333">}</span>

    <span style="color: #888888">//////////////Function to add number/////////////////////</span>
    <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">add_Number</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> num_One<span style="color: #333333">,</span> <span style="color: #333399; font-weight: bold">int</span> num_Two<span style="color: #333333">){</span>
        Results <span style="color: #333333">=</span> num_One <span style="color: #333333">+</span> num_Two<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">return</span>  Results<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>
    <span style="color: #888888">//////////////Function to subs number///////////////////</span>
    <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">subs_Number</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> num_One<span style="color: #333333">,</span> <span style="color: #333399; font-weight: bold">int</span> num_Two<span style="color: #333333">){</span>
        Results <span style="color: #333333">=</span> num_One <span style="color: #333333">-</span> num_Two<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">return</span>  Results<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>
    <span style="color: #888888">//////////////Function to multiply number//////////////</span>
    <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">mul_Number</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> num_One<span style="color: #333333">,</span> <span style="color: #333399; font-weight: bold">int</span> num_Two<span style="color: #333333">){</span>
        Results <span style="color: #333333">=</span> num_One <span style="color: #333333">*</span> num_Two<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">return</span>  Results<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>
    <span style="color: #888888">//////////////Function to divide number///////////////</span>
    <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">divide_Number</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> num_One<span style="color: #333333">,</span> <span style="color: #333399; font-weight: bold">int</span> num_Two<span style="color: #333333">){</span>
        Results <span style="color: #333333">=</span> num_One <span style="color: #333333">/</span> num_Two<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">return</span>  Results<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Results after calculation is :6
</pre>