<div class="data_colour">
<h1 align="center">
<b>Scanner class in Java</b>
</h1></div>
<p>
The scanner is a built class in java, and it belongs to the package java.util. This class allows the user to write on a console as an input later for program purposes. This class could read the input of different primitive types such as int, char, float, short, double and long.
<br><br>
Before working with the scanner class, we need to look at three different java streams: System.in, System.out, System.err. 
<br><br>
While working with these streams, we don't have to initialize them because these streams are initialized by the Java runtime when a Java VM starts up.

</p> 
<h4><b><u>System.In:</u></b></h4>
<p>It is an Input stream that works with the keyboard. For example, Everything written on the console is taken as an input and read by this stream</p>
<h4><b><u>System.out:</u></b></h4>
<p>It is a Print Stream to which you can write or display characters on the console.  System.out is mainly used for a console, the only program to show the results of a program.</p>
<h4><b><u>System.err</u></b></h4>
<p>It is also a Print Stream. It works the same as System.out, but it mainly shows the error result. By using this stream, we can make sure the result on the console is an error text.</p>


<h4><b><u>How to take input and show output in java using Scanner Class</u></b></h4>
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
23</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> scanner<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">import</span> <span style="color: #0e84b5; font-weight: bold">java.util.Scanner</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>

        <span style="color: #888888">/*</span>
<span style="color: #888888">        * Scanner Class</span>
<span style="color: #888888">        *</span>
<span style="color: #888888">        * To work with scanner class we need to create an object of scanner class</span>
<span style="color: #888888">        * Scanner objectname = new Scanner();</span>
<span style="color: #888888">        * We will cover this class and object concepts later in OOP.</span>
<span style="color: #888888">        * */</span>

        <span style="color: #888888">//System.in is used in the arguments of scanner class to take input</span>
        Scanner scanner <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> Scanner<span style="color: #333333">(</span>System<span style="color: #333333">.</span><span style="color: #0000CC">in</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Please ! Enter your name&quot;</span><span style="color: #333333">);</span>
        String name <span style="color: #333333">=</span>scanner<span style="color: #333333">.</span><span style="color: #0000CC">nextLine</span><span style="color: #333333">();</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Your name is &quot;</span> <span style="color: #333333">+</span>name<span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Please ! Enter your name
codingslice
Your name is codingslice
</pre>
