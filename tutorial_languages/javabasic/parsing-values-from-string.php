<div class="data_colour">
<h1 align="center">
<b>Parsing values from string</b>
</h1></div>
<p>
Parsing a value from a string means converting the value of one data type to another. For example, we have a string with a value of 50 as we know strings are represented as Unicode characters. This value of string 50 is not a number as 50. It's '5' and '0'. We can parse this Unicode character of a string into an integer at runtime and convert it into an integer by using Integr.parseInt () method. 
</p>

<h4><b><u>Parsing values from string to Integer</u></b></h4>
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
21</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> stringmethodinjava<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>

        <span style="color: #888888">//Declare and initialize as a string</span>
        String stringForInt <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;50&quot;</span><span style="color: #333333">;</span>


       <span style="color: #888888">/////////////////////////////Parsing string into Integer///////////////////////////////////////////////////</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;**************************************************************************************&quot;</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;String for char before Parsing&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333399; font-weight: bold">int</span> getCharForInt <span style="color: #333333">=</span>Integer<span style="color: #333333">.</span><span style="color: #0000CC">parseInt</span><span style="color: #333333">(</span>stringForInt<span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Parsing char string as a Integer &quot;</span><span style="color: #333333">+</span>getCharForInt<span style="color: #333333">);</span>
        getCharForInt <span style="color: #333333">+=</span> <span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Increment the value of char string after parsing to see if its works...!&quot;</span> <span style="color: #333333">+</span>getCharForInt<span style="color: #333333">);</span>
        <span style="color: #888888">///////////////////////////////////////////////////////////////////////////////////////////////////////////</span>

    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
**************************************************************************************
String for char before Parsing
Parsing char string as a Integer 50
Increment the value of char string after parsing to see if its works...!51

</pre>

<h4><b><u>Parsing value from String to Float</u></b></h4>
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
17</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> stringmethodinjava<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        String stringForFloat <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;40.0&quot;</span><span style="color: #333333">;</span>
        <span style="color: #888888">/////////////////////////////Parsing string into Float///////////////////////////////////////////////////</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;**************************************************************************************&quot;</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;String for float before Parsing&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333399; font-weight: bold">float</span> getCharForFloat <span style="color: #333333">=</span>Float<span style="color: #333333">.</span><span style="color: #0000CC">parseFloat</span><span style="color: #333333">(</span>stringForFloat<span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Parsing char string as a Integer &quot;</span><span style="color: #333333">+</span>getCharForFloat<span style="color: #333333">);</span>
        getCharForFloat <span style="color: #333333">+=</span> <span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Increment the value of char string after parsing to see if its works...!&quot;</span> <span style="color: #333333">+</span>getCharForFloat<span style="color: #333333">);</span>

        <span style="color: #888888">///////////////////////////////////////////////////////////////////////////////////////////////////////////</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
**************************************************************************************
String for float before Parsing
Parsing char string as a Integer 40.0
Increment the value of char string after parsing to see if its works...!41.0
</pre>
<h4><b><u>Parsing values from String to Double</u></b></h4>
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
18</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> stringmethodinjava<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        String stringForDouble <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;30.0&quot;</span><span style="color: #333333">;</span>

        <span style="color: #888888">/////////////////////////////Parsing string into Double///////////////////////////////////////////////////</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;**************************************************************************************&quot;</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;String for double before Parsing&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333399; font-weight: bold">double</span> getCharForDouble <span style="color: #333333">=</span> Double<span style="color: #333333">.</span><span style="color: #0000CC">parseDouble</span><span style="color: #333333">(</span>stringForDouble<span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Parsing char string as a Integer &quot;</span><span style="color: #333333">+</span>getCharForDouble<span style="color: #333333">);</span>
        getCharForDouble <span style="color: #333333">+=</span> <span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Increment the value of char string after parsing to see if its works...!&quot;</span> <span style="color: #333333">+</span>getCharForDouble<span style="color: #333333">);</span>

        <span style="color: #888888">///////////////////////////////////////////////////////////////////////////////////////////////////////////</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
**************************************************************************************
String for double before Parsing
Parsing char string as a Integer 30.0
Increment the value of char string after parsing to see if its works...!31.0
</pre>