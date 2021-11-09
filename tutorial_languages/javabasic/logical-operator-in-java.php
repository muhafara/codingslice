<div class="data_colour">
<h1 align="center">
<b>Logical operator in Java</b>
</h1></div>
<p>Logical operators don't perform any specific mathematical operator. It is an expression which contains a logical operator which return either true or false like relational operator.
<br>The table below shows the following operator with description.</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Operator</th>
      <th scope="col">Description</th>
      <th scope="col">Example (num_On=8,num_Two=4)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">&&</th>
      <td>(AND) Check if two statements or operands satisfy any condition</td>
      <td>num_One=8&&statement_Two=4 (both of the condition needs to be true) </td>
    </tr>
    <tr>
      <th scope="row">||</th>
      <td>(OR) Check if one of the two statements or operands satisfy any condition</td>
      <td>number_Onenumber=8||num_Two=4(one of the condition needs to be true)</td>
    </tr>	 
  </tbody>
</table>
<h4><b><u>Simple example using logical operator in Java</u></b></h4>
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
39</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> logical<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">//simple example using logial operator in java</span>
        <span style="color: #888888">//declaring and initializing variables///////////////</span>
        <span style="color: #333399; font-weight: bold">int</span> num_One <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">8</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> num_Two <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">4</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> results<span style="color: #333333">;</span>

        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;........................Logical Operator.......................&quot;</span><span style="color: #333333">);</span>
        <span style="color: #888888">/*</span>
<span style="color: #888888">         * In this program</span>
<span style="color: #888888">         * we will check several conditions using a logical operator</span>
<span style="color: #888888">         * number one =8</span>
<span style="color: #888888">         * number two =4</span>
<span style="color: #888888">         * */</span>
        <span style="color: #888888">//////////////////////////////Logical AND &amp;&amp;////////////////////////////////////////</span>
        <span style="color: #888888">/*</span>
<span style="color: #888888">        * For logical AND all the condition must be true</span>
<span style="color: #888888">        * */</span>

        <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">((</span>num_One <span style="color: #333333">==</span> <span style="color: #0000DD; font-weight: bold">8</span> <span style="color: #333333">)</span> <span style="color: #333333">&amp;&amp;</span> <span style="color: #333333">(</span>num_Two <span style="color: #333333">==</span> <span style="color: #0000DD; font-weight: bold">4</span><span style="color: #333333">)){</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Number is equal to 8 and number 4 is equal to 4 both condition are true&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #888888">//////////////////////////////////END//////////////////////////////////////////////</span>

        <span style="color: #888888">//////////////////////////////Logical OR || ////////////////////////////////////////</span>
        <span style="color: #888888">/*</span>
<span style="color: #888888">         * For logical OR one of the condition must be true</span>
<span style="color: #888888">         * */</span>

        <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">((</span>num_One <span style="color: #333333">==</span> <span style="color: #0000DD; font-weight: bold">2</span> <span style="color: #333333">)</span> <span style="color: #333333">||</span> <span style="color: #333333">(</span>num_Two <span style="color: #333333">==</span> <span style="color: #0000DD; font-weight: bold">4</span><span style="color: #333333">)){</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Number is not equal to 2 and number 4 is equal to 4 onr of the condition must be true&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #888888">//////////////////////////////////END//////////////////////////////////////////////</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
........................Logical Operator.......................
Number is equal to 8 and number 4 is equal to 4 both condition are true
Number is not equal to 2 and number 4 is equal to 4 one of the condition must be true

</pre>