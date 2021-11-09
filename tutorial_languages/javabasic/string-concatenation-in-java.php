<div class="data_colour">
<h1 align="center">
<b>String Concatenation in Java</b>
</h1></div>
<img src="\images\string-concatenation.png" class="img-responsive" alt="Cinque Terre">
<p>
String concatenation is the formation of a new string by joining two strings. String concatenation can be done using two methods: the string concatenation method (string concat()) or the ' + ' sign.
</p>
<h4><b><u>String Concatenation using concat() method in Java</u></b></h4>
<p>This method returns a string by concatenating two different Strings. Concatenation is the process of joining two String.</p>
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
10</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> stringmethodinjava<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        String myFirstString <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;Hello ! This is&quot;</span><span style="color: #333333">;</span>
        String mySecondString <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot; a Java program&quot;</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span>myFirstString<span style="color: #333333">.</span><span style="color: #0000CC">concat</span><span style="color: #333333">(</span>mySecondString<span style="color: #333333">));</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
Hello ! This is a Java program
</pre>

<h4><b><u>String concaenation using Plus ' + ' sign: </u></b></h4>
<p>Java uses a string concatenation operator for the formation of two String from one.</p>
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
11</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> stringmethodinjava<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        String myFirstString <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;Hello &quot;</span><span style="color: #333333">;</span>
        String mySecondString <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;World&quot;</span><span style="color: #333333">;</span>
        String myNewString <span style="color: #333333">=</span> myFirstString <span style="color: #333333">+</span> mySecondString<span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span>myNewString<span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Hello World
</pre>

<h4><b><u>String concatenation ( + ) with System.out.print.</u></b></h4>
<p>
We can also use string concatenation operator within System.out.print statement. 
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
11</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> stringmethodinjava<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #333399; font-weight: bold">long</span> idNumber <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1233454</span><span style="color: #333333">;</span>
        String firstName <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;Coding &quot;</span><span style="color: #333333">;</span>
        String lastName <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;Slice&quot;</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Id number = &quot;</span> <span style="color: #333333">+</span> idNumber <span style="color: #333333">+</span><span style="background-color: #fff0f0">&quot; Name : &quot;</span> <span style="color: #333333">+</span> firstName <span style="color: #333333">+</span> <span style="background-color: #fff0f0">&quot; Last Name :&quot;</span> <span style="color: #333333">+</span>lastName <span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>
<div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Id number = 1233454 Name : Coding  Last Name :Slice
</pre>