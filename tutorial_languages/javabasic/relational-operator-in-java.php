<div class="data_colour">
<h1 align="center">
<b>Relational operator</b>
</h1></div>
<p>A relational operator checks equality, check if the value of one operand is greater than or less other. <br>The table below shows the following operator with description.</p>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Operator</th>
      <th scope="col">Description</th>
      <th scope="col">Example (number_One = 8,number_Two = 4)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">==</th>
      <td>Check if two operands are equal</td>
      <td>number_One = number_Two (Condition false)</td>
    </tr>
    <tr>
      <th scope="row">!=</th>
      <td>Check if two operands are not equal</td>
      <td>number_One ! = number_Two (Condition true)</td>
    </tr>
    <tr>
      <th scope="row">></th>
      <td>Check if operand on left side is greater than operator on right side</td>
      <td>number_One > number_Two (Condition true)</td>
    </tr>
	 <tr>
      <th scope="row"><</th>
      <td>Check if operand on right side is greater than operator on left side</td>
      <td>number_One (<) number_Two (Condition false)</td>
    </tr>
	 <tr>
      <th scope="row"><=</th>
      <td>Check if operand on right side is greater than or equal to the operator on left side</td>
      <td>number_One (<=) number_Two (Condition false)</td>
    </tr>
	 <tr>
      <th scope="row">>=</th>
      <td>Check if operand on left side is greater than or equal to the operator on right side</td>
      <td>number_One > = num_Two(Condition false)</td>
    </tr>
  </tbody>
</table>
<h4><b><u>Simple example using relational operator in Java</u></b></h4>
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
43</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> relational<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">//simple example using relational operator in java</span>
        <span style="color: #888888">//declaring and initializing variables///////////////</span>
        <span style="color: #333399; font-weight: bold">int</span> num_One <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">4</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> num_Two <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> results<span style="color: #333333">;</span>

        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;........................Relational Operator.......................&quot;</span><span style="color: #333333">);</span>
        <span style="color: #888888">/*</span>
<span style="color: #888888">         * In this program</span>
<span style="color: #888888">         * we will check several conditions using a relational operator</span>
<span style="color: #888888">         * number one =8</span>
<span style="color: #888888">         * number two =4</span>
<span style="color: #888888">         * */</span>
        <span style="color: #888888">//if number one is equal to number two.....(num_One=8 num_Two=4)</span>
        <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>num_One <span style="color: #333333">==</span> num_Two<span style="color: #333333">)</span> <span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Number one and number two are equal&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #888888">//if number one is not equal to number two.....(num_One=8 num_Two=4)</span>
        <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>num_One <span style="color: #333333">!=</span> num_Two<span style="color: #333333">)</span> <span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;one and number two are not equal&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #888888">//if number one is less than number two.....(num_One=8 num_Two=4)</span>
        <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>num_One <span style="color: #333333">&lt;</span> num_Two<span style="color: #333333">)</span> <span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Number one is less than number two&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #888888">//if number one is greater then number two.....(num_One=8 num_Two=4)</span>
        <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>num_One <span style="color: #333333">&gt;</span> num_Two<span style="color: #333333">)</span> <span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Number one is greater than number two&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #888888">//if number one is less than or equal to number two.....(num_One=8 num_Two=4)</span>
        <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>num_One <span style="color: #333333">&lt;=</span> num_Two<span style="color: #333333">)</span> <span style="color: #333333">{</span>
            System<span style="color: #333333">.</span> out<span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Number one is less or equal to number two&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>num_One<span style="color: #333333">&gt;=</span>num_Two<span style="color: #333333">){</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Number one is greater or equal to number two&quot;</span><span style="color: #333333">);</span>
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
........................Relational Operator.......................
one and number two are not equal
Number one is greater than number two
Number one is greater or equal to number two
</pre>