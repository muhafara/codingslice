<div class="data_colour">
<h1 align="center">
<b>int, short, long and byte data type in Java</b>
</h1></div>
<p>An Integer is a whole number. It has no fractional part, and it can either be positive or negative. An integer can be a single digit, zero, or the value of something. Some of the examples of the integer are 0, 15, -87 etc. In java language, we use "int" to define and declare a variable, and it also is a reserved keyword. Integer allows us to store a numeric value for the variable. For integers in java, we use int, short, long and byte.</p>
<h4><b><u>Integer data types and Sizes:</u></b></h4>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Type Name</th>
      <th scope="col">32-bit</th>
      <th scope="col">64-bit</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row"></th>
      <td>byte</td>
      <td>1 bytes</td>
      <td>1 byte</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>short</td>
      <td>2 byte</td>
      <td>2 byte</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>int</td>
      <td>4 byte</td>
      <td>4 byte</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>long</td>
      <td>8 byte</td>
      <td>8 byte</td>
    </tr>
  </tbody>
</table>
<h4><b><u>Maximum and minimum values for byte data types</u></b></h4>
<p>
A byte is a type of primitive data type with a minimum value of -128, and a maximum value is 127.  It is four times smaller than int ( integer ), and its default value is zero ( 0 ).
</p>
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
15</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> datatype<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
	    <span style="color: #888888">//declaring a byte variable to check its maximum and minimum value</span>
        <span style="color: #333399; font-weight: bold">byte</span> byteMinimumValue <span style="color: #333333">=</span> Byte<span style="color: #333333">.</span><span style="color: #0000CC">MIN_VALUE</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">byte</span> byteMaximumValue <span style="color: #333333">=</span> Byte<span style="color: #333333">.</span><span style="color: #0000CC">MAX_VALUE</span><span style="color: #333333">;</span>

        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The maximum value of byte in Java is &quot;</span> <span style="color: #333333">+</span>byteMaximumValue<span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The minimum value of byte in Java is &quot;</span> <span style="color: #333333">+</span>byteMinimumValue<span style="color: #333333">);</span>


    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
The maximum value of byte in Java is 127
The minimum value of byte in Java is -128
</pre>

<h4><b><u>Maximum and minimum values for short data types</u></b></h4>
<p>
A short is a type of primitive data type with a minimum value of -32768, and a maximum value is 32767.  It is two times smaller than int ( integer ), and its default value is zero ( 0 ).
</p>
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
15</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> variables<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
	    <span style="color: #888888">//declaring a byte variable to check its maximum and minimum value</span>
        <span style="color: #333399; font-weight: bold">short</span> shortMinimumValue <span style="color: #333333">=</span> Short<span style="color: #333333">.</span><span style="color: #0000CC">MIN_VALUE</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">short</span> shortMaximumValue <span style="color: #333333">=</span> Short<span style="color: #333333">.</span><span style="color: #0000CC">MAX_VALUE</span><span style="color: #333333">;</span>

        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The maximum value of short in Java is &quot;</span> <span style="color: #333333">+</span>shortMaximumValue<span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The minimum value of short in Java is &quot;</span> <span style="color: #333333">+</span>shortMinimumValue<span style="color: #333333">);</span>


    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
The maximum value of short in Java is 32767
The minimum value of short in Java is -32768
</pre>

<h4><b><u>Maximun and minimum values for int data types</u></b></h4>
<p>
An int is a type of primitive data type with a minimum value of -2147483648, and a maximum value is 2147483647. Mainly it is used as a default data type for integers values.
</p>
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
15</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> variables<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
	    <span style="color: #888888">//declaring a byte variable to check its maximum and minimum value</span>
        <span style="color: #333399; font-weight: bold">int</span> intMinimumValue <span style="color: #333333">=</span> Integer<span style="color: #333333">.</span><span style="color: #0000CC">MIN_VALUE</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> intMaximumValue <span style="color: #333333">=</span> Integer<span style="color: #333333">.</span><span style="color: #0000CC">MAX_VALUE</span><span style="color: #333333">;</span>

        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The maximum value of int in Java is &quot;</span> <span style="color: #333333">+</span>intMaximumValue<span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The minimum value of int in Java is &quot;</span> <span style="color: #333333">+</span>intMinimumValue<span style="color: #333333">);</span>


    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
The maximum value of int in Java is 2147483647
The minimum value of int in Java is -2147483648
</pre>

<h4><b><u>Maximum and minimum values for long data types</u></b></h4>
<p>
Long is a type of primitive data type with a minimum value of -9223372036854775808 and a maximum value is 9223372036854775807. Mainly it is used we need more storage provided by int.
</p>
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
15</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> variables<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
	    <span style="color: #888888">//declaring a byte variable to check its maximum and minimum value</span>
        <span style="color: #333399; font-weight: bold">long</span> longMinimumValue <span style="color: #333333">=</span> Long<span style="color: #333333">.</span><span style="color: #0000CC">MIN_VALUE</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">long</span> longMaximumValue <span style="color: #333333">=</span> Long<span style="color: #333333">.</span><span style="color: #0000CC">MAX_VALUE</span><span style="color: #333333">;</span>

        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The maximum value of long in Java is &quot;</span> <span style="color: #333333">+</span>longMaximumValue<span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The minimum value of long in Java is &quot;</span> <span style="color: #333333">+</span>longMinimumValue<span style="color: #333333">);</span>


    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
The maximum value of long in Java is 9223372036854775807
The minimum value of long in Java is -9223372036854775808
</pre>

<h4><b><u>Over flow and under flow for byte, int, short and long</u></b></h4>
<p>
In byte, short, int and long, if the value is less than their minimum value, then it's called underflow, and if the value is greater than the maximum value, then it's called overflow. 
For example, the minimum value for the byte data type is -128. If a value below -128 is assigned to byte, its underflow and value can't be assigned.
The maximum value for the byte data type is 127. If a value above 127 is assigned to a byte, its overflow and value can not be assigned.   
</p>