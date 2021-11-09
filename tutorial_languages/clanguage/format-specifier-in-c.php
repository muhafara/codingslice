<div class="data_colour">
<h1 align="center">
<b>Format Specifier in C</b>
</h1></div>
<p>In programming language "Format Specifier" are used for input and output purposes. Format specifier directs the compiler during compilation what type of data to use for variables while taking input using scanf() or printing an output using printf().</p>
<p>For example, we used %d format specifier to display the value of an integer, %c is used to display the value of character, %f is used to display the value of float and %s is used to display the value of the string. <br>Here is the list of all format specifier </p>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Format Specifier</th>
      <th scope="col">Type Supported</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>%d</td>
      <td>Signed Integer</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>%c</td>
      <td>Character</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>%e</td>
      <td>Scientific notation of float</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>%E</td>
      <td>Scientic notation of float</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>%f</td>
      <td>Float Values</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>%hi</td>
      <td>Used for short and signed integer</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>%hu</td>
      <td>Used for short and unsigned integer</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>%i</td>
      <td>Unsigned Integer</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>%l or %ld or %li</td>
      <td>Long</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>%lf</td>
      <td>Double</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>%Lf</td>
      <td>Long Double</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>%lu</td>
      <td>Unsigned Integer or Unsigned Long</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>%lli or lld</td>
      <td>Long Long</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>%llu</td>
      <td>Unsigned Long Long</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>%o</td>
      <td>Octal Representation</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>%p</td>
      <td>Pointer</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>%s</td>
      <td>String</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>%u</td>
      <td>Unsigned Integer</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>%x or %X</td>
      <td>Hexadecimal representation</td>
    </tr>
  </tbody>
</table>
<h4><b><u>How to use format specifier in c language</u></b></h4>
<br>
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
33</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : formatspecifier.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description :How to use format specifier in C.</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #888888">//defining and initializing the variable of int type</span>
<span style="color: #333399; font-weight: bold">int</span> number <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">2</span>;
<span style="color: #888888">//defining and initializing the variable of char type</span>
<span style="color: #333399; font-weight: bold">char</span> character <span style="color: #333333">=</span> <span style="color: #0044DD">&#39;A&#39;</span>;
<span style="color: #888888">//defining and initializing the variable of float type</span>
<span style="color: #333399; font-weight: bold">float</span> fraction <span style="color: #333333">=</span> <span style="color: #6600EE; font-weight: bold">35.0</span>;
<span style="color: #888888">//defining and initializing the variable of string type</span>
<span style="color: #333399; font-weight: bold">char</span> name[<span style="color: #0000DD; font-weight: bold">12</span>] <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&quot;Coding slice&quot;</span>;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #888888">//printing integer using format specifier</span>
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">This is an integer value = %d&quot;</span>, number);

	<span style="color: #888888">//printing character using format specifier</span>
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">This is a character value = %c&quot;</span>, character);

	<span style="color: #888888">//printing float using format specifier</span>
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">This is a float value = %f&quot;</span>, fraction);

	<span style="color: #888888">//printing a string using format specifier</span>
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">This is an string value = %s&quot;</span>, name);
}
</pre></td></tr></table></div>
</div>
</pre>

<h1>Output</h1>

<pre class="prettyprint">

This is an integer value = 2
This is a character value = A
This is a float value = 35.000000
This is an integer value = Coding slice
</pre>
</b>
</p>