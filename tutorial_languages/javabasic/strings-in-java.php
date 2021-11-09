<div class="data_colour">
<h1 align="center">
<b>Strings in Java</b>
</h1></div>
<p>In Java, String is also a reserved keyword. A string is a sequence of character (char) for example Java is a string which contains the character 'J, 'a', 'v', 'a'. We can represent a string in Java by using double-quotes. </p>
<h4><b><u>How to define and initialize string in Java</u></b></h4>
<p>To define and initialize string in Java, we use a non-primitive data type string followed by its string variable name and value of a string in a double-quote.</p>
<img src="\images\string-in-java.png" class="img-responsive" alt="Cinque Terre">
<p>
In Java, Strings are internally represented as an array of a string from class java.lang.String. It is an object, and the value of a string is constant, which means in Java, strings are immutable, and strings cannot change their value once it's created, but a new object can be created which holds a new value.
</p>
<h4><b><u>Simple program using String</u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">
<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%">1
2
3
4
5
6
7</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #888888">//Java main method</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        String myName <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;Java&quot;</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This is my string &quot;</span><span style="color: #333333">+</span>myName<span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
This is my string Java
</pre>
<h4><b><u>Different string mehtod in Java</u></b></h4>




<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">String</th>
      <th scope="col">Method</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>char charAt(index)</td>
      <td>Returns the character at the specified index.</td>
    </tr>
	    <tr>
      <th scope="row">2</th>
      <td>int compareTO(Object o)</td>
      <td>compare two String in order by char to char.</td>
    </tr>
	    <tr>
      <th scope="row">3</th>
      <td>int compareToIgnoreCase (String string)</td>
      <td>It ignores the case differences and compares two strings in order by char to char.</td>
    </tr>
	    <tr>
      <th scope="row">4</th>
      <td>String concat(String string)</td>
      <td>It concatenates the new String to the end of this String.</td>
    </tr>
	    <tr>
      <th scope="row">5</th>
      <td>boolean contentEquals(StringBuffer stringBuffer)</td>
      <td>It returns true if this String represents the same sequence of characters (char) as the defined string buffer.</td>
    </tr>
	    <tr>
      <th scope="row">6</th>
      <td>static String copyValueOf(char[] data)</td>
      <td>It returns a String that represents the character sequence in the array specified.</td>
    </tr>
	    <tr>
      <th scope="row">7</th>
      <td>static String copyValueOf(char[] dataChar, int offSet, int countChar)</td>
      <td>It returns a String that represents the character sequence in the array specified.</td>
    </tr>
	    <tr>
      <th scope="row">8</th>
      <td>boolean endsWith(String suffix)</td>
      <td>It checks if this String ends with the specified suffix</td>
    </tr>
	    <tr>
      <th scope="row">9</th>
      <td>boolean equals(Object anObject)</td>
      <td>It matches this String to the specified object.</td>
    </tr>
	    <tr>
      <th scope="row">10</th>
      <td>boolean equalsIgnoreCase(String compareString)</td>
      <td>It ignores case considerations and compares this String to another String.</td>
    </tr>
	    <tr>
      <th scope="row">11</th>
      <td>byte[] getBytes()</td>
      <td>This method encodes this String into a sequence of bytes [byte] using the platform's default charset, saving the result into a new byte array.</td>
    </tr>
	    <tr>
      <th scope="row">12</th>
      <td>byte[] getBytes(String charsetName)</td>
      <td>It encodes this String into a series of bytes using the mentioned charset, storing the result into a new byte array.</td>
    </tr>
	    <tr>
      <th scope="row">13</th>
      <td>boolean endsWith(String suffix)</td>
      <td>It checks if this String ends with the specified suffix.</td>
    </tr>    <tr>
      <th scope="row">14</th>
      <td>void getChars(int srcBegin, int srcEnd, char[] dest, int dstBegin)</td>
      <td>It imitates characters from the String into the address character array.</td>
    </tr>
	    <tr>
      <th scope="row">15</th>
      <td>int hashCode()</td>
      <td>Returns a hash code for this String.</td>
    </tr>
	    <tr>
      <th scope="row">16</th>
      <td>int indexOf(int ch)</td>
      <td>It returns the index inside this String of the first appearance of the specified character.</td>
    </tr>
	    <tr>
      <th scope="row">17</th>
      <td>int indexOf(int ch, int fromIndex)</td>
      <td>It returns the index of this String of the first apperance of the mentioned character, starting the search at the specified index.</td>
    </tr>
	    <tr>
      <th scope="row">18</th>
      <td>int indexOf(String string)</td>
      <td>It returns the index within this String (string)of the first occurrence of the specified substring.</td>
    </tr>    <tr>
      <th scope="row">19</th>
      <td>int indexOf(String string, int fromIndex)</td>
      <td>It returns the index within this String (string) of the first occurrence of the specified substring, starting at the specified index.</td>
    </tr>    <tr>
      <th scope="row">20</th>
      <td>String intern()</td>
      <td>It returns a standard representation for the String object.</td>
    </tr>
	    <tr>
      <th scope="row">21</th>
      <td>int lastIndexOf(int character)</td>
      <td>This method returns the index of this String of the last occurrence of the specified character.</td>
    </tr>
	 <tr>
      <th scope="row">22</th>
      <td>int lastIndexOf(int ch, int fromIndex)</td>
      <td>It returns the index of this String of the last occurrence of the specified character, searching backward starting at the specified index.</td>
    </tr>
	<tr>
      <th scope="row">23</th>
      <td>int lastIndexOf(String string)</td>
      <td>It returns the index within this String (string) of the rightmost occurrence of the specified substring.</td>
    </tr>
	<tr>
      <th scope="row">24</th>
      <td>int lastIndexOf(String str, int fromIndex)</td>
      <td>It returns the index within this String (str) of the last occurrence of the specified substring, searching backward starting at the specified index.</td>
    </tr>
	<tr>
      <th scope="row">25</th>
      <td>int length()</td>
      <td>It returns the length of this String.</td>
    </tr>
	<tr>
      <th scope="row">26</th>
      <td>boolean matches(String regex)</td>
      <td>It tells whether or not this String matches the given regular expression.</td>
    </tr>
	<tr>
      <th scope="row">27</th>
      <td>boolean regionMatches(boolean ignoreCase, int offset, String other, int offset, int len)</td>
      <td>It tests if two string regions are equal.</td>
    </tr>
	<tr>
      <th scope="row">28</th>
      <td>boolean regionMatches(int offset, String other, int offset, int len)</td>
      <td>It tests if two string regions are equal.</td>
    </tr>
	<tr>
      <th scope="row">29</th>
      <td>String replace(char oldChar, char newChar)</td>
      <td>It returns a new string resulting from replacing all occurrences of oldChar in this String with newChar.</td>
    </tr>
	<tr>
      <th scope="row">30</th>
      <td>String replaceAll(String regex, String replacement</td>
      <td>It replace each subString inside the string that matches.</td>
    </tr>
	<tr>
      <th scope="row">31</th>
      <td>String replaceFirst(String regex, String replaceThis)</td>
      <td>It substitutes the first substring of this String (replaceThis) that matches the given regular expression with the given replacement.</td>
    </tr>
	<tr>
      <th scope="row">32</th>
      <td>String[] split(String regex)</td>
      <td>It splits this String (regex) around matches of the given regular expression.</td>
    </tr>
	<tr>
      <th scope="row">33</th>
      <td>String[] split(String regex, int limit)</td>
      <td>It splits this String (regex) around matches of the given regular expression.</td>
    </tr>
	<tr>
      <th scope="row">34</th>
      <td>boolean startsWith(String prefix)</td>
      <td>It tests if this String (prefix) starts with the specified prefix.</td>
    </tr>
	<tr>
      <th scope="row">35</th>
      <td>boolean startsWith(String prefix, int offset)</td>
      <td>It tests if this String (prefix) starts with the specified prefix beginning a specified index.</td>
    </tr>
	<tr>
      <th scope="row">36</th>
      <td>CharSequence subSequence(int beginIndex, int endIndex)</td>
      <td>It returns a new character sequence that is a subsequence of this sequence.</td>
    </tr>
	<tr>
      <th scope="row">37</th>
      <td>String substring(int beginIndex)</td>
      <td>It returns a new string that is a substring of this String.</td>
    </tr>
	<tr>
      <th scope="row">38</th>
      <td>String substring(int beginIndex, int endIndex)</td>
      <td>It returns a new string that is a substring of this String.</td>
    </tr>
	<tr>
      <th scope="row">39</th>
      <td>char[] toCharArray()</td>
      <td>It converts this String to a new character array.</td>
    </tr>
	<tr>
      <th scope="row">40</th>
      <td>String toLowerCase()</td>
      <td>It converts all of the characters of the String to lower case using the rules of the default locale.</td>
    </tr>
	<tr>
      <th scope="row">41</th>
      <td>String toLowerCase(Locale locale)</td>
      <td>It converts all of the characters (char) in this String to lower case</td>
    </tr>
	<tr>
      <th scope="row">42</th>
      <td>String toString()</td>
      <td>This object of a string class (which is already a string!) is itself returned.</td>
    </tr>
	<tr>
      <th scope="row">43</th>
      <td>String toUpperCase()</td>
      <td>It converts all of the characters (char) in this String to the upper case using the rules of the default locale.</td>
    </tr>
	<tr>
      <th scope="row">44</th>
      <td>String toUpperCase(Locale locale)</td>
      <td>It converts all of the characters (char) in this String to the upper case using the rules of the given Locale.</td>
    </tr>
	<tr>
      <th scope="row">45</th>
      <td>String trim()</td>
      <td>It returns a copy of this String (s), with heading and tracing whitespace omitted</td>
    </tr>
	<tr>
      <th scope="row">46</th>
      <td>static String valueOf(primitive data type x)</td>
      <td>It returns the string representation of the passed data type argument.</td>
    </tr>
  </tbody>
</table>