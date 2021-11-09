<div class="data_colour">
<h1 align="center">
<b>Shift operator in Java</b>
</h1></div>
<p>
A shift operator performs bit manipulation on data by shifting the bits either on the right or left. Each operator moves the first operand's bits over by the number of positions indicated by the second operand.
</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Operator</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> << </th>
      <td>This operator is used to shift all of the bits to the left side of a specified number of times.</td>
    </tr>
    <tr>
      <th scope="row"> >> </th>
      <td>This operator >> is used to move left operands value to right by the number of bits specified by the right operand.</td>
    </tr>
    <tr>
      <th scope="row"> >>> </th>
      <td>It work same as a java right operator for positive value but for negative number, >>> changes parity bit (MSB) to 0  </td>
    </tr>
  </tbody>
</table>

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
28</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> shift<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">//simple example using shift operator in java</span>
        <span style="color: #888888">//declaring and initializing variables///////////////</span>
        <span style="color: #333399; font-weight: bold">int</span> numOne <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">60</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Binary of numOne &quot;</span> <span style="color: #333333">+</span> Integer<span style="color: #333333">.</span><span style="color: #0000CC">toBinaryString</span><span style="color: #333333">(</span>numOne<span style="color: #333333">));</span>
        <span style="color: #888888">//////////////////Right Shift operator////////////////</span>
        <span style="color: #333399; font-weight: bold">int</span> result <span style="color: #333333">=</span> numOne <span style="color: #333333">&gt;&gt;</span> <span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Right shift operator &quot;</span> <span style="color: #333333">+</span> result <span style="color: #333333">+</span> <span style="background-color: #fff0f0">&quot; Binary &quot;</span> <span style="color: #333333">+</span> Integer<span style="color: #333333">.</span><span style="color: #0000CC">toBinaryString</span><span style="color: #333333">(</span>result<span style="color: #333333">));</span>
        <span style="color: #888888">/////////////////////////////END/////////////////////</span>

        <span style="color: #888888">// ////////////////Left Shift operator////////////////</span>
        <span style="color: #333399; font-weight: bold">int</span> numLeft <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">60</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> resultTwo <span style="color: #333333">=</span> numLeft <span style="color: #333333">&lt;&lt;</span> <span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Left shift operator &quot;</span> <span style="color: #333333">+</span> resultTwo <span style="color: #333333">+</span> <span style="background-color: #fff0f0">&quot; Binary &quot;</span> <span style="color: #333333">+</span> Integer<span style="color: #333333">.</span><span style="color: #0000CC">toBinaryString</span><span style="color: #333333">(</span>resultTwo<span style="color: #333333">));</span>
        <span style="color: #888888">/////////////////////////////END/////////////////////</span>

        <span style="color: #888888">// ////////////////&gt;&gt;&gt; Shift operator////////////////</span>
        <span style="color: #333399; font-weight: bold">int</span> numRight <span style="color: #333333">=</span> <span style="color: #333333">-</span><span style="color: #0000DD; font-weight: bold">60</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Binary of numOne &quot;</span> <span style="color: #333333">+</span> Integer<span style="color: #333333">.</span><span style="color: #0000CC">toBinaryString</span><span style="color: #333333">(</span>numRight<span style="color: #333333">));</span>
        <span style="color: #333399; font-weight: bold">int</span> resultThree <span style="color: #333333">=</span> numRight <span style="color: #333333">&gt;&gt;&gt;</span> <span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Left shift operator &quot;</span> <span style="color: #333333">+</span> resultThree <span style="color: #333333">+</span> <span style="background-color: #fff0f0">&quot; Binary &quot;</span> <span style="color: #333333">+</span> Integer<span style="color: #333333">.</span><span style="color: #0000CC">toBinaryString</span><span style="color: #333333">(</span>resultThree<span style="color: #333333">));</span>
        <span style="color: #888888">/////////////////////////////END/////////////////////</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Binary of numOne 111100
Right shift operator 30 Binary 11110
Left shift operator 120 Binary 1111000
Binary of numOne 11111111111111111111111111000100
Left shift operator 2147483618 Binary 1111111111111111111111111100010
</pre>