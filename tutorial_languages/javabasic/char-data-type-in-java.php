<div class="data_colour">
<h1 align="center">
<b>Char data type in java</b>
</h1></div>
<p>
Char can store only a single character, and it is a short form of character. It could be any number, letter exclamation mark, or any other character.
 
A char occupies two bytes of memory or 16 bits. The reason it's not just a single byte is that it allows you to store Unicode. Unicode is an international encoding standard to use with different language and scripts. A unique numeric value is assigned to each letter, digit or symbol that applies to other platforms and program. Unicode allows use to represent different languages. 
To view different Unicode of characters, visit the link below. We can also use these unicode characters codes in our program to represent a single character.
<br>
<a href="https://unicode-table.com//" target="_blank">Uni-Code table</a>
</p>

<h4><b><u>Representation of uni-code character using char</u></b></h4>

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
12</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> <span style="color: #333399; font-weight: bold">char</span><span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>

        <span style="color: #333399; font-weight: bold">char</span> uniCodeCharacter <span style="color: #333333">=</span> <span style="color: #0044DD">&#39;\u0061&#39;</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The unicode character is &quot;</span><span style="color: #333333">+</span>uniCodeCharacter<span style="color: #333333">);</span>


    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
The unicode character is a
</pre>