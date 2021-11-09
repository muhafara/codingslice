<div class="data_colour">
<h1 align="center">
<b>Strings methods in Java</b>
</h1></div>
<p>Java class String provides a lot of methods that programmers use. Here is an example of methods of a String class.</p>
<h4><b><u>Java - char charAt(int index) Method</u></b></h4>
<p>This method returns a character (char) in a string from the specified location. The indexing of a String starts from zero.</p>
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
        String myString <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;This is a String&quot;</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">char</span> getIndex <span style="color: #333333">=</span> myString<span style="color: #333333">.</span><span style="color: #0000CC">charAt</span><span style="color: #333333">(</span><span style="color: #0000DD; font-weight: bold">8</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The character at index eight is &quot;</span> <span style="color: #333333">+</span> getIndex<span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
The character at index four is a
</pre>

<h4><b><u>Java - int compareTo(Object obj) Method</u></b></h4>
<p>
This method compares two objects of a Strings. This method is the same as the other; the only difference is that it compares two objects and compareTo(String anotherString) compares two strings. The method returns 0 if the String is equal to the other String. Suppose the number of a String character is less than the character of another String this method return value less than zero. If the number of characters in a string is greater than the number of characters of other String zero values, then this method will return a value greater than zero.
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
       String myFirstStringObject <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> String<span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This is first string object&quot;</span><span style="color: #333333">);</span>
       String mySecondStringObject <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> String<span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This is second string object&quot;</span><span style="color: #333333">);</span>
       <span style="color: #333399; font-weight: bold">int</span> getResultOfObject <span style="color: #333333">=</span> myFirstStringObject<span style="color: #333333">.</span><span style="color: #0000CC">compareTo</span><span style="color: #333333">(</span>mySecondStringObject<span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span>getResultOfObject<span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
-13
</pre>


<h4><b><u>Java - int compareTo(String anotherString) Method</u></b></h4>
<p>
This method compares two String. The method returns 0 if the String is equal to the other String. Suppose the number of a String character is less than the character of another String this method return value less than zero. If the number of characters in a string is greater than the number of characters of other String zero values, then this method will return a value greater than zero.
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
13</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> stringmethodinjava<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        String firstString <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;This is a String&quot;</span><span style="color: #333333">;</span>
        String secondString <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;This is a Strings&quot;</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> getResult <span style="color: #333333">=</span> firstString<span style="color: #333333">.</span><span style="color: #0000CC">compareTo</span><span style="color: #333333">(</span>secondString<span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span>getResult<span style="color: #333333">);</span>


    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
-1
</pre>

<h4><b><u>Java - int compareToIgnoreCase(String string) Method</u></b></h4>
<p>
This method compares two strings by measuring their length and positions of characters in String by ignoring lower case and upper case differences. This comparison in this method is based on the Unicode value of each character in String, converted to lowercase. This method returns ) if the given String is equal to the other. Its returns a value less than zero if String has less character or returns a value greater than 0 if String is greater or it has or more character in String. This method returns 0 if both strings are equal by length, the position of characters are the same, and the number of a character.
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
15</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> stringmethodinjava<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        String myFirstString <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;This is first string&quot;</span><span style="color: #333333">;</span>
        String mySecondString <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;THIS IS FIRST STRING&quot;</span><span style="color: #333333">;</span>
        String myThirdString <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;This is third string&quot;</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> getResult <span style="color: #333333">=</span> myFirstString<span style="color: #333333">.</span><span style="color: #0000CC">compareToIgnoreCase</span><span style="color: #333333">(</span>mySecondString<span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span>getResult<span style="color: #333333">);</span>
        <span style="color: #333399; font-weight: bold">int</span> getSecondResult <span style="color: #333333">=</span> mySecondString<span style="color: #333333">.</span><span style="color: #0000CC">compareToIgnoreCase</span><span style="color: #333333">(</span>myThirdString<span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Another Example using two different values for Strings&quot;</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span>getSecondResult<span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
0
Another Example using two different values for Strings
-14

</pre>

<h4><b><u>Java - String concat() Method</u></b></h4>
<p>
 This method returns a string by concatenating two different Strings. Concatenation is the process of joining two String. 
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


<h4><b><u>Java - boolean contentEquals(StringBuffer stringBuffer) Method</u></b></h4>
<p>
This method returns either true or false if the number and sequence of a character of a String are equal, it returns true else its return false.
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
14</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> stringmethodinjava<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        String myFirstString <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;This is a String&quot;</span><span style="color: #333333">;</span>
        String mySecondString <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;This is a String&quot;</span><span style="color: #333333">;</span>
        String myThirdString <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;This is a another String&quot;</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Comparing myFirstString and mySecondString&quot;</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span>myFirstString<span style="color: #333333">.</span><span style="color: #0000CC">contentEquals</span><span style="color: #333333">(</span>mySecondString<span style="color: #333333">));</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Comparing mySecondString and myThirdString&quot;</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span>mySecondString<span style="color: #333333">.</span><span style="color: #0000CC">contentEquals</span><span style="color: #333333">(</span>myThirdString<span style="color: #333333">));</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
Comparing myFirstString and mySecondString
true
Comparing mySecondString and myThirdString
false
</pre>

<h4><b><u>Java - String copyValueOf(char [] string) Method</u></b></h4>
<p>
This method copies a value from a sequence of characters and returns it as a String.
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
        <span style="color: #333399; font-weight: bold">char</span> <span style="color: #333333">[]</span> string <span style="color: #333333">=</span> <span style="color: #333333">{</span><span style="color: #0044DD">&#39;S&#39;</span><span style="color: #333333">,</span> <span style="color: #0044DD">&#39;t&#39;</span><span style="color: #333333">,</span> <span style="color: #0044DD">&#39;r&#39;</span><span style="color: #333333">,</span> <span style="color: #0044DD">&#39;i&#39;</span><span style="color: #333333">,</span><span style="color: #0044DD">&#39;n&#39;</span><span style="color: #333333">,</span><span style="color: #0044DD">&#39;g&#39;</span><span style="color: #333333">};</span>
        String getValueFromArrayOfChar <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot; &quot;</span><span style="color: #333333">;</span>
        getValueFromArrayOfChar <span style="color: #333333">=</span> getValueFromArrayOfChar<span style="color: #333333">.</span><span style="color: #0000CC">copyValueOf</span><span style="color: #333333">(</span>string<span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span>getValueFromArrayOfChar<span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
String
</pre>



<h4><b><u>Java - String copyValueOf (charArray, initialOffset, length) Method</u></b></h4>
<p>
This method takes three arguments; the first one is the String, the second one is the starting point  and the third one is the ending point of the String. This method returns a substring from a String. It takes starting and ending point.
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
        <span style="color: #333399; font-weight: bold">char</span> <span style="color: #333333">[]</span> myStringArray <span style="color: #333333">=</span> <span style="color: #333333">{</span><span style="color: #0044DD">&#39;h&#39;</span><span style="color: #333333">,</span><span style="color: #0044DD">&#39;e&#39;</span><span style="color: #333333">,</span><span style="color: #0044DD">&#39;l&#39;</span><span style="color: #333333">,</span><span style="color: #0044DD">&#39;l&#39;</span><span style="color: #333333">,</span><span style="color: #0044DD">&#39;o&#39;</span><span style="color: #333333">,</span> <span style="color: #0044DD">&#39; &#39;</span><span style="color: #333333">,</span> <span style="color: #0044DD">&#39;J&#39;</span><span style="color: #333333">,</span> <span style="color: #0044DD">&#39;a&#39;</span><span style="color: #333333">,</span> <span style="color: #0044DD">&#39;v&#39;</span><span style="color: #333333">,</span> <span style="color: #0044DD">&#39;a&#39;</span><span style="color: #333333">};</span>
        String myStringTwo<span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot; &quot;</span><span style="color: #333333">;</span>
        myStringTwo <span style="color: #333333">=</span> myStringTwo<span style="color: #333333">.</span><span style="color: #0000CC">copyValueOf</span><span style="color: #333333">(</span>myStringArray<span style="color: #333333">,</span><span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">,</span><span style="color: #0000DD; font-weight: bold">7</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span>myStringTwo<span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
llo Jav
</pre>


<h4><b><u> Java - String endsWith() Method</u></b></h4>
<p>
String endsWith() method test if the given string ends with the specified suffix. This method is boolean its means it will test the specified string and return true or false 
</p>
<p>
 While using this function, please keep in mind that if the string's suffix matches the argument provided or the string's argument is empty, this function will return the true.
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
14</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> stringmethodinjava<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
       String myString <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;Good Morning&quot;</span><span style="color: #333333">;</span>
       <span style="color: #333399; font-weight: bold">boolean</span> checkStringSuffix <span style="color: #333333">=</span> myString<span style="color: #333333">.</span><span style="color: #0000CC">endsWith</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;ing&quot;</span><span style="color: #333333">);</span>
        <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>checkStringSuffix<span style="color: #333333">){</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Suffix Matched!... we got &quot;</span><span style="color: #333333">+</span>checkStringSuffix<span style="color: #333333">);</span>
        <span style="color: #333333">}</span><span style="color: #008800; font-weight: bold">else</span> <span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Suffix did not Match....! we got &quot;</span><span style="color: #333333">+</span>checkStringSuffix<span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
Suffix Matched!... we got true
</pre>



<h4><b><u>Java - String equals() Method</u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">

</pre>



<h4><b><u> </u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">

</pre>


<h4><b><u> </u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">

</pre>



<h4><b><u> </u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">

</div>
</pre>
</b>
</p>



<h4><b><u> </u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">

</pre>


<h4><b><u> </u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">

</pre>



<h4><b><u> </u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">

</pre>



<h4><b><u> </u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">

</pre>



<h4><b><u> </u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">

</pre>



<h4><b><u> </u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">

</pre>



<h4><b><u> </u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">

</pre>


<h4><b><u> </u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">

</pre>


<h4><b><u> </u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">

</pre>


<h4><b><u> </u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">

</pre>


<h4><b><u> </u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">

</pre>

