<div class="data_colour">
<h1 align="center">
<b>Assignment operator</b>
</h1></div>
<p>The assignment operator is used to assigning values.
<br>The table below shows the following assignment operator with the description.</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Operator</th>
      <th scope="col">Description</th>
      <th scope="col">Example</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">=</th>
      <td>simple assignning operator</td>
      <td>number_One = 2</td>
    </tr>
    <tr>
      <th scope="row">+=</th>
      <td>increment the value and then assign</td>
      <td>number_One + =</td>
    </tr>
    <tr>
      <th scope="row">-=</th>
      <td>decrement the value and then assign</td>
      <td>number_One - =</td>
    </tr>
	 <tr>
      <th scope="row">/=</th>
      <td>divide the value and then assign</td>
      <td>number_One / =</td>
    </tr>
	 <tr>
      <th scope="row">*=</th>
      <td>multiply the value and then assign</td>
      <td>number_One * =</td>
    </tr>
	 <tr>
      <th scope="row"> % =</th>
      <td>taking the modulus and then assign</td>
      <td>number_One%=</td>                                     \
    </tr>
	 <th scope="row"><<=</th>
      <td>bitwise(Left shift the operator and the asssign)</td>
      <td>number_One <<= </td>
    </tr>
	 <th scope="row">>>=</th>
      <td>bitwise(right shift the operator and the asssign)td>
      <td>number_One>>=</td>
    </tr>
	 <th scope="row">&=</th>
      <td>bitwise assignment operator</td>
      <td>number_One&=/</td>
    </tr> <th scope="row">^=</th>
      <td>bitwise exclusive OR assignment operator</td>
      <td>number_One^=</td>
    </tr>
	 <th scope="row">|=</th>
      <td>bitwise inclusive OR assignment operator</td>
      <td>number_One|=</td>
    </tr>
  </tbody>
</table>
<h4><b><u>Simple example using assignment operator in Java</u></b></h4>
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
63</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> assignment<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">//simple example using assignment operator in java</span>
        <span style="color: #888888">//declaring and initializing variables///////////////</span>
        <span style="color: #333399; font-weight: bold">int</span> num_One <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">4</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> num_Two <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> results<span style="color: #333333">;</span>
        <span style="color: #888888">////////////////Assignment Operator////////////////////////</span>

        <span style="color: #888888">/////////////////////////////Using &#39; = &#39;/////////////////////</span>
        <span style="color: #888888">/*</span>
<span style="color: #888888">         * Assignment the value of two operand</span>
<span style="color: #888888">         * add them</span>
<span style="color: #888888">         * assigned the value of two operand using &#39; = &#39;</span>
<span style="color: #888888">         * */</span>
        results <span style="color: #333333">=</span> num_One <span style="color: #333333">+</span> num_Two<span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Using the &#39; = &#39; to show result &quot;</span> <span style="color: #333333">+</span> results<span style="color: #333333">);</span>
        <span style="color: #888888">//////////////////////////////END////////////////////////////</span>

        <span style="color: #888888">/////////////////////////////Using &#39; += &#39;/////////////////////</span>
        <span style="color: #888888">/*</span>
<span style="color: #888888">         * result = 6;</span>
<span style="color: #888888">         * result = result +3;</span>
<span style="color: #888888">         * instead of writing this statement we can use += operator to get the same results.</span>
<span style="color: #888888">         * result += 3;</span>
<span style="color: #888888">         * we will get 9</span>
<span style="color: #888888">         * we can also use -=, *=, /=, %=</span>
<span style="color: #888888">         * for the same results</span>
<span style="color: #888888">         * */</span>
        <span style="color: #333333">;</span>
        results <span style="color: #333333">+=</span> <span style="color: #0000DD; font-weight: bold">3</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Using the &#39; += &#39; to show result &quot;</span> <span style="color: #333333">+</span> results<span style="color: #333333">);</span>
        <span style="color: #888888">//////////////////////////////END////////////////////////////</span>

        <span style="color: #888888">////////////////Using assignment bitwise operator///////////////</span>
        <span style="color: #888888">/*</span>
<span style="color: #888888">         * &lt;&lt;=</span>
<span style="color: #888888">         * &gt;&gt;=</span>
<span style="color: #888888">         * &amp;=</span>
<span style="color: #888888">         * ^=</span>
<span style="color: #888888">         * |=</span>
<span style="color: #888888">         */</span>
        results <span style="color: #333333">&lt;&lt;=</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Using &lt;&lt;=&quot;</span> <span style="color: #333333">+</span>results<span style="color: #333333">);</span>

        results <span style="color: #333333">&gt;&gt;=</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Using &gt;&gt;=&quot;</span> <span style="color: #333333">+</span>results<span style="color: #333333">);</span>

        results <span style="color: #333333">&amp;=</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Using &amp;=&quot;</span> <span style="color: #333333">+</span>results<span style="color: #333333">);</span>

        results <span style="color: #333333">^=</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Using ^=&quot;</span> <span style="color: #333333">+</span>results<span style="color: #333333">);</span>

        results <span style="color: #333333">|=</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Using |=&quot;</span> <span style="color: #333333">+</span>results<span style="color: #333333">);</span>


    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Using the ' = ' to show result 6
Using the ' += ' to show result 9
Using <<=36
Using >>=9
Using &=0
Using ^=2
Using |=2
</pre>