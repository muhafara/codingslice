<div class="data_colour">
<h1 align="center">
<b>Arithmetic operator in Java</b>
</h1></div>
<h4><b><u>Arithmetic operator:</u></b></h4>
<p>An arithmetic operator performs mathematic operator on operands—for example, addition, subtraction, multiplication, division and remainder operator.
<br>The table below shows the following operator with description.<p/>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Operator</th>
      <th scope="col">Description</th>
      <th scope="col">Example (number_One=8,number_Two=4)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">+</th>
      <td>Take two operands and perform addition</td>
      <td>number_One+number_Two=12</td>
    </tr>
    <tr>
      <th scope="row">-</th>
      <td>Take two operands and perform substraction</td>
      <td>number_One-number_Two=4</td>
    </tr>
    <tr>
      <th scope="row">*</th>
      <td>Take two operands and perform multiplication</td>
      <td>number_One*number_Two=16</td>
    </tr>
	 <tr>
      <th scope="row">/</th>
      <td>Take two operands and perform division</td>
      <td>number_One/number_Two=2</td>
    </tr>
	 <tr>
      <th scope="row">%</th>
      <td>It is called remainder operator it returns remainder of two operand</td>
      <td>number_one = 10 number_two = 3. number_One % number_two = 1</td>
    </tr>
  </tbody>
</table>
<h4><b><u>Simple example using the arithmetic operator in java</u></b></h4>

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
38</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> aritmatic<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">//simple example using arithmetic operator in java</span>
        <span style="color: #888888">//declaring and initializing variables///////////////</span>
        <span style="color: #333399; font-weight: bold">int</span> num_One <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">4</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> num_Two <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> results<span style="color: #333333">;</span>
        <span style="color: #888888">///////////////////////using &#39;+&#39;/////////////////////</span>
        results <span style="color: #333333">=</span> num_One <span style="color: #333333">+</span> num_Two<span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Results using &#39; + &#39;operator , num_One and num_Two = &quot;</span> <span style="color: #333333">+</span>results <span style="color: #333333">);</span>
        <span style="color: #888888">///////////////////////END///////////////////////////</span>

        <span style="color: #888888">///////////////////////using &#39;-&#39;/////////////////////</span>
        results <span style="color: #333333">=</span> num_One <span style="color: #333333">-</span> num_Two<span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Results using &#39; - &#39;operator , num_One and num_Two = &quot;</span> <span style="color: #333333">+</span>results <span style="color: #333333">);</span>
        <span style="color: #888888">///////////////////////END///////////////////////////</span>

        <span style="color: #888888">///////////////////////using &#39;*&#39;/////////////////////</span>
        results <span style="color: #333333">=</span> num_One <span style="color: #333333">*</span> num_Two<span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Results using &#39; * &#39;operator , num_One and num_Two = &quot;</span> <span style="color: #333333">+</span>results <span style="color: #333333">);</span>
        <span style="color: #888888">///////////////////////END///////////////////////////</span>

        <span style="color: #888888">///////////////////////using &#39;-&#39;/////////////////////</span>
        results <span style="color: #333333">=</span> num_One <span style="color: #333333">/</span> num_Two<span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Results using &#39; / &#39;operator , num_One and num_Two = &quot;</span> <span style="color: #333333">+</span>results <span style="color: #333333">);</span>
        <span style="color: #888888">///////////////////////END///////////////////////////</span>

        <span style="color: #888888">///////////////////////using &#39;%&#39;/////////////////////</span>
        <span style="color: #333399; font-weight: bold">int</span> num_Modone <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">10</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> num_Modtwo <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">3</span><span style="color: #333333">;</span>
        results <span style="color: #333333">=</span> num_Modone <span style="color: #333333">%</span> num_Modtwo<span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Results using &#39; % &#39;operator , num_Modone and num_Modtwo = &quot;</span> <span style="color: #333333">+</span>results <span style="color: #333333">);</span>
        <span style="color: #888888">///////////////////////END///////////////////////////</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Results using ' + 'operator , num_One and num_Two = 6
Results using ' - 'operator , num_One and num_Two = 2
Results using ' * 'operator , num_One and num_Two = 8
Results using ' / 'operator , num_One and num_Two = 2
Results using ' % 'operator , num_Modone and num_Modtwo = 1
</pre>