<div class="data_colour">
<h1 align="center">
<b>Methods of a Scanner Class</b>
</h1></div>
<p>
Java provides so many methods for scanner classes which are:
<p>


<img src="\images\methods-of-scanner-class.png" class="img-responsive" alt="Cinque Terre">

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Scanner Methods</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>int nextInt()</td>
      <td>It is used to scan the next token of the input as an integer.</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>float nextFloat()</td>
      <td>It is used to scan the next token of the input as a float.</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>double nextDouble()</td>
      <td>It is used to scan the next token of the input as a double.</td>
    </tr>
	<tr>
      <th scope="row">4</th>
      <td>byte nextByte()</td>
      <td>It is used to scan the next token of the input as a byte.</td>
    </tr>
	<tr>
      <th scope="row">5</th>
      <td>String nextLine()</td>
      <td>Advances this scanner past the current line.</td>
    </tr>
	<tr>
      <th scope="row">6</th>
      <td>boolean nextBoolean()</td>
      <td>It is used to scan the next token of the input as a boolean.</td>
    </tr>
	<tr>
      <th scope="row">7</th>
      <td>long nextLong()</td>
      <td>It is used to scan the next token of the input as a long.</td>
    </tr>
	<tr>
      <th scope="row">8</th>
      <td>short nextShort()</td>
      <td>It is used to scan the next token of the input as a short.</td>
    </tr>
	<tr>
      <th scope="row">9</th>
      <td>Biginteger nextBigInteger()</td>
      <td>It is used to scan the next token of the input as a BigInteger.</td>
    </tr>
	<tr>
      <th scope="row">10</th>
      <td>BigDecimal nextBigDecimal()</td>
      <td>It is used to scan the next token of the input as an BigDecimal.</td>
    </tr>
  </tbody>
</table>

<h4><b><u>Scanning an next integer using nextInt()</u></b></h4>
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
14</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> stringmethodinjava<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">import</span> <span style="color: #0e84b5; font-weight: bold">java.util.Scanner</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        Scanner scanner <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> Scanner<span style="color: #333333">(</span>System<span style="color: #333333">.</span><span style="color: #0000CC">in</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Please ! Enter an Integer&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333399; font-weight: bold">int</span> number <span style="color: #333333">=</span> scanner<span style="color: #333333">.</span><span style="color: #0000CC">nextInt</span><span style="color: #333333">();</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Your Integer is &quot;</span> <span style="color: #333333">+</span>number<span style="color: #333333">);</span>
        scanner<span style="color: #333333">.</span><span style="color: #0000CC">close</span><span style="color: #333333">();</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Please ! Enter an Integer
8
Your Integer is 8
</pre>

<h4><b><u>Scanning a next float using nextFloat()</u></b></h4>
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
14</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> stringmethodinjava<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">import</span> <span style="color: #0e84b5; font-weight: bold">java.util.Scanner</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        Scanner scanner <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> Scanner<span style="color: #333333">(</span>System<span style="color: #333333">.</span><span style="color: #0000CC">in</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Please ! Enter a Float number&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333399; font-weight: bold">float</span> floatNumber <span style="color: #333333">=</span> scanner<span style="color: #333333">.</span><span style="color: #0000CC">nextFloat</span><span style="color: #333333">();</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Your Float number is &quot;</span> <span style="color: #333333">+</span>floatNumber<span style="color: #333333">);</span>
        scanner<span style="color: #333333">.</span><span style="color: #0000CC">close</span><span style="color: #333333">();</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">

Please ! Enter a Float number
8.0
Your Float number is 8.0
</pre>

<h4><b><u>Scanning a next double using nextDouble()</u></b></h4>
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
14</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> stringmethodinjava<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">import</span> <span style="color: #0e84b5; font-weight: bold">java.util.Scanner</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        Scanner scanner <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> Scanner<span style="color: #333333">(</span>System<span style="color: #333333">.</span><span style="color: #0000CC">in</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Please ! Enter a Double number&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333399; font-weight: bold">double</span> doubleNumber <span style="color: #333333">=</span> scanner<span style="color: #333333">.</span><span style="color: #0000CC">nextDouble</span><span style="color: #333333">();</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Your double number is &quot;</span> <span style="color: #333333">+</span>doubleNumber<span style="color: #333333">);</span>
        scanner<span style="color: #333333">.</span><span style="color: #0000CC">close</span><span style="color: #333333">();</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Please ! Enter a Double number
85.154
Your double number is 85.154

</pre>

<h4><b><u>Scanning a next byte using nextByte()</u></b></h4>
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
14</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> stringmethodinjava<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">import</span> <span style="color: #0e84b5; font-weight: bold">java.util.Scanner</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        Scanner scanner <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> Scanner<span style="color: #333333">(</span>System<span style="color: #333333">.</span><span style="color: #0000CC">in</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Please ! Enter a byte number&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333399; font-weight: bold">byte</span> byteNumber <span style="color: #333333">=</span> scanner<span style="color: #333333">.</span><span style="color: #0000CC">nextByte</span><span style="color: #333333">();</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Your byte number is &quot;</span> <span style="color: #333333">+</span>byteNumber<span style="color: #333333">);</span>
        scanner<span style="color: #333333">.</span><span style="color: #0000CC">close</span><span style="color: #333333">();</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Please ! Enter a byte number
45
Your byte number is 45
</pre>

<h4><b><u>Scanning a next line using nextLine()</u></b></h4>
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
14</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> stringmethodinjava<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">import</span> <span style="color: #0e84b5; font-weight: bold">java.util.Scanner</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        Scanner scanner <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> Scanner<span style="color: #333333">(</span>System<span style="color: #333333">.</span><span style="color: #0000CC">in</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Please ! Enter a name&quot;</span><span style="color: #333333">);</span>
        String name <span style="color: #333333">=</span> scanner<span style="color: #333333">.</span><span style="color: #0000CC">nextLine</span><span style="color: #333333">();</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Your name is &quot;</span> <span style="color: #333333">+</span>name<span style="color: #333333">);</span>
        scanner<span style="color: #333333">.</span><span style="color: #0000CC">close</span><span style="color: #333333">();</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Please ! Enter a name
Codingslice
Your byte number is Codingslice
</pre>
