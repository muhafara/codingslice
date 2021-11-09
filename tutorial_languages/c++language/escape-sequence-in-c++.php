<div class="data_colour">
<h1 align="center">
<b>Escape sequences in C++</b>
</h1>
<p>
An "Escape Sequence" is a sequence of which doesn't appear itself in output when used inside a string or printing something using cout but it will affect the outcome. It consists of two or more character uses backslash.
</p>
<h4><b><u>List of "Escape Sequence" in C++ as listed below</u></b></h4>
<table class="table table-striped">
<thead>
<tr>
      <th scope="col"></th>
      <th scope="col">Escape Sequence</th>
      <th scope="col">Character It Produces</th>
</tr>
<tbody>
<tr>
<th scope="row"></th>
      <td>\a</td>
      <td>Beep</td>
</tr>

<tr>
<th scope="row"></th>
      <td>\b</td>
      <td>Backspace/td>
</tr>

<tr>
<th scope="row"></th>
      <td>\f</td>
      <td>Clear the screen</td>
</tr>

<tr>
<th scope="row"></th>
      <td>\n</td>
      <td>Newline</td>
</tr>

<tr>
<th scope="row"></th>
      <td>\r</td>
      <td>Carriage return</td>
</tr>

<tr>
<th scope="row"></th>
      <td>\t</td>
      <td>Tab</td>
</tr>

<tr>
<th scope="row"></th>
      <td>\\</td>
      <td>Backslash character</td>
</tr>

<tr>
<th scope="row"></th>
      <td>\v</td>
      <td>Vertical tab</td>
</tr>

<tr>
<th scope="row"></th>
      <td>\?</td>
      <td>Question mark</td>
</tr>

<tr>
<th scope="row"></th>
      <td>\'</td>
      <td>Single quote</td>
</tr>

<tr>
<th scope="row"></th>
      <td>\"</td>
      <td>Double quote</td>
</tr>

<tr>
<th scope="row"></th>
      <td>\xnn</td>
      <td>hexadecimal character code</td>
</tr>

<tr>
<th scope="row"></th>
      <td>\onn</td>
      <td>Octal character code</td>
</tr>

<tr>
<th scope="row"></th>
      <td>\nn</td>
      <td>Octal character code</td>
</tr>
</tbody>
</thead>
</table>
<h4><b><u>How to use escape sequences in C++</u></b></h4>
</div>
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
14</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">//============================================================================</span>
<span style="color: #888888">// Name        : escape-sequence-in-c++.cpp</span>
<span style="color: #888888">// Author      : CodingSlice</span>
<span style="color: #888888">// Version     :</span>
<span style="color: #888888">// Copyright   : Your copyright notice</span>
<span style="color: #888888">// Description : How to use escape sequence in C++</span>
<span style="color: #888888">//============================================================================</span>

<span style="color: #557799">#include &lt;iostream&gt;</span>
<span style="color: #008800; font-weight: bold">using</span> <span style="color: #008800; font-weight: bold">namespace</span> std;

<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>() {
	cout<span style="color: #333333">&lt;&lt;</span>(<span style="background-color: #fff0f0">&quot;Hello! I&#39;m writing C++ program using escape sequence.</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">This is how backslash a works </span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\a</span><span style="background-color: #fff0f0">&quot;</span>);
}
</pre></td></tr></table></div>

</div>
</pre>
<h1>Output</h1>
<pre class="prettyprint">
Hello! I'm writing C++ prrogram using escape sequence.
This is how backslash a works 
</pre>
</b>
</p>