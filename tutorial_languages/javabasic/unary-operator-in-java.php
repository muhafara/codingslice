<div class="data_colour">
<h1 align="center">
<b>Unary operator in Java</b>
</h1></div>
<p>
Unary operators are used to incrementing the value of operand, decrementing the value of operand, inverting the boolean values, nullifying an expression. The unary operator can be used in postfix and prefix.
</p>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Operator</th>
      <th scope="col">Description</th>
      <th scope="col">Example </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>exp++</td>
      <td>add one to the value of operend</td>
      <td>int myNun = 2, muNum++</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>exp--</td>
      <td>substract one from the value of operend</td>
      <td>int number = 2, number--</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>++exp</td>
      <td>increment the value quickly</td>
      <td>int myNum = 2, ++myNum</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>--exp</td>
      <td>decrement the value quickly</td>
      <td>int myNum = 2, --myNum</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>-exp</td>
      <td>it is used to represent the negitive value and it convert the negative value to the positive and positive to negitive value</td>
      <td>int myNum = 2, -myNum</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>+exp</td>
      <td>it is used to represent the positive value.</td>
      <td>int myNum = 2, +myNum</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>~</td>
      <td>This unary operator returns the one’s entirety representation of the input operand, i.e., with all bits inverted, it means it makes every 0 to 1 and every 1 to 0.</td>
      <td>int myNum = 2, ~myNum </td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>!</td>
      <td>it is used to convert true to false or vice versa</td>
      <td>if(!1-1=0)</td>
    </tr>
  </tbody>
</table>
<h4><b><u>Simple example using unary operators in Java</u></b></h4>
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
60</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> unaryop<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>

        <span style="color: #888888">//////////////////Simple example using unary operator in java///////////////////////////////</span>

        <span style="color: #888888">////////////////////using ++ operator///////////////////////////////////////////////////////</span>
        <span style="color: #333399; font-weight: bold">int</span> myNum <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">;</span>
        myNum<span style="color: #333333">++;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This results using unary ++ operator: &quot;</span> <span style="color: #333333">+</span>myNum<span style="color: #333333">);</span>
        <span style="color: #888888">//////////////////////////////////////////END////////////////////////////////////////////////</span>


        <span style="color: #888888">////////////////////using -- operator///////////////////////////////////////////////////////</span>
        <span style="color: #888888">/*</span>
<span style="color: #888888">        * myNum value after increment is 3</span>
<span style="color: #888888">        * Lets use -- unary operator</span>
<span style="color: #888888">        * */</span>
        myNum<span style="color: #333333">--;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This is the result using unary -- operator:  &quot;</span><span style="color: #333333">+</span>myNum<span style="color: #333333">);</span>
        <span style="color: #888888">//////////////////////////////////////////END////////////////////////////////////////////////</span>

        <span style="color: #888888">////////////////////using ++ before operand operator/////////////////////////////////////////</span>
        <span style="color: #888888">/*</span>
<span style="color: #888888">         *myNum value after decrement is 2</span>
<span style="color: #888888">         * Lets use ++ unary operator before the operand</span>
<span style="color: #888888">         * The value of myNum should be 3 when we use ++ before the myNum</span>
<span style="color: #888888">         * */</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This is the result using unary ++ before the operand: &quot;</span><span style="color: #333333">+</span> <span style="color: #333333">++</span>myNum<span style="color: #333333">);</span>
        <span style="color: #888888">//////////////////////////////////////////END////////////////////////////////////////////////</span>

        <span style="color: #888888">//////////////////using -- before operand operator/////////////////////////////////////////</span>
        <span style="color: #888888">/*</span>
<span style="color: #888888">         *myNum value after using ++ operator before myNum is 3</span>
<span style="color: #888888">         * Lets use -- unary operator before the operand</span>
<span style="color: #888888">         * The value of myNum should be 2 when we use -- before the myNum</span>
<span style="color: #888888">         * */</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This is the result using unary -- before the operand: &quot;</span><span style="color: #333333">+</span> <span style="color: #333333">--</span>myNum<span style="color: #333333">);</span>
        <span style="color: #888888">//////////////////////////////////////////END////////////////////////////////////////////////</span>

        <span style="color: #888888">//////////////////using - before operand operator/////////////////////////////////////////</span>
        <span style="color: #888888">/*</span>
<span style="color: #888888">         *myNum value after using - operator before myNum</span>
<span style="color: #888888">         * Lets use - unary operator before the operand</span>
<span style="color: #888888">         * */</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This is the result using unary - before the operand: &quot;</span><span style="color: #333333">+</span> <span style="color: #333333">-</span>myNum<span style="color: #333333">);</span>
        <span style="color: #888888">//////////////////////////////////////////END////////////////////////////////////////////////</span>

        <span style="color: #888888">//////////////////using + before operand operator/////////////////////////////////////////</span>
        <span style="color: #888888">/*</span>
<span style="color: #888888">         *myNum value after using + operator before myNum</span>
<span style="color: #888888">         * Lets use + unary operator before the operand</span>
<span style="color: #888888">         * + unary operator represents positive value</span>
<span style="color: #888888">         * */</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This is the result using unary + before the operand: &quot;</span><span style="color: #333333">+</span> <span style="color: #333333">+</span>myNum<span style="color: #333333">);</span>
        <span style="color: #888888">//////////////////////////////////////////END////////////////////////////////////////////////</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">

This results using unary ++ operator: 3
This is the result using unary -- operator:  2
This is the result using unary ++ before the operand: 3
This is the result using unary ++ before the operand: 2
This is the result using unary - before the operand: -2
This is the result using unary + before the operand: 2
</pre>

<h4><b><u>Simple example using unary ! in Java</u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%"> 1
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
35</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> unaryop<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">//Simple example using unary ! in jav a program</span>

        <span style="color: #333399; font-weight: bold">int</span> numfirst <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> numSecond <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">4</span><span style="color: #333333">;</span>

        <span style="color: #888888">/*</span>
<span style="color: #888888">        * In this example</span>
<span style="color: #888888">        * we will going to use unary ! inside if-statement to reverse the result</span>
<span style="color: #888888">        * */</span>

        <span style="color: #888888">////////////////if-else statement without the unary &quot;!&quot;////////////////////</span>
        <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>numfirst <span style="color: #333333">==</span> numSecond<span style="color: #333333">){</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;First and second numbers two are equal&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #008800; font-weight: bold">else</span><span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;First and second numbers are not equal&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #888888">//////////////////////////////////////END///////////////////////////////////</span>

        <span style="color: #888888">////////////////if-else with unary &quot;!&quot; //////////////////////////////////////////</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Results after using unary ! operator&quot;</span><span style="color: #333333">);</span>
        <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(!(</span>numfirst <span style="color: #333333">==</span> numSecond<span style="color: #333333">)){</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;First and second numbers two are equal&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #008800; font-weight: bold">else</span><span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;First and second numbers are not equal&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #888888">/////////////////////////////////////END//////////////////////////////////////</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
First and second numbers are not equal
Results after using unary ! operator
First and second numbers two are equal
</pre>
<h4><b><u>Simple example using unary ~ for bitwise</u></b></h4>
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
11</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> unaryop<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #333399; font-weight: bold">int</span> num <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Bitwise compliment, minus of total positive value which start from zero &quot;</span> <span style="color: #333333">+~</span>num<span style="color: #333333">);</span>
        <span style="color: #333399; font-weight: bold">int</span> numOne <span style="color: #333333">=-</span><span style="color: #0000DD; font-weight: bold">3</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Bitwise compliment, positive of total minus, positive starts from zero &quot;</span> <span style="color: #333333">+~</span>numOne<span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Bitwise compliment, minus of total positive value which start from zero -3
Bitwise compliment, positive of total minus, positive starts from zero 2
</pre>