<div class="data_colour">
<h1 align="center">
<b>Float and double data types in java</b>
</h1></div>
<p>
A Float in "Java" is a number that has a fractional part or decimal place. It is the short term floating-point. It can be either positive or negative. An example of the float is 37.5. Float and double is also a reserved keyword in java.
</p>
<h4><b><u>Float data types and Sizes:</u></b></h4>
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
      <td>float</td>
      <td>4 bytes</td>
      <td>4 bytes</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>double</td>
      <td>8 bytes</td>
      <td>8 bytes</td>
    </tr>
  </tbody>
  </table>
  
  <h4><b><u>Maximum and minimum value of float data type</u></b></h4>
  <p>
  A float is a type of primitive data type with a minimum value of 1.4E-45, and a maximum value is 3.4028235E38.  Its default value is 0.0F.
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
15</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> datatypes<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
	    <span style="color: #888888">//declaring a byte variable to check its maximum and minimum value</span>
        <span style="color: #333399; font-weight: bold">float</span>  floatMinimumValue <span style="color: #333333">=</span>  Float<span style="color: #333333">.</span><span style="color: #0000CC">MIN_VALUE</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">float</span>  floatMaximumValue <span style="color: #333333">=</span>  Float<span style="color: #333333">.</span><span style="color: #0000CC">MAX_VALUE</span><span style="color: #333333">;</span>

        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The maximum value of float in Java is &quot;</span> <span style="color: #333333">+</span>floatMaximumValue<span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The minimum value of float in Java is &quot;</span> <span style="color: #333333">+</span>floatMinimumValue<span style="color: #333333">);</span>


    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
The maximum value of long in Java is 3.4028235E38
The minimum value of long in Java is 1.4E-45
</pre>
  
  <h4><b><u>Maximum and minimum value of double data type</u></b></h4>
  <p>
  A doubles a type of primitive data type with a minimum value of 4.9E-324, and a maximum value is 1.7976931348623157E308.  Its default value is 0.0d.
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
15</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> datatypes<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
	    <span style="color: #888888">//declaring a byte variable to check its maximum and minimum value</span>
        <span style="color: #333399; font-weight: bold">double</span> doubleMinimumValue <span style="color: #333333">=</span>  Double<span style="color: #333333">.</span><span style="color: #0000CC">MIN_VALUE</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">double</span> doubleMaximumValue <span style="color: #333333">=</span>  Double<span style="color: #333333">.</span><span style="color: #0000CC">MAX_VALUE</span><span style="color: #333333">;</span>

        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The maximum value of double in Java is &quot;</span> <span style="color: #333333">+</span>doubleMaximumValue<span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The minimum value of double in Java is &quot;</span> <span style="color: #333333">+</span>doubleMinimumValue<span style="color: #333333">);</span>


    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
The maximum value of double in Java is 1.7976931348623157E308
The minimum value of double in Java is 4.9E-324
</pre>
