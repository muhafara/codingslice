<div class="data_colour">
<h1 align="center">
<b>Data types in Java</b>
</h1></div>
<p>
In java, we have two types of "Data types", which are primitive data types and non-primitive data types. </p>
<h4><b><u>Primitive data types:</u></b></h4>
<p>In java primitives, data types are the most basic data types, which are eight in total. These eight primitives data types are int, short, long, byte, char, float, double and boolean.</p>
<h4><b><u>Non-primitives data types</u></b></h4>
<p>Classes, arrays, string and interface, are the example of non-primitive data types.</p>
<img src="\images\data-types-in-java.png" class="img-responsive" alt="Cinque Terre"><div class="data_colour">
<h1 align="center">
<b>Variables in Java</b>
</h1></div>
<p>
Variables are a way to store information on our computer. Variables that we define in a program can be located by the name we have given them, and the computer does the hard work of figuring out where they get stores in the computer random access memory( RAM). We need to tell the computer what type of information we want to store in the variable and then give it a name. We can also be described that variables are the name of Datatypes or simple; it is a name of the location in memory; it addresses memory that holds the value of defined variables in a program.
</p>
<h4><b><u>How to define and initialize variables in java.</u></b></h4>

<img src="\images\variable-in-java.png" class="img-responsive" alt="Cinque Terre">
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
53</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> variables<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">//Declaration and Initializing variable with int data type</span>
        <span style="color: #333399; font-weight: bold">int</span> intNumber<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">;</span>

        <span style="color: #888888">//Declaration and Initializing variable with short data type</span>
        <span style="color: #333399; font-weight: bold">short</span> shortNumber<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">;</span>

        <span style="color: #888888">//Declaration and Initializing variable with long data type</span>
        <span style="color: #333399; font-weight: bold">long</span> longNumber<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">;</span>

        <span style="color: #888888">//Declaration and Initializing variable with byte data type</span>
        <span style="color: #333399; font-weight: bold">byte</span> byteNumber<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">;</span>

        <span style="color: #888888">//Declaration and Initializing variable with float data type</span>
        <span style="color: #333399; font-weight: bold">float</span> floatNumber<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>f<span style="color: #333333">;</span>

        <span style="color: #888888">//Declaration and Initializing variable with double data type</span>
        <span style="color: #333399; font-weight: bold">double</span> doubleNumber<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>d<span style="color: #333333">;</span>

        <span style="color: #888888">//Declaration and Initializing variable with char data type</span>
        <span style="color: #333399; font-weight: bold">char</span> charCharacter<span style="color: #333333">=</span><span style="color: #0044DD">&#39;A&#39;</span><span style="color: #333333">;</span>

        <span style="color: #888888">//Declaration and Initializing Boolean with byte data type</span>
        <span style="color: #333399; font-weight: bold">boolean</span> isPresent<span style="color: #333333">=</span><span style="color: #008800; font-weight: bold">true</span><span style="color: #333333">;</span>


	     <span style="color: #888888">//Printing value for int data type</span>
           System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The value of integer &quot;</span> <span style="color: #333333">+</span>intNumber<span style="color: #333333">);</span>

        <span style="color: #888888">//Printing value for short data type</span>
           System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The value of short &quot;</span> <span style="color: #333333">+</span>shortNumber<span style="color: #333333">);</span>

        <span style="color: #888888">//Printing value for long data type</span>
           System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The value of long &quot;</span> <span style="color: #333333">+</span>longNumber<span style="color: #333333">);</span>

        <span style="color: #888888">//Printing value for byte data type</span>
           System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The value of byte &quot;</span> <span style="color: #333333">+</span>byteNumber<span style="color: #333333">);</span>

        <span style="color: #888888">//Printing value for float data type</span>
           System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The value of float &quot;</span> <span style="color: #333333">+</span>floatNumber<span style="color: #333333">);</span>

        <span style="color: #888888">//Printing value for double data type</span>
           System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The value of double &quot;</span> <span style="color: #333333">+</span>doubleNumber<span style="color: #333333">);</span>

        <span style="color: #888888">//Printing value for char data type</span>
           System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The value of character &quot;</span><span style="color: #333333">+</span> charCharacter<span style="color: #333333">);</span>

    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
The value of integer 1
The value of short 1
The value of long 1
The value of byte 1
The value of float 1.0
The value of double 1.0
The value of character A
</pre>